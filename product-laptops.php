<?php

  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con, 'technologyshop');
  $sql= "SELECT * FROM products WHERE featured=2 AND title like '%laptop%'";
  $featured = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> TechnologyShop </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"> </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">TechnologyShop.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto mb-2 mb-lg-2">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="product-laptops.php">Laptop</a></li>
          <li><div class="dropdown-divider"></div></li>
          <li><a class="dropdown-item" href="product-phones.php">Phones</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<div class="col-md-5"> </div>

  <div class="col-md-8">
    <div class="row">
      <h2 class="text-align:center;"> Top Product</h2> 
      <br> </br>
      <div></div>
      <?php
        while($product = mysqli_fetch_assoc($featured)):

      ?>
      <div class = "col-md-8">
        <h4> <?= $product['title'];?></h4>
        <img src="<?= $product['image'];?>" alt="<?= $product['title']; ?>"/>
        <p class="lprice">Rs <?= $product['price'];?></p>
        <a href ="details.php">
          <button type="button" class="btn btn-success" data-toggle="modle" data-target="#details-1"> More </button>
        </a>  
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</body>
<footer class="page-footer font-small-black  bg-dark">
<div class="footer-copyright text-center py-3 text-white">© 2022 Copyright:
  <a href="index.php"> TechnologyShop.com</a>
</div>
</footer>
</html>