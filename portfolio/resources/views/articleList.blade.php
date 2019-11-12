@extends('layouts.post')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-0"><h1>記事一覧表示画面</h1></div>
    </div>
</div><br>


<div class="container">
    <div class="row">
        <table class="table table-hover col-sm-12">
            <thead class="table-danger text-secondary">
                <tr>
                    <th>記事ID</th>
                    <th scope="col">タイトル</th>
                    <!-- <th scope="col">作成者</th> -->
                    <th scope="col">投稿日時</th>
                </tr>
            </thead>
            @foreach ($articles as $article)
            <tbody class="text-secondary">
                <tr>
                    <th scope="row">{{ $article['id'] }}</th>
                    <td><a href="{{ action('ArticleController@detailView', $article['id']) }}">{{ $article['title_name'] }}</a></td>
                    <!-- <td><a href="#">UserName</a></td> -->
                    <td>{{ $article['created_at'] }}</a></td>
                </tr>
            </tbody>
            @endforeach
        </table>        
        {{ $articles->links() }}
    </div>
</div>


@endsection