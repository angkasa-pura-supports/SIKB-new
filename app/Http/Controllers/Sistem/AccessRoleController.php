<?php

namespace App\Http\Controllers\Sistem;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use DB;
use Alert;
use App\User;
class AccessRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      $this->middleware('auth');
      $this->middleware('role:SuperAdmin');
    }
    public function index()
    {
        $data = DB::table('model_has_roles')->get();
        return view('content.accessRole.index', compact('data', 'userList', 'listRole'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userList = User::pluck('name', 'id');
        $listRole = Role::pluck('name', 'id');
        return view('content.accessRole.create', compact('data', 'userList', 'listRole'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'user_id' => 'required',
          'role_id' => 'required'
        ]);
        DB::table('model_has_roles')->insert([
          'role_id' => $request->role_id,
          'model_type'=> 'App\User',
          'model_id' => $request->user_id
        ]);
        Alert::success('Data berhasil disimpan!');
        return redirect('access-role');
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
        $userList = User::pluck('name', 'id');
        $listRole = Role::pluck('name', 'id');
        $data = DB::table('model_has_roles')->where('model_id', $id)->first();
        return view('content.accessRole.edit', compact('data', 'userList', 'listRole'));
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
      $this->validate($request,[
        'model_id' => 'required',
        'role_id' => 'required'
      ]);
      DB::table('model_has_roles')->where('model_id', $request->model_id)->update([
        'role_id' => $request->role_id,
        'model_type'=> 'App\User',
        'model_id' => $request->model_id
      ]);
      Alert::success('Data berhasil diubah!');
      return redirect('access-role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('model_has_roles')->where('model_id', $id)->delete();
      Alert::success('Data berhasil dihapus!');
      return redirect('access-role');
    }
}
