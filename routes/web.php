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
Route::get('/ourteam/front/list','FrontEndController@ourteamlist')->name('front.ourteamlist');
Route::get('/product/front/list','FrontEndController@productlist')->name('front.productlist');
Route::get('/productdetails/front/list/{id}','FrontEndController@productDetails')->name('front.productDetails');

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
Route::get('/ourteam/list','OurTeamController@index')->name('team.index');
Route::get('/ourteam/create','OurTeamController@create')->name('team.create');
Route::post('/ourteam/create','OurTeamController@store')->name('team.store');
Route::get('/ourteam/delete/{id}','OurTeamController@destroy')->name('team.delete');
Route::get('/ourteam/edit/{id}','OurTeamController@edit')->name('team.edit');
Route::post('/ourteam/edit/{id}','OurTeamController@update')->name('team.update');
Route::get('/productname/list','ProductController@index')->name('product.index');
Route::get('/product/create','ProductController@create')->name('product.create');
Route::post('/product/create','ProductController@store')->name('product.store');
Route::get('/product/delete/{id}','ProductController@destroy')->name('product.delete');
Route::get('/product/edit/{id}','ProductController@edit')->name('product.edit');
Route::post('/product/edit/{id}','ProductController@update')->name('product.update');
Route::get('/productslider/list','ProductSliderController@index')->name('productslider.index');
Route::get('/productslider/create','ProductSliderController@create')->name('productslider.create');
Route::post('/productslider/create','ProductSliderController@store')->name('productslider.store');
Route::get('/productslider/destroy/{id}','ProductSliderController@destroy')->name('productslider.delete');
Route::get('/productslider/edit/{id}','ProductSliderController@edit')->name('productslider.edit');
Route::post('/productslider/edit/{id}','ProductSliderController@update')->name('productslider.update');
Route::get('/productdetail/list','ProductDetailController@index')->name('productdetail.index');
Route::get('/productdetail/create','ProductDetailController@create')->name('productdetail.create');
Route::post('/productdetail/create','ProductDetailController@store')->name('productdetail.store');
Route::get('/productdetail/delete/{id}','ProductDetailController@destroy')->name('productdetail.delete');
Route::get('/productdetail/edit/{id}','ProductDetailController@edit')->name('productdetail.edit');
Route::post('/productdetail/edit/{id}','ProductDetailController@update')->name('productdetail.update');
Route::get('/users/all','ProductDetailController@alluser')->name('all.users');
Route::get('/users/delete/{id}','ProductDetailController@deleteuser')->name('delete.user');
//Route::get('/mail/configuration','MailConfigurationController@index')->name('mailconfig.index');
//Route::get('/mail/configuration/create','MailConfigurationController@create')->name('mailconfig.create');
//Route::post('/mail/configuration/create','MailConfigurationController@store')->name('mailconfig.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
