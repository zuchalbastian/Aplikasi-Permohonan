<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Permohonan; 
Use App\Department; 
use File;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table permohonan
        $permohonan = Permohonan::with('get_department')->get();
       
        // mengirim data permohonan ke view permohonan
        if(Auth::user()->role_id==2){
            return view('permohonan/index',['permohonan' => $permohonan]);
        }elseif(Auth::user()->role_id==1){
            return redirect('/list');
        }elseif(Auth::user()->role_id==3){
            return redirect('/staff');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = DB::table('departments')->get();
 
        // memanggil view tambah
        return view('permohonan/tambah',['departments' => $department]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new Permohonan();
        $tambah->tgl_pengajuan = $request['tgl_pengajuan'];
        $tambah->tgl_diterima_tsi = $request['tgl_diterima_tsi'];
        $tambah->bagian = $request['bagian'];
        $tambah->klasifikasi_perbaikan = $request['klasifikasi_perbaikan'];

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $request->file('dokumen_pendukung');
        $fileName   = $file->getClientOriginalName();
        $request->file('dokumen_pendukung')->move("image/", $fileName);

        $tambah->dokumen_pendukung = $fileName;

        $tambah->uraian = $request['uraian'];

         $tambah->save();

        // alihkan halaman ke halaman permohonan
        return redirect()->to('/permohonan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data permohonan berdasarkan id yang dipilih
        $permohonan = DB::table('permohonan')->where('id',$id)->get();
        // passing data permohonan yang didapat ke view edit.blade.php
        return view('permohonan/edit',['permohonan' => $permohonan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        if (isset($request->dokumen_pendukung)) {
            $data = DB::table('permohonan')->where('id',$request->id)->first()->dokumen_pendukung;
            File::delete('image/'.$data);

            $file       = $request->file('dokumen_pendukung');
            $fileName   = $file->getClientOriginalName();
            $request->file('dokumen_pendukung')->move("image/", $fileName);

            // update data permohonan
            DB::table('permohonan')->where('id',$request->id)->update([
                'tgl_pengajuan' => $request->tgl_pengajuan,
                'tgl_diterima_tsi' => $request->tgl_diterima_tsi,
                'bagian' => $request->bagian,
                'klasifikasi_perbaikan' => $request->klasifikasi_perbaikan,
                'dokumen_pendukung' => $fileName,
                'uraian' => $request->uraian
            ]);                 
        } else {
            DB::table('permohonan')->where('id',$request->id)->update([
                'tgl_pengajuan' => $request->tgl_pengajuan,
                'tgl_diterima_tsi' => $request->tgl_diterima_tsi,
                'bagian' => $request->bagian,
                'klasifikasi_perbaikan' => $request->klasifikasi_perbaikan,
                'uraian' => $request->uraian
            ]);
        }
        
        // alihkan halaman ke halaman permohonan
        return redirect('/permohonan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        $data = DB::table('permohonan')->where('id',$id)->first()->dokumen_pendukung;
        File::delete('image/'.$data);
        DB::table('permohonan')->where('id',$id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/permohonan');
    }

    public function getDownload(Request $request)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/image/".$request->filename;

        $headers = array(
                  'Content-Type: application/pdf',
                );

        return response()->download($file, $request->filename, $headers);
    }
}
