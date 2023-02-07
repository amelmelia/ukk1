<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Dashboard;


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

 Route::get('login',[LoginController::class,'view'])->name('login')->middleware('guest');
 Route::post('login',[LoginController::class,'proses'])->name('login.proses')->middleware('guest');

Route::get('/dashboard/admin',[Dasboard::class,'admin'])->name('dasboard.admin')->middleware(['auth', 'level:admin,petugas']);
Route::get('/dashboard/petugas',[Dashboard::class,'petugas'])->name('dasboard.petugas')->middleware('auth');

Route::view('error/403', 'eror.403')->name('eror.403');