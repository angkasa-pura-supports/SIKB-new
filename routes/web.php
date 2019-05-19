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
Route::put('master-bandara/{id}', 'Sistem\Master\BandaraController@update')->name('master-bandara.update')->middleware('permission:Update Bandara');
Route::delete('master-bandara/{id}', 'Sistem\Master\BandaraController@destroy')->name('master-bandara.destroy')->middleware('permission:Delete Bandara');
// Route Master Lokasi Toilet
Route::get('master-lokasiToilet', 'Sistem\Master\LokasiToiletController@index')->name('master-lokasiToilet.index')->middleware('permission:Link Lokasi Toilet');
Route::get('master-lokasiToilet/create', 'Sistem\Master\LokasiToiletController@create')->name('master-lokasiToilet.create')->middleware('permission:Create Lokasi Toilet');
Route::post('master-lokasiToilet', 'Sistem\Master\LokasiToiletController@store')->name('master-lokasiToilet.store')->middleware('permission:Create Lokasi Toilet');
Route::get('master-lokasiToilet/{id}/edit', 'Sistem\Master\LokasiToiletController@edit')->name('master-lokasiToilet.edit')->middleware('permission:Update Lokasi Toilet');
Route::put('master-lokasiToilet/{id}', 'Sistem\Master\LokasiToiletController@update')->name('master-lokasiToilet.update')->middleware('permission:Update Lokasi Toilet');
Route::delete('master-lokasiToilet/{id}', 'Sistem\Master\LokasiToiletController@destroy')->name('master-lokasiToilet.destroy')->middleware('permission:Delete Lokasi Toilet');
//Master Data
Route::get('KontrakPekerjaan', 'Sistem\Master\KontrakPekerjaanController@index')->name('KontrakPekerjaan.index');
Route::get('KontrakPekerjaan/create', 'Sistem\Master\KontrakPekerjaanController@create')->name('KontrakPekerjaan.create');
Route::post('KontrakPekerjaan', 'Sistem\Master\KontrakPekerjaanController@store')->name('KontrakPekerjaan.store');
Route::post('KontrakPekerjaan/{id}/edit', 'Sistem\Master\KontrakPekerjaanController@edit')->name('KontrakPekerjaan.edit');
Route::delete('KontrakPekerjaan/{id}', 'Sistem\Master\KontrakPekerjaanController@destroy')->name('KontrakPekerjaan.destroy');

// Master Karyawan
Route::get('data_karyawan','Sistem\Master\KaryawanController@index')->name('data_karyawan.index')->middleware('permission:Link Karyawan');
Route::get('data_karyawan/create','Sistem\Master\KaryawanController@create')->name('data_karyawan.create')->middleware('permission:Create Karyawan');
Route::post('master-karyawan', 'Sistem\Master\KaryawanController@store')->name('master-karyawan.store')->middleware('permission:Create Karyawan');
Route::get('master-karyawan/{id}/edit', 'Sistem\Master\KaryawanController@edit')->name('master-karyawan.edit')->middleware('permission:Update Karyawan');
Route::put('master-karyawan/{id}', 'Sistem\Master\KaryawanController@update')->name('master-karyawan.update')->middleware('permission:Update Karyawan');
Route::delete('master-karyawan/{id}', 'Sistem\Master\KaryawanController@destroy')->name('master-karyawan.destroy')->middleware('permission:Delete Karyawan');

// Master Peralatan
Route::get('master-peralatan', 'Sistem\Master\PeralatanController@index')->name('master-peralatan.index');
Route::get('master-peralatan/create', 'Sistem\Master\PeralatanController@create')->name('master-peralatan.create');
Route::post('master-peralatan', 'Sistem\Master\PeralatanController@store')->name('master-peralatan.store');
Route::get('master-peralatan/{id}/edit', 'Sistem\Master\PeralatanController@edit')->name('master-peralatan.edit');
Route::put('master-peralatan/{id}', 'Sistem\Master\PeralatanController@update')->name('master-peralatan.update');
Route::delete('master-peralatan/{id}', 'Sistem\Master\PeralatanController@destroy')->name('master-peralatan.destroy');

// Master Kondisi Peralatan
Route::get('master-kondisi-peralatan', 'Sistem\Master\PeralatanKondisiController@index')->name('master-kondisi-peralatan.index');
Route::get('master-kondisi-peralatan/create', 'Sistem\Master\PeralatanKondisiController@create')->name('master-kondisi-peralatan.create');
Route::post('master-kondisi-peralatan', 'Sistem\Master\PeralatanKondisiController@store')->name('master-kondisi-peralatan.store');
Route::get('master-kondisi-peralatan/{id}/edit', 'Sistem\Master\PeralatanKondisiController@edit')->name('master-kondisi-peralatan.edit');
Route::put('master-kondisi-peralatan/{id}', 'Sistem\Master\PeralatanKondisiController@update')->name('master-kondisi-peralatan.update');
Route::delete('master-kondisi-peralatan/{id}', 'Sistem\Master\PeralatanKondisiController@destroy')->name('master-kondisi-peralatan.destroy');

