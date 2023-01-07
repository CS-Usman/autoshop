<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Item</title>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/buyPage.css') }}" >

    
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div>
        <h4>{{$item->Item}}</h4> 
        <p>Price PKR {{$item->Price}}/-</p> 
        <form action="/cart/buy/{{$item->id}}/{{$data->id}}" method="post">
            @csrf
            <fieldset>
                <input type="number" placeholder="Quantity" value=1 name = "qty"> <br>
                <button type="submit" class=" btn btn-md btn-primary">Buy Product</button>
            </fieldset>

        </form>
    </div>
</body>
</html>

