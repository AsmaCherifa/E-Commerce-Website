<?php
use App\Http\Controllers\productController;
$total = productController::cartItem();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index">E-Commerce</a>
        </li>
        <form action="search" class="d-flex">
        <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        <li class="nav-item">
          <a class="nav-link" href="#">Cart({{$total}})</a>
        </li>
        @if(Session::has('user'))
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="logout">Logout</a></li>
          </ul>
        </li>
      </ul>
      @else
      <li><a class="dropdown-item" href="login">login</a></li>
      @endif
    </div>
  </div>
</nav>