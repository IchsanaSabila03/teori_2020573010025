<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title','sistem')</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Akademik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link @yield('menuMahasiswa')" aria-current="page" href="/home>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('menuDosen')" aria-current="page" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('menuGallery')" aria-current="page" href="/product">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('menuGallery')" aria-current="page" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
@show
<div class="alert alert-primary text-center">Sistem Informasi Mahasiswa Ichsana Sabila</div>
@yield('content')
<footer class="bg-dark py-4 text-white mt-4">
    <div class="container">
      Sistem Informasi Mahasiswa Teknik Informatika | Copyright &copy; {{date("Y")}} Ichsana Sabila
    </div>
</footer>
</body>
</html>
