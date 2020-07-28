<?php

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

// Route::get('/', function () {
//     return view('dashboard');
// });

// Auth::routes();

/* ROUTES AUTH PERSONALIZED */

    Route::get('entrar', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('entrar', 'Auth\LoginController@login');
    Route::post('sair', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('cadastro', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('cadastro', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('senha/redefinir', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('senha/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('senha/redefinir/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('senha/redefinir', 'Auth\ResetPasswordController@reset');

/* END ROUTES AUTH PERSONALIZED */

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::get('/home', function(){
    return redirect()->route('dashboard');
});

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function(){
    Route::resource('perfil', 'UsersController',  [
        'names' => [
            'index' => 'users.index',
            'create' => 'users.create',
            'store' => 'users.store',
            'show' => 'users.show',
            'edit' => 'users.edit',
            'update' => 'users.update',
            'destroy' => 'users.destoy'
        ]
    ]);    
});