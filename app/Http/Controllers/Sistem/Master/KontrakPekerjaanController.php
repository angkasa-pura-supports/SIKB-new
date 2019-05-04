<?php

namespace App\Http\Controllers\Sistem\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\kontrakpekerjaan;
use Alert;
use App\Bandara;
class KontrakPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $kontrak = kontrakpekerjaan::all();

      return view('content.KontrakPekerjaan.index', compact('kontrak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bandara = Bandara::pluck('nama_bandara', 'id');
        return view('content.KontrakPekerjaan.create', compact('bandara'));
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
        'Bandara'  => 'required',
        'no_kontrak' => 'required',
        'nama_pekerjaan' => 'required',
        'masa_berlaku' => 'required',
        'jenis_kontrak' => 'required',
        'pelaksana' => 'required'
      ]);
      kontrakpekerjaan::create($request->all());
      Alert::success('Data berhasil disimpan!');
      return redirect('KontrakPekerjaan');
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
