@extends('layouts.app')

@section('title', 'Заказы')

@section('main_content')
    <div class="container">
        <h1>Список заказов</h1>
        <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Добавить заказ</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Дата заказа</th>
                <th>Имя клиента</th>
                <th>Статус</th>
                <th>Продукт</th>
                <th>Общая стоимость</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>
                        <a href="{{ route('orders.show', $order) }}">{{ $order->id }}</a>
                    </td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->product->name }}</td>
                    <td>{{ $order->total_price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
