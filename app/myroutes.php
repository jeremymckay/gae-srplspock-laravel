<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('users', function()
{
//   User::create([
//       'name'=>'user1323',
//       'password'=>Hash::make('1234'),
//   ]);

   $users = User::all();

    return View::make('users')->with('users', $users);
});