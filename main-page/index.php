<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UpsideDown</title>
  <!-- vanilla css -->
  <link rel="stylesheet" href="style.css">
  <!-- bootsrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- bootsrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
  <div class="base container-fixed m-0 p-0">
    <div class="home container-fixed m-0 p-0" id="home">
      <header class="container-fluid d-xxl-flex d-xl-flex d-lg-block d-md-block d-sm-block align-items-center justify-content-xxl-center justify-content-xl-center justify-content-lg-center justify-content-md-center justify-content-sm-center">
        <div class="container-lg d-flex align-items-center justify-content-evenly">
          <div class="hamburgerWrapper d-flex justify-content-center align-items-center">
            <div class="hamburger"></div>
          </div>
          <div class="logoWrapper text-center">
            <img class="img-fluid" src="assets/UpsideDown logo.png" alt="">
          </div>
          <div class="inputWrapper rounded-3 d-xxl-flex d-xl-flex d-lg-none d-md-none d-sm-none flex-row align-items-center justify-content-evenly">
            <span>
              <i class="bi bi-search"></i>
            </span>
            <input class="border-0 bg-transparent" type="text" placeholder="Search Something...">
          </div>
          <nav>
            <ul class="d-flex align-items-center justify-content-center">
              <li class="list-unstyled">
                <a class="text-decoration-none text-dark fw-semibold" href="#home">Home</a>
              </li>
              <li class="list-unstyled ms-xxl-5 ms-xl-5 ms-lg-0 ms-md-0 ms-sm-0">
                <a class="text-decoration-none text-dark fw-semibold" href="#about">About</a>
              </li>
              <li class="list-unstyled ms-xxl-5 ms-xl-5 ms-lg-0 ms-md-0 ms-sm-0">
                <a class="text-decoration-none text-dark fw-semibold" href="#Contact">Contact</a>
              </li>
            </ul>
          </nav>
          <a  type="button" href="../login-page/index.php" class="btn btn-primary">SIGN OUT<a>
        </div>
      </header>
      <main class="mainContent container-fluid d-flex justify-content-center align-items-center m-0 p-0">
        <div class="container-lg m-0 p-0 row justify-content-center">
          <div class="heroTitleWrapper col-xxl-3 col-xl-3 col-lg-4 col-sm-12 text-xxl-start text-xl-start text-lg-start text-md-center text-sm-center pb-xxl-0 pb-xl-0 pb-lg-0 pb-md-5">
            <h1 class="heroTitle display-4 fw-semibold mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-5">Create <span>&</span> Design Your Own</h1>
            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
          </div>
          <div class="col-xxl-7 col-xl-2 p-0 text-xxl-end text-xl-end text-lg-end text-md-center text-sm-center pt-xxl-0 pt-xl-0 pt-lg-0 pt-md-5 d-xxl-block d-xl-block d-lg-block d-md-none d-sm-none">
            <img class="img-fluid mt-xxl-0 mt-xl-0 mt-lg-0" src="assets/Group 110.png" alt="">
          </div>
        </div>
      </main>
      <footer class="container-fluid m-0 p-0 d-lg-none">
        <img class="w-100" src="assets/wave.png" alt="">
      </footer>
    </div>
    <div class="about container-fluid m-0 d-flex justify-content-center align-items-center pt-xxl-0 pt-xl-0 pt-lg-0 pt-md-10" id="about">
      <div class="container-lg m-0 p-0 p-3">
        <main class="row align-items-center">
          <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-2 col-sm-5 float-md-start">
            <div class="aboutTextWrapper text-start ps-3 pt-xxl-0 pt-xl-0 pt-lg-0 pt-md-5">
              <h1 class="fw-bold display-3 m-2">About Us</h1>
              <h1 class="display-4">We Are <span class="fw-bold">UpsideDown</span></h1>
              <p class="fs-5 mt-4">UpsideDown is a website that has a variety of interesting designs</p>
              <a href="#Contact" class="mt-4 btn btn-primary btn-lg fw-bold fs-6 w-100 py-2">See More</a>
            </div>
          </div>
          <div class="peepsWrapper col-xxl-7 col-xl-7 col-lg-6 text-end pt-md-5 pt-sm-5">
            <img class="img-fluid w-75 mt-md-5 mt-sm-5" src="assets/peeps.png" alt="">
          </div>
        </main>
      </div>
    </div>
    <div class="about container-fluid m-0 d-flex justify-content-center align-items-center pt-xxl-0 pt-xl-0 pt-lg-0 pt-md-10" id="about">
      <div class="container-lg m-0 p-0 p-3">
        <main class="row align-items-center">
          <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-2 col-sm-5 float-md-start">
            <div class="aboutTextWrapper text-start ps-3 pt-xxl-0 pt-xl-0 pt-lg-0 pt-md-5">
              <h1 class="fw-bold display-3 m-2">About Us</h1>
              <h1 class="display-4">We Are <span class="fw-bold">UpsideDown</span></h1>
              <p class="fs-5 mt-4">UpsideDown is a website that has a variety of interesting designs</p>
              <a href="#Contact" class="mt-4 btn btn-primary btn-lg fw-bold fs-6 w-100 py-2">See More</a>
            </div>
          </div>
          <div class="peepsWrapper col-xxl-7 col-xl-7 col-lg-6 text-end pt-md-5 pt-sm-5">
            <img class="img-fluid w-75 mt-md-5 mt-sm-5" src="assets/peeps.png" alt="">
          </div>
        </main>
      </div>
    </div>

  </div>
  </div>
  <!-- magic js -->
  <script src="app.js"></script>
</body>
</html>