<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
<h1>{{ $product->name }}</h1>
<p>Цена: {{ $product->price }} руб.</p>
<p>Категория: {{ $product->category->name }}</p>
<p>Описание: {{ $product->description }}</p>

</body>
</html>
