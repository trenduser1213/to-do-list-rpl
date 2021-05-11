<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assetLoginRegis/css/bootstrap.css">
    <link rel="stylesheet" href="assetLoginRegis/css/bootstrap.min.css">
    <link rel="stylesheet" href="assetLoginRegis/css/bootstrap.css.map">
    <link rel="stylesheet" href="assetLoginRegis/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="assetLoginRegis/css/style.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>Register</title>
  </head>
  <body class="bd">
    <div class="background-overlay" style="background-image: url({{ asset('asset/img/background-overlay.jpg') }})"></div>
    <div class="login-container">
      <div class="regis-box shadow-lg">
        <form action="/register/create" method="post">
          @csrf
          <div class=" form">
            <h1 class="h1 mb-3 font-monospace">Register</h1>
            <label for="email" class="form-label mt-4">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" required autofocus>
            @error('email')
              <div class="text-danger mt-2">
                {{ ucfirst($message) }}
              </div>
            @enderror
            <label for="password" class="form-label mt-4">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
            @error('password')
              <div class="text-danger mt-2">
                {{ ucfirst($message) }}
              </div>
            @enderror
            <label for="confirmPassword" class="form-label mt-4">Confirm Password</label>
            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required>
            @error('confirmPassword')
              <div class="text-danger mt-2">
                {{ ucfirst($message) }}
              </div>
            @enderror
            <label for="name" class="form-label mt-4">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
            @error('name')
              <div class="text-danger mt-2">
                {{ ucfirst($message) }}
              </div>
            @enderror
            <label for="birth" class="form-label mt-4">Date of birth</label>
            <input type="date" class="form-control" name="birth" id="birth" required>
            @error('birth')
              <div class="text-danger mt-2">
                {{ ucfirst($message) }}
              </div>
            @enderror
            <button type="submit" class=" text-light form-control mt-4" style="background-color: #643FDB;">Register</button>
          </div>
        </form>
        <div class="row my-4">
          <div class="col-5"><hr></div>
          <div class="col-2 text-center">
            <p>or</p>
          </div>
          <div class="col-5"><hr></div>
        </div>
        
        <a class="text-center text-decoration-none shadow-sm form-control p-2" style="cursor: pointer;" href=""><img src="assetLoginRegis/icon/google.svg" alt="" height="20px"> Log In With Google</a>
        <hr class="my-4">
        <div class="text-center ">
          <label>Already signed up? <a href="/login">Login</a></label>
        </div>
      </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="assetLoginRegis/js/bootstrap.js"></script>
    <script src="assetLoginRegis/js/bootstrap.min.js"></script>
  </body>
</html>