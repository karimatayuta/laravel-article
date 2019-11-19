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

// ログイン処理
//Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
//Route::post('/auth/login', 'Auth\LoginController@login');
// ログアウト処理
//Route::get('/auth/logout', 'Auth\LoginController@logout');


// 新規投稿登録入力ページ
Route::resource('/post','PostController');
// 新規投稿内容確認ページ遷移
Route::post('/post/create','PostController@create');
// 新規投稿内容完了ページ遷移
Route::post('/post/article_regist','PostController@article_regist');

// 記事一覧ページ表示
Route::get('/article/list','ArticleController@listView');
// 記事詳細ページ表示
Route::get('/article/detail/{id}','ArticleController@detailView');

// 記事更新入力ページ遷移
Route::get('/update/input/{id}','UpdateController@input');
// 記事更新確認ページ遷移
Route::post('/update/confirm','UpdateController@confirm');
// 記事更新完了ページ遷移
Route::post('/update/complete','UpdateController@complete');

// ユーザーページ
Route::get('/user','UserController@index');

// ログイン認証
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
