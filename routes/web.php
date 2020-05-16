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

Route::get('/', 'ScheduleCallController@index');

Route::post('/send', 'ScheduleCallController@send');

Route::post('/subscribe', 'SubscribeController@send');

/*
| Contact Us Routes
*/ 

Route::get('/contact', 'SendEmailController@contact');

Route::post('/contact/send', 'SendEmailController@send');


/*
| About Us Ruote 
*/

Route::get('/about', function()
{
    return View::make('/pages/aboutus');
});

/*
| Voyager Admin Panel Routes
*/ 

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
