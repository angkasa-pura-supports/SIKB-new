<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['Nik'=>'1739326', 'nama_karyawan'=>'Arif Riadi Nusman', 'jk'=>'L','Jabatan'=>'SuperAdmin', 'unit_kerja'=>'Angkasa Pura Support', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['Nik'=>'1804410', 'nama_karyawan'=>'Achmadi', 'jk'=>'L','Jabatan'=>'Supervisor', 'unit_kerja'=>'Angkasa Pura Support', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]
      ];
      DB::table('karyawan')->insert($data);
    }
}
