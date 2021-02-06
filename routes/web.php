<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('pdf', function() {
	$kehilangan = App\Kehilangan::find(1);
	$create = Carbon\Carbon::parse($kehilangan->created_at)->isoformat('D MMMM Y');
	// dd($kehilangan);
    // $pdf = PDF::loadView('pdf', ['kehilangan' => $kehilangan,'create' => $create])->setPaper('legal');
    // return $pdf->stream('Pengantar.pdf');
	return view('pdf', compact('kehilangan','create'));
});
Route::get('/', function () {
    return view('layouts.front.master');
});
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

// Auth::routes();
Route::get('beranda', function() {
	return view('layouts.beranda.home');
});


Route::get('profile', function() {
	return view('layouts.beranda.profile');
});

Route::get('monografi', function() {
	return view('layouts.beranda.monografi');
});

// User Pelayanan
Route::get('pemerintahan', 'PendudukController@pemerintahan')->name('user.pemerintahan');
Route::get('pembangunan', 'PendudukController@pembangunan')->name('user.pembangunan');
Route::get('sosial', 'PendudukController@sosial')->name('user.sosial');

// Pemerintahan
Route::get('surat_kelahiran', 'KelahiranController@kelahiran')->name('user.kelahiran');
Route::get('surat_domisili', 'DomisiliController@domisili')->name('user.domisili');
Route::get('surat_skck', 'SkckController@skck')->name('user.skck');
Route::get('surat_kehilangan', 'KehilanganController@kehilangan')->name('user.kehilangan');
Route::get('surat_pindah', 'PindahController@pindah')->name('user.pindah');
Route::get('surat_kematian', 'KematianController@kematian')->name('user.kematian');

// Pembangunan
Route::get('surat_usaha', 'UsahaController@usaha')->name('user.usaha');

// Post Pembangunan
Route::post('surat_usaha', 'UsahaController@create')->name('buat.usaha');
// Sosial
Route::get('surat_sktm', 'SktmController@sktm')->name('sktm');

// Post Sosial
Route::post('surat_sktm', 'SktmController@create')->name('buat.sktm');


// Post Pemerintahan
Route::post('surat_skck', 'SkckController@create')->name('buat.skck');
Route::post('surat_domisili', 'DomisiliController@create')->name('buat.domisili');
Route::post('surat_kehilangan', 'KehilanganController@create')->name('buat.kehilangan');
Route::post('surat_kematian', 'KematianController@create')->name('buat.kematian');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');

Route::group(['prefix' => 'admin'], function(){
	Route::get('login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.home');
	Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
	Route::get('/jabatan', 'JabatanController@index')->name('jabatan');
	Route::post('buatjabatan', 'JabatanController@create')->name('createjabatan');

	Route::get('penduduk', 'AdminController@indexAdmin')->name('penduduk');
	Route::get('create_nik', 'AdminController@create')->name('create');
	Route::post('create_nik', 'AdminController@store_nik')->name('store_nik');
	Route::get('tambah/{id}', 'AdminController@show')->name('tambah');
	Route::post('store_penduduk/{id}', 'AdminController@store')->name('store_penduduk');

	// Pelayanan
	Route::get('pemerintahan', 'AdminController@pemerintahan')->name('pemerintahan');
	Route::get('pembangunan', 'AdminController@pembangunan')->name('pembangunan');
	Route::get('sosial', 'AdminController@sosial')->name('sosial');

	// Admin Pelayanan
	Route::get('pemerintahan/skck', 'AdminController@skck')->name('admin.skck');
	Route::get('edit/{id}', 'AdminController@edit')->name('edit');
	Route::get('exportSkck', 'AdminController@exportSkck')->name('exportSkck');
	Route::get('pemerintahan/domisili', 'AdminController@domisili')->name('admin.domisili');
	Route::get('domisili/edit/{id}', 'AdminController@domisiliedit')->name('domisili.edit');
	Route::post('domisili/update/{id}', 'AdminController@domisiliupdate')->name('domisili.update');
	Route::get('exportDomisili', 'AdminController@exportDomisili')->name('exportDomisili');

	Route::get('pemerintahan/kehilangan', 'AdminController@kehilangan')->name('admin.kehilangan');
	Route::get('pemerintahan/edit/{id}', 'AdminController@kehilanganedit')->name('kehilangan.edit');
	Route::post('pemerintahan/update/{id}', 'AdminController@kehilanganupdate')->name('kehilangan.update');
	Route::get('exportKehilangan', 'AdminController@exportKehilangan')->name('exportKehilangan');
	
	Route::get('pemerintahan/kematian', 'AdminController@kematian')->name('admin.kematian');
	Route::get('exportKematian', 'AdminController@exportKematian')->name('exportKematian');
	Route::get('pdfSckc/{id}', 'AdminController@pdfSkck')->name('downloadpdf');
	Route::get('pdfDomisili/{id}', 'AdminController@pdfDomisili')->name('pdfDomisili');
	Route::get('pdfKehilangan/{id}', 'AdminController@pdfKehilangan')->name('pdfKehilangan');
	Route::get('pdfKematian/{id}', 'AdminController@pdfKematian')->name('pdfKematian');

	// Admin Pembangunan
	Route::get('pembangunan/usaha', 'AdminController@usaha')->name('admin.usaha');
	Route::get('pdfUsaha/{id}', 'AdminController@pdfUsaha')->name('pdfUsaha');

	// Admin Sosial
	Route::get('sosial/sktm', 'AdminController@sktm')->name('admin.sktm');
	Route::get('edit/{id}', 'AdminController@edit')->name('admin.edit');
	Route::post('update/{id}', 'AdminController@update')->name('admin.update');
	Route::get('exportSktm', 'AdminController@exportSktm')->name('exportSktm');
	Route::get('pdfSktm/{id}', 'AdminController@pdfSktm')->name('pdfSktm');
	Route::get('pdfSktm2/{id}', 'AdminController@pdfSktm2')->name('pdfSktm2');


	Route::get('getPenduduk', [
		'uses' => 'AdminController@getPenduduk',
		'as' => 'ajax.get.penduduk',
	]);

	Route::get('getSkck', [
		'uses' => 'AdminController@getSkck',
		'as' => 'ajax.get.skck',
	]);
});
