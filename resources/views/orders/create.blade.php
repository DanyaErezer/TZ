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
<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <input type="text" name="customer_name" placeholder="ФИО покупателя">
    <select name="product_id">
        @foreach ($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
    </select>
    <input type="number" name="quantity" min="1" placeholder="Количество">
    <textarea name="comment" placeholder="Комментарий"></textarea>
    <button type="submit">Сохранить</button>
</form>

</body>
</html>
