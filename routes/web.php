<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\FotografiaController;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\TarjetaController;
use App\Http\Controllers\UserEventoController;
use Illuminate\Support\Facades\Http;

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
    return redirect('/dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/tables', function () {
    return view('tables');
})->name('tables')->middleware('auth');

Route::get('/wallet', function () {
    return view('wallet');
})->name('wallet')->middleware('auth');

Route::get('/RTL', function () {
    return view('RTL');
})->name('RTL')->middleware('auth');

Route::get('/profile', function () {
    return view('account-pages.profile');
})->name('profile')->middleware('auth');

Route::get('/signin', function () {
    return view('account-pages.signin');
})->name('signin');

Route::get('/signup', function () {
    return view('account-pages.signup');
})->name('signup')->middleware('guest');

Route::get('/sign-up', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('sign-up');

Route::post('/sign-up', [RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/sign-in', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('sign-in');

Route::post('/sign-in', [LoginController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'store'])
    ->middleware('guest');

Route::get('/laravel-examples/user-profile', [ProfileController::class, 'index'])->name('users.profile')->middleware('auth');
/* Route::put('/laravel-examples/user-profile/update', [ProfileController::class, 'update'])->name('users.update')->middleware('auth'); */
Route::get('/laravel-examples/users-management', [UserController::class, 'index'])->name('users-management')->middleware('auth');

// USUARIOS
Route::get('/users/editMyProfile', [UserController::class, 'editMyProfile'])->name('users.editMyProfile');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

// EVENTO
Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');
Route::get('/eventos/{id}/edit', [EventoController::class, 'edit'])->name('eventos.edit');
Route::put('/eventos/{id}', [EventoController::class, 'update'])->name('eventos.update');
Route::delete('/eventos/{id}', [EventoController::class, 'destroy'])->name('eventos.destroy');

// TARJETAS
Route::get('/tarjetas', [TarjetaController::class, 'index'])->name('tarjetas.index');
Route::get('/tarjetas/recibo', [TarjetaController::class, 'recibo'])->name('tarjetas.recibo');
Route::get('/tarjetas/create', [TarjetaController::class, 'create'])->name('tarjetas.create');
Route::post('/tarjetas', [TarjetaController::class, 'store'])->name('tarjetas.store');
Route::get('/tarjetas/{id}', [TarjetaController::class, 'show'])->name('tarjetas.show');
Route::get('/tarjetas/{id}/edit', [TarjetaController::class, 'edit'])->name('tarjetas.edit');
Route::put('/tarjetas/{id}', [TarjetaController::class, 'update'])->name('tarjetas.update');
Route::delete('/tarjetas/{id}', [TarjetaController::class, 'destroy'])->name('tarjetas.destroy');

// PORTAFOLIOS
Route::post('/portafolios', [PortafolioController::class, 'store'])->name('portafolios.store');

// USER_EVENTO
Route::get('/user_evento', [UserEventoController::class, 'index'])->name('user_evento.index');
Route::get('/user_evento/{evento_id}/create/', [UserEventoController::class, 'create'])->name('user_evento.create');
Route::post('/user_evento', [UserEventoController::class, 'store'])->name('user_evento.store');
Route::post('/user_evento/estado', [UserEventoController::class, 'estado'])->name('user_evento.estado');
Route::get('/user_evento/ver', [UserEventoController::class, 'show_user'])->name('user_evento.show_user');

// FOTOGRAFIAS
Route::get('/fotografias/{evento_id}/create/', [FotografiaController::class, 'create'])->name('fotografias.create');
Route::get('/fotografias/{foto_id}/buy/', [FotografiaController::class, 'buy'])->name('fotografias.buy');
Route::post('/fotografias/{evento_id}', [FotografiaController::class, 'store'])->name('fotografias.store');
Route::post('/fotografias/{id}/buyed', [FotografiaController::class, 'buyed'])->name('fotografias.buyed');

//DESCARGA
Route::get('/download', function () {
    $url = request('url');

    // Realiza la descarga de la imagen desde Amazon S3
    $response = Http::get($url);

    // Asegúrate de establecer correctamente las cabeceras para forzar la descarga como un archivo
    return response($response)->header('Content-Disposition', 'attachment; filename=imagen.jpg');
})->name('download');
