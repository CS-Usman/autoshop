<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS StyleSheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <form method="post" action="/">
        @csrf
        <fieldset>

            <h1>Please sign in</h1>
    
            <div class="form-floating input-div">
                <input  required type="email" class="form-control" name="username" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating input-div">
                <input required type="password" class="form-control" name="pass" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
    
            <button class=" btn btn-lg btn-primary" type="submit">Sign In</button>
            <button class=" btn btn-lg btn-primary"><a href="{{url('register')}}">Sign Up</a></button>
        </fieldset>
        

    </form>
    
</body>
</html>