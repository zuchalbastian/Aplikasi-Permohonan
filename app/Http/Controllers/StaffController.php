<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Permohonan;
Use App\TindakLanjut;
Use App\FinishJob;
Use App\AnalysisReport;
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
        $daftar2 = Permohonan::with('get_department')
                 ->where('staff_id', Auth::user()->id)
                 ->orderBy('id', 'desc')
                 ->paginate(5);
        
        // mengirim data permohonan ke view permohonan
        return view('staff/newjob',['permohonan' => $daftar2]);
    }

        public function index2()
    {
        // mengambil data dari table permohonan
        $daftar3 = Permohonan::with('get_department')
                   ->where('flag', 'staff')
                   ->where('staff_id', Auth::user()->id)
                   ->orderBy('id', 'desc')
                   ->paginate(5);
 
        // mengirim data permohonan ke view permohonan
        return view('staff/finishjob',['permohonan' => $daftar3]);
    }

    public function revisi()
    {
        // mengambil data dari table permohonan
        $daftar3 = Permohonan::with('get_department')
                   ->where('flag', 'revisi')
                   ->where('staff_id', Auth::user()->id)
                   ->orderBy('id', 'desc')
                   ->paginate(5);
 
        // mengirim data permohonan ke view permohonan
        return view('staff/revisi',['permohonan' => $daftar3]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // mengambil data permohonan berdasarkan id yang dipilih
        $daftar = DB::table('permohonan')
                  ->select('permohonan.*', 'departments.id as department', 'departments.name')
                  ->leftJoin('departments', 'permohonan.bagian', '=', 'departments.id')
                  ->where('permohonan.id', $id)
                  ->first();

        $staffs = User::where('role_id', 3)->get();

        $departments = DB::table('departments')->get();
        
        // passing data permohonan yang didapat ke view edit.blade.php
        return view('staff/editnewjob',['permohonan' => $daftar,  'staffs' => $staffs, 'department' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = Permohonan::find($request->id);

        $tambah->tgl_analisa = $request['tgl_analisa'];
        $tambah->hasil_analisa = $request['hasil_analisa'];
        $tambah->tgl_selesai = $request['tgl_selesai'];
        $tambah->uraian_hasil_analisa = $request['uraian_hasil_analisa'];
        $tambah->flag = 'staff';

         $tambah->save();

        // alihkan halaman ke halaman permohonan
        return redirect()->to('/staff/index2');
    }

    public function send(Request $request)
    {
        $tambah = Permohonan::find($request->id);
        $tambah->status = 'approve spv';
        $tambah->flag = 'spv';

        $tambah->save();
        // $finishjob->delete();
        return redirect()->to('/staff/index2');
    }

    public function sendrevisi(Request $request)
    {
        $tambah = Permohonan::find($request->id);
        $tambah->tgl_analisa = $request['tgl_analisa'];
        $tambah->hasil_analisa = $request['hasil_analisa'];
        $tambah->tgl_selesai = $request['tgl_selesai'];
        $tambah->uraian_hasil_analisa = $request['uraian_hasil_analisa'];
        $tambah->status = 'approve spv';
        $tambah->flag = 'spv';

        $tambah->save();
        // $finishjob->delete();
        return redirect()->to('/staff/revisi');
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
