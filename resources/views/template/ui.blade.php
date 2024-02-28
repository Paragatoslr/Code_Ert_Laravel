<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CODE ERT</title>
</head>
<body>

    <style>
        body{
            background-image: url('{{ asset("images/post-apoc-bg.jpg") }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>

    <nav class="navbar navbar-expand-lg bg-dark  py-4">
        <div class="container-fluid">

          <a class="navbar-brand" href="#">
            <img src="{{ asset('images/wht-logo.png') }}" alt=" " width="250" height="35">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link px-4  {{ request()->is('/') ? 'text-warning fw-bold' : 'text-white' }} " aria-current="page" href="{{ route('index') }}">Home</a>
              <a class="nav-link px-4 {{ request()->is('character') ? 'text-warning fw-bold' : 'text-white' }}" href="{{ route('character') }}">Character</a>
              <a class="nav-link text-white px-4" href="#">About Us</a>
              <a class="nav-link text-white px-4 disabled" aria-disabled="true">Interactive Video</a>
            </div>
          </div>

        </div>
    </nav>

@yield('content')


<div class="container-fluid bg-dark py-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-5">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col text-center"><i class="bi bi-facebook fs-4 text-secondary"></i></div>
                    <div class="col text-center"><i class="bi bi-instagram fs-4 text-secondary"></i></div>
                    <div class="col text-center"><i class="bi bi-envelope-open-fill fs-4 text-secondary"></i></i></div>
                </div>
                <div class="row text-center py-5">
                    <p class="text-secondary"> Copyright © 2023 Code ERT - All Rights Reserved</p>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@yield('script')


</body>
</html>
