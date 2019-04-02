<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\TindakLanjut;
Use App\FinishJob;
Use App\User;
use Auth;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table permohonan
        $daftar2 = TindakLanjut::with('get_department')->where('user_id', Auth::user()->id)->get();
 
        // mengirim data permohonan ke view permohonan
        return view('staff/newjob',['tindaklanjut' => $daftar2]);
    }

        public function index2()
    {
        // mengambil data dari table permohonan
        $daftar3 = FinishJob::with('get_department')->where('user_id', Auth::user()->id)->get();
 
        // mengirim data permohonan ke view permohonan
        return view('staff/finishjob',['finishjob' => $daftar3]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // mengambil data permohonan berdasarkan id yang dipilih
        $daftar = TindakLanjut::with('get_department')->where('id',$id)->get();

        $staffs = User::where('role_id', 3)->get();

        $departments = DB::table('departments')->get();
        
        // passing data permohonan yang didapat ke view edit.blade.php
        return view('staff/editnewjob',['tindaklanjut' => $daftar,  'staffs' => $staffs, 'department' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new FinishJob();
        $tambah->user_id = $request['id_staff'];
        $tambah->bagian = $request['bagian'];
        $tambah->klasifikasi_perbaikan = $request['klasifikasi_perbaikan'];
        $tambah->uraian = $request['uraian'];

        $tambah->tgl_analisa = $request['tgl_analisa'];
        $tambah->hasil_analisa = $request['hasil_analisa'];
        $tambah->tgl_selesai = $request['tgl_selesai'];

         $tambah->save();

        // alihkan halaman ke halaman permohonan
        return redirect()->to('/staff/index2');
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
