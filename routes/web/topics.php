<?php
/***********************************************
    Topics
***********************************************/

// ex. /topics
Route::get('topics', 'TopicController@index')
    ->name('topics');

// ex. /topics/1
Route::get('{topic}', 'TopicController@show')
    ->name('topics.show');
