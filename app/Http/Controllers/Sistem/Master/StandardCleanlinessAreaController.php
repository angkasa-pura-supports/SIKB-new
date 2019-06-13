<?php

namespace App\Http\Controllers\Sistem\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AreaSca;
use App\StandardCleanlinessArea;
use Alert;

class StandardCleanlinessAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = StandardCleanlinessArea::all();
        $standardSCA1 = AreaSca::all();
        return view('content.master.StandardCleanlinessArea.index', compact('data', 'standardSCA1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $standardSCA = AreaSca::pluck('nama_area', 'id');
      return view('content.master.StandardCleanlinessArea.create', compact('standardSCA'));
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
        'area_id' => 'required',
        'material' => 'required',
        'standard_area' => 'required'
      ]);
      StandardCleanlinessArea::create($request->all());
      Alert::success('Data berhasil disimpan!');
      return redirect('Standard-Cleanliness-Area');
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
