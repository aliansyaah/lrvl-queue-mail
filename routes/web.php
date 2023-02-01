<?php

use Illuminate\Support\Facades\Route;

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

Route::get('email-test', function(){
    $details['email'] = 'ujangsoleh789@gmail.com';
    dispatch(new App\Jobs\SendEmailJob($details));

    dd('done');
});

Route::get('kirim-email-manual','App\Http\Controllers\TestManualMailController@index');
