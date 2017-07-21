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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('user.dashboard');
route::get('/course','CourseRegistrationController@index')->name('course.registration');
route::post('/course/show','CourseRegistrationController@showcourse')->name('course.show');
route::post('/course/register','CourseRegistrationController@courseregister')->name('course.register');


Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@adminlogin')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::resource('/notice', 'NoticeController');
    Route::resource('/users', 'UserController');
    Route::resource('/departments', 'DepartmentController');
    Route::get('/email/{id}','AdminController@email')->name('sendemail');

});


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });



    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
