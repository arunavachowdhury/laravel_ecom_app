<?php


/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::match(['get', 'post'], '/login', 'LoginController@login')->name('auth.backend-login');

Route::group(['middleware'=> ['admins'] ], function(){
	Route::post('logout', 'LoginController@logout')->name('auth.backend-logout');
	Route::get('/dashboard', function () {
	    return view('back.dashboard.landing');
	})->name('dashboard.main');

	Route::resource('roles', RoleController::class);
	// Route::resource('users', UserController::class);
	Route::any('users/create', 'UserController@create')->name('users.create');
	Route::resource('products', ProductController::class);
});
