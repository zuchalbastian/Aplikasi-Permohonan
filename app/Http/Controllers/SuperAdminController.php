<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Permohonan;
Use App\AnalysisReport;
Use App\ReportJob;
Use App\User;
use Auth;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analysis = Permohonan::with('get_department')
                  ->with('get_user')
                  ->with('get_staff')
                  ->where('flag','spv')
                  ->orderBy('id', 'desc')
                  ->paginate(5);

        // $analysis = DB::table('permohonan')
        //           ->select('permohonan.*', 'departments.id as department', 'departments.name')
        //           ->leftJoin('departments', 'permohonan.bagian', '=', 'departments.id')
        //           ->where('permohonan.id', $id)
        //           ->select('permohonan.*', 'users.id as users', 'users.name', 'users.nip')
        //           ->leftJoin('users', 'permohonan.user_id', '=', 'users.name')
        //           ->leftJoin('users', 'permohonan.staff_id', '=', 'users.name')
        //           ->where('permohonan.id', $id)
        //           ->first();
        // return $analysis;
        // mengirim data permohonan ke view permohonan
        return view('spv/analysisreport',['permohonan' => $analysis]);
    }

    public function index2()
    {
        $report = Permohonan::with('get_department')
                ->where('flag','manager')
                ->orderBy('id', 'desc')
                ->paginate(5);
 
        // mengirim data permohonan ke view permohonan
        return view('manager/reportjob',['permohonan' => $report]);
    }

    public function send(Request $request)
    {
        $tambah = Permohonan::find($request->id);
        $tambah->status = 'approve manager';
        $tambah->flag = 'manager';

        $tambah->save();
        // $finishjob->delete();
        return redirect()->to('/spv');
    }

    public function sendmanager(Request $request)
    {
        $tambah = Permohonan::find($request->id);
        $tambah->status = 'data sudah di user';
        $tambah->flag = 'user';

        $tambah->save();
        // $finishjob->delete();
        return redirect()->to('/manager');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $tambah->alasan = $request['alasan'];

        $tambah->status = 'proses direvisi';
        $tambah->flag = 'revisi';

         $tambah->save();

         return redirect()->to('/spv');
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
