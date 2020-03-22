<?php

use Illuminate\Support\Facades\Route;
use App\Slide;
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
    return view('welcome');
});

Route::get('index',[
    'as'=>'Trang-Chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('chi-tiet-sp/{id}',[
    'as' => 'chitietsp',
    'uses' => 'PageController@getctsp'
]);

Route::get('loai-sp/{type}',[
    'as' => 'loai-sp',
    'uses' => 'PageController@getloaisp'
]);

Route::get('lien-he',[
    'as' => 'lien-he',
    'uses' => 'PageController@getcontact'
]);

Route::get('add-to-cart/{id}',[
    'as'=> 'themgiohang',
    'uses' => 'PageController@getgiohang'
]);

Route::get('delete-cart/{id}',[
   'as' => 'xoagiohang',
    'uses'=> 'PageController@getDel'
]);

Route::get('dat-hang',[
   'as' => 'dathang',
   'uses' => "PageController@getdathang"
]);
Route::post('dat-hang',[
    'as' => 'dathang',
    'uses' => "PageController@postdathang"
]);
Route::get('login',[
   'as' => 'login',
   'uses' => 'PageController@getlogin'
]);
Route::post('login',[
    'as' => 'login',
    'uses' => 'PageController@postlogin'
]);

Route::get('dang-ki',[
    'as' => 'dangki',
    'uses' => 'PageController@getdk'
]);
Route::post('dang-ki',[
    'as' => 'dangki',
    'uses' => 'PageController@postdk'
]);

Route::get('dang-xuat',[
   'as' => 'logout',
   'uses' => 'PageController@getDX'
]);
Route::get('search',[
   'as' => 'search',
   'uses' => 'PageController@getSearch'
]);
