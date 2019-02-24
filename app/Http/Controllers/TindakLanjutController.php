<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Daftar;
Use App\TindakLanjut;

class TindakLanjutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table permohonan
        $daftar = DB::table('permohonan')->get();
 
        // mengirim data permohonan ke view permohonan
        return view('tindaklanjut/daftar',['permohonan' => $daftar]);
    }

    public function index2()
    {
        // mengambil data dari table permohonan
        $daftar2 = DB::table('tindaklanjut')->get();
 
        // mengirim data permohonan ke view permohonan
        return view('tindaklanjut/newjob',['tindaklanjut' => $daftar2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // mengambil data permohonan berdasarkan id yang dipilih
        $daftar = DB::table('permohonan')->where('id',$id)->get();
        
        // passing data permohonan yang didapat ke view edit.blade.php
        return view('tindaklanjut/tindaklanjut',['permohonan' => $daftar]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new TindakLanjut();
        $tambah->nip_staff = $request['nip_staff'];
        $tambah->name_staff = $request['name_staff'];
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
        return redirect()->to('/list/index2');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
