<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class StandardCleanlinessAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          ['area_id'=>2, 'material'=>'Lantai', 'standard_area'=>'Selalu bebas dari sampah, tidak berdebu, sudut lantai mengkilap, bersih dan tidak berdebu', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
          ['area_id'=>2, 'material'=>'Dinding', 'standard_area'=>'Bersih tidak bernoda, tidak ada sarang laba-laba, cermin selalu kering dan bersih, hand dryer selalu kering dan bersih, air refreshener tidak berdebu, partisi toilet besih, pintu bersih, lampu signage tidak berdebu dan bersih dari sarang laba-laba', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
          ['area_id'=>2, 'material'=>'Langit-Langit', 'standard_area'=>'Bersih tidak ada noda, AC/exhaust grill bersih, Reflektor lampu bersih dan tidak ada sarang laba-laba', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
          ['area_id'=>2, 'material'=>'Wash Basin', 'standard_area'=>'Kering, tidak bernoda, kran dan drain mengkilap dan tidak berkerak', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
          ['area_id'=>2, 'material'=>'Railing & Glasses', 'standard_area'=>'Dicuci setiap malam, jarak antara bin dan dinding selebar telapak tangan, kotoran diangkat menggunakan alat yang sesuai', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
          ['area_id'=>2, 'material'=>'Pilar', 'standard_area'=>'Bebas dari debu dan tidak bernoda, bebas dari sarang laba-laba', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
          ['area_id'=>2, 'material'=>'Chek in Counter', 'standard_area'=>'Bersih, tidak bernoda dan rapi', 'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]
        ];

        DB::table('StandardCleanlinessArea')->insert($data);

    }
}
