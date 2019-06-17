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
//Master Plan Cleaning Program
Route::resource('Plan-Cleaning-Program', 'Sistem\Master\PlanCleaningProgramController');
//AreaSCA
Route::resource('Area-Sca', 'Sistem\Master\AreaScaController');
//Standard Cleanliness Area
Route::resource('Standard-Cleanliness-Area', 'Sistem\Master\StandardCleanlinessAreaController');
//Consumable
Route::resource('Consumable', 'Sistem\Master\ConsumableController');
//List Penggunaan Chemical
Route::resource('Chemical', 'Sistem\Master\ChemicalController');
// Route Master Bandara
Route::resource('master-bandara', 'Sistem\Master\BandaraController');
// Route Master Lokasi Toilet
Route::resource('master-lokasiToilet', 'Sistem\Master\LokasiToiletController');
//Master Data
Route::resource('KontrakPekerjaan', 'Sistem\Master\KontrakPekerjaanController');
// Master Karyawan
Route::resource('master-karyawan', 'Sistem\Master\KaryawanController');
// Master Peralatan
Route::resource('master-peralatan', 'Sistem\Master\PeralatanController');
// Master Kondisi Peralatan
Route::resource('master-kondisi-peralatan', 'Sistem\Master\PeralatanKondisiController');
// End Master

// Ceklist
// Ceklist Toilet
Route::resource('laporanCeklist-toilet','Sistem\LaporanCekList\Toilet\CeklistToiletController');
Route::get('laporanCeklist-toilet/print/{id}', 'Sistem\LaporanCekList\Toilet\CeklistToiletController@print')->name('laporanCeklist-toilet.print');
Route::get('laporanCeklist-toilet/checklist/{id}', 'Sistem\LaporanCekList\Toilet\CeklistToiletController@checklist')->name('laporanCeklist-toilet.checklist');
Route::post('laporanCeklist-toilet/checklist', 'Sistem\LaporanCekList\Toilet\CeklistToiletController@checklistStore')->name('laporanCeklist-toilet.checklistStore');
// Ceklist Peralatan
Route::resource('laporanCeklist-peralatan', 'Sistem\LaporanCeklist\Peralatan\CeklistPeralatanController');
Route::get('laporanCeklist-peralatan/print/{id}', 'Sistem\LaporanCeklist\Peralatan\CeklistPeralatanController@print')->name('laporanCeklist-peralatan.print');
Route::get('laporanCeklist-peralatan/checklist/{id}', 'Sistem\LaporanCeklist\Peralatan\CeklistPeralatanController@checklist')->name('laporanCeklist-peralatan.checklist');
Route::post('laporanCeklist-peralatan/checklist', 'Sistem\LaporanCeklist\Peralatan\CeklistPeralatanController@checklistStore')->name('laporanCeklist-peralatan.checklistStore');
// Ceklist SCA
Route::resource('laporanCeklist-sca', 'Sistem\LaporanCeklist\SCA\CeklistScaController');
// End Ceklist

//UserAdmin
Route::resource('UserAdmin','Sistem\UserAdminController');
// Report Toilet
Route::get('report-toilet', 'Sistem\Report\ReportToiletController@index')->name('report-toilet.index');
Route::get('report-toilet/report/', 'Sistem\Report\ReportToiletController@store')->name('report-toilet.store');
// Report Peralatan
Route::get('report-peralatan', 'Sistem\Report\ReportPeralatanController@index')->name('report-peralatan.index');
Route::get('report-peralatan/report/', 'Sistem\Report\ReportPeralatanController@store')->name('report-peralatan.store');
//Report Consumable
Route::get('report-consumable', 'Sistem\Report\ReportConsumableController@index')->name('report-consumable.index');
//Komplain
Route::get('komplain', 'Sistem\Master\KomplainController@index')->name('komplain.index');
Route::get('komplain/create', 'Sistem\Master\KomplainController@create')->name('komplain.create');
Route::post('komplain', 'Sistem\Master\KomplainController@store')->name('komplain.store');










//ReportCeklistToilet
// Route::get('ReportCeklistToilet', 'Sistem\LaporanCekList\ReportCeklistToiletController@index')->name('ReportCeklistToilet.index');
// Route::get('ReportCeklistToilet/report/', 'Sistem\LaporanCekList\ReportCeklistToiletController@report')->name('ReportCeklistToilet.report');
