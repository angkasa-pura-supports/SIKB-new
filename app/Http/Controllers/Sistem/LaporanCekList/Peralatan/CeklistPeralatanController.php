<?php

namespace App\Http\Controllers\Sistem\LaporanCeklist\Peralatan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bandara;
use App\Peralatan;
use App\karyawan;
use App\CeklistPeralatan;
use App\UploadCeklistPeralatan;
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
          'berkas' => 'required',
          'catatan' => 'required'
        ]);
        $data = new CeklistPeralatan;
        $data->bandara_id = $request->bandara_id;
        $data->peralatan_id = $request->peralatan_id;
        $data->pengawas_id = $request->pengawas_id;
        $data->petugas = $request->petugas;
        $data->shift = $request->shift;
        $data->tanggal_input = $request->tanggal_input;
        if ($request->hasFile('berkas')) {
          $dir = 'uploads/ceklist/peralatan';
          $file = $request->file('berkas');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $data->berkas = $newName;
        }
        $data->catatan = $request->catatan;
        $data->save();
        Alert::success('Data berhasil disimpan!');
        return redirect('laporanCeklist-peralatan');
    }

    public function checklist($id)
    {
      $idCeklist = CeklistPeralatan::findOrFail($id);
      return view('content.laporanCeklist.peralatan.checklist', compact('idCeklist'));
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

    public function print($id)
    {
        $data = CeklistPeralatan::findOrFail($id);
        $ceklist = UploadCeklistPeralatan::where('id', $data->id)->get();
        return view('content.laporanCeklist.peralatan.print', compact('data', 'ceklist'));
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
