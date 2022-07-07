<!doctype html>
<html lang="en">

<head>
    <script type="text/javascript" src="js.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="partial/style.css">
    <title>Universe docode</title>
</head>

<body id="secondPage">
    <?php include 'partial/Header.php'; ?>
    <?php include 'partial/_dbconect.php'; ?>
    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `decode question` WHERE decode_id=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $title = $row['decode_title'];
        $desc = $row['decode_desc'];
        echo '<div class="container my-3">
    <div class="card text-center">
    <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
    <li class="nav-item">
    <a class="nav-link bg-warning text-dark" href="#"><b>UserAccount<b></a>
    </li>
    <li class="nav-item">
    <a class="nav-link bg-warning text-dark ml-2" href="#"><b>UserActivity<b></a>
    </li>
    </ul>
    </div>
    <div class="card-body">
    <h2 class="card-title"><b>' . $title . '<b></h2>
    <h5 class="card-text">' . $desc . '</h5>
      <a href="#" class="btn btn-warning">Shout</a>
      </div>
      </div>
      </div>';
    }

    ?>
        <div class="container1">
        <h2>Leave Us a Comment</h2>
        <form>
            <textarea placeholder='Add Your Comment'></textarea>
            <div class="btn2">
                <input type="submit" value='Comment'>
                <button id='clear' href='#'>Cancel</button>
            </div>
        </form>
    </div>
    <h1 class="text-center py-2">Discussion</h1>

    <?php
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `comments` WHERE thread_id=$id";
    $result = mysqli_query($conn, $sql);
    $noresult = true;
    while ($row = mysqli_fetch_assoc($result)) {
        $noresult = false;
        $id = $row['comment_id'];
        $content = $row['comment_content'];

        echo '<div class="container d-flex justify-content-center align-items-center heigth-vh">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="d-flex flex-column" id="comment-container">
                    <div class="bg-white">
                        <div class="flex-row d-flex mt-3">
                                <img src="/forumPHPproject/dp.jpg" width="40" height="auto" ml-3 class="rounded-circle img">
                            <div class="d-flex flex-column justify-content-start ml-3">
                                <span class="d-block font-weight-bold name">Wonder Woman</span>
                                <span class="date text-black-50">Public - 09Jun, 2022</span>
                            </div>
                        </div>

                        <div class="mt-2">
                            <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi et numquam, quibusdam incidunt doloribus tempore laborum quas perferendis ea quos blanditiis quia itaque aspernatur inventore. Ipsum obcaecati blanditiis voluptatibus rem?</p>
                        </div>
                    </div>
                    <div class="bg-white">
                        <div class="d-flex flex-row fs-14">
                            <div class="p-2 cursor p-2"><i class="fa fa thumbs-o-up"></i> <span class="ml-1">Like</span></div>
                            <div class="p-2 cursor p-2"><i class="fa fa thumbs-o-comment"></i> <span class="ml-1">Reply</span></div>
                            <div class="p-2 cursor p-2"><i class="fa fa thumbs-o-share"></i> <span class="ml-1">Share</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>';
    }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        var feild = document.querySelector('textarea');
        var backUp = feild.getAttribute('placeholder');
        var btn2 = document.querySelector('.btn2');
        var clear = document.getElementById('clear')

        feild.onfocus = function() {
            this.setAttribute('placeholder', '');
            this.style.borderColor = '#333';
            btn2.style.display = 'block'
        }

        feild.onblur = function() {
            this.setAttribute('placeholder', backUp);
            this.style.borderColor = '#aaa'
        }

        clear.onclick = function() {
            btn2.style.display = 'none';
            feild.value = '';
        }
    </script>
</body>

</html>