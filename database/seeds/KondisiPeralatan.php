<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class KondisiPeralatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Steker','kondisi_standard'=>'Utuh, tidak meleleh terbakar' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Kabel','kondisi_standard'=>'Tidak Cacat / Terkelupas' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Lampu Indikator','kondisi_standard'=>'Menyala Saat Listrik masuk' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Switch Vacuum','kondisi_standard'=>'Berfungsi baik' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Switch Brush','kondisi_standard'=>'Berfungsi baik' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Tuas Pembuka air','kondisi_standard'=>'Dapat menarik kran air' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Tuas Pengangkat squeege','kondisi_standard'=>'Dapat mengangkat dan menurunkan squeege dengan sempurna' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Floor Squeege','kondisi_standard'=>'Rubber blade bersih tidak cacat dan dapat menempel sempurna ke lantai ' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Solution Tank','kondisi_standard'=>'Bersih dari endapan dan kondisi filter baik' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Recovery Tank','kondisi_standard'=>'Bersih dan pelampung berfungsi' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Seal Recovery Tank','kondisi_standard'=>'Bersih dan dapat membuat recovery thank kedap udara' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Pengaturan Tekanan Sikat','kondisi_standard'=>'Dapat mengatur tekanan sikat baik posisi kelinci maupun posisi kura' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Roda depan , Belakang','kondisi_standard'=>'Lancar berputar, tidak terjerat rambut atau yang lain dan bersih' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Drive Hub dan Pad','kondisi_standard'=>'Drive hub dapat mengunci pad holder atau scrub brush dengan baik' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Pedal Pengangkat Sikat','kondisi_standard'=>'Dapat mengangkat sikat dan mnguncinya, dan dapat menurunkan dengan baik' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
        ['peralatan_id'=>'1', 'item_pemeriksaan'=>'Kebersihan Seluruh Bagian','kondisi_standard'=>'Bersih, kering dan bebas debu , baik bagian atas dalam dan bagian bawah mesin' ,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()],
      ];
      DB::table('peralatan_kondisi')->insert($data);
    }
}
