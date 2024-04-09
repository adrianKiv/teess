<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\beliControllers;
use App\http\controllers\adminControllers;
use App\Http\Controllers\gameControllers;
use App\Http\Controllers\paketControllers;
use App\Http\Controllers\bayarControllers;
use App\Http\Controllers\loginControllers;
use App\Http\Controllers\pesananControllers;
use App\Http\Controllers\MLControllers;
use App\Http\Controllers\PUBGControllers;
use App\Http\Controllers\DOTA2Controllers;
use App\Http\Controllers\LOLControllers;
use App\Http\Controllers\ApexControllers;
use App\Http\Controllers\StarRailControllers;
use App\Http\Controllers\GenshinControllers;
use App\Http\Controllers\ValoControllers;
use App\Http\Controllers\pesanControllers;
use App\Http\Controllers\lihat_pesanControllers;

//
Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/adminarea', function () {
    return view('indexadmin');
});

// ADMIN CONTROLLERS ROUTES //
// Route::resource('admin', adminControllers::class);
Route::resource('lihat_pesan', lihat_pesanControllers::class);
Route::resource('pesan', pesanControllers::class);
Route::resource('game', gameControllers::class);
Route::resource('paket', paketControllers::class);
Route::resource('bayar', bayarControllers::class);
Route::resource('pesanan', pesananControllers::class);
// Route::delete('/admin/delete/{id}', [AdminControllers::class, 'destroy']);
Route::delete('/game/delete/{id}', [gameControllers::class, 'destroy']);
Route::delete('/paket/delete/{id}', [paketControllers::class, 'destroy']);
Route::delete('/bayar/delete/{id}', [bayarControllers::class, 'destroy']);
Route::delete('/pesanan/delete/{id}', [pesananControllers::class, 'destroy']);
Route::delete('/pesan/delete/{id}', [lihat_pesanControllers::class, 'destroy']);

// BUYER CONTROLLERS ROUTES //
Route::resource('/MLbeli', MLControllers::class);
Route::resource('/PUBGMbeli', PUBGControllers::class);
Route::resource('/DOTA2beli', DOTA2Controllers::class);
Route::resource('/LOLbeli', LOLControllers::class);
Route::resource('/Apexbeli', ApexControllers::class);
Route::resource('/StarRailbeli', StarRailControllers::class);
Route::resource('/Genshinbeli', GenshinControllers::class);
Route::resource('/Valobeli', ValoControllers::class);

Route::group([
    'prefix'=>config('admin.prefix'),
    'namespace'=>'App\\Http\\Controllers',
],function () {

    Route::get('login', [loginControllers::class, 'formLogin'])->name('admin.login');
    Route::post('proseslogin',[loginControllers:: class, 'proseslogin']);

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout', [loginControllers::class, 'logout'])->name('admin.logout');
        Route::resource('/admin', 'adminControllers');
        // Route::view('/post','data-post')->name('post')->middleware('can:role,"admin","editor"');
        // Route::view('/admin','data-admin')->name('admin')->middleware('can:role,"admin"');
    });
});

