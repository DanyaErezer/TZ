@extends('layouts.app')

@section('title', 'Создание Заказа')

@section('main_content')
    <div class="container mt-5">
        <h1>Создание заказа</h1>
        <form action="{{ route('orders.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="customer_name" class="form-label">ФИО покупателя</label>
                <input type="text" id="customer_name" name="customer_name" class="form-control" placeholder="Введите ФИО покупателя" required>
            </div>

            <div class="mb-3">
                <label for="product_id" class="form-label">Продукт</label>
                <select id="product_id" name="product_id" class="form-select" required>
                    <option value="" disabled selected>Выберите продукт</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Количество</label>
                <input type="number" id="quantity" name="quantity" class="form-control" min="1" placeholder="Введите количество" required>
            </div>

            <div class="mb-3">
                <label for="comment" class="form-label">Комментарий</label>
                <textarea id="comment" name="comment" class="form-control" placeholder="Введите комментарий" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
