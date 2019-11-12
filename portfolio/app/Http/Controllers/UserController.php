<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 記事一覧
        $articles = \App\Article::orderBy('id', 'DESC')->paginate(7);
        // 現在認証されているユーザーの取得
        $user = Auth::user();
        return view('user',compact('articles','user'));
    }
}
