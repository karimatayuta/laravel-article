@extends('layouts.post')

@section('content')

<div class="container">
    <div class="row"><div class="col-sm-0"><h1>新規登録画面</h1></div></div>
</div>


<div class="container">
    <div class="row"><div class="col-sm-0">* 下記の登録内容でよろしいですか？</div></div>
</div>
<br>
<form method="post" action="{{ url('/post/article_regist') }}">
{{ csrf_field() }}

    <!-- タイトル -->
    <div class="container">
        <div class="form-group form-group-sm row">
            <label class="col-sm-0 control-label" for="sm">タイトル：</label>
            <div class="col-sm-4">{{ $post_data['title'] }}</div>
            <input type="hidden" name="regist_title" value="{{ $post_data['title'] }}">
        </div>
    </div>

    <!-- 記事内容 -->
    <div class="container">
        <div class="form-group form-group-sm row">
            <label class="col-sm-0 control-label" for="sm">記事内容：</label>
            <div class="col-sm-4">{{ $post_data['content'] }}</div>
            <input type="hidden" name="regist_content" value="{{ $post_data['content'] }}">
        </div>
    </div>
    <br><br>
    <!-- 送信ボタン -->
    <div class="container">
        <div class="form-group form-group-sm row">
            <input type="submit" class="btn btn-primary" value="登録">
        </div>
    </div>
</form>
@endsection