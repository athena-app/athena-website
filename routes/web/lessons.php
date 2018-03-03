<?php
/***********************************************
    Lessons
***********************************************/

// ex. /lessons
Route::get('lessons', 'LessonController@index')
    ->name('lessons');

// ex. /lessons/1
Route::get('{lesson}', 'LessonController@show')
    ->name('lessons.show');
