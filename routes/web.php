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

//Dịch Vụ
Route::get('dich-vu','PostController@category');
Route::get('/dich-vu/{title}', 'ServicesController@childcategory');

Route::post('/services/updating', 'ServicesController@update');
Route::post('/services/editing-{id}', 'ServicesController@editing');
Route::get('/dich-vu/{child}/{title}', 'ServicesController@detail');

//Tin Tức
Route::group([
    'as'     => 'tin-tuc.',
    'prefix' => 'tin-tuc',
], function () {
    Route::get('/', ['uses' => 'PostController@news',        'as' => 'index']);
    Route::get('{menu}', ['uses' => 'PostController@listNews',        'as' => 'listing']);
    Route::get("{child}/{title}", ["uses" => "PostController@index", "as" => "detailNew"]);
});
Route::group([
    'as'     => 'bi-quyet.',
    'prefix' => 'bi-quyet',
], function (){
    Route::get('/', ['uses' => 'PostController@know',        'as' => 'index']);
    Route::get('{menu}', ['uses' => 'PostController@listingknow',        'as' => 'listing']);
    Route::get("{child}/{title}", ["uses" => "PostController@indexknow", "as" => "detailNew"]);
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
Route::get('/lien-he', 'HomeController@info');

//admin
Route::get('/edit-status-customers-{value}-{key}', 'WidgetController@getCustomer');
Route::get('/get-customer-{name}-{title}-{typepost}-{phone}-{utm_source}-{utm_medium}-{utm_campaign}', 'WidgetController@index');
Route::get('/customers/search', 'WidgetController@search');
Route::get('/posts/search', 'PostController@search');
Route::get('downloadExcel/{type}', 'WidgetController@downloadExcel');