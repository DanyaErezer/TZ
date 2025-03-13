@extends('layouts.app')

@section('title', 'Детали заказа')

@section('main_content')
    <h1>Детали заказа #{{ $order->id }}</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Информация о заказе</h5>
            <p class="card-text"><strong>ФИО покупателя:</strong> {{ $order->customer_name }}</p>
            <p class="card-text"><strong>Товар:</strong> {{ $order->product->name }}</p>
            <p class="card-text"><strong>Количество:</strong> {{ $order->quantity }}</p>
            <p class="card-text"><strong>Итоговая цена:</strong> {{ $order->total_price }} руб.</p>
            <p class="card-text"><strong>Статус:</strong> {{ $order->status }}</p>
            <p class="card-text"><strong>Комментарий:</strong> {{ $order->comment ?? 'Нет комментария' }}</p>
            <p class="card-text"><strong>Дата создания:</strong> {{ $order->created_at }}</p>

            @if($order->status === 'new')
                <form action="{{ route('orders.complete', $order) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success">Завершить заказ</button>
                </form>
            @endif

            <a href="{{ route('orders.index') }}" class="btn btn-primary">Назад к списку заказов</a>
        </div>
    </div>
@endsection
