<?php

use App\Models\Record;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecordController;

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

// Save password
Route::post('/records', [RecordController::class, 'store']);

// Show password edit form
Route::get('/records/{record}/edit', [RecordController::class, 'edit']);

// Check single password info
Route::get('/records/{record}', [RecordController::class, 'show']);

// Show Register Form
Route::get('/register', [UserController::class, 'register']);

// Show Login Form
Route::get('/login', [UserController::class, 'login']);

// Create New User
Route::post('/user/register', [UserController::class, 'create']);

// User login
Route::post('/user/authenticate', [UserController::class, 'authenticate']);

// User logout
Route::post('/user/logout', [UserController::class, 'logout']);

// Show user dashboard
Route::get('/user/dashboard', [RecordController::class, 'dashboard']);


