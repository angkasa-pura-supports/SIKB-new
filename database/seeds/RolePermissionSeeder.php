<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Role::create(['name'=>'SuperAdmin']);
      Role::create(['name'=>'Pimpinan']);
      Role::create(['name'=>'SPV']);
      Role::create(['name'=>'Senior Leader']);
      Role::create(['name'=>'Leader']);
      Role::create(['name'=>'Admin']);
      Role::create(['name'=>'User']);

      Permission::create(['name'=>'Link Bandara']);
      Permission::create(['name'=>'Create Bandara']);
      Permission::create(['name'=>'Read Bandara']);
      Permission::create(['name'=>'Update Bandara']);
      Permission::create(['name'=>'Delete Bandara']);

      Permission::create(['name'=>'Link Lokasi Toilet']);
      Permission::create(['name'=>'Create Lokasi Toilet']);
      Permission::create(['name'=>'Read Lokasi Toilet']);
      Permission::create(['name'=>'Update Lokasi Toilet']);
      Permission::create(['name'=>'Delete Lokasi Toilet']);

      Permission::create(['name'=>'Link Karyawan']);
      Permission::create(['name'=>'Create Karyawan']);
      Permission::create(['name'=>'Read Karyawan']);
      Permission::create(['name'=>'Update Karyawan']);
      Permission::create(['name'=>'Delete Karyawan']);







    }
}
