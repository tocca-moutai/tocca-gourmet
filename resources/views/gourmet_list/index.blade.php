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
        カテゴリを選択してください
        <select name="generate">
            <option value=""></option>
@foreach ($categorys as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
@endforeach
        </select>
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
</body>
</html>