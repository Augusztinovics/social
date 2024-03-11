<?php

use App\Http\Controllers\User\SettingsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/',[App\Http\Controllers\WelcomeController::class, 'index']);
Route::post('/language-switch', [App\Http\Controllers\WelcomeController::class, 'languageSwitch'])->name('language.switch');
Route::get('/terms-and-conditions',[App\Http\Controllers\WelcomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy',[App\Http\Controllers\WelcomeController::class, 'privacy'])->name('privacy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user-settings', [SettingsController::class, 'index'])->name('settings.index');
Route::post('/user-settings/name', [SettingsController::class, 'changeName'])->name('settings.change_name');
Route::post('/user-settings/email', [SettingsController::class, 'changeEmail'])->name('settings.change_email');
Route::post('/user-settings/password', [SettingsController::class, 'changePassword'])->name('settings.change_password');
