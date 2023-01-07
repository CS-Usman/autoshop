<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}" >

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <h3>{{$data->name}} cart</h3>
    @foreach($data->cart as $item)
    <div class="flex-container">
        <p>{{  $item['Item'] }}</p>
        <p>PKR {{  $item['Price'] }} /-</p>
        <button class=" btn btn-md btn-primary"><a href="/cart/buy/{{$item['id']}}/{{$data->id}}">Buy</a></button>
        <button class=" btn btn-sm btn-primary"><a href="/cart/remove/{{$data->id}}/{{$item['id']}}">Remove from cart</a></button>
    </div>
    @endforeach
</body>
</html>