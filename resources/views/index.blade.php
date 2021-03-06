<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}"/>
    <title>D'artStore</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container">
    <a class="navbar-brand" href="{{('/')}}">Toko Kue Online</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-4 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 250px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{('/')}}">Order</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kue
          </a>
          <ul class="dropdown-menu bg-primary" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Kue Kering</a></li>
            <li><a class="dropdown-item" href="#">Kue basah</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Other</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
        <ul class="dropdown-menu bg-primary" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Logout</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Other</a></li>
        </ul>
      </ul>
      <form class="d-flex">
        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
  </div>
</nav>

    <div class="container">
        <h1 class="showcase-heading">Toko Online</h1>
        <div class="showcase-box">

    <div clas="container d-flex justify-content-center">
        <div class="row">
            <div class="col-lg-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src={{ asset('image/kering.jpg') }} style="width: 100% hight: 500px" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
            <img src={{ asset('image/kering2.jpg') }} style="width: 100% hight: 500px" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
            <img src={{ asset('image/kering3.jpg') }} style="width: 100% hight: 500px" class="d-block" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
            </div>
        </div>
    </div>
    </div>

        </div>
    </div>
    </div>

</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>