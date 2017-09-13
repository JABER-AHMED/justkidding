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


//C controller
Route::get('/ctest', 'CController@index')->name('c-test');
Route::get('/cbeginner', 'CController@beginnertest')->name('c.beginner');
Route::get('/cintermediate', 'CController@intermediatetest')->name('c.intermediate');
Route::get('/cadvance', 'CController@advancetest')->name('c.advance');

//C++ controller
Route::get('/cplustest', 'CplusController@index')->name('cplus-test');
Route::get('/cplusbeginner', 'CplusController@beginnertest')->name('cplus.beginner');
Route::get('/cplusintermediate', 'CplusController@intermediatetest')->name('cplus.intermediate');
Route::get('/cplusadvance', 'CplusController@advancetest')->name('cplus.advance');

//Java controller
Route::get('/javatest', 'JavaController@index')->name('java-test');
Route::get('/javabeginner', 'JavaController@beginnertest')->name('java.beginner');
Route::get('/javaintermediate', 'JavaController@intermediatetest')->name('java.intermediate');
Route::get('/javaadvance', 'JavaController@advancetest')->name('java.advance');

//Html controller
Route::get('/htmltest', 'HtmlController@index')->name('html-test');
Route::get('/htmlbeginner', 'HtmlController@beginnertest')->name('html.beginner');
Route::get('/htmlintermediate', 'HtmlController@intermediatetest')->name('html.intermediate');
Route::get('/htmladvance', 'HtmlController@advancetest')->name('html.advance');

//Python controller
Route::get('/pythontest', 'PythonController@index')->name('phython-test');
Route::get('/pythonbeginner', 'PythonController@beginnertest')->name('python.beginner');
Route::get('/pythonintermediate', 'PythonController@intermediatetest')->name('python.intermediate');
Route::get('/pythonadvance', 'PythonController@advancetest')->name('python.advance');

//Php controller
Route::get('/phptest', 'PhpController@index')->name('php-test');
Route::get('/phpbeginner', 'PhpController@beginnertest')->name('php.beginner');
Route::get('/phpintermediate', 'PhpController@intermediatetest')->name('php.intermediate');
Route::get('/phpadvance', 'PhpController@advancetest')->name('php.advance');




