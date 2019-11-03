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

// 新規登録処理
Route::resource('/post','PostController');
Route::post('/post/create','PostController@create');
Route::post('/post/article_regist','PostController@article_regist');

// 記事一覧画面表示
Route::get('/article/list','ArticleController@listView');
// 記事詳細画面表示
Route::get('/article/detail/{id}','ArticleController@detailView');



Route::resource('/home_content','HomeContentController');

// 記事詳細ページへの遷移
Route::get('/detail_content','DetailContentController@index');


Route::get('detail_content/{id}', 'DetailContentController@index');