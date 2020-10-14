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

// category
Route::get('/category', 'HomeController@getCategoryPage')->name('category');
Route::post('/savecategory', 'HomeController@saveCategory')->name('savecategory');
Route::get('/viewallcategory', 'HomeController@getAllCategoryPage')->name('viewallcategory');
Route::get('/deletecategory/{id}', 'HomeController@deleteCategory')->name('deletecategory');
Route::get('/editcategory/{id}', 'HomeController@getEditCategoryPage')->name('editcategory');
Route::post('/updatecategory/{id}', 'HomeController@updateCategory')->name('updatecategory');



Route::get('/exam', 'HomeController@getExamPage')->name('exam');
Route::post('/saveexam', 'HomeController@saveExams')->name('saveexam');
Route::get('/viewallquestion', 'HomeController@getAllQuestions')->name('viewallquestion');
Route::get('/deletequestion/{id}', 'HomeController@deleteQuestion')->name('deletequestion');
Route::get('/editquestion/{id}', 'HomeController@getEditQuestionPage')->name('editquestion');
Route::post('/updatequestion/{id}', 'HomeController@updateQuestion')->name('updatequestion');


Route::get('/answer', 'HomeController@getAnswerPage')->name('answer');
Route::post('/saveanswer', 'HomeController@saveAnswers')->name('saveanswer');
Route::get('/deleteanswer/{id}', 'HomeController@deleteQuestion')->name('deleteanswer');
Route::get('/editanswer/{id}', 'HomeController@getEditAnswerPage')->name('editanswer');
Route::post('/updateanswer/{id}', 'HomeController@updateAnswer')->name('updateanswer');



