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

// Route::get('/', function () {
//     return view('frontend.frontend');
// });
Route::get('/','Frontend\\PageController@index');

// About
Route::get('/ve-chung-toi','Frontend\\PageController@About')->name('about');

// Products ProductController
Route::get('/san-pham','Frontend\\ProductController@ShowProducts')->name('product');
Route::get('/chi-tiet-san-pham','Frontend\\ProductController@ShowProductsDetail')->name('product_detail');

// News
Route::get('/tin-tuc','Frontend\\PageController@ShowNews')->name('news');
Route::get('/chi-tiet-tin-tuc','Frontend\\PageController@ShowNewsDetail')->name('news_detail');

// Activity of the company
Route::get('/hoat-dong-cong-ty','Frontend\\PageController@ShowCompanyActivity')->name('company_activity');

// Price List
Route::get('/bang-gia','Frontend\\PageController@ShowTablePrice')->name('table_price');

// Contact
Route::get('/lien-he','Frontend\\PageController@ShowContact')->name('contact');




