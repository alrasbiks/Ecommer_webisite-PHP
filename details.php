<?php

  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con, 'technologyshop');
  $sql= "SELECT * FROM products WHERE featured=1";
  $featured = $con->query($sql);
?>

<div class="col-md-5"> </div>

  <div class="col-md-8">
    <div class="">
      <h2 class="text-align:center;"> Product Details:</h2> 
      <div></div>
      <?php
        while($product = mysqli_fetch_assoc($featured)):

      ?>
      <div class = "col-md-8">
        <h4><?= $product['title'];?> </h4>
        <img src="<?= $product['image'];?>" alt="<?= $product['title']; ?>"/>
        <p class="lprice"><b>Rs <?= $product['price'];?></b></p>
        <p class="desc">Rs <?= $product['description'];?></p>
        <p class="bname">Rs <?= $product['brandname'];?></p> 
      </div>
      <?php endwhile; ?>