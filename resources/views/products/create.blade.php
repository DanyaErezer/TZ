@extends('layouts.app')

@section('title', 'Создание товаров')

@section('main_content')
    <div class="container mt-5">
        <h1>Создание товара</h1>
        <form action="{{ route('products.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Название товара</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Введите название товара" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Цена</label>
                <input type="number" id="price" name="price" class="form-control" step="0.01" placeholder="Введите цену" required>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Категория</label>
                <select id="category_id" name="category_id" class="form-select" required>
                    <option value="" disabled selected>Выберите категорию</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Описание</label>
                <textarea id="description" name="description" class="form-control" placeholder="Введите описание" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
