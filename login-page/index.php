<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- vanilla css -->
  <link rel="stylesheet" href="style.css">
  <!-- bootsrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- bootsrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body class="container-fluid m-0 p-0">
  <div class="base container-fluid m-0 p-0 d-flex align-items-center">
    <main class="container-sm d-flex justify-content-center">
      <div class="row wrapper shadow-lg rounded-4 col-md-9 col-sm-11">
        <div class="col1 col-xxl-6 col-xl-6 col-lg-12 col-md-12 d-md-flex flex-column">
          <div class="text-center m-0 p-0">
            <h1 class="title fw-bold fs-5 mt-5">Welcome to</h1>
            <div class="d-flex flex-row justify-content-center me-3 align-items-center">
              <img class="img-fluid w-20" src="assets/UpsideDown logo.png" alt="">
              <h2 class="brandName fw-bold fs-1 m-1 p-1 "> UpsideDown </h2>
            </div>
            <div class="text-center mt-5">
              <h2 class="loginTitle fs-2 ">LOGIN PAGE</h2>
            </div>
          </div>
          <form class="m-0 p-0 pt-3" action="">
            <ul class="d-flex flex-column align-items-center justify-content-center m-0 p-0">
              <li class="list-unstyled border border-2 rounded-pill d-flex flex-row align-items-center">
                <span><i class="bi bi-person mx-2"></i></span>
                <input class="w-75 border-0" type="text" placeholder="Username">
              </li>
              <li class="list-unstyled border border-2 rounded-pill mt-4 d-flex flex-row align-items-center justify-content-evenly">
                <span><i class="bi bi-lock ms-lg-2"></i></span>
                <input class="w-75 border-0" type="password" placeholder="Password" id="password">
                <span><i class="bi bi-eye me-lg-2" id="eye"></i></span>
              </li>
              <!-- <li class="list-unstyled mt-5 bg-light"> -->
                <a href="../main-page/index.php" class="my-4 btn btn-primary w-75 h-100 rounded-pill fw-bold text-light">LOGIN</a>
              <!-- </li> -->
            </ul>
            <p class="text-center my-4">Belum punya akun?<span><a class="text-primary fw-bold" href="../register-page/index.php"> Daftar disini</a></span></p>
          </form>
        </div>
        <div class="col2 col-xxl-6 col-xl-6">
          <img class="img-fluid w-40" src="assets/UpsideDown logo.png" alt="">
        </div>
      </div>
    </main>
  </div>
  <div class="lingkarAtasWrapper position-fixed top-0 start-0"></div>
  <div class="lingkarBawahWrapper position-fixed bottom-0 end-0"></div>
  <!-- js -->
  <script src="app.js"></script>
</body>
</html>