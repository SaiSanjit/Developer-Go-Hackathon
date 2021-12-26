<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body allign="right" bgcolor=black>
    <?php require 'partials/_nav.php' ?>
    <h1> Hello Engineer,Welcome to Campus Hub</h1>
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Heartly Welcome  - <?php echo $_SESSION['username']?></h4>
      <p>We are really happy to have you here.Hope you will find all your requirements for your academics here .Well,You are logged in as    <?php echo $_SESSION['username']?>    Check out new resources and your subscribed pdfs for your study.Happy Learning</p>
      <hr>
      <p class="mb-0">You can logout  <a href="/Deploy/logout.php"> using this link.</a></p>
    </div>
  </div>

  <div class="container">
    <div class="row text-center py-5">

        <form action="/Deploy" method="post">
          <div class="card shadow">
            <div>
              <img src="./upload/book4.JPG" alt="No image" class="img-fluid card-img-top" width="1000" height="500">
            </div>
            <div class="card.-body">
              <h5 class="card-title">PDFS</h5>
              <h6>
                <i class="fas fa-star"></i>
              </h6>
                <button type="submit" class="btn btn-warning my-3"name="Check out pdf model resources" >Go to pdf resources
                  <classi class="fas fa-shopping-cart"></button>

            
          </div>

   </div>  
  






</div>    
</form>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  





  
  </body>
</html>