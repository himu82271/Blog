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
Route::get('/fullRegister', 'RegController@fullRegister')->name('fullRegister');


Route::get('/user/profile','ProfileController@profile');
Route::get('/user/userprofile/{user_id}','ProfileController@userprofile');
Route::get('/user/article/{id}','ArticleController@article');


Route::get('/profile/edit/{user_id}', 'ProfileController@profile_edit')->name('profile.edit');
Route::post('/profile/update', 'ProfileController@profile_update')->name('profile.update');
Route::post('/profile/store', 'ProfileController@store')->name('profile.store');


Route::post('/user/storeProfile','UserController@storeProfile')->name('user.storeProfile');
// Route::get('/timeline', 'UserController@index')->name('timeline');
Route::get('/timeline2', 'UserController@index')->name('timeline');

Route::get('/user/create','UserController@create')->name('user.cerate');
Route::post('/user/store','UserController@store')->name('user.store');
Route::get('/user/home','UserController@index')->name('user.index');
Route::get('/user/draft','UserController@draft')->name('user.draft');
Route::get('/user/save','UserController@save')->name('user.save');
Route::get('/user/manage','UserController@manage')->name('user.manage');
Route::get('/user/manage/edit/{id}','UserController@edit')->name('user.post.edit');
Route::get('/user/manage/delete/{id}','UserController@delete')->name('user.post.delete');

Route::post('/user/manage/update','UserController@update');
Route::get('/user/publish-unpublish/{id}','UserController@publishUnpublish');


