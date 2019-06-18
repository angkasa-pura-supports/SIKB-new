<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AreaScaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['nama_area'=>'Keberangkatan', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Check in Hall', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Ruang Kerja', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Baggage Claim', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Boarding Lounge', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Dropzone/Pick Up Zone', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Toilet (Pria dan Wanita)', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Smoking Area', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Ruang Tunggu', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Koridor Luar Keberangkatan', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Koridor Dalam Keberangkatan', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Airside', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Koridor Luar Kedatangan', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Koridor Dalam Kedatangan', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_area'=>'Ruang Kedatangan', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]
      ];
      DB::table('areasca')->insert($data);
    }
}
