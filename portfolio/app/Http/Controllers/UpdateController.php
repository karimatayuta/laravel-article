<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{
    //
    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function input($id)
    {
        // 記事更新ページ
        $updateInput_data = \App\Article::where('id', '=', $id)->get();
        // 現在認証されているユーザーの取得
        $user = Auth::user();
        return view('updateInput',compact('updateInput_data','user'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request)
    {
        // 記事更新　確認ページ
        $updateConfirm_data = $request::all();
        // 現在認証されているユーザーの取得
        $user = Auth::user();
        return view('updateConfirm',compact('updateConfirm_data','user'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function complete(Request $request)
    {
        // 記事の更新内容をDBに反映
        $updateComplete_data = $request::all();
        // データ登録処理
        $articles = \App\Article::find($updateComplete_data['update_id']);
        $articles->title_name = $updateComplete_data['update_title'];
        $articles->article = $updateComplete_data['update_article'];
        $articles->save();

        // 現在認証されているユーザーの取得
        $user = Auth::user();
        return view('updateComplete',compact('user'));
    }

}
