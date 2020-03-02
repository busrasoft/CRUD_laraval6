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

Route::get('/', function () {
    return view('welcome');
});

Route::get('lesson', 'LessonController@index')->name('lessonGet');

Route::get('lessonInsert', 'LessonController@lessonInsert')->name('lessonInsert');
Route::post('lessonInsertPost', 'LessonController@lessonInsertPost')->name('lessonInsertPost');

Route::get('lessonUpdate/{id}', 'LessonController@lessonUpdate')->name('lessonUpdate');
Route::post('lessonUpdatePost/{id}', 'LessonController@lessonUpdatePost')->name('lessonUpdatePost');

Route::get('lessonDelete/{id}', 'LessonController@lessonDelete')->name('lessonDelete');