// Ceklist Toilet
Route::get('laporanCeklist-toilet','Sistem\LaporanCekList\Toilet\CeklistToiletController@index')->name('laporanCeklist-toilet.index');
Route::get('laporanCeklist-toilet/create','Sistem\LaporanCekList\Toilet\CeklistToiletController@create')->name('laporanCeklist-toilet.create');
Route::post('laporanCeklist-toilet', 'Sistem\LaporanCekList\Toilet\CeklistToiletController@store')->name('laporanCeklist-toilet.store');
Route::get('laporanCeklist-toilet/{id}', 'Sistem\LaporanCekList\Toilet\CeklistToiletController@show')->name('laporanCeklist-toilet.show');
Route::get('laporanCeklist-toilet/print/{id}', 'Sistem\LaporanCekList\Toilet\CeklistToiletController@print')->name('laporanCeklist-toilet.print');
Route::get('laporanCeklist-toilet/checklist/{id}', 'Sistem\LaporanCekList\Toilet\CeklistToiletController@checklist')->name('laporanCeklist-toilet.checklist');
Route::post('laporanCeklist-toilet/checklist', 'Sistem\LaporanCekList\Toilet\CeklistToiletController@checklistStore')->name('laporanCeklist-toilet.checklistStore');

// Ceklist Peralatan
Route::get('laporanCeklist-peralatan', 'Sistem\LaporanCeklist\Peralatan\CeklistPeralatanController@index')->name('laporanCeklist-peralatan.index');
Route::get('laporanCeklist-peralatan/create', 'Sistem\LaporanCeklist\Peralatan\CeklistPeralatanController@create')->name('laporanCeklist-peralatan.create');
Route::post('laporanCeklist-peralatan', 'Sistem\LaporanCeklist\Peralatan\CeklistPeralatanController@store')->name('laporanCeklist-peralatan.store');
Route::get('laporanCeklist-peralatan/{id}', 'Sistem\LaporanCeklist\Peralatan\CeklistPeralatanController@show')->name('laporanCeklist-peralatan.show');
Route::get('laporanCeklist-peralatan/print/{id}', 'Sistem\LaporanCeklist\Peralatan\CeklistPeralatanController@print')->name('laporanCeklist-peralatan.print');
Route::get('laporanCeklist-peralatan/checklist/{id}', 'Sistem\LaporanCeklist\Peralatan\CeklistPeralatanController@checklist')->name('laporanCeklist-peralatan.checklist');
Route::post('laporanCeklist-peralatan/checklist', 'Sistem\LaporanCeklist\Peralatan\CeklistPeralatanController@checklistStore')->name('laporanCeklist-peralatan.checklistStore');

//Laporan Ceklist Automactic Scrubber
Route::get('laporanCeklist-AutomacticScrubber','Sistem\LaporanCekList\Peralatan\AutomacticScrubberController@index')->name('laporanCeklist-AutomacticScrubber.index');
Route::get('laporanCeklist-AutomacticScrubber/create','Sistem\LaporanCekList\Peralatan\AutomacticScrubberController@create')->name('laporanCeklist-AutomacticScrubber.create');
Route::post('laporanCeklist-AutomacticScrubber/store','Sistem\LaporanCekList\Peralatan\AutomacticScrubberController@store')->name('laporanCeklist-AutomacticScrubber.store');

//UserAdmin
Route::get('UserAdmin','Sistem\UserAdminController@index')->name('UserAdmin.index')->middleware('permission:Link UserAdmin');
Route::get('UserAdmin/create','Sistem\UserAdminController@create')->name('UserAdmin.create')->middleware('permission:Create UserAdmin');
Route::post('UserAdmin','Sistem\UserAdminController@store')->name('UserAdmin.store')->middleware('permission:Create UserAdmin');
Route::get('UserAdmin/{id}/edit','Sistem\UserAdminController@edit')->name('UserAdmin.edit')->middleware('permission:Update UserAdmin');
Route::put('UserAdmin{id}','Sistem\UserAdminController@update')->name('UserAdmin.update')->middleware('permission:Update UserAdmin');
Route::delete('UserAdmin/{id}','Sistem\UserAdminController@destroy')->name('UserAdmin.destroy')->middleware('permission:Delete UserAdmin');

// Report
// Report Toilet
Route::get('report-toilet', 'Sistem\Report\ReportToiletController@index')->name('report-toilet.index');
Route::get('report-toilet/report/', 'Sistem\Report\ReportToiletController@store')->name('report-toilet.store');










//ReportCeklistToilet
// Route::get('ReportCeklistToilet', 'Sistem\LaporanCekList\ReportCeklistToiletController@index')->name('ReportCeklistToilet.index');
// Route::get('ReportCeklistToilet/report/', 'Sistem\LaporanCekList\ReportCeklistToiletController@report')->name('ReportCeklistToilet.report');
