<?php
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Here we change the data base elements with mysql~~~~~~~~~~~~~~~~~~~~~~~~~~~~
if (isset($_POST['submit'])){

      include_once 'dbh.inc.php';

      $title = mysqli_real_escape_string($conn, $_POST['title']);
      $price = mysqli_real_escape_string($conn, $_POST['price']);
      $img1 = mysqli_real_escape_string($conn, $_POST['img1']);
      $img2 = mysqli_real_escape_string($conn, $_POST['img2']);
      $img3 = mysqli_real_escape_string($conn, $_POST['img3']);
      $description = mysqli_real_escape_string($conn, $_POST['description']);
      $genre = mysqli_real_escape_string($conn, $_POST['genre']);
      $date = mysqli_real_escape_string($conn, $_POST['date']);
      $req = mysqli_real_escape_string($conn, $_POST['req']);
      $link = mysqli_real_escape_string($conn, $_POST['link']);

      include '../header.php';
      if(!preg_match("/^[0-9]*$/", $price) ){
              header("Location: ../addProduct.php?invalid");
              exit();
      }

     $sql = "INSERT INTO products ( product_title,product_price,product_reduced_price, 	product_image1, 	product_image2, 	product_image3, product_description, product_game_genre, product_release_date,product_year, 	product_system_requirements, product_youtube_link) VALUES ('$title','$price','-1.00',  '$img1', '$img2', '$img3', '$description','$genre', '$date','2019','$req', '$link');";

      mysqli_query($conn, $sql);
      header("Location: ../addProduct.php?succes");
      exit();
    }
