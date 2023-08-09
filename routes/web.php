<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;
use App\Http\Controllers\PesertaC;
use App\Http\Controllers\DashboardC;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeC::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/guru', function () {
    return view('guru');
});

Route::get('/siswa', function () {
    return view('siswa');
});

Route::get('/kelas', function () {
    return view('kelas');
});

Route::get('/Menu', function () {
    return view('menu');
});

Route::get('/admin2', function () {
    return view('layout.content');
});

Route::get('/dashboard', [DashboardC::class, 'index']);
Route::get('/peserta', [PesertaC::class, 'index']);