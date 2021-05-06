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
    <title>Log In</title>
  </head>
  <body class="bd">
    <div class="hias"></div>
    <div class="container">
      <div class="login-box shadow-lg">
        <form action="" method="post">
          @csrf
          <div class="form">
            <h1 class="h1 mb-3 font-monospace">Log In</h1>
            <label for="email" class="form-label mt-4">E-mail</label>
            @error('email')
              <div class="text-danger mt-2">
                  {{ $message }}
              </div>
            @enderror
            <input id="email" name="email" type="email" class="form-control" autofocus>
            <label for="password" class="form-label mt-4">Password</label>
            <input id="password" name="password" type="password" class="form-control">
            <div class="mt-4 mb-4">
              <div class="row">
                <div class="col-lg-6" style="text-align: left;">
                  <input class="form-check-input" type="checkbox" id="remember" name="remember">
                  <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <div class="col-lg-6" style="text-align: right;">
                  <a class="mt-0 link-secondary" href="#">Forget Password ?</a>
                </div>
              </div>
            </div>
            <button type="submit" class="text-light form-control mt-3" style="background-color: #643FDB;">Log In</button>
          </div>
        </form>
        <div class="row my-3">
          <div class="col-lg-5"><hr></div>
          <div class="col-lg-2 text-center">
            <p>or</p>
          </div>
          <div class="col-lg-5"><hr></div>
        </div>
        <a class="text-center text-decoration-none shadow-sm form-control p-2" style="cursor: pointer;" href=""><img src="assetLoginRegis/icon/google.svg" alt="" height="20px"> Log In With Google</a>
        <hr class="my-4">
        <div class="text-center">
          <label>Don't have an account? <a href="#">Sign up</a></label>
        </div>
      </div>
    </div>
    <div class="hiasbawahkiri"></div>
    <div class="hiasbawahkanan"></div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
  </body>
</html>