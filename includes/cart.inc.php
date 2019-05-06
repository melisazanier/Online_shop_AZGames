<?php
if (isset($_POST['submit'])){

      include_once 'dbh.inc.php';
      include '../header.php';

      $id_product= $_POST['submit'];


      $sql= "SELECT * FROM products WHERE product_id='$id_product'";
      $result =mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      $id_product=mysqli_real_escape_string($conn,$row['product_id']);

      $var= $_SESSION['u_id'];

      $sql1="INSERT INTO cart( cart_id_product,cart_id_user) VALUES ('$id_product','$var');";

       mysqli_query($conn, $sql1);
       header("Location: ../cart.php");
      exit();
}
