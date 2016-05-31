<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    // DEFAULT
Route::get('/', 'HomeController@index');

    //Dịch vụ lưu trú
Route::get('dvlt/{macskd}','DvLtController@show');
Route::get('dsdvlt/{hang}','DvLtController@index');


    //Dịch vụ vận tải xe khách
Route::get('dvvtxk/{masothue}','DvVtXkController@show');
Route::get('dsdvvtxk','DvVtXkController@index');

    //Dịch vụ vận tải xe buýt
Route::get('dvvtxb/{masothue}','DvVtXbController@show');
Route::get('dsdvvtxb','DvVtXbController@index');

    //Dịch vụ vận tải xe taxi
Route::get('dvvtxtx/{masothue}','DvVtXtxController@show');
Route::get('dsdvvtxtx','DvVtXtxController@index');

    //Dịch vụ vận tải chở hàng
Route::get('dvvtch/{masothue}','DvVtChController@show');
Route::get('dsdvvtch','DvVtChController@index');
