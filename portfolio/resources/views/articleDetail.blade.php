@extends('layouts.post')

@section('content')

<h1>Hello World</h1>

@foreach ($article_data as $article)
<h5>記事番号</h5>
<p>{{ $article['id'] }}</p>
<h5>記事タイトル</h5>
<p>{{ $article['title_name'] }}</p>
<h5>記事内容</h5>
<p>{{ $article['article'] }}</p>
@endforeach

@endsection