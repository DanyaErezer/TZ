@extends('layouts.app')

@section('title', 'Создание товаров')

@section('main_content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Название товара">
    <input type="number" name="price" step="0.01" placeholder="Цена">
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <textarea name="description" placeholder="Описание"></textarea>
    <button type="submit">Сохранить</button>
</form>

</body>
</html>
@endsection
