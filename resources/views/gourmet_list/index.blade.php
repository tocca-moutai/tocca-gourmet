<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>店舗一覧</title>
</head>
<body>
    <form action="/list" method="post">
        @csrf
        <button type="submit">今日のお店を決める</button>
    </form>

    @if (isset($today_store))
        <p><a href="{{$today_store->url}}">{{$today_store->name}}</a>はいかがですか？</p>
    @endif

    <h1>店舗一覧</h1>
    <ul>
@foreach ($stores as $store)
        <li><a href="{{ $store->store_url }}">{{ $store->store_name }}</a></li>
@endforeach
    </ul>

    {{-- テスト用 --}}
    <h2>カテゴリ一覧</h2>
    <ul>
@foreach ($categorys as $category)
        <li>{{ $category->category_name }}</li>
@endforeach
    </ul>
</body>
</html>