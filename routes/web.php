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
    return view('welcome')->withDepartments($departments=App\Department::all());
})->name('welcome');
Route::post('/request','WelcomeController@store')->name('request');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('user.dashboard');
Route::get('/course','CourseRegistrationController@index')->name('course.registration');
Route::post('/course/show','CourseRegistrationController@showcourse')->name('course.show');
Route::post('/course/register','CourseRegistrationController@courseregister')->name('course.register');
Route::get('/course/register/pdf','PDFController@courseform')->name('course.formdownload');
Route::get('/course/register/pdf/bform','PDFController@bankform')->name('course.bformdownload');
Route::get('/course/register/pdf/backlogbform','PDFController@backlogbankform')->name('course.backbformdownload');
Route::get('/course/register/pdf/entryform','PDFController@courseentryform')->name('course.courseentrydownload');
Route::get('/course/register/pdf/backlogentryform','PDFController@backlogcourseform')->name('course.backlogcourseentrydownload');
Route::get('/backlog','BacklogRegistrationController@index')->name('backlog.registration');
Route::post('/backlog/register','BacklogRegistrationController@add')->name('backlog.add');

//certifate
Route::get('/certificate','CertificateController@index')->name('certificate.home');
Route::get('/certificate/mainform/download','PDFController@maincertificateform')->name('certificate.maindownload');
Route::get('/certificate/provisionalform/download','PDFController@provisionalcertificateform')->name('certificate.provisionaldownload');
Route::get('/certificate/transcriptform/download','PDFController@academictranscriptform')->name('certificate.transcriptdownload');
Route::get('/certificate/markconversionform/download','PDFController@markconversionform')->name('certificate.markconversiondownload');
Route::get('/certificate/resultdateform/download','PDFController@resultdateform')->name('certificate.resultdatedownload');
Route::get('/certificate/certificatebankform/download','PDFController@certificatebankform')->name('certificate.bankformdownload');
Route::post('/certificate/maincertificate','CertificateController@store')->name('certificate.store');


//admin
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@adminlogin')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::resource('/notice', 'NoticeController');
    Route::resource('/users', 'UserController');
    Route::get('/registration/request/{id}', 'UserController@update')->name('users.update');
    Route::resource('/departments', 'DepartmentController');
    Route::resource('/courses', 'CourseController');
    Route::get('/email/{id}','AdminController@email')->name('sendemail');
    Route::get('/registered','RegisteredUserController@index')->name('registered.student');
    Route::get('/registration/request', 'RegisteredUserController@newstudentrequest')->name('users.request');
    Route::post('/registered/show','RegisteredUserController@show')->name('registered.show');
    Route::get('/registered/backlog','RegisteredbacklogUserController@index')->name('registered.studentbacklog');
    Route::post('/registered/backlog/show','RegisteredbacklogUserController@showlist')->name('backlog.show');
    Route::get('/certificateapp/show','AdminCertificateController@index')->name('certificateapp.show');
    Route::get('/certificateapp/{id}', 'AdminCertificateController@update')->name('application.update');
    Route::get('/certificateapp/verify/{id}', 'AdminCertificateController@verify')->name('application.verify');
    Route::get('/registered/{id}','RegisteredUserController@update')->name('registered.update');



});


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });



    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
