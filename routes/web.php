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
    return redirect('guests');
});

Route::resource('guests', 'GuestController');

Route::get('news', [
    'uses' => 'GuestController@news',
    'as' => 'guests.news'
]);
Route::get('cart', [
    'uses' => 'GuestController@cart',
    'as' => 'guests.cart'
]);
Route::get('factories', [
    'uses' => 'GuestController@factory',
    'as' => 'guests.factory'
]);
Route::get('detail', [
    'uses' => 'GuestController@product_detail',
    'as' => 'guests.product_detail'
]);
Route::get('search', [
    'uses' => 'GuestController@search',
    'as' => 'guests.search'
]);
Route::get('news_detail', [
    'uses' => 'GuestController@news_detail',
    'as' => 'guests.news_detail'
]);
Route::get('contact', [
    'uses' => 'GuestController@contact',
    'as' => 'guests.contact'
]);
