<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
      <?php include '/partial/_dbconect_blogs.php'; ?> 
      <?php include 'partial/Header.php'; ?>
    <!-- <h1>Hello, world!</h1> -->
    <?php
    $id = $_GET['blogid'];
    $sql = "SELECT * FROM `wp9q_blogsposts` WHERE `ID`=$id";
    $result = mysqli_query($conn, $sql);
    $Noresults = true;
  
    while ($row = mysqli_fetch_assoc($result)) {
      $Noresults = false;
      $id = $row['ID'];
      $Post_title = $row['post_title'];
      $content = $row['post_content'];
  
      echo '<div class="block">
    <img src="https://source.unsplash.com/1600x900/?avtar,username" alt="">
    <h5 class="mt-0"><a class="text-white" href="/blogs.php?blogid=' . $id . '"><b>.' . $title . '<b></a></h5>
    <p>' . $content . '</p>
  </div>';
    }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>