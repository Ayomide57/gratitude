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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category', 'HomeController@getCatergoyPage')->name('category');
Route::post('/savecategory', 'HomeController@saveCategory')->name('savecategory');

Route::get('/exam', 'HomeController@getExamPage')->name('exam');
Route::post('/saveexam', 'HomeController@saveExams')->name('saveexam');

Route::get('/answer', 'HomeController@getAnswerPage')->name('answer');
Route::post('/saveanswer', 'HomeController@saveAnswers')->name('saveanswer');

Route::get('/viewallcategory', 'HomeController@getAllCategoryPage')->name('viewallcategory');
Route::get('/viewallquestion', 'HomeController@getAllQuestions')->name('viewallquestion');

