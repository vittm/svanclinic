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

Route::get('/', 'HomeController@index');

Route::get('/category/{menu}','PostController@category');
Route::get('/news/{menu}','PostController@news');
Route::get('/news/lists/{menu}','PostController@listNews');
Route::get('/category/child/{name}', 'PostController@childcategory');
Route::get('/posts/{title}', 'PostController@index');
Route::get('/get-customer-{name}-{title}-{phone}-{utm_source}-{utm_medium}-{utm_campaign}', 'WidgetController@index');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/bang-gia', function () {
    return view('price');
});
Route::get('/gioi-thieu', function () {
    return view('info');
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/edit-status-customers-{value}-{key}', 'WidgetController@getCustomer');
Route::get('/serivces/{title}', 'ServicesController@index');
Route::get('/get-customer-{name}-{email}-{phone}-{utm_source}-{utm_medium}-{utm_campaign}', 'WidgetController@index');
Route::get('/customers/search', 'WidgetController@search');

Route::post('/services/updating', 'ServicesController@update');
Route::post('/services/editing-{id}', 'ServicesController@editing');

