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

Route::redirect('/', 'admin/dashboard');

//Master
//Master Auth
Route::get('/admin/login', function () {
    return view('admin.pages.auth.login');
});

// Control
Route::get('/admin/dashboard', function () {
    return view('admin.pages.dashboard', ['type_menu' => 'dashboard']);
});
