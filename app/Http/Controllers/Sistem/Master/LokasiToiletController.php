<?php

namespace App\Http\Controllers\Sistem\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\LokasiToilet;
use Alert;

class LokasiToiletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $lok_toilet = LokasiToilet::all();
      return view('content.master.lokasiToilet.index', compact('lok_toilet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('content.master.lokasiToilet.create');
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
        'lokasi_toilet'  => 'required',
        'nama_toilet' => 'required'
      ]);
      LokasiToilet::create($request->all());
      Alert::success('Data berhasil disimpan!');
      return redirect('master-lokasiToilet');
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
        $data = LokasiToilet::findOrFail($id);
        return view('content.master.lokasiToilet.edit', compact('data'));
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
        'lokasi_toilet'  => 'required',
        'nama_toilet' => 'required'
      ]);
      LokasiToilet::findOrFail($id)->update($request->all());
      Alert::success('Data berhasil diubah!');
      return redirect('master-lokasiToilet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = LokasiToilet::findOrFail($id);
        $data->delete();
        Alert::success('Data berhasil dihapus!');
        return redirect('master-lokasiToilet');
    }
}
