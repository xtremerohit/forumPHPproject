<?php
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="/forumPHPproject/index.php">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item bg-warning ml-2 mx-3">
      <a class="nav-link text-dark" href="/news.php">News</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Category
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Astronomy</a>
        <a class="dropdown-item" href="#">Biology</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
      <li class="nav-item">
      <a class="nav-link" href="/about.php">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/contact.php">Contact</a>
    </li>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  <button class="btn btn-warning ml-2"  data-toggle="modal" data-target="#loginModal" "><b>Login<b></button>
  <button class="btn btn-warning mx-1" data-toggle="modal" data-target="#singupModal" "><b>Singup<b></button>
</div>
</nav>';

include 'partial/_loginModal.php';
include 'partial/_singupModal.php';
?>