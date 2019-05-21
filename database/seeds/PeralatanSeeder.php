<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class PeralatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['nama_peralatan'=>'Automactic Scrubber', 'nama_mesin'=>'Automactic Scrubber','type'=>'Minuteman M-170','no_mesin'=>'12345678','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['nama_peralatan'=>'Blower', 'nama_mesin'=>'Blower','type'=>'Minuteman','no_mesin'=>'12345678','created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]
      ];
      DB::table('peralatan')->insert($data);
    }
}
