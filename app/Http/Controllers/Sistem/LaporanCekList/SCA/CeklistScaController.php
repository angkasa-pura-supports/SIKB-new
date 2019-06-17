<?php

namespace App\Http\Controllers\Sistem\LaporanCeklist\SCA;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CeklistSca;
use App\Bandara;
use App\AreaSca;
use App\karyawan;
use Alert;
class CeklistScaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CeklistSca::all();
        return view('content.laporanCeklist.sca.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $bandara = Bandara::pluck('nama_bandara', 'id');
      $areaList = AreaSca::pluck('nama_area', 'id');
      $jabatan = ['Supervisor', 'Senior Leader', 'Team Leader'];
      $pengawas = karyawan::whereIn('Jabatan', $jabatan)->pluck('nama_karyawan', 'id');
      return view('content.laporanCeklist.sca.create', compact('bandara', 'areaList', 'pengawas'));
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
        'area_id' => 'required',
        'pengawas_id' => 'required',
        'petugas' => 'required',
        'shift' => 'required',
        'tanggal_input' => 'required'
      ]);
      $data = new CeklistSca;
      $data->bandara_id = $request->bandara_id;
      $data->area_id = $request->area_id;
      $data->pengawas_id = $request->pengawas_id;
      $data->petugas = $request->petugas;
      $data->shift = $request->shift;
      $data->tanggal_input = $request->tanggal_input;
      $data->save();
      Alert::success('Data berhasil disimpan!');
      return redirect('laporanCeklist-sca');
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
      $data = CeklistSca::findOrFail($id);
      $data->delete();
      Alert::success('Data berhasil dihapus!');
      return redirect('laporanCeklist-sca');
    }
}
