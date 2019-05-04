<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class BandaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('bandara')->insert([
          'threeletter' => 'UPG',
          'nama_bandara' => 'Sultan Hasanuddin International Airport Makassar',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);
    }
}
