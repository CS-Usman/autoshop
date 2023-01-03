<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Yourself</title>

    <!-- CSS CDN -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/signIn.css') }}" >
    
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<section>
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="post" action="register">
                @csrf
                <fieldset>

                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="username"/>
                    <label class="form-label" for="form3Example1cg">Your Name</label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="usermail"/>
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example4cg" class="form-control form-control-lg" name="userpass"/>
                    <label class="form-label" for="form3Example4cg">Password</label>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example5cg" class="form-control form-control-lg" name="useraddress"/>
                    <label class="form-label" for="form3Example5cg">Address</label>
                  </div>
                  <div class="d-flex justify-content-center">
                    <button class=" btn btn-lg btn-primary" type="submit">Register</button>
                  </div>
                </fieldset>



              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>