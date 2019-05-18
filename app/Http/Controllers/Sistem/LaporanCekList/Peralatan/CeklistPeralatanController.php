<?php

namespace App\Http\Controllers\Sistem\LaporanCeklist\Peralatan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bandara;
use App\Peralatan;
use App\karyawan;
use App\CeklistPeralatan;
// use App\UploadCeklistToilet;
use Alert;
use Illuminate\Support\Facades\File;
class CeklistPeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CeklistPeralatan::all();
        return view('content.laporanCeklist.peralatan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bandara = Bandara::pluck('nama_bandara', 'id');
        $peralatanList = Peralatan::pluck('nama_peralatan', 'id');
        $jabatan = ['Supervisor', 'Senior Leader', 'Team Leader'];
        $pengawas = karyawan::whereIn('Jabatan', $jabatan)->pluck('nama_karyawan', 'id');
        return view('content.laporanCeklist.peralatan.create', compact('bandara', 'peralatanList', 'pengawas'));
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
          'peralatan_id' => 'required',
          'pengawas_id' => 'required',
          'petugas' => 'required',
          'shift' => 'required',
          'tanggal_input' => 'required',
          'catatan' => 'required'
        ]);
        CeklistPeralatan::create($request->all());
        Alert::success('Data berhasil disimpan!');
        return redirect('laporanCeklist-peralatan');
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
