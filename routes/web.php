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

Route::get('/questionnaires/create',[
    'uses' => 'QuestionnaireController@create',
    'as'   =>  'qcreate'
]);

Route::post('/questionnaires',[
    'uses' => 'QuestionnaireController@store',
    'as'   =>  'qstore'
]);

Route::get('/questionnaires/{questionnaire}',[
    'uses' => 'QuestionnaireController@show',
    'as'   =>  'qshow'
]);

Route::get('/questionnaires/{questionnaire}/questions/create',[
    'uses' => 'QuestionController@create',
    'as'   =>  'quescreate'
]);

Route::post('/questionnaires/{questionnaire}/questions',[
    'uses' => 'QuestionController@store',
    'as'   =>  'quesstore'
]);

Route::delete('/questionnaires/{questionnaire}/questions/{question}',[
    'uses' => 'QuestionController@destroy',
    'as'   =>  'quesstore'
]);

Route::get('/surveys/{questionnaire}-{slug}',[
    'uses' => 'SurveyController@show',
    'as'   =>  'surveyshow'
]);

Route::post('/surveys/{questionnaire}-{slug}',[
    'uses' => 'SurveyController@store',
    'as'   =>  'surveystore'
]);
