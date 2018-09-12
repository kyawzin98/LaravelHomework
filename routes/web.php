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

//Route::get('Good',function (){
//    echo "Bad";
//});


Route::get('TestController', 'NewHomeController@index')->name('test.newHome');
Route::post('ShowMessage','NewHomeController@show')->name('message.show');
Route::get('Message','NewHomeController@message')->name('message.message');

Route::get('HomeWork','HomeWork\MyController@showRoute')->name('show.route');
Route::get('HomePage','HomeWork\MyController@home')->name('homework.home');
Route::get('About','HomeWork\MyController@about')->name('homework.about');
Route::get('ContactUs','HomeWork\MyController@contactUs')->name('homework.contactUs');
Route::get('Orders','HomeWork\MyController@orders')->name('homework.orders');

Route::get('BlankPage','HomeWork\TemplateController@blankpage')->name('homework.blank');

Route::resource('ToDo','HomeWork\ToDoController')->middleware('auth');