@extends('layouts.post')

@section('content')

<div class="container">
    <div class="row"><div class="col-sm-0"><h1>新規登録画面</h1></div></div>
</div>

<div class="container">
    <div class="row"><div class="col-sm-0">* 下記に登録内容を入力してください。</div></div>
</div>
<br>
<form method="post" action="{{ url('/post/create') }}">
{{ csrf_field() }}

    <!-- タイトル -->
    <div class="container">
        <div class="form-group form-group-sm row">
            <label class="col-sm-0 control-label" for="sm">タイトル：</label>
            <div class="col-sm-8"><input class="form-control" type="text" name="title"></div>
        </div>
    </div>

    <!-- 記事内容 -->
    <div class="container">
        <div class="form-group form-group-sm row">
            <label class="col-sm-0 control-label" for="sm">記事内容：</label>
            <div class="col-sm-8"><textarea class="form-control" rows="10" name="content"></textarea></div>
        </div>
    </div>
    <br>
    <!-- 送信ボタン -->
    <div class="container">
        <div class="form-group form-group-sm row">
            <input type="submit" class="btn btn-primary" value="送信">
        </div>
    </div>
</form>
@endsection