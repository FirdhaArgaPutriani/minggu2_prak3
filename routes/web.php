<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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

Route::get('/', [CompanyController::class,'index']);

Route::prefix('prodi')->group(function () { 
    Route::get('/manajemen-informatika',[CompanyController::class,'mi']); 
    Route::get('/teknik-informatika',   [CompanyController::class,'ti']);
});

Route::get('news/{hal}',    [PageController::class,'news']);

Route::prefix('sarana')->group(function () { 
    Route::get('/kantor',   [CompanyController::class,'kantor']); 
    Route::get('/lab',      [CompanyController::class,'lab']);
    Route::get('/kelas',    [CompanyController::class,'kelas']);
    Route::get('/kantin',   [CompanyController::class,'kantin']);
});

Route::get('about',         [CompanyController::class,'about']);

Route::get('comment/{nm}/{psn}',    [CompanyController::class,'comment']);