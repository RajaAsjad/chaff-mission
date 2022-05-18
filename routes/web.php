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
Route::get('getproducts', 'admin\DealsController@getproducts')->name('getproducts');

//Frontend
Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('gallerys', [WebController::class, 'gallery'])->name('gallerys');
Route::get('rentals', [WebController::class, 'rental'])->name('rentals');
Route::get('rentals/single/{slug}', [WebController::class, 'single'])->name('rentals.single');
Route::get('virtualtour', [WebController::class, 'tour'])->name('virtualtour');
Route::get('about_us', [WebController::class, 'about'])->name('about_us');
Route::get('deal', [WebController::class, 'deal'])->name('deal');
Route::get('careers', [WebController::class, 'career'])->name('careers');
Route::get('city', [WebController::class, 'city']);

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
    Route::resource('rental', 'admin\RentalController');

    //Property
    Route::resource('property', 'admin\PropertyController');

    //blog
    Route::resource('blog', 'admin\BlogController');

    //blog
    Route::resource('testimonial', 'admin\TestimonialController');

    //R.V
    Route::resource('rv', 'admin\RVController');

    //Virtual Tour
    Route::resource('tour', 'admin\VirtualTourController');
   
    //Gallery
    Route::resource('gallery', 'admin\GalleryController');

    //About
    Route::resource('about', 'admin\AboutUsController');

    //Step Of Car Rent
    Route::resource('how_to_rent', 'admin\HowToRentController');

    //Setting
    Route::resource('page', 'admin\SettingController');

    //NewsLetter
    Route::resource('newsletter', 'admin\NewsLetterController');

    //Categories
    Route::resource('category', 'admin\CategoryController');

    //Deals
    Route::resource('deals', 'admin\DealController');

    //products
    Route::resource('product', 'admin\ProductController');

    //Car_Type
    Route::resource('car_type', 'admin\CarTypeController');

    //Booking
    Route::resource('booking', 'BookingController');

    Route::resource('payment', 'PaymentController');
});