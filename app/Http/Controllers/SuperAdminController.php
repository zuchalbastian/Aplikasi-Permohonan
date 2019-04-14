<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
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
        $analysis = AnalysisReport::with('get_department')->get();
 
        // mengirim data permohonan ke view permohonan
        return view('spv/analysisreport',['analysisreport' => $analysis]);
    }

    public function index2()
    {
        $report = ReportJob::with('get_department')->get();
 
        // mengirim data permohonan ke view permohonan
        return view('manager/reportjob',['reportjob' => $report]);
    }

    public function send($id)
    {
        // $analysis = AnalysisReport::find($id);
        // $report = new ReportJob;
        // $report->user_id = $analysis->user_id;
        // $report->tgl_pengajuan = $analysis->tgl_pengajuan;
        // $report->tgl_diterima_tsi = $analysis->tgl_diterima_tsi;
        // $report->bagian = $analysis->bagian;
        // $report->klasifikasi_perbaikan = $analysis->klasifikasi_perbaikan;
        // $report->uraian = $analysis->uraian;

        // $report->tgl_analisa = $analysis->tgl_analisa;
        // $report->hasil_analisa = $analysis->hasil_analisa;
        // $report->tgl_selesai = $analysis->tgl_selesai;

        $report->save();
        // $finishjob->delete();
        return redirect()->to('/spv');
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
        //
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
