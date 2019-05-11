<?php

namespace App\Http\Controllers\Sistem\LaporanCekList\Toilet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bandara;
use App\LokasiToilet;
use App\karyawan;
use App\CeklistToilet;
use App\UploadCeklistToilet;
use Alert;
use Illuminate\Support\Facades\File;
class CeklistToiletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CeklistToilet::all();
        return view('content.laporanCeklist.toilet.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bandara = Bandara::pluck('nama_bandara', 'id');
        $lokasiToilet = LokasiToilet::pluck('nama_toilet', 'id');
        $jabatan = ['Supervisor', 'Senior Leader', 'Team Leader'];
        $pengawas = karyawan::whereIn('Jabatan', $jabatan)->pluck('nama_karyawan', 'id');
        return view('content.laporanCeklist.toilet.create', compact('bandara', 'lokasiToilet', 'pengawas'));
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
          'lokasi_toilet_id' => 'required',
          'pengawas_id' => 'required',
          'petugas' => 'required',
          'shift' => 'required',
          'tanggal_input' => 'required',
          'catatan' => 'required'
        ]);
        $data = new CeklistToilet;
        $data->bandara_id = $request->bandara_id;
        $data->lokasi_toilet_id = $request->lokasi_toilet_id;
        $data->pengawas_id = $request->pengawas_id;
        $data->petugas = $request->petugas;
        $data->shift = $request->shift;
        $data->tanggal_input = $request->tanggal_input;
        $data->catatan = $request->catatan;
        $data->save();

        Alert::success('Data berhasil disimpan!');
        return redirect('laporanCeklist-toilet');
    }

    public function checklist($id)
    {
      $idCeklist = CeklistToilet::findOrFail($id);
      return view('content.laporanCeklist.toilet.checklist', compact('idCeklist'));
    }

    public function checklistStore(Request $request){
      $this->validate($request, [
        'ceklist_toilet_id' => 'required',
        'nama_ceklist' => 'required',
        'berkas_ceklist' => 'required',
        'status' => 'required'
      ]);
      if ($request->nama_ceklist == "Keharuman") {
        $data = new UploadCeklistToilet;
        $data->ceklist_toilet_id = $request->ceklist_toilet_id;
        $data->nama_ceklist = $request->nama_ceklist;
        $data->berkas_ceklist = "Toilet Wangi";
        $cekDataCeklist = CeklistToilet::where('id', $request->ceklist_toilet_id)->first();
        $pengawas = karyawan::where('id', $cekDataCeklist->pengawas_id)->first();
        if ($pengawas->jk == "L") {
          $data->status_pria = $request->status;
        }else{
          $data->status_wanita = $request->status;
        }
        $data->save();
      }else {
        $data = new UploadCeklistToilet;
        $data->ceklist_toilet_id = $request->ceklist_toilet_id;
        $data->nama_ceklist = $request->nama_ceklist;
        if ($request->hasFile('berkas_ceklist')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('berkas_ceklist');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $data->berkas_ceklist = $newName;
        }
        $cekDataCeklist = CeklistToilet::where('id', $request->ceklist_toilet_id)->first();
        $pengawas = karyawan::where('id', $cekDataCeklist->pengawas_id)->first();
        if ($pengawas->jk == "L") {
          $data->status_pria = $request->status;
        }else{
          $data->status_wanita = $request->status;
        }
        $data->save();
      }

      Alert::success('Data berhasil disimpan!');
      return redirect('laporanCeklist-toilet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = CeklistToilet::findOrFail($id);
        $ceklist = UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->get();
        return view('content.laporanCeklist.toilet.show', compact('data', 'ceklist'));
    }

    public function print($id)
    {
        $data = CeklistToilet::findOrFail($id);
        $ceklist = UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->get();
        return view('content.laporanCeklist.toilet.print', compact('data', 'ceklist'));
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
