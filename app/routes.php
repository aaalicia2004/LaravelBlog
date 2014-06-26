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

Route::get('/resume', function()
{
	return "This is my resume!";
});

Route::get('/portfolio', function()
{
	return "This is my portfolio!";
});

// Route::get('/', function (){
// 	return 'we are home';
// });

// Route::get('/sayhello/{name}', function($name)
// {
// 	if ($name == "Alicia")
//     {
//         return Redirect::to('/'); //this Redirect will take you to the home page. the / means home page
//         //return Redirect::to('http://www.google.com'); this Redirect can take you to any locatin you want to go
//     }
//     else
//     {
//         return "Hello, $name!";
//     }
// });
