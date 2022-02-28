<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormulirController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/pegawai', function () {
//     return view('welcome-pegawai');
// });

Route::view("/pegawai", "welcome-pegawai");

Route::redirect("/employee", "/pegawai");

Route::middleware('date')->prefix("/pegawai")->group(function () {
    Route::get("/view", function () {
        return "Pegawai Laravel.";
    });
    Route::get("/{id}", function ($id) {
        return "Pegawai dengan id: " . $id . ".";
    })->whereNumber('id');
    Route::get("/name/{name}", function ($name) {
        return "Pegawai dengan name: " . $name . ".";
    })->whereAlpha('name');
});

Route::get("/view", function () {
    return "Warga Laravel.";
})->name("view");

Route::get('/dosen', [DosenController::class, 'index']);

Route::get('/formulir', [GuestController::class, 'input'])->name('input-form-guest');
Route::post('/proses-form/{id}', [GuestController::class, 'proses'])->name('proses-form-guest');

Route::get('/input', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);

Route::get('/basic', function(){
    return 'Hallo ngab, coba basic';
});

Route::get('/header', function(){
    return response('Hallo', 200)->header('Content-Type','text/html');
});

Route::get('/header-cookie', function(){
    return response('Hallo', 200)
    ->header('Content-Type','text/html')
    ->withcookie('name','Fitrah Arie');
});

Route::get('/json', function(){
    return response()->json([
        'Nama1' => 'Fitrah',
        'Nama2' => 'Ryan'
    ]);
});

Route::get('/cookie', function () {
    $content = 'Hello World';
    $type = 'text/plain';
    $minutes = 1;
    return response($content)
                ->header('Content-Type', $type)
                ->cookie('name', 'value', $minutes);
});

Route::get('/dashboard',function(){
    return redirect('/');
});

Route::get('/input-form-di-laravel', [FormulirController::class, 'input']);
Route::post('/proses-form-di-laravel', [FormulirController::class, 'proses']);