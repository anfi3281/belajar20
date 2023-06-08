<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nampilin', 'EloquentController@nampilin');
Route::get('/nampilin/input', 'EloquentController@nampilinInput');
Route::get('/nampilin/edit/{id}', 'EloquentController@nampilinEdit');
Route::get('/nampilin/hapus/{id}', 'EloquentController@nampilinHapus');

Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/input', 'SiswaController@input');
Route::get('/siswa/edit/{id}', 'SiswaController@edit');
Route::get('/siswa/delete/{id}', 'SiswaController@delete');
Route::post('/siswa/inputProcess', 'SiswaController@inputProcess');
Route::post('/siswa/kelola/{id}', 'SiswaController@kelola');
Route::post('/siswa/kelola/', 'SiswaController@kelola');

Route::get('/guru', 'GuruController@index');
Route::get('/guru/hapus/{id}', 'GuruController@hapus');
Route::get('/guru/trash', 'GuruController@trash');
Route::get('/guru/kembalikan/{id}', 'GuruController@kembalikan');
Route::get('/guru/kembalikan_semua', 'GuruController@kembalikanSemua');
Route::get('/guru/hapus_permanen/{id}', 'GuruController@hapusPermanen');
Route::get('/guru/hapus_permanen_semua', 'GuruController@hapusPermanenSemua');

Route::get('/pengguna', 'PenggunaController@index');
Route::get('/article', 'ArticlesController@index');

Route::get('/murid', 'MuridController@index');
Route::get('/murid/input', 'MuridController@tampilanInput');
Route::get('/murid/inputprocess', 'MuridController@inputProcess');
