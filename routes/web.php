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

Route::get('adminsearch','RunEventController@index');//admin search run event

Route::get('admincreate','RunEventController@create');//admin set run event
Route::post('adminstore','RunEventController@store');//admin save set run event

Route::get('adminupdate/{id}','RunEventController@update');//admin update run event
Route::post('adminsave','RunEventController@save');//admin save update run event

Route::get('adminrundetail/{id}','RunEventController@rundetail');//admin run detail 


Route::delete('admindelete','RunEventController@delete');//admin delete run event
//---------------------------------------------------------------------------------

Route::get('clientsearch','ClientOrderController@index');//client search and add
Route::post('store','ClientOrderController@store');//save client search and add

Route::get('show','ClientOrderController@show');//client show owner run event
Route::delete('delete','ClientOrderController@delete');//client delete added event


Route::get('/home', 'HomeController@index');
