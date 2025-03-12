@extends('layouts.app')

@section('title', 'Заказы')

@section('main_content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach ($orders as $order)
    <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->created_at }}</td>
        <td>{{ $order->customer_name }}</td>
        <td>{{ $order->status }}</td>
        <td>{{ $order->product->name }}</td>
        <td>{{ $order->total_price }}</td>
    </tr>
@endforeach

</body>
</html>
@endsection
