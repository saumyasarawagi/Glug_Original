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

Route::get('/', 'PagesController@getHome')->name('pages.home');
Route::get('/onlineFeedback', 'PagesController@getOnlineFeedback')->name('pages.getOnlineFeedback');
Route::post('/onlineFeedback','PagesController@postOnlineFeedback')->name('events.postOnlineFeedback');
Route::get('/offlineFeedback', 'PagesController@getOfflineFeedback')->name('pages.getOfflineFeedback');
Route::post('/offlineFeedback','PagesController@postOfflineFeedback')->name('events.postOfflineFeedback');
Route::get('/admindashboard','EventController@getAdminDashboard')->name('admin.dashboard');
Route::get('/feedbackdashboard','EventController@getFeedbackDashboard')->name('feedback.dashboard');
Route::get('/onlineFeedback_result/{event_id}','EventController@getOnlineFeedbackResult')->name('onlineFeedback.result');
Route::get('/offlineFeedback_result/{event_id}','EventController@getOfflineFeedbackResult')->name('offlineFeedback.result');
/**/
Route::resource('events','EventController');

/**For Authentication

// Authentication Routes...*/
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

/**/
