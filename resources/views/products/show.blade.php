@extends('layouts.app')

@section('title', 'Детали товара')

@section('main_content')
    <h1>Детали товара</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text"><strong>Цена:</strong> {{ $product->price }} руб.</p>
            <p class="card-text"><strong>Категория:</strong> {{ $product->category->name }}</p>
            <p class="card-text"><strong>Описание:</strong> {{ $product->description }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Назад к списку товаров</a>
        </div>
    </div>
@endsection
