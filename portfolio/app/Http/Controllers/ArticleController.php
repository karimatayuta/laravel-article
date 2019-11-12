<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    //
    public function listView()
    {
        // 記事一覧
        $articles = \App\Article::orderBy('id', 'DESC')->paginate(9);
        // 現在認証されているユーザーの取得
        $user = Auth::user();
        return view('articleList',compact('articles','user'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function detailView($id)
    {
        // 記事詳細一覧
        $article_data = \App\Article::where('id', '=', $id)->get();
        // 現在認証されているユーザーの取得
        $user = Auth::user();
        return view('articleDetail',compact('article_data','user'));
    }
}
