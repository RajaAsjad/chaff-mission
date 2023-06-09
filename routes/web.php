<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('admin/login', 'admin\AdminController@login')->name('admin.login');

//Frontend
Route::get('/', [WebController::class, 'paragon'])->name('paragon-logistic');
Route::get('express-shipping', [WebController::class, 'express'])->name('express-shipping');
Route::get('skyway-shipping', [WebController::class, 'skywayShipping'])->name('skyway-shipping');
Route::get('mass-shipping', [WebController::class, 'massShipping'])->name('mass-shipping');
Route::get('six-start-logistic', [WebController::class, 'sixStartLogistic'])->name('six-start-logistic');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('admin/authenticate', 'admin\AdminController@authenticate')->name('admin.authenticate');

Route::group(['middleware' => ['auth']], function() {

    Auth::routes();

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::get('/admin/profile/edit', 'admin\AdminController@editProfile')->name('admin.profile.edit');
    Route::post('/admin/profile/update', 'admin\AdminController@updateProfile')->name('admin.profile.update');
    Route::post('admin/logout', 'admin\AdminController@logOut')->name('admin.logout');


    //Roles
    Route::resource('role', 'admin\RoleController');

    //permissions
    Route::resource('permission', 'admin\PermissionController');

    //Setting
    Route::resource('page', 'admin\SettingController');

    //Paragon Logistic
    Route::resource('paragon', 'admin\ParagonLogisticController');

    //Express Shipping
    Route::resource('express', 'admin\ExpressShippingController');

    //Sky Shipping
    Route::resource('skyway', 'admin\SkywayShippingController');

    //Mass Shipping
    Route::resource('mass', 'admin\MassShippingController');

    //Six Star Logistics
    Route::resource('six_star', 'admin\SixStarLogisticController');

	//pages settings
    Route::resource('page', 'admin\PageController');
    Route::resource('page_setting', 'admin\PageSettingController');
});


