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

// ex. /subjects --- list subjects
Route::get('subjects', 'SubjectController@overview')
    ->name('subjects.overview');

// ex. /subjects/1/ --- list subject topics
Route::get('subjects/{subject}', 'SubjectController@show')
    ->name('subjects.show');

// ex. /topics/1/ --- list topics for subject
Route::get('topics/{topic}', 'TopicController@show')
    ->name('topics.show');

// ex. /subtopics/1 --- list subtopics for topic
Route::get('subtopics/{subtopic}', 'SubtopicController@show')
    ->name('subtopics.show');

// ex. /lessons/1
Route::get('lessons/{lesson}', 'LessonController@show')
    ->name('lessons.show');
