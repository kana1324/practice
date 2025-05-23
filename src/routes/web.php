<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticeController;

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

Route::get('/register', [PracticeController::class, 'register']);
Route::post('/practice/confirm', [PracticeController::class, 'confirm']);
Route::get('/login', [PracticeController::class, 'login']);
Route::get('/', [PracticeController::class, 'index']);
Route::get('/admin', [PracticeController::class, 'admin']);
Route::get('/thanks', [PracticeController::class, 'thanks']);
Route::post('/', [PracticeController::class, 'index']);
