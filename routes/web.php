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

/*
| Home Ruote 
*/
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'ScheduleCallController@index');

Route::post('/send', 'ScheduleCallController@send');

/*
| Contact Us Routes
*/ 

Route::get('/contact', 'SendEmailController@contact');

Route::post('/contact/send', 'SendEmailController@send');

/*
| Voyager Admin Panel Routes
*/ 

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
