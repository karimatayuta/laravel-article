@extends('layouts.post')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-0"><h1>ユーザー画面</h1></div>
    </div>
</div><br>

<div class="container">
    <div class="row">
        <div class="col-sm-3"><h3>新規投稿はこちら</h3></div>
        <a href="/post" class="btn btn-outline-secondary col-sm-2" role="button">新規投稿登録ページ</a>
    </div>
</div><br>

<div class="container">
    <div class="row">
        <table class="table table-hover col-sm-12">
            <thead class="table-danger text-secondary">
                <tr>
                    <th>記事ID</th>
                    <th scope="col">タイトル</th>
                    <th scope="col">投稿日時</th>
                    <th scope="col">更新</th>
                    <th scope="col">削除</th>
                </tr>
            </thead>
            @foreach ($articles as $article)
            <tbody class="text-secondary">
                <tr>
                    <td>{{ $article['id'] }}</td>
                    <td><a href="{{ action('ArticleController@detailView', $article['id']) }}">{{ $article['title_name'] }}</a></td>
                    <td>{{ $article['created_at'] }}</a></td>
                    <td><a class="btn btn-warning text-white" href="#" rule="button">Update</button></td>
                    <td><a class="btn btn-danger" href="#" rule="button">Delete</button></td>
                </tr>
            </tbody>
            @endforeach
        </table>        
        {{ $articles->links() }}
    </div>
</div>


@endsection