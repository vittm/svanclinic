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
Route::group(['middleware' => ['web']], function () {
 Route::get('/', 'HomeController@index');
});


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

Route::get('/count-{id}/{name_btn}', 'WidgetController@count');

//admin
Route::get('/edit-status-customers-{value}-{key}', 'WidgetController@getCustomer');
Route::get('/get-customer-{name}-{title}-{typepost}-{phone}-{utm_source}-{utm_medium}-{utm_campaign}', 'WidgetController@index');
Route::get('/customers/search', 'WidgetController@search');
Route::get('/posts/search', 'PostController@search');
Route::get('downloadExcel/{type}', 'WidgetController@downloadExcel');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\UploadController@upload');
    // list all lfm routes here...
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return "clear done";
});


Route::group(['prefix' => 'en','middleware' => 'locale:en'], function() {
    Route::get('/', 'HomeController@index');
    
    //Dịch Vụ
    Route::get('/services','PostController@category');
    Route::get('/services/{title}', 'ServicesController@childcategory');
    
    Route::post('/services/updating', 'ServicesController@update');
    Route::post('/services/editing-{id}', 'ServicesController@editing');
    Route::get('/services/{child}/{title}', 'ServicesController@detail');
    
    //Tin Tức
    Route::group([
        'as'     => 'news.',
        'prefix' => 'news',
    ], function () {
        Route::get('/', ['uses' => 'PostController@news',        'as' => 'index']);
        Route::get('{menu}', ['uses' => 'PostController@listNews',        'as' => 'listing']);
        Route::get("{child}/{title}", ["uses" => "PostController@index", "as" => "detailNew"]);
    });
    Route::group([
        'as'     => 'secret.',
        'prefix' => 'secret',
    ], function (){
        Route::get('/', ['uses' => 'PostController@know',        'as' => 'index']);
        Route::get('{menu}', ['uses' => 'PostController@listingknow',        'as' => 'listing']);
        Route::get("{child}/{title}", ["uses" => "PostController@indexknow", "as" => "detailNew"]);
    });
    Route::get('/price', function () {
        return view('price_en');
    });
    Route::get('/about-us', function () {
        return view('info');
    });
    Route::get('/contact', 'HomeController@info');
});









