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
    <div class="hias"></div>
    <div class="container">
      <div class="regis-box shadow-lg">
        <form>
          <div class=" form">
            <h1 class="h1 mb-3 font-monospace">Register</h1>
            <label for="email" class="form-label mt-4">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" required autofocus>
            <label for="password" class="form-label mt-4">Password</label>
            <input type="password" class="form-control" name="password" id="password" required>
            <label for="confirmPassword" class="form-label mt-4">Confirm Password</label>
            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required>
            <label for="name" class="form-label mt-4">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
            <label for="birth" class="form-label mt-4">Date of birth</label>
            <input type="date" class="form-control" name="birth" id="birth" required>
            <button class=" text-light form-control mt-4" style="background-color: #643FDB;">Log In</button>
            <div class="row my-3">
                <div class="col-lg-5"><hr></div>
                <div class="col-lg-2 text-center">
                  <p>or</p>
                </div>
                <div class="col-lg-5"><hr></div>
            </div>
            
            <a class="text-center text-decoration-none shadow-sm form-control p-2" style="cursor: pointer;" href=""><img src="assetLoginRegis/icon/google.svg" alt="" height="20px"> Log In With Google</a>
            <hr class="my-4">
            <div class="text-center ">
              <label>Already signed up? <a href="#">Go to login</a></label>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="hiasbawahkiri"></div>
    <div class="hiasbawahkanan"></div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="assetLoginRegis/js/bootstrap.js"></script>
    <script src="assetLoginRegis/js/bootstrap.min.js"></script>
  </body>
</html>