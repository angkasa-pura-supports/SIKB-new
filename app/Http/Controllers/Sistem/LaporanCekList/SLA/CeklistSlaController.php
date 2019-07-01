<?php

namespace App\Http\Controllers\Sistem\LaporanCeklist\SLA;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bandara;
use App\karyawan;
use App\CeklistSla;
use App\UploadCeklistSla;
use Alert;
use Illuminate\Support\Facades\File;
class CeklistSlaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CeklistSla::all();
        return view('content.laporanCeklist.sla.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $bandara = Bandara::pluck('nama_bandara', 'id');
      return view('content.laporanCeklist.sla.create', compact('bandara'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'bandara_id' => 'required',
          'tanggal_input' => 'required'
        ]);
        CeklistSla::create($request->all());
        Alert::success('Data berhasil disimpan!');
        return redirect('laporanCeklist-sla');
    }

    public function checklist($id)
    {
      $idCeklist = CeklistSla::findOrFail($id);
      return view('content.laporanCeklist.sla.checklist', compact('idCeklist'));
    }

    public function checklistStore(Request $request){
      $this->validate($request, [
        'ceklist_sla_id' => 'required',
        'lokasi' => '',
        'kondisi' => '',
        'jadwal_penyiraman' => '',
        'jadwal_pemupukan' => '',
        'manpower' => '',
        'desk_temuan' => '',
        'desk_rtl' => '',
        'desk_pic' => '',
        'desk_target_penyelesaian' => ''
      ]);
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
