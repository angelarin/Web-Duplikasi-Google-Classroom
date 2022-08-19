<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
use App\Http\Controllers\IndexController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homeindex');

Route::group(['middleware' => 'auth'], function(){
///tampilan
Route::get('/', [IndexController::class, 'tampil'])-> name('blogtampil');
Route::get('/buatkelas', [IndexController::class, 'create'])-> name('blogcreate');
Route::post('/buatgstore', [IndexController::class, 'store','before' => 'csrf'])-> name('blogcreatekelas');
Route::get('/gabungkelas', [IndexController::class, 'gabungkelas'])-> name('bloggabungkelas');
Route::post('/gabungstore', [IndexController::class, 'kelasmasuk','before' => 'csrf'])-> name('blogmasukkelas');

///Guru
Route::get('depanguru/{enrollments}', [GuruController::class, 'index'])-> name('guruindex');
Route::get('depanguru/{enrollments}', 'App\Http\Controllers\GuruController@index');
Route::get('depanguru/{enrollments}/anggota', 'App\Http\Controllers\GuruController@tampilanggota');
Route::get('depanguru/{enrollments}/haltugas', 'App\Http\Controllers\GuruController@tampilantugas');
Route::get('depanguru/{enrollments}/resetkode', 'App\Http\Controllers\GuruController@resetkode')-> name('gurukodereset');
Route::put('resetkode', 'App\Http\Controllers\GuruController@kodereset')-> name('gururesetkode');
Route::get('depanguru/kumpul/{isiposts}', 'App\Http\Controllers\KumpulController@index2');
Route::post('depanguru/buatberita', 'App\Http\Controllers\GuruController@store');
Route::get('depanguru/{enrollments}/buattugas', 'App\Http\Controllers\GuruController@buattugas');
Route::post('depanguru/kumpulbuat', 'App\Http\Controllers\GuruController@store1');
Route::post('depanguru/kumpul/buatkomen', 'App\Http\Controllers\KumpulController@storekomen');




///Murid
Route::get('depansiswa/{enrollments}', 'App\Http\Controllers\SiswaController@index');
Route::get('depansiswa/{enrollments}/anggota', 'App\Http\Controllers\SiswaController@tampilanggota');
Route::get('depansiswa/{enrollments}/haltugas', 'App\Http\Controllers\SiswaController@tampilantugas');
Route::get('depansiswa/kumpul/{isiposts}', 'App\Http\Controllers\KumpulController@index');
Route::post('depansiswa/buatberita', 'App\Http\Controllers\SiswaController@store');
Route::post('depansiswa/kumpul/buatkomen', 'App\Http\Controllers\KumpulController@storekomen');
Route::post('depansiswa/kumpul/buatisian', 'App\Http\Controllers\KumpulController@storeisian');

// Route::get('/depansiswa', function () {
//     return view('siswa.depan_siswa');
// });

Route::get('/buattugas', function () {
    return view('guru.buat_tugas');
});

Route::get('/anggotaguru', function () {
    return view('guru.anggota_guru');
});



Route::get('/anggotasiswa', function () {
    return view('siswa.anggota_siswa');
});

// Route::get('/', function () {
//     return view('website.index');
// });

Route::get('/materi', function () {
    return view('website.materi');
});

Route::get('/tanya', function () {
    return view('website.pertanyaan');
});

Route::get('/kumpul', function () {
    return view('website.kumpultugas');
});

Route::get('/stream', function () {
    return view('website.stream');
});

Route::get('/tugaskelas', function () {
    return view('website.classwork');
});

Route::get('/join', function () {
    return view('website.join');
});


Route::get('/studentprofile', function () {
    return view('website.studentprofile');
});

});