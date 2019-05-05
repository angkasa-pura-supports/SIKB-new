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
          'catatan' => 'required',
          'ceklist1' => 'required', 'upload1' => 'required', 'pria1' => 'required', 'wanita1' => 'required',
          'ceklist2' => 'required', 'upload2' => 'required', 'pria2' => 'required', 'wanita2' => 'required',
          'ceklist3' => 'required', 'upload3' => 'required', 'pria3' => 'required', 'wanita3' => 'required',
          'ceklist4' => 'required', 'upload4' => 'required', 'pria4' => 'required', 'wanita4' => 'required',
          'ceklist5' => 'required', 'upload5' => 'required', 'pria5' => 'required', 'wanita5' => 'required',
          'ceklist6' => 'required', 'upload6' => 'required', 'pria6' => 'required', 'wanita6' => 'required',
          'ceklist7' => 'required', 'upload7' => 'required', 'pria7' => 'required', 'wanita7' => 'required',
          'ceklist8' => 'required', 'upload8' => 'required', 'pria8' => 'required', 'wanita8' => 'required',
          'ceklist9' => 'required', 'upload9' => 'required', 'pria9' => 'required', 'wanita9' => 'required',
          'ceklist10' => 'required', 'upload10' => 'required', 'pria10' => 'required', 'wanita10' => 'required',
          'ceklist11' => 'required', 'upload11' => 'required', 'pria11' => 'required', 'wanita11' => 'required',
          'ceklist12' => 'required', 'upload12' => 'required', 'pria12' => 'required', 'wanita12' => 'required',
          'ceklist13' => 'required', 'upload13' => 'required', 'pria13' => 'required', 'wanita13' => 'required',
          'ceklist14' => 'required', 'upload14' => 'required', 'pria14' => 'required', 'wanita14' => 'required'
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

        $ceklist = [
          $request->ceklist1, $request->ceklist2, $request->ceklist3, $request->ceklist4, $request->ceklist5,
          $request->ceklist6, $request->ceklist7, $request->ceklist8, $request->ceklist9, $request->ceklist10,
          $request->ceklist11, $request->ceklist12, $request->ceklist13, $request->ceklist14
        ];
        $upload = [
          $request->upload1, $request->upload2, $request->upload3, $request->upload4, $request->upload5,
          $request->upload6, $request->upload7, $request->upload8, $request->upload9, $request->upload10,
          $request->upload11, $request->upload12, $request->upload13, $request->upload14
        ];
        $pria = [
          $request->pria1, $request->pria2, $request->pria3, $request->pria4, $request->pria5,
          $request->pria6, $request->pria7, $request->pria8, $request->pria9, $request->pria10,
          $request->pria11, $request->pria12, $request->pria13, $request->pria14
        ];
        $wanita = [
          $request->wanita1, $request->wanita2, $request->wanita3, $request->wanita4, $request->wanita5,
          $request->wanita6, $request->wanita7, $request->wanita8, $request->wanita9, $request->wanita10,
          $request->wanita11, $request->wanita12, $request->wanita13, $request->wanita14
        ];
        $jenisUpload = ['upload1', 'upload2', 'upload3', 'upload4', 'upload5', 'upload6', 'upload7', 'upload8', 'upload9', 'upload9'
          , 'upload10', 'upload11', 'upload12', 'upload13', 'upload14'];


        $upload1 = new UploadCeklistToilet;
        $upload1->ceklist_toilet_id = $data->id;
        $upload1->nama_ceklist = $request->ceklist1;
        $upload1->berkas_ceklist = $request->upload1;
        $upload1->status_pria = $request->pria1;
        $upload1->status_wanita = $request->wanita1;
        $upload1->save();

        $upload2 = new UploadCeklistToilet;
        $upload2->ceklist_toilet_id = $data->id;
        $upload2->nama_ceklist = $request->ceklist2;
        if ($request->hasFile('upload2')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('upload2');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $upload2->berkas_ceklist = $newName;
        }
        $upload2->status_pria = $request->pria2;
        $upload2->status_wanita = $request->wanita2;
        $upload2->save();

        $upload3 = new UploadCeklistToilet;
        $upload3->ceklist_toilet_id = $data->id;
        $upload3->nama_ceklist = $request->ceklist3;
        if ($request->hasFile('upload3')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('upload3');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $upload3->berkas_ceklist = $newName;
        }
        $upload3->status_pria = $request->pria3;
        $upload3->status_wanita = $request->wanita3;
        $upload3->save();

        $upload4 = new UploadCeklistToilet;
        $upload4->ceklist_toilet_id = $data->id;
        $upload4->nama_ceklist = $request->ceklist4;
        if ($request->hasFile('upload4')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('upload4');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $upload4->berkas_ceklist = $newName;
        }
        $upload4->status_pria = $request->pria4;
        $upload4->status_wanita = $request->wanita4;
        $upload4->save();

        $upload5 = new UploadCeklistToilet;
        $upload5->ceklist_toilet_id = $data->id;
        $upload5->nama_ceklist = $request->ceklist5;
        if ($request->hasFile('upload5')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('upload5');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $upload5->berkas_ceklist = $newName;
        }
        $upload5->status_pria = $request->pria5;
        $upload5->status_wanita = $request->wanita5;
        $upload5->save();

        $upload6 = new UploadCeklistToilet;
        $upload6->ceklist_toilet_id = $data->id;
        $upload6->nama_ceklist = $request->ceklist6;
        if ($request->hasFile('upload6')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('upload6');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $upload6->berkas_ceklist = $newName;
        }
        $upload6->status_pria = $request->pria6;
        $upload6->status_wanita = $request->wanita6;
        $upload6->save();

        $upload7 = new UploadCeklistToilet;
        $upload7->ceklist_toilet_id = $data->id;
        $upload7->nama_ceklist = $request->ceklist7;
        if ($request->hasFile('upload7')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('upload7');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $upload7->berkas_ceklist = $newName;
        }
        $upload7->status_pria = $request->pria7;
        $upload7->status_wanita = $request->wanita7;
        $upload7->save();

        $upload8 = new UploadCeklistToilet;
        $upload8->ceklist_toilet_id = $data->id;
        $upload8->nama_ceklist = $request->ceklist8;
        if ($request->hasFile('upload8')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('upload8');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $upload8->berkas_ceklist = $newName;
        }
        $upload8->status_pria = $request->pria8;
        $upload8->status_wanita = $request->wanita8;
        $upload8->save();

        $upload9 = new UploadCeklistToilet;
        $upload9->ceklist_toilet_id = $data->id;
        $upload9->nama_ceklist = $request->ceklist9;
        if ($request->hasFile('upload9')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('upload9');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $upload9->berkas_ceklist = $newName;
        }
        $upload9->status_pria = $request->pria9;
        $upload9->status_wanita = $request->wanita9;
        $upload9->save();

        $upload10 = new UploadCeklistToilet;
        $upload10->ceklist_toilet_id = $data->id;
        $upload10->nama_ceklist = $request->ceklist10;
        if ($request->hasFile('upload10')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('upload10');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $upload10->berkas_ceklist = $newName;
        }
        $upload10->status_pria = $request->pria10;
        $upload10->status_wanita = $request->wanita10;
        $upload10->save();

        $upload11 = new UploadCeklistToilet;
        $upload11->ceklist_toilet_id = $data->id;
        $upload11->nama_ceklist = $request->ceklist11;
        if ($request->hasFile('upload11')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('upload11');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $upload11->berkas_ceklist = $newName;
        }
        $upload11->status_pria = $request->pria11;
        $upload11->status_wanita = $request->wanita11;
        $upload11->save();

        $upload12 = new UploadCeklistToilet;
        $upload12->ceklist_toilet_id = $data->id;
        $upload12->nama_ceklist = $request->ceklist12;
        if ($request->hasFile('upload12')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('upload12');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $upload12->berkas_ceklist = $newName;
        }
        $upload12->status_pria = $request->pria12;
        $upload12->status_wanita = $request->wanita12;
        $upload12->save();

        $upload13 = new UploadCeklistToilet;
        $upload13->ceklist_toilet_id = $data->id;
        $upload13->nama_ceklist = $request->ceklist13;
        if ($request->hasFile('upload13')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('upload13');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $upload13->berkas_ceklist = $newName;
        }
        $upload13->status_pria = $request->pria13;
        $upload13->status_wanita = $request->wanita13;
        $upload13->save();

        $upload14 = new UploadCeklistToilet;
        $upload14->ceklist_toilet_id = $data->id;
        $upload14->nama_ceklist = $request->ceklist14;
        if ($request->hasFile('upload14')) {
          $dir = 'uploads/ceklist/toilet';
          $file = $request->file('upload14');
          $ext = $file->getClientOriginalExtension();
          $newName = rand(100000,1001238912).".".$ext;
          $file->move($dir,$newName);
          $upload14->berkas_ceklist = $newName;
        }
        $upload14->status_pria = $request->pria14;
        $upload14->status_wanita = $request->wanita14;
        $upload14->save();

        Alert::success('Data berhasil disimpan!');
        return redirect('Ceklist_Toilet');
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
