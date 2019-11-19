@extends('layouts.post')

@section('content')
<div class="container">
    <div class="row"><div class="col-sm-0"><h1>更新確認画面</h1></div></div>
</div>


<div class="container">
    <div class="row"><div class="col-sm-0">* 下記の変更内容でよろしいですか？</div></div>
</div>
<br>
<form method="post" action="{{ url('/update/complete') }}">
{{ csrf_field() }}
    <input type="hidden" name="update_id" value="{{ $updateConfirm_data['id'] }}">

    <!-- タイトル -->
    <div class="container">
        <div class="form-group form-group-sm row">
            <label class="col-sm-0 control-label" for="sm">タイトル：</label>
            <div class="col-sm-4">{{ $updateConfirm_data['title'] }}</div>
            <input type="hidden" name="update_title" value="{{ $updateConfirm_data['title'] }}">
        </div>
    </div>

    <!-- 記事内容 -->
    <div class="container">
        <div class="form-group form-group-sm row">
            <label class="col-sm-0 control-label" for="sm">記事内容：</label>
            <div class="col-sm-4">{{ $updateConfirm_data['article'] }}</div>
            <input type="hidden" name="update_article" value="{{ $updateConfirm_data['article'] }}">
        </div>
    </div>
    <br><br>
    <!-- 送信ボタン -->
    <div class="container">
        <div class="form-group form-group-sm row">
            <input type="submit" class="btn btn-primary" value="更新完了">
        </div>
    </div>
</form>


@endsection