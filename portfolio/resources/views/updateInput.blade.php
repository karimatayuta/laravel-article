@extends('layouts.post')

@section('content')

<div class="container">
    <div class="row"><div class="col-sm-0"><h1>更新入力画面</h1></div></div>
</div>

<div class="container">
    <div class="row"><div class="col-sm-0">* 下記に更新内容を入力してください。</div></div>
</div>
<br>
<form method="post" action="{{ url('/update/confirm') }}">
{{ csrf_field() }}

    <!-- ID -->
    @foreach ($updateInput_data as $updateInput)
    <div class="container">
        <div class="form-group form-group-sm row">
            <label class="col-sm-0 control-label" for="sm">ID　　　：　{{ $updateInput['id'] }}</label>
            <div class="col-sm-8"><input type="hidden" name="id" value="{{ $updateInput['id'] }}"></div>
        </div>
    </div>

    <!-- タイトル -->
    <div class="container">
        <div class="form-group form-group-sm row">
            <label class="col-sm-0 control-label" for="sm">タイトル：</label>
            <div class="col-sm-8"><input class="form-control" type="text" name="title" value="{{ $updateInput['title_name'] }}"></div>
        </div>
    </div>

    <!-- 記事内容 -->
    <div class="container">
        <div class="form-group form-group-sm row">
            <label class="col-sm-0 control-label" for="sm">記事内容：</label>
            <div class="col-sm-8"><textarea class="form-control" rows="10" name="article">{{ $updateInput['article'] }}</textarea></div>
        </div>
    </div>
    <br>
    @endforeach

    <!-- 送信ボタン -->
    <div class="container">
        <div class="form-group form-group-sm row">
            <input type="submit" class="btn btn-primary" value="更新">
        </div>
    </div>
</form>

@endsection