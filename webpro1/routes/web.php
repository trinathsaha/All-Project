<?php

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

//Route::get('/','AdminController@index');

Route::get('/',[
   'uses' => 'AdminController@index',
    'as'  => '/'
]);

Route::get('/front/login',[
    'uses' => 'LoginController@login',
    'as'  => '/front/login'
]);
Route::get('/front/sign-up',[
    'uses' => 'SignupController@SignUp',
    'as'  => 'sign-up'
]);
Route::post('/user-sign-up',[
    'uses' => 'SignupController@userSignUp',
    'as'  => 'user-sign-up'
]);
Route::post('/congratulation',[
    'uses' => 'SignupController@congratulation',
    'as'  => 'congratulation'
]);

Route::post('/user-login',[
    'uses' => 'LoginController@userlogin',
    'as'  => 'user-login'
]);

Route::post('/user-logout',[
    'uses' => 'SignupController@userlogout',
    'as'  => 'user-logout'
]);

Route::get('/vacation',[
    'uses' => 'VacationController@vacation',
    'as'  => 'vacation'
]);

Route::get('/bandhorban',[
    'uses' => 'BandhorbanController@bandhorban',
    'as'  => 'bandhorban'
]);

Route::get('/email-check/{email}',[
    'uses' => 'SignupController@emailcheck',
    'as'  => 'email-check'
]);

Route::get('/hotel-list',[
    'uses' => 'addhotelcontroller@viewHotel',
    'as'  => 'hotel-list'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin',[
    'uses' => 'adcontroller@admin',
    'as'  => 'admin'
]);
Route::get('/addhotel',[
    'uses' => 'addhotelcontroller@addhotel',
    'as'  => 'addhotel'
]);


Route::post('/new-add-hotel',[
    'uses' => 'addhotelcontroller@newAddHotel',
    'as'  => 'new-add-hotel'
]);

Route::get('/add-package',[
    'uses' => 'AddPackageController@addPackage',
    'as'  => 'add-package'
]);

Route::post('/new-add-package',[
    'uses' => 'AddPackageController@newAddPackage',
    'as'  => 'new-add-package'
]);

Route::get('/view-package',[
    'uses' => 'AddPackageController@viewPackage',
    'as'  => 'view-package'
]);

Route::get('/add-flight',[
    'uses' => 'AddFlightController@AddFlight',
    'as'  => 'add-flight'
]);

Route::get('/view-flight',[
    'uses' => 'AddFlightController@viewFlight',
    'as'  => 'view-flight'
]);

Route::post('/new-add-flight',[
    'uses' => 'AddFlightController@newAddFlight',
    'as'  => 'new-add-flight'
]);

Route::get('/book-now',[
    'uses' => 'AddPackageController@bookNow',
    'as'  => 'book-now'
]);

Route::post('/book-package',[
    'uses' => 'BookPackageController@BookPackage',
    'as'  => 'book-package'
]);

Route::get('/package-confirmation-list',[
    'uses' => 'BookPackageController@PackageConfirmation',
    'as'  => 'package-confirmation-list'
]);


Route::get('/registered-user',[
    'uses' => 'SignupController@viewUser',
    'as'  => 'registered-user'
]);
