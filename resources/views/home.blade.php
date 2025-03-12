@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Добро пожаловать в систему управления!</h1>
    <div class="row mt-5">
        <div class="col-md-6 text-center">
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg">Управление товарами</a>
        </div>
        <div class="col-md-6 text-center">
            <a href="{{ route('orders.index') }}" class="btn btn-success btn-lg">Управление заказами</a>
        </div>
    </div>
</div>
</body>
</html>
@endsection

