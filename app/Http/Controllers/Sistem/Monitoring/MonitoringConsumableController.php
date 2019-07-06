<?php

namespace App\Http\Controllers\Sistem\Monitoring;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bandara;
use App\karyawan;
use App\Consumable;
use Alert;
use Illuminate\Support\Facades\File;

class MonitoringConsumableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('content.monitoring.consumable.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bandara = Bandara::pluck('nama_bandara', 'id');
        $jenis = ['Alat Perlindungan Diri'];
        $list = Consumable::whereIn('jenis', $jenis)->pluck('nama_consumable', 'id');
        $jabatan = ['Supervisor', 'Senior Leader', 'Team Leader'];
        $pengawas = karyawan::whereIn('Jabatan', $jabatan)->pluck('nama_karyawan', 'id');
        return view('content.monitoring.consumable.create', compact('bandara', 'list', 'pengawas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
