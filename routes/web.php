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

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');

$dir = __DIR__ . DIRECTORY_SEPARATOR . basename(__FILE__, '.php') . DIRECTORY_SEPARATOR;
$contents = scandir($dir);
foreach($contents as $content) {
    if(!in_array($content, array('.', '..')) && !is_dir($dir . $content)) {
        include $dir . $content;
    }
}
