<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', 'PagesController@index')->name('home');
Route::prefix('admin')->group(function(){
Route::get('/dashboard', 'PagesController@dashboard')->name('admin.dashboard');
Route::get('/main', 'MainPagesController@index')->name('admin.main');
Route::put('/main', 'MainPagesController@update')->name('admin.main.update');
Route::get('/admin/services/create', 'ServicePagesController@create')->name('admin.services.create');
Route::post('/admin/services/create', 'ServicePagesController@store')->name('admin.services.store');
Route::get('/admin/services/list', 'ServicePagesController@list')->name('admin.services.list');
//Route::get('/admin/services/edit/{id}', 'ServicePagesController@list')->name('admin.services.list');
Route::get('/portfolios/create', 'PortfolioPagesController@create')->name('admin.portfolio.create');
Route::put('/portfolios/create', 'PortfolioPagesController@store')->name('admin.portfolio.store');
Route::get('/portfolios/list', 'PortfolioPagesController@list')->name('admin.portfolios.list');
Route::get('/portfolios/edit/{id}', 'PortfolioPagesController@edit')->name('admin.portfolios.edit');
Route::post('/portfolios/update/{id}', 'PortfolioPagesController@update')->name('admin.portfolios.update');
Route::get('/abouts/create', 'AboutPagesController@create')->name('admin.about.create');
Route::put('/abouts/create', 'AboutPagesController@store')->name('admin.abouts.store');
Route::get('/abouts/list', 'AboutPagesController@list')->name('admin.about.list');
Route::get('/abouts/edit/{id}', 'AboutPagesController@edit')->name('admin.abouts.edit');
Route::post('/abouts/update/{id}', 'AboutPagesController@update')->name('admin.abouts.update');
Route::delete('/abouts/destroy/{id}', 'AboutPagesController@destroy')->name('admin.abouts.destroy');
});
Route::post('/contact','ContactFormController@store')->name('contact.store');