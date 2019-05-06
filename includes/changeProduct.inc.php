<?php
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Here we change the data base elements with mysql~~~~~~~~~~~~~~~~~~~~~~~~~~~~
if (isset($_POST['submit'])){

      include_once 'dbh.inc.php';
      $id = mysqli_real_escape_string($conn, $_POST['id']);
      $title = mysqli_real_escape_string($conn, $_POST['title']);
      $price = mysqli_real_escape_string($conn, $_POST['price']);
      $pricer = mysqli_real_escape_string($conn, $_POST['pricer']);
      $img1 = mysqli_real_escape_string($conn, $_POST['img1']);
      $img2 = mysqli_real_escape_string($conn, $_POST['img2']);
      $img3 = mysqli_real_escape_string($conn, $_POST['img3']);
      $description = mysqli_real_escape_string($conn, $_POST['description']);
      $genre = mysqli_real_escape_string($conn, $_POST['genre']);
      $date = mysqli_real_escape_string($conn, $_POST['date']);
      $req = mysqli_real_escape_string($conn, $_POST['req']);
      $link = mysqli_real_escape_string($conn, $_POST['link']);

      include '../header.php';

      if(empty($id) ){
              header("Location: ../changeProduct.php?empty");
              exit();
      }
      if(!preg_match("/^[0-9]*$/", $price) ){
              header("Location: ../changeProduct.php?invalid");
              exit();
      }
      $sql= "SELECT * FROM products WHERE product_id= '$id' ";
      $result =mysqli_query($conn, $sql);
      $resultCheck =mysqli_num_rows($result);
      if($resultCheck < 1){
          header("Location: ../changeProduct.php?error");
          exit();
      }else{
        if(!empty($title) ){
          $sql="UPDATE products SET product_title='$title'  WHERE product_id='$id'";
          mysqli_query($conn, $sql);
        }
        if(!empty($price) ){
          $sql="UPDATE products SET product_price='$price'  WHERE product_id='$id'";
          mysqli_query($conn, $sql);
        }
        if(!empty($pricer) ){
          $sql="UPDATE products SET product_reduced_price='$pricer'  WHERE product_id='$id'";
          mysqli_query($conn, $sql);
        }
        if(!empty($img1) ){
          $sql="UPDATE products SET product_image1='$img1'  WHERE product_id='$id'";
          mysqli_query($conn, $sql);
        }
        if(!empty($img2) ){
          $sql="UPDATE products SET product_image2='$img2'  WHERE product_id='$id'";
          mysqli_query($conn, $sql);
        }
        if(!empty($img3) ){
          $sql="UPDATE products SET product_image3='$img3'  WHERE product_id='$id'";
          mysqli_query($conn, $sql);
        }
        if(!empty($description) ){
          $sql="UPDATE products SET product_description='$description'  WHERE product_id='$id'";
          mysqli_query($conn, $sql);
        }
        if(!empty($genre) ){
          $sql="UPDATE products SET product_game_genre='$genre'  WHERE product_id='$id'";
          mysqli_query($conn, $sql);
        }
        if(!empty($date) ){
          $sql="UPDATE products SET product_release_date='$date'  WHERE product_id='$id'";
          mysqli_query($conn, $sql);
        }
        if(!empty($req) ){
          $sql="UPDATE products SET product_system_requirements='$req'  WHERE product_id='$id'";
          mysqli_query($conn, $sql);
        }
        if(!empty($link) ){
          $sql="UPDATE products SET product_youtube_link='$link'  WHERE product_id='$id'";
          mysqli_query($conn, $sql);
        }
      //  $sql="UPDATE products SET product_title='$title',product_price='$price',product_image1='$img1',product_image2='$img2',product_image3='$img3',product_description='$description',product_game_genre='$genre' ,product_release_date='$date',	product_system_requirements='$req',product_youtube_link='$link'  WHERE product_id='$id'";
        //mysqli_query($conn, $sql);
      }



      header("Location: ../changeProduct.php?success");
      exit();
    }
