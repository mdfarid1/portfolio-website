<?php

use App\Http\Controllers\MasterController;
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

Route::get("/",[MasterController::class,"home"])->name("home");
Route::get("/about_me",[MasterController::class,"about_me"])->name("about_me");

Route::get("/project",[MasterController::class,"project"])->name("project");

Route::get("/contact",[MasterController::class,"contact"])->name("contact");


