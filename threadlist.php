<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
  .block {
  overflow: hidden;
  background: #333;
  padding: 1rem;
  max-width: auto;
  margin-left:auto;
  margin-right: auto;
  
  margin-top: 15px;

}
.block img {
  width: 54px;
  height: 54px;
  float: left;
  margin: 0 1rem 0 0;
  border-radius: 50%;

}
.block h2 {
  font-weight: 500;
  margin: 0 0 0.5rem 0;
}
.block p{
  color: cyan;
}
</style>
  <title>Universe docode</title>
</head>

<body>
  <?php include 'partial/Header.php'; ?>
  <?php include 'partial/_dbconect.php'; ?>
  <?php

  $id = $_GET['catid'];
  $sql = "SELECT * FROM `categorys` WHERE category_id=$id";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $catName = $row['category_name'];
    $catDesc = $row['category_description'];
    echo '<div class="taxt">
    <h5 class="card-header ">' . $catName . '</h5>
    <div class="card-body">
    <h5 class="card-title">Description</h5>
    <p class="card-text text-white"><p>' . $catDesc . '</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>';
  }
  $method = $_SERVER['REQUEST_METHOD'];
  echo $method;
  if ($method == 'POST') {
    $thread_title = $_POST['title'];
    $thread_desc = $_POST['desc'];
    

      $sql = "INSERT INTO `decode question` (`decode_title`, `decode_desc`, `decode_category_id`, `decode_user_id`, `timestamp`) VALUES ('$thread_title', '$thread_desc', '$id', '0', current_timestamp())";
      $result = mysqli_query($conn, $sql);
    
  }
  ?>
  <h1 class="text-center py-2">Questions</h1>
  <div class="container" style="text-align: center;">
    <div class="card my-3">

      <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
        <div class="form-group col-md-8 my-3" style="text-align: center;
    margin-left: auto;
    margin-right: auto;">
          <label for="exampleInputEmail1">Your Question</label>
          <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>
        </div>
        <div class="form-group col-md-8" style="text-align: center;
    margin-left: auto;
    margin-right: auto;">
          <label for="exampleFormControlTextarea1">Describe Question</label>
          <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary col-md-4">Submit</button>
      </form>
    </div>
  </div>
  <?php
  $id = $_GET['catid'];
  $sql = "SELECT * FROM `decode question` WHERE decode_category_id=$id";
  $result = mysqli_query($conn, $sql);
  $Noresults = true;

  while ($row = mysqli_fetch_assoc($result)) {
    $Noresults = false;
    $id = $row['decode_id'];
    $title = $row['decode_title'];
    $desc = $row['decode_desc'];

    echo '<div class="block">
  <img src="https://source.unsplash.com/1600x900/?avtar,username" alt="">
  <h5 class="mt-0"><a class="text-white" href="/forumPHPproject/thread.php?threadid=' . $id . '"><b>.' . $title . '<b></a></h5>
  <p>' . $desc . '</p>
</div>';
  }
  if ($Noresults) {
    echo '<div class="text-center">
  <b>Be The First To Ask Question<b>
  </div>';
    include 'partial/NewQuestionModal.php';
    echo '<div class="text-center my-3">
  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#NewQuestionModal">
  <b>Ask Queatios Or Idea\'s<b>
  </button>
  </div>';


    // New NewQuestionModal Demo Button

    //     echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NewQuestionModal">
    //     Launch demo modal
    // </button>';


  }
  ?>
  <!-- 
          <div class="media my-3">
          <img class="rounded-circle mr-3" src="https://source.unsplash.com/1600x900/?avtar,username" width="70px" alt="Generic placeholder image">
          <div class="media-body">
          <h5 class="mt-0">Media heading</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
          </div>
          </div> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>