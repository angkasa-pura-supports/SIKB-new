<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(BandaraSeeder::class);
        $this->call(LokasiToiletSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(ModelRolesSeeder::class);
        $this->call(ModelPermissionSeeder::class);
        $this->call(KaryawanSeeder::class);
        $this->call(PeralatanSeeder::class);
    }
}
