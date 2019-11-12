<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 新規記事投稿　ページ
        // 現在認証されているユーザーの取得
        $user = Auth::user();        
        return view('post',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // 新規記事投稿　確認ページ
        $post_data = $request::all();
        // 現在認証されているユーザーの取得
        $user = Auth::user();  
        return view('postCreate',compact('post_data','user'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function article_regist(Request $request)
    {
        $post_data = $request::all();
        // echo $post_data['regist_title'];
        // echo $post_data['regist_content'];

        // 新規記事投稿　完了ページ
        // データ登録処理
        $articles = new \App\Article();
        $articles->title_name = $post_data['regist_title'];
        $articles->article = $post_data['regist_content'];
        $articles->save();

        // 現在認証されているユーザーの取得
        $user = Auth::user();  

        return view('postComplete',compact('user'));
        //return view('content_regist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
