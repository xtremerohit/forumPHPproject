<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Forum</title>
  </head>
  <body>
    <?php include 'partial/Header.php'; ?>
    <?php include 'partial/_dbconect.php'; ?>
<div class="indeximage">
<div class="card-header text-center text-dark bg-warning"><strong><h3>Discuss About Universe</h3></strong></div>


            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://source.unsplash.com/2300x700/?cosmos,universe" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/2300x700/?astronomy,astronut" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/2300x700/?nasa,galexy" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
</div>
</div>

<!-- Category Container start here -->
<div class="container my-3 ">
<h1 class="text-center my-3">Your Category!</h1>
<div class="row center">
<!-- fetch All category Using for Loops -->
<?php 
$sql = "SELECT * FROM `categorys`"; 
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
  $id = $row['category_id'];
  $categoryName = $row['category_name'];
  $categoryDescription = $row['category_description'];

  echo '  <div class="col-md-4 my-2 ">  
  <div class="card" style="width: 18rem;">
    <div class="text-center card-header bg-warning" ><a href="/threadlist.php" style="color: #000000"<text><strong>'. $categoryName .'</strong></text></a></div>
    <img src="https://source.unsplash.com/500x400/?'.$categoryName.',universe" class="card-img-top" alt="universe">
    <div class="card-body text-black bg-warning">
      <h5 class="card-title style="color: #000000"><a href="/forumPHPproject/threadlist.php?catid='.$id.'" style="color: #000000"<strong>'. $categoryName . '</strong></a></h5>
      <p class="card-text">'. substr($categoryDescription, 0 , 30).'...</p>
    <a href="/forumPHPproject/threadlist.php?catid='.$id.'" class="btn btn-primary border-secondary">Shout Your Question </a>
    </div>
  </div>
</div>';
}
?>
<!-- Category Container end here -->

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>