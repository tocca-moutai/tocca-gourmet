<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>店舗一覧</title>
</head>
<body>
    <h1>店舗一覧</h1>
    <ul>
@foreach ($stores as $store)
        <li><a href="{{ $store->store_url }}">{{ $store->store_name }}</a></li>
@endforeach
    </ul>

    <h2>カテゴリ一覧</h2>
    <ul>
@foreach ($categorys as $category)
        <li>{{ $category->category_name }}</li>
@endforeach
    </ul>
</body>
</html>