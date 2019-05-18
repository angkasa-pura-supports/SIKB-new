<?php

namespace App\Http\Controllers\Sistem\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Peralatan;
use Alert;
class PeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Peralatan::all();
        return view('content.master.peralatan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.master.peralatan.create');
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
          'nama_peralatan' => 'required',
          'nama_mesin' => 'required',
          'type' => 'required',
          'no_mesin' => 'required'
        ]);
        Peralatan::create($request->all());
        Alert::success('Data berhasil disimpan!');
        return redirect('master-peralatan');
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
        $data = Peralatan::findOrFail($id);
        return view('content.master.peralatan.edit', compact('data'));
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
          'nama_peralatan' => 'required',
          'nama_mesin' => 'required',
          'type' => 'required',
          'no_mesin' => 'required'
        ]);
        Peralatan::findOrFail($id)->update($request->all());
        Alert::success('Data berhasil diubah!');
        return redirect('master-peralatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Peralatan::findOrFail($id);
        $data->delete();
        Alert::success('Data berhasil dihapus!');
        return redirect('master-peralatan');
    }
}
