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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::group(['middleware' => ['web']], function () {
Route::get('/', 'BasicController@index');
Route::post('/mail', 'BasicController@mail');
Route::get('/about', 'BasicController@about');
Route::get('/service', 'BasicController@service');
Route::get('/portfolio', 'BasicController@portfolio');
Route::get('/contact', 'BasicController@contact');

Route::post('result','ArticleController@result');
Route::get('/article_view/{id}', 'ArticleController@show_home');
Route::get('search','ArticleController@search');
 
// Password Reset Routes
	
});

Route::group(['prefix' => 'taap'], function()
{
  Route::resource('/article', 'ArticleController');
Route::resource('/notice', 'NoticeController');
Route::resource('/review', 'ClientReviewController');
Route::resource('/profile', 'AboutController');
Route::get('/admin', 'ArticleController@getAdmin');
    Route::auth();
     Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
	Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
	Route::post('password/reset', 'Auth\PasswordController@reset');

   Route::get('/home', 'HomeController@index');

});

      
   

