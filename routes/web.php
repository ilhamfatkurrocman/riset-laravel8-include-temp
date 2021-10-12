<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Auth;
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

// // http://127.0.0.1:8000/user
// Route::get('/user/{id?}/{akti?}', function ($id = 1, $aktif = "YA") {
//     // return view('welcome');
//     return "<h1>Tests Route $id $aktif</h1>";
// })->where('id','[a-z]*');

// // http://127.0.0.1:8000
// Route::view('/', 'welcome');

// Route::put('simpan', function () {
//     return "Data berhasil disimpan";
// });

// // http://127.0.0.1:8000/crud
// Route::get('crud', function () {
//     //database
//     return view('crud', ['nama' => 'ilham']);
// });

// // Route::prefix('master-data')->group(function() {
// //     Route::get('/data-karyawan', [CrudController::class, 'index'])->name('dashboard');
// //     Route::get('/data-kerja', [CrudController::class, 'edit'])->name('dashboard');
// // });

// Route::name('master-data.')->prefix('master-data')->group(function () {
//     Route::get('/data-karyawan', [CrudController::class, 'index'])->name('data-karyawan');
//     Route::get('/data-kerja', [CrudController::class, 'edit'])->name('data-kerja');
// });

// Route::view('/dashboard', 'dashboard');
// Route::view('/', 'pages.auth.login');


Auth::routes();

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);

Route::post('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/member', [App\Http\Controllers\MemberController::class, 'index']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
