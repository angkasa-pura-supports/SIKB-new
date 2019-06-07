<?php

namespace App\Http\Controllers\Sistem\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\PlanCleaningProgram;
use Alert;

class PlanCleaningProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PlanCleaningProgram::all();
        return view('content.master.PlanCleaningProgram.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('content.master.PlanCleaningProgram.create');
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
        'object'  => 'required',
        'material_made_from' => 'required',
        'how_to_do' => 'required',
        'routine' => 'required',
        'program_to_do' => 'required',
        'ket' => 'required'
      ]);
      PlanCleaningProgram::create($request->all());
      Alert::success('Data berhasil disimpan!');
      return redirect('Plan-Cleaning-Program');
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
      $data = PlanCleaningProgram::findOrFail($id);
      return view('content.master.PlanCleaningProgram.edit', compact('data'));
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
        'object'  => 'required',
        'material_made_from' => 'required',
        'how_to_do' => 'required',
        'routine' => 'required',
        'program_to_do' => 'required',
        'ket' => 'required'
      ]);
      PlanCleaningProgram::findOrFail($id)->update($request->all());
      Alert::success('Data berhasil diUpdate!!');
      return redirect('Plan-Cleaning-Program');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $data = PlanCleaningProgram::findOrFail($id);
          $data->delete();
          Alert::success('Data berhasil dihapus!');
          return redirect('Plan-Cleaning-Program');
    }
}
