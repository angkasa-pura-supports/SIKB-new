<?php

namespace App\Http\Controllers\Sistem\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Peralatan;
use App\PeralatanKondisi;
use Alert;
class PeralatanKondisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PeralatanKondisi::all();
        return view('content.master.peralatanKondisi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peralatanList = Peralatan::pluck('nama_peralatan', 'id');
        return view('content.master.peralatanKondisi.create', compact('peralatanList'));
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
          'peralatan_id' => 'required',
          'item_pemeriksaan' => 'required',
          'kondisi_standard' => 'required'
        ]);
        PeralatanKondisi::create($request->all());
        Alert::success('Data berhasil disimpan!');
        return redirect('master-kondisi-peralatan');
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
        $data = PeralatanKondisi::findOrFail($id);
        $peralatanList = Peralatan::pluck('nama_peralatan', 'id');
        return view('content.master.peralatanKondisi.edit', compact('data', 'peralatanList'));
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
          'peralatan_id' => 'required',
          'item_pemeriksaan' => 'required',
          'kondisi_standard' => 'required'
        ]);
        PeralatanKondisi::findOrFail($id)->update($request->all());
        Alert::success('Data berhasil diubah!');
        return redirect('master-kondisi-peralatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PeralatanKondisi::findOrFail($id);
        $data->delete();
        Alert::success('Data berhasil dihapus!');
        return redirect('master-kondisi-peralatan');
    }
}
