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
Route::get('cskd-dich-vu-luu-tru/{macskd}','DvLtController@show');
Route::get('dich-vu-luu-tru/ks-{hang}-sao','DvLtController@index');
Route::get('dich-vu-luu-tru/ks-{hang}-sao/{cskd}','DvLtController@view');
Route::get('cskd-dich-vu-luu-tru/{macskd}/view','DvLtController@viewct');
Route::get('/ajax/getTTph/','DvLtController@getTTph');

    //Dịch vụ vận tải xe khách
Route::get('dn-dich-vu-van-tai-xe-khach/{masothue}','DvVtXkController@show');
Route::get('dich-vu-van-tai-xe-khach','DvVtXkController@index');
Route::get('dich-vu-van-tai-xe-khach/{ma}','DvVtXkController@view');


    //Dịch vụ vận tải xe buýt
Route::get('dn-dich-vu-van-tai-xe-buyt/{masothue}','DvVtXbController@show');
Route::get('dich-vu-van-tai-xe-buyt','DvVtXbController@index');
Route::get('dich-vu-van-tai-xe-buyt/{ma}','DvVtXbController@view');

    //Dịch vụ vận tải xe taxi
Route::get('dn-dich-vu-van-tai-xe-taxi/{masothue}','DvVtXtxController@show');
Route::get('dich-vu-van-tai-xe-taxi','DvVtXtxController@index');
Route::get('dich-vu-van-tai-xe-taxi/{ma}','DvVtXtxController@view');

    //Dịch vụ vận tải chở hàng
Route::get('dn-dich-vu-van-tai-cho-hang/{masothue}','DvVtChController@show');
Route::get('dich-vu-van-tai-cho-hang','DvVtChController@index');
Route::get('dich-vu-van-tai-cho-hang/{ma}','DvVtChController@view');