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

// ex. /notes --- list notes
Route::get('notes', 'NoteController@overview')
    ->name('notes.overview');

// ex. /notes/1/ --- list note object
Route::get('notes/{note}', 'NoteController@show')
    ->name('notes.show');

// ex. /notes/create --- create note object
Route::post('notes/create', 'NoteController@create')
    ->name('notes.create');

// ex. /notes/1/ --- list note object
Route::post('notes/edit', 'NoteController@edit')
    ->name('notes.edit');

// ex. /notes/1/ --- list note object
Route::get('chat', 'ChatController@show')
    ->name('chat.show');

Route::get('subjects/{subject}/favorite', 'SubjectController@favorite')
    ->name('subjects.favorite');

Route::get('topics/{topic}/favorite', 'TopicController@favorite')
    ->name('topics.favorite');

Route::get('subtopics/{subtopic}/favorite', 'SubtopicController@favorite')
    ->name('subtopics.favorite');

Route::get('lessons/{lesson}/favorite', 'LessonController@favorite')
    ->name('lessons.favorite');

Route::get('notes/{note}/favorite', 'NoteController@favorite')
    ->name('notes.favorite');

Route::get('favorites', 'FavoriteController@overview')
    ->name('favorites.overview');
