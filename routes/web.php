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

// Show Product
Route::get('/san-pham/{slug?}','Frontend\\ProductController@ShowProduct')->name('show_product');
Route::get('/chi-tiet-san-pham/{slug_parent?}/{slug?}','Frontend\\ProductController@ShowProductDetail')->name('show_product_detail');
Route::post('/san-pham','Frontend\\ProductController@postDetailProduct')->name('add_product_cart');
// Show Cart
Route::get('/gio-hang','Frontend\\ProductController@ShowCart')->name('show_cart');
Route::get('/gio-hang/xoa/{id}','Frontend\\ProductController@deleteCart')->name('delete_cart');
Route::post('/cap-nhat-gio-hang','Frontend\\ProductController@updateCart')->name('update_cart');
Route::get('/gio-hang/{id?}','Frontend\\ProductController@addCart')->name('add_cart');

// Show info client 
Route::get('/thong-tin-khach-hang','Frontend\\ProductController@showInfoClient')->name('show_info_client');
Route::post('/thong-tin-khach-hang','Frontend\\ProductController@postInfoClient')->name('add_info_client');
Route::get('/thanh-toan-thanh-cong','Frontend\\ProductController@Success')->name('success');

// News
Route::get('/tin-tuc','Frontend\\PageController@ShowNews')->name('news');
Route::get('/chi-tiet-tin-tuc/{slug?}','Frontend\\PageController@ShowNewsDetail')->name('news_detail');
Route::get('/getAjaxCategoryNews/{show_category_news}','Frontend\\PageController@getAjaxCategoryNews');

// Activity of the company
Route::get('/hoat-dong-cong-ty','Frontend\\PageController@ShowCompanyActivity')->name('company_activity');
Route::get('/chi-thiet-hoat-dong-cong-ty/{slug?}','Frontend\\PageController@ShowCompanyActivityDetail')->name('company_activity_detail');

// Price List
Route::get('/bang-gia','Frontend\\PageController@ShowTablePrice')->name('table_price');

// Contact
Route::get('/lien-he','Frontend\\PageController@ShowContact')->name('contact');

Route::prefix('/cart')->group( function () {
    Route::get('/{act}/{idsp}/{qty?}','Frontend\\ProductController@handleCart')->name('cart');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
