<?php

namespace App\Http\Controllers\Sistem\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Consumable;
use Alert;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ConsumableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Consumable::all();
        return view('content.master.consumable.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('content.master.consumable.create');
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
        'nama_consumable'  => 'required',
        'jenis' => 'required',
        'stok' => 'required'
      ]);
      $data = new Consumable;
      $data->nama_consumable = $request->nama_consumable;
      $data->jenis = $request->jenis;
      $data->stok = $request->stok;
      $data->sisa_stok = $request->stok;
      $data->save();
      Alert::success('Data berhasil disimpan!');
      return redirect('Consumable');
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
      $data = Consumable::findOrFail($id);
      return view('content.master.consumable.edit', compact('data'));
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
        'nama_consumable'  => 'required',
        'jenis' => 'required',
        'stok' => 'required'
      ]);
      $data = Consumable::findOrFail($id);
      $data->nama_consumable = $request->nama_consumable;
      $data->jenis = $request->jenis;
      $data->stok = $request->stok;
      $data->sisa_stok = $request->stok;
      $data->update();
      Alert::success('Data berhasil diUbah!');
      return redirect('Consumable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Consumable::findOrFail($id);
      $data->delete();
      Alert::success('Data berhasil dihapus!');
      return redirect('Consumable');
    }
}
