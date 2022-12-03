<?php

use App\Http\Controllers\RecordController;
use App\Models\Record;
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

// Show password generator
Route::get('/', [RecordController::class, 'create']);

// All password records
Route::get('/records/dashboard', [RecordController::class, 'dashboard']);

// Single password info
Route::get('/records/{record}', [RecordController::class, 'show']);


