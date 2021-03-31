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
//frontend routes
Route::get('/','FrontEndController@index')->name('front.main');
Route::get('/contact','FrontEndController@contact')->name('front.contact');
Route::get('/about','FrontEndController@about')->name('front.about');
Route::get('/tutorial/front','FrontEndController@tutorial')->name('front.tutorial');
Route::get('/services/front','FrontEndController@service')->name('front.service');
Route::get('/jobs/front','FrontEndController@jobdetail')->name('front.job');
Route::get('/jobs/specific/{id}','FrontEndController@jobspecific')->name('front.jobspecific');
Route::post('/application/store','FrontEndController@applicationstore')->name('front.applicationstore');

//backend routes
Route::post('/contact','ContactController@store')->name('contact.store');
Route::get('/showcontactmessage','ContactController@showallMessage')->name('contact.showall');
Route::get('/contact/delete/{id}','ContactController@destroy')->name('contact.delete');
Route::get('/tutorial','TutorialController@create')->name('tutorial.create');
Route::post('/tutorial','TutorialController@store')->name('tutorial.store');
Route::get('/tutorial/list','TutorialController@showAll')->name('tutorial.show');
Route::get('/delete/{id}','TutorialController@destroy')->name('tutorial.destroy');
Route::get('/servicecreate','ServiceController@create')->name('service.create');
Route::post('/service/store','ServiceController@store')->name('service.store');
Route::get('/servicelist','ServiceController@list')->name('service.list');
Route::get('/service/delete/{id}','ServiceController@destroy')->name('service.destroy');
Route::get('/service/edit/{id}','ServiceController@edit')->name('service.edit');
Route::post('/service/edit/{id}','ServiceController@update')->name('service.update');
Route::get('/sliderlist','HomeSliderController@index')->name('slider.index');
Route::get('/slider/create','HomeSliderController@create')->name('slider.create');
Route::post('/slider/create','HomeSliderController@store')->name('slider.store');
Route::get('/slider/delete/{id}','HomeSliderController@destroy')->name('slider.delete');
Route::get('/slider/edit/{id}','HomeSliderController@edit')->name('slider.edit');
Route::post('/slider/edit/{id}','HomeSliderController@update')->name('slider.update');
Route::get('/joblist','JobsController@index')->name('jobs.index');
Route::get('/job/create','JobsController@create')->name('jobs.create');
Route::post('/job/create','JobsController@store')->name('jobs.store');
Route::get('/job/delete/{id}','JobsController@destroy')->name('jobs.delete');
Route::get('/job/edit/{id}','JobsController@edit')->name('jobs.edit');
Route::post('/job/edit/{id}','JobsController@update')->name('jobs.update');
Route::get('/applicant/listall','ApplicantController@index')->name('applicant.index');
Route::get('/applicant/delete/{id}','ApplicantController@destroy')->name('applicant.delete');
Route::get('/applicant/cvview/{id}','ApplicantController@cvview')->name('cv.view');
Route::get('/applicant/cvdownload/{file}','ApplicantController@download')->name('cv.download');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
