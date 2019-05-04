<?php

namespace App\Http\Controllers\Sistem;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Permission;
use DB;
use Alert;
class AccessPermissionController extends Controller
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
        $data = DB::table('model_has_permissions')->select('model_id')->groupBy('model_id')->get();
        return view('content.accessPermission.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userList = User::pluck('name', 'id');
        $listPermission = Permission::all();
        return view('content.accessPermission.create', compact('userList', 'listPermission'));
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
          'user_id' => 'required',
          'permission' => ''
        ]);
        $arrayData = [];
        for ($i=0; $i < count($request->permission); $i++) {
          $arrayData[] = [
            'model_id' => $request->user_id,
            'model_type' => 'App\User',
            'permission_id' => $request->permission[$i]
          ];
        }
        DB::table('model_has_permissions')->insert($arrayData);
        Alert::success('Data berhasil disimpan!');
        return redirect('access-permission');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('model_has_permissions')->where('model_id', $id)->first();
        return view('content.accessPermission.show', compact('data'));
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
        DB::table('model_has_permissions')->where('model_id', $id)->delete();
        Alert::success('Data berhasil diHapus!');
        return redirect('access-permission');
    }
}
