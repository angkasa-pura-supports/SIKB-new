<?php

namespace App\Http\Controllers\Sistem;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\karyawan;
use App\User;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Alert;
class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('content.userAdmin.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawanList = [];
        foreach (karyawan::all() as $value) {
          $karyawanList[$value->Nik] = $value->Nik." => ".$value->nama_karyawan;
        }
        return view('content.userAdmin.create', compact('karyawanList'));
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
          'Nik' => 'required'
        ]);
        $user = new User;
        $karyawan = karyawan::where('Nik', $request->Nik)->first();
        $user->name = $karyawan->nama_karyawan;
        $user->username = $request->Nik;
        $user->password = bcrypt($request->Nik);
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
        $userRole = Role::where('name', 'User')->first();
        DB::table('model_has_roles')->insert([
          'role_id' => $userRole->id,
          'model_type' => 'App\User',
          'model_id' => $user->id
        ]);
        Alert::success('Data berhasil disimpan!');
        return redirect('UserAdmin');
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
