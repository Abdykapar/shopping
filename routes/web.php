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
    return view('blog.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blog_single', 'HomeController@blog_single')->name('blog_single');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/product', 'HomeController@product')->name('product');
Route::get('/regular', 'HomeController@regular')->name('regular');
Route::get('/shop', 'HomeController@shop')->name('shop');

