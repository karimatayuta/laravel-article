<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>




<!-- main -->
~ Latest Content ~

<h1>CSS CHECK</h1>
<!-- カード形式 -->
<button type="button" class="btn btn-primary">Primary</button>

@foreach($data as $db_data)
<!-- 記事コンテンツ -->
<div id='content_card'>
    <!-- 記事フォト -->
    <div id='card_photo'>Card Photo</div>
    <!-- 記事ヘッダー -->
    <div id='content_header'>
        <div class='content_title'>
            <a href="{{ action('DetailContentController@index', $db_data['content_id']) }}">{{ $db_data['content_title'] }}</a>
        </div>
    </div>
    <!-- 記事投稿者　等 -->
    <div id='content_info'>
        <div class='content_auther'>{{ $db_data['user_name'] }}</div>
        <div class='content_create_datetime'>{{ $db_data['created_at'] }}</div>
    </div>
    <!-- 記事内容抜粋 -->
    <div id='content_part'>Content</div>
</div>
<br>
@endforeach

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>