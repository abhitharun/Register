<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Welcome Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<style>

    .container{
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      
    }.container span{
        background-color: gold;
        color: white;
        padding: 15px;
        margin: 10pxpx;
        border-radius: 8px;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 5px;
        text-transform: uppercase;
    }.container p{
        margin: 20px;
    }.container .btn{
        margin-top: -30px;
        width: 150px;
        background-color: gold;
        color: white;
        font-weight: 500;
        letter-spacing: 5px;
        text-transform: uppercase;
        border-radius: 20px;
        margin-bottom: 50px;
    }.container .btn:hover{
        margin-top: -30px;
        width:200px;
        background-color: darkorange;
        font-weight: 500;
        transition: 1s;
        color: white;
    }
    .con {
      display: flex;
      justify-content: center;
      align-items: center;

    }
    .form-control {
      padding: 0 20px;
    }

    .form-group {
      margin: 10px;
    }
    .col-md-6 {
      gap: 50px;
    }

    .navbar {
      height: 100px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container2 {
      font-size: 220px;
      font-weight: 500;
    }

    img {
      width: 200px;
      height: 100px;
    }
</style>
</head>

<body>
 
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container2">
      <a class="navbar-brand" href="#">
        <img src="logo.png" alt="GeoElectric Logo" width="50" height="50">
        GeoElectric
      </a>
    </div>
  </nav>
</header>



<div class="container">
<h3>Welcome,  <span><?=$_SESSION['name'];?></span></h3>
<p>Your Email id is : <h6><?=$_SESSION['username'];?></h6></p>
<a href="javascript:void(0);" class="btn" onclick="redirect();">Titan-Settlers</a>
<a href="javascript:void(0);" class="btn" onclick="bot();">ChatBot</a>
<a href="index.php" class="btn">LOGOUT</a>
</div>

<script>
    function redirect() {
        window.location.href = "https://titan-settler.netlify.app/";
    }
</script>

<script>
    function bot() {
        window.location.href = "https://mediafiles.botpress.cloud/df238044-ba8e-4807-89a2-22d8a997c5d9/webchat/bot.html";
    }
</script>

<footer>
  <div class="con">
    <div class="row">
      <div class="col-md-6">
        <h4>Follow Us</h4>
        <div class="social-icons">
          <a href="https://example.com/facebook" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://example.com/twitter" target="_blank"><i class="bi bi-twitter"></i></a>
        </div>
      </div>
      <div class="col-md-6">
        <h4>Contact Us</h4>
        <form action="contact.php" method="post">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <textarea name="message" class="form-control" placeholder="Your Message" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</footer>




  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/df238044-ba8e-4807-89a2-22d8a997c5d9/webchat/config.js" defer></script>
</body>

</html>