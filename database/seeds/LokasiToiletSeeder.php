<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class LokasiToiletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['lokasi_toilet'=>'Keberangkatan', 'nama_toilet'=>'Toilet 1A', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['lokasi_toilet'=>'Keberangkatan', 'nama_toilet'=>'Toilet 1B', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['lokasi_toilet'=>'Keberangkatan', 'nama_toilet'=>'Toilet 1C', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['lokasi_toilet'=>'Kedatangan', 'nama_toilet'=>'Toilet 1D', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['lokasi_toilet'=>'Kedatangan', 'nama_toilet'=>'Toilet 1E', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['lokasi_toilet'=>'Kedatangan', 'nama_toilet'=>'Toilet 1F', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]
      ];
      DB::table('lokasi_toilet')->insert($data);
    }
}
