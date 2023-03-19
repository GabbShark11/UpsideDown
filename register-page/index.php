<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <!-- vanilla css -->
  <link rel="stylesheet" href="style.css">
  <!-- bootsrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- bootsrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
  <div class="base container-fluid m-0 p-0 d-flex justify-content-center align-items-center">
    <main class="container-lg row justify-content-center align-items-center m-0 p-0">
      <div class="col1 col-xxl-3 col-xl-3 d-xxl-flex d-xl-flex justify-content-end align-items-end d-lg-none d-md-none d-sm-none">
        <img class="img-fluid w-100" src="assets/man-illustrasion.png" alt="">
      </div>
      <div class="col2 col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-8 border border-primary border-4 rounded-4 shadow-lg bg-light">
        <div class="text-center py-4">
          <h1 class="registerTitle fw-semibold fs-2">REGISTER</h1>
        </div>
        <form action="" class="d-flex justify-content-center m-0 p-0">
          <ul>
            <li class="inputWrapper list-unstyled border border-3 rounded-pill d-flex flex-row align-items-center justify-content-evenly">
              <span class="h-75 d-flex justify-content-center align-items-center">
                <i class="bi bi-person"></i>
              </span>
              <input class="border-0 h-100 bg-light w-75" type="text" placeholder="Username">
            </li>
            <li class="inputWrapper list-unstyled border border-3 rounded-pill mt-4 d-flex flex-row align-items-center justify-content-evenly ">
              <span class="h-75 d-flex justify-content-center align-items-center">
                <i class="bi bi-envelope"></i>
              </span>
              <input class="border-0 h-100 bg-light w-75" type="text" placeholder="Email">
            </li>
            <li class="inputWrapper list-unstyled border border-3 rounded-pill mt-4 d-flex flex-row align-items-center justify-content-evenly ">
              <span class="h-75 d-flex justify-content-center align-items-center">
                <i class="bi bi-lock"></i>
              </span>
              <input class="border-0 h-100 bg-light w-75 ms-3 ms-sm-0" id="passwordInput" type="password" placeholder="Password" autocomplete="off">
              <span class="h-75 d-flex justify-content-center align-items-center">
                <i class="bi bi-eye" id="eye"></i>
              </span>
            </li>
            <li class="inputWrapper list-unstyled border border-3 rounded-pill mt-4 d-flex flex-row align-items-center justify-content-evenly ">
              <span class="h-75 d-flex justify-content-center align-items-center">
                <i class="bi bi-lock"></i>
              </span>
              <input class="border-0 h-100 bg-light w-75 ms-3 ms-sm-0" id="passwordInput" type="password" placeholder="Repeat Password" autocomplete="off">
              <span class="h-75 d-flex justify-content-center align-items-center">
                <i class="bi bi-eye" id="eye"></i>
              </span>
            </li>
            <li class="inputWrapper list-unstyled mt-4 d-flex">
              <a href="../main-page/index.php" class="btn btn-primary w-100 d-flex align-items-center justify-content-center fs-5 fw-semibold">Daftar</a>
            </li>
          </ul>
        </form>
        <div class="text-center mt-3">
          <p>Sudah punya akun? <span><a class="text-primary" href="../login-page/index.php">Login sekarang</a></span></p>
        </div>
      </div>
    </main>
  </div>
  <img class=" position-fixed top-0 start-0"></img>
  <img  src="assets/lingkaranBawahh.png"></img>
  <!-- magic js -->
  <script src="app.js"></script>
</body>
</html>