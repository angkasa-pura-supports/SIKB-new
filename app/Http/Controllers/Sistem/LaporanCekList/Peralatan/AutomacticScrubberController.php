<?php

namespace App\Http\Controllers\Sistem\LaporanCeklist\Peralatan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bandara;
use App\karyawan;
use App\AutomacticScrubber;
use Alert;
use Illuminate\Support\Facades\File;

class AutomacticScrubberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AutomacticScrubber::all();
        return view('content.laporanCeklist.peralatan.AutomacticScrubber.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $bandara1 = Bandara::pluck('nama_bandara', 'id');
      $jabatan = ['Supervisor', 'Senior Leader', 'Team Leader'];
      $pengawas = karyawan::whereIn('Jabatan', $jabatan)->pluck('nama_karyawan', 'id');
        return view('content.laporanCeklist.peralatan.AutomacticScrubber.create', compact('bandara1','jabatan','pengawas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
      {
        $this->validate($request,[
          'bandara_id' => 'required',
          'pengawas_id' => 'required',
          'shift' => 'required',
          'tanggal_input' => 'required',
          'catatan' => 'required'
        ]);
        $data = new AutomacticScrubber;
        $data->bandara_id = $request->bandara_id;
        $data->pengawas_id = $request->pengawas_id;
        $data->shift = $request->shift;
        $data->tanggal_input = $request->tanggal_input;
        $data->catatan = $request->catatan;
        $data->save();
        Alert::success('Data berhasil disimpan!');
        return redirect('laporanCeklist-AutomacticScrubber');
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
