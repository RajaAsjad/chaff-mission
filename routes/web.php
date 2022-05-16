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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('admin/login', 'admin\AdminController@login')->name('admin.login');
Route::post('admin/authenticate', 'admin\AdminController@authenticate')->name('admin.authenticate');
Route::get('signup', 'WebController@signUp')->name('signup');
Route::post('register/store', 'WebController@store')->name('register.store');
Route::get('email-verification/{token}', 'WebController@verifyEmail')->name('email-verification');

//admin reset password
Route::get('admin/forgot_password', 'admin\AdminController@forgotPassword')->name('admin.forgot_password');
Route::get('admin/send-password-reset-link', 'admin\AdminController@passwordResetLink')->name('admin.send-password-reset-link');
Route::get('admin/reset-password/{token}', 'admin\AdminController@resetPassword')->name('admin.reset-password');
Route::post('admin/change_password', 'admin\AdminController@changePassword')->name('admin.change_password');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/admin/profile/edit', 'admin\AdminController@editProfile')->name('admin.profile.edit');
Route::post('/admin/profile/update', 'admin\AdminController@updateProfile')->name('admin.profile.update');
Route::post('admin/logout', 'admin\AdminController@logOut')->name('admin.logout');

//Frontend
Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('gallery', [WebController::class, 'gallery'])->name('gallery');
Route::get('rental', [WebController::class, 'rental'])->name('rental');
Route::get('tour', [WebController::class, 'tour'])->name('tour');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    //Roles
    Route::resource('role', 'admin\RoleController');

    //users
    Route::resource('user', 'admin\UserController');

    //permissions
    Route::resource('permission', 'admin\PermissionController');

    //Products
    Route::resource('product', 'admin\ProductController');
    
    //Vehicle
    Route::resource('vehicle', 'admin\VehicleController');

    //Property
    Route::resource('property', 'admin\PropertyController');

    //blog
    Route::resource('blog', 'admin\BlogController');

    //category
    Route::resource('category', 'admin\CategoryController');



});
