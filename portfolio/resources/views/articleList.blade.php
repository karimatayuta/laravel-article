@extends('layouts.post')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-0"><h1>記事一覧表示画面</h1></div>
    </div>
</div><br>

<div class="container">
    <div class="row">
    @foreach ($articles as $article)
        <div class="card col-sm-3">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body">
                <h4 class="card-title">{{ $article['title_name'] }}</h4>
                <p class="card-text">{{ $article['created_at'] }}</p>
                <a href="{{ action('ArticleController@detailView', $article['id']) }}" class="btn btn-primary float-right">記事はこちら</a>
            </div>
        </div>

        <div class="col-sm-1"></div>
    @endforeach

    <!-- {{ $articles->links() }} -->
    </div>
</div>

<br>
<div class="container">
    <div class="row">
        {{ $articles->links() }}
    </div>
</div>
@endsection