<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function listView()
    {
        // 記事一覧
        $articles = \App\Article::paginate(10);
        return view('articleList',compact('articles'));
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
        return view('articleDetail',compact('article_data'));
    }
}
