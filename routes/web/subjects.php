<?php
/***********************************************
    Subjects
***********************************************/

// ex. /subjects
Route::get('subjects', 'SubjectController@index')
    ->name('subjects');

// ex. /subjects/1
Route::get('{subject}', 'SubjectController@show')
    ->name('subjects.show');
