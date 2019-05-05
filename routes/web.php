<?php
Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});
Route::get('Dashboard','DashboardController@create')->name('Dashboard');
//Master Data
// Route Master Role
Route::resource('master-roles', 'Sistem\Master\RoleController');
// Route Master Permission
Route::resource('master-permission', 'Sistem\Master\PermissionController');
//Route Access Roles
Route::resource('access-role', 'Sistem\AccessRoleController');
// Route Access Permission
Route::resource('access-permission', 'Sistem\AccessPermissionController');
// Route Master Bandara
Route::get('master-bandara', 'Sistem\Master\BandaraController@index')->name('master-bandara.index')->middleware('permission:Link Bandara');
Route::get('master-bandara/create', 'Sistem\Master\BandaraController@create')->name('master-bandara.create')->middleware('permission:Create Bandara');
Route::post('master-bandara', 'Sistem\Master\BandaraController@store')->name('master-bandara.store')->middleware('permission:Create Bandara');
Route::get('master-bandara/{id}/edit', 'Sistem\Master\BandaraController@edit')->name('master-bandara.edit')->middleware('permission:Update Bandara');
Route::put('master-bandara{id}', 'Sistem\Master\BandaraController@update')->name('master-bandara.update')->middleware('permission:Update Bandara');
Route::delete('master-bandara/{id}', 'Sistem\Master\BandaraController@destroy')->name('master-bandara.destroy')->middleware('permission:Delete Bandara');
// Route Master Lokasi Toilet
Route::get('master-lokasiToilet', 'Sistem\Master\LokasiToiletController@index')->name('master-lokasiToilet.index')->middleware('permission:Link Lokasi Toilet');
Route::get('master-lokasiToilet/create', 'Sistem\Master\LokasiToiletController@create')->name('master-lokasiToilet.create')->middleware('permission:Create Lokasi Toilet');
Route::post('master-lokasiToilet', 'Sistem\Master\LokasiToiletController@store')->name('master-lokasiToilet.store')->middleware('permission:Create Lokasi Toilet');
Route::get('master-lokasiToilet/{id}/edit', 'Sistem\Master\LokasiToiletController@edit')->name('master-lokasiToilet.edit')->middleware('permission:Update Lokasi Toilet');
Route::put('master-lokasiToilet{id}', 'Sistem\Master\LokasiToiletController@update')->name('master-lokasiToilet.update')->middleware('permission:Update Lokasi Toilet');
Route::delete('master-lokasiToilet/{id}', 'Sistem\Master\LokasiToiletController@destroy')->name('master-lokasiToilet.destroy')->middleware('permission:Delete Lokasi Toilet');
//Master Data
Route::get('KontrakPekerjaan', 'Sistem\Master\KontrakPekerjaanController@index')->name('KontrakPekerjaan.index');
Route::get('KontrakPekerjaan/create', 'Sistem\Master\KontrakPekerjaanController@create')->name('KontrakPekerjaan.create');
Route::post('KontrakPekerjaan', 'Sistem\Master\KontrakPekerjaanController@store')->name('KontrakPekerjaan.store');
Route::post('KontrakPekerjaan/{id}/edit', 'Sistem\Master\KontrakPekerjaanController@edit')->name('KontrakPekerjaan.edit');
Route::delete('KontrakPekerjaan/{id}', 'Sistem\Master\KontrakPekerjaanController@destroy')->name('KontrakPekerjaan.destroy');

//Ceklis
Route::get('laporanCeklist-toilet','Sistem\LaporanCekList\Toilet\CeklistToiletController@index')->name('laporanCeklist-toilet.index');
Route::get('laporanCeklist-toilet/create','Sistem\LaporanCekList\Toilet\CeklistToiletController@create')->name('laporanCeklist-toilet.create');
Route::post('laporanCeklist-toilet', 'Sistem\LaporanCekList\Toilet\CeklistToiletController@store')->name('laporanCeklist-toilet.store');
Route::get('laporanCeklist-toilet/{id}', 'Sistem\LaporanCekList\Toilet\CeklistToiletController@show')->name('laporanCeklist-toilet.show');
Route::get('laporanCeklist-toilet/print/{id}', 'Sistem\LaporanCekList\Toilet\CeklistToiletController@print')->name('laporanCeklist-toilet.print');
//karyawan
Route::get('data_karyawan','Sistem\Master\KaryawanController@index')->name('data_karyawan.index')->middleware('permission:Link Karyawan');
Route::get('data_karyawan/create','Sistem\Master\KaryawanController@create')->name('data_karyawan.create')->middleware('permission:Create Karyawan');
Route::post('master-karyawan', 'Sistem\Master\KaryawanController@store')->name('master-karyawan.store')->middleware('permission:Create Karyawan');
Route::get('master-karyawan/{id}/edit', 'Sistem\Master\KaryawanController@edit')->name('master-karyawan.edit')->middleware('permission:Update Karyawan');
Route::put('master-karyawan{id}', 'Sistem\Master\KaryawanController@update')->name('master-karyawan.update')->middleware('permission:Update Karyawan');
Route::delete('master-karyawan/{id}', 'Sistem\Master\KaryawanController@destroy')->name('master-karyawan.destroy')->middleware('permission:Delete Karyawan');

//UserAdmin
Route::get('UserAdmin','Sistem\UserAdminController@index')->name('UserAdmin.index')->middleware('permission:Link UserAdmin');
Route::get('UserAdmin/create','Sistem\UserAdminController@create')->name('UserAdmin.create')->middleware('permission:Create UserAdmin');
Route::post('UserAdmin','Sistem\UserAdminController@store')->name('UserAdmin.store')->middleware('permission:Create UserAdmin');
Route::get('UserAdmin/{id}/edit','Sistem\UserAdminController@edit')->name('UserAdmin.edit')->middleware('permission:Update UserAdmin');
Route::put('UserAdmin{id}','Sistem\UserAdminController@update')->name('UserAdmin.update')->middleware('permission:Update UserAdmin');
Route::delete('UserAdmin/{id}','Sistem\UserAdminController@destroy')->name('UserAdmin.destroy')->middleware('permission:Delete UserAdmin');
