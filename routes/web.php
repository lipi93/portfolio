<?php

use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Clients\AboutController;
use App\Http\Controllers\Clients\ContactController;
use App\Http\Controllers\Clients\ResumeController;
use App\Http\Controllers\Clients\ProjectController;
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


Route::get('/',[HomeController::class,"page"]);
Route::get('about',[AboutController::class,"page"]);
Route::get('contact',[ContactController::class,"page"]);
Route::get('resume',[ResumeController::class,"page"]);
Route::get('project',[ProjectController::class,"page"]);
