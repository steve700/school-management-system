<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

route::prefix('users')->group(function () {
    route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    route::get('/add', [UserController::class, 'UserAdd'])->name('user.add');
    route::post('/store', [UserController::class, 'UserStore'])->name('user.store');
    route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('user.edit');
    route::post('/edit/{id}', [UserController::class, 'UserUpdate'])->name('user.update');
    route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('user.delete');
});
route::prefix('profile')->group(function () {
    route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
    route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
    route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
    route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
    route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
});
