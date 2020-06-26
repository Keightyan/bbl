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

Route::get('/', 'LecturesController@index')->name('bbl');
Route::get('pitching', 'PitchingsController@index')->name('lectures.pitchings.pitchings');
Route::get('batting', 'BattingsController@index')->name('lectures.battings.battings');
Route::get('fielding', 'FieldingsController@index')->name('lectures.fieldings.fieldings');
Route::get('running', 'RunningsController@index')->name('lectures.runnings.runnings');
Route::get('mental', 'MentalsController@index')->name('lectures.mentals.mentals');
Route::get('other', 'OthersController@index')->name('lectures.others.others');

// 同じLecturesControllerのget競合しているcreateの画面に飛ばさないための処理
// \d+は、「0～9までの数字1つ以上」という意味。idを数字だけと制限すると、create（38行目）は数字ではないので、これによってshowにマッチしなくなる
// （where以降が無いと、ルーティングは上にあるものが優先されるので、下記の同じgetのcreateをかき消してしまう）
Route::get('lectures/{id}', 'LecturesController@show')->name('lectures.show')->where('id', '\d+');

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login.get');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

// ユーザ機能
Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UsersController', ['only' => ['show']]);
    Route::get('lectures/create', 'LecturesController@create')->name('lectures.create');
    Route::post('lectures', 'LecturesController@store')->name('lectures.store');
    Route::delete('lectures/{id}', 'LecturesController@destroy')->name('lectures.destroy');
    Route::delete('users/{id}', 'UsersController@destroy')->name('users.destroy');
});