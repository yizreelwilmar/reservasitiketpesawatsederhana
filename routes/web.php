<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();


Route::get('/', function () {
    return view('index2');
});

Route::get('/welcome', function () {
    return view('index3');
});

// Route::get('/', function() {
//     return "Selamat Datang!";
// });

Route::get('/user', function() {
    return "Ini Adalah Route Users";  
});

Route::get('/users/{name}', function($name){
    return "Selamat datang $name";
    });

Route::get('/users/{name}/comments/{idComment}', function($name,$idComment){
    return "Selamat datang $name dan idComment adalah = $idComment";
    });

Route::get('/users/{firstname}/{lastname}/{id}', function($firstname,$lastname,$id){
    return "Selamat datang $firstname $lastname dan id adalah = $id";
    });

Route::get('/barang', function () {
    return view('barang');
    });

Route::get('/barang1', function () {
    return view('barang1');
    });

   

Route::get('mahasiswa', 'MahasiswaController@index');

Route::get('dosen', 'DosenController@index');

Route::get('xiaomi', 'XiaomiController@index');

Route::get('pengguna', 'PenggunaController@index');

Route::get('/berita', 'BeritaController@index');

Route::get('/berita/olahraga', 'BeritaController@olahraga');

Route::get('/berita/politik', 'BeritaController@politik');

Route::resource('/news', 'NewsController');

Route::resource('/news', 'NewsController')->middleware('auth');

Route::resource('/flight', 'FlightController')->middleware('auth');

Route::resource('/booking', 'BookingController')->middleware('auth');

    


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/boarding', function () {
    return view('boardingpass');
    });

    Route::get('/countrycrud', function () {
        return view('countrycrud');
        });

        Route::get('/flightcrud', function () {
            return view('flightcrud');
           });
    