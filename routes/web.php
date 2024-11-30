<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;

use App\Livewire\PlusButton;

use Illuminate\Support\Facades\Route;

Route::get('/live', \App\Livewire\Todos::class)->name('Live');
Route::get('/plus-button', \App\Livewire\PlusButton::class)->name('plus-button');
Route::get('/time', \App\Livewire\CurrentTime::class)->name('time');

Route::get('/show-table', \App\Livewire\ShowPost::class)->name('show-table');
Route::get('/create-table', \App\Livewire\PostCreate::class)->name('create-table');

Route::get('/card-1', [CardController::class, 'card_1'])->name('card_1');
Route::get('/card-2', [CardController::class, 'card_2'])->name('card_2');

Route::middleware(['check'])->group(function () {

    Route::get('/routes', function () {
        $routes = Route::getRoutes();
        dd($routes);
    });

    Route::get('/', [IndexController::class, 'index'])->name('index')->middleware('check');

    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::put('/users/add-role/{user}', [UserController::class, 'addRole'])->name('users.add-role');

    Route::resource('roles', \App\Http\Controllers\RoleController::class);

});

#---------------------------------------Авторизация-----------------------------------------
Route::get('/login', [AuthController::class, 'loginPage'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'registerPage'])->name('register.page');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




