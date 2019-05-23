<?php

namespace App\Http\Controllers\Sistem\Report;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Peralatan;
use App\PeralatanKondisi;
use Illuminate\Support\Facades\Input;
use Alert;
class ReportPeralatanController extends Controller
{
    public function index()
    {
      $listPeralatan = Peralatan::pluck('nama_peralatan', 'id');
      return view('content.report.peralatan.index', compact('listPeralatan'));
    }

    public function store(Request $request)
    {
      $getPeralatan = Input::get('peralatan_id');
      $kondisiPeralatan = PeralatanKondisi::where('peralatan_id', $getPeralatan)->get();
      return view('content.report.peralatan.print', compact('kondisiPeralatan'));
    }
}
