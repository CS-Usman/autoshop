<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Shop</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <nav>
        <div class="brand-name"><h3>Auto Shop</h3></div>
        <div>
            <button class="navBtn"><a href="{{url('cart')}}"><i class="fa-solid fa-cart-shopping"></a></i></button>
            <button class="navBtn"><a href="{{url('account')}}"><i class="fa-solid fa-user"></i></a></button>
        </div>
    </nav>
    <div class="grid-container">
        @foreach($data ?? '' as $coming)
        <div class="card">
        <img class="card-img-top" src="{{$coming->img}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$coming->Item}}</h5>
            <p class="card-text">PKR {{$coming->Price}}/-</p>
            <a href="{{route('user.addItem',['item_id'=>$coming->id])}}" class="btn btn-primary">Add to cart</a>
        </div>
        </div>
        @endforeach
    </div>
</div>
    
</body>
</html>