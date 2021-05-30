<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- asset --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    {{-- css theme --}}
    <link href="/assets/css/theme.css" rel="stylesheet" />
    <title>@yield('title')</title>
</head>
<body>


  <main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-flex align-items-center fw-semi-bold fs-3" href="#"> <img class="me-3" src="assets/img/gallery/logo.png" alt="" />
            <div class="text-primary font-base">List BukuMu</div>
          </a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item"><a class="nav-link  @yield("hover-nav-home")" aria-current="page" href="/">Home</a></li>
              <li class="nav-item"><a class="nav-link @yield("hover-nav-list-favorite")" href="/my-favorite">My List Favorite</a></li>

              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">More</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Profile ⚠</a></li>
                  <li><a class="dropdown-item" href="/create-list">Buat list baru</a></li>
                </ul>
              </li>
            </ul>
            <form class="ps-lg-5">
              <button class="btn btn-lg btn-primary rounded-pill bg-gradient font-base order-0" type="submit">Login</button>
            </form>
          </div>
        </div>
      </nav>


    @yield("container")
  </main>

  {{-- javascript --}}
     <script src="/vendors/@popperjs/popper.min.js"></script>
    <script src="/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
</body>
</html>
