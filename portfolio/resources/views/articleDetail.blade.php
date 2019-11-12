@extends('layouts.post')

@section('content')
<div class="container" style="background:#FFFFFF;">
    <div class="row">
        <div class="col-sm-12">
            
            <h1>記事詳細画面</h1><br>
            @foreach ($article_data as $article)
            <h2 class="border-left border-secondary" style="padding:5px;"><strong>記事タイトル</strong></h2>
            <p>{{ $article['title_name'] }}</p><br>
            <h2 class="border-left border-secondary" style="padding:5px;"><strong>記事内容</strong></h2>
            <p>{{ $article['article'] }}</p><br>
            @endforeach
            <a class="btn btn-outline-primary" href="/article/list" rule="button">記事一覧画面へ戻る</a>
        </div>
    </div>
</div>
@endsection