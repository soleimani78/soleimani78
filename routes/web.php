<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
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

Route::GET('/', [Controller::class, 'Home'])->name('home');
Route::GET('how-begin', [Controller::class, 'homebegin'])->name('how-begin');
Route::GET('blogs', [Controller::class, 'Blogs'])->name('blogs');
Route::GET('blogs/{post}', [Controller::class, 'Blog'])->name('blog');
Route::GET('continue', [Controller::class, 'Continue'])->name('continue');
Route::GET('more-info', [Controller::class, 'moreInfo'])->name('moreinfo');
Route::GET('story-about-us', [Controller::class, 'storyaboutus'])->name('storyaboutus');
Route::GET('team', [Controller::class, 'team'])->name('team');


Route::POST('register', [AuthController::class, 'register'])->name('register');
Route::POST('login', [AuthController::class, 'login'])->name('login');
Route::GET('logout', [AuthController::class, 'logout'])->name('logout');