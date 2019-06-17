<?php

namespace App\Http\Controllers\Sistem\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\karyawan;
use Alert;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        $karyawans = karyawan::all();
         return view('content.master.karyawan.index', compact('karyawans'));
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('content.master.karyawan.create');
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
        'Nik'  => 'required',
        'nama_karyawan' => 'required',
        'jk' => 'required',
        'Jabatan' => 'required',
        'Unit_Kerja' => 'required',
      ]);
      karyawan::create($request->all());
      Alert::success('Data berhasil disimpan!');
      return redirect('data_karyawan');
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
         $karyawans = karyawan::findOrFail($id);
          return view('content.master.karyawan.edit', compact('karyawans'));
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
      $this->validate($request, [
        'Nik'  => 'required',
        'nama_karyawan' => 'required',
        'jk' => 'required',
        'Jabatan' => 'required',
        'Unit_Kerja' => 'required',
      ]);
      karyawan::findOrFail($id)->update($request->all());
      Alert::success('Data berhasil diubah!');
      return redirect('data_karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $karyawans = karyawan::findOrFail($id);
      $karyawans->delete();
      Alert::success('Data berhasil dihapus!');
      return redirect('data_karyawan');
    }
}
