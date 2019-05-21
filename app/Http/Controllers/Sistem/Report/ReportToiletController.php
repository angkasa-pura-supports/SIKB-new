<?php

namespace App\Http\Controllers\Sistem\Report;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LokasiToilet;
use App\CeklistToilet;
use App\UploadCeklistToilet;
use Illuminate\Support\Facades\Input;
use Alert;
class ReportToiletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasiToilet = LokasiToilet::pluck('nama_toilet', 'id');
        return view('content.report.toilet.index', compact('lokasiToilet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getToilet = Input::get('lokasi_toilet_id');
        $data = CeklistToilet::where('lokasi_toilet_id', $getToilet)->first();
        if ($data === null) {
          Alert::warning('Data tidak ditemukan!');
          return redirect('report-toilet');
        }else{
          $report = UploadCeklistToilet::whereBetween('created_at', [Input::get('start'), date("Y-m-d", strtotime(Input::get('end')."+1 days"))])->get();
          $tanggal = CeklistToilet::where('lokasi_toilet_id', $getToilet)->whereBetween('created_at', [Input::get('start'), date("Y-m-d", strtotime(Input::get('end')."+1 days"))])->get();
          return view('content.report.toilet.print', compact('getToilet', 'tanggal', 'report'));
        }
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
