<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController as TestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('adminAccess')->group(function () {
    Route::get('userlisting', [UserController::class, 'index'])->name('user.index');
});
Route::get('login', [UserController::class, 'login'])->name('admin.login');

Route::get('role', [
    'middleware' => 'role:editor',
    'uses' => 'TestController@index',
]);

Route::get('terminate', [
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
]);
