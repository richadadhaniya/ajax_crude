<?php

use Illuminate\Support\Facades\Route;

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


Route::get('practice','PracticeController@insert')->name('vieew');
Route::post('sttores','PracticeController@store')->name('store');
Route::get('view','PracticeController@viiew')->name('vieewss');








Route::get('student','StudentController@index')->name('view');
Route::post('form_action','StudentController@store')->name('student.store');
Route::get('student/{id}/edit', 'StudentController@edit')->name('student.edit');
Route::post('student/update', 'StudentController@update')->name('student.update');
Route::get('student/{id}/delete', 'StudentController@destroy')->name('student.delete');



Route::get('dynamic-field', 'DynamicFieldController@addMore');

Route::post('dynamic-field/insert', 'DynamicFieldController@addMorePost')->name('dynamic-field.insert');



Route::get('add-remove-input-fields', 'AddRemoveFieldController@index');
Route::post('add-remove-input-fields', 'AddRemoveFieldController@store');



Route::get('forms','PreController@index')->name('views');
Route::post('store','PreController@storee')->name('stores');

Route::get('/home', [App\Http\Controllers\TodoController::class, 'index']);
Route::post('/todos/create', [App\Http\Controllers\TodoController::class, 'store']);
Route::put('/todos/{todo}', [App\Http\Controllers\TodoController::class, 'update']);
Route::delete('/todos/{todo}', [App\Http\Controllers\TodoController::class, 'destroy']);



