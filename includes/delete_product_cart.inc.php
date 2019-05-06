<?php
if (isset($_POST['delete'])){

      include_once 'dbh.inc.php';
      include '../header.php';

      $id_product= $_POST['delete'];

     echo $id_product;
      //$sql= "SELECT * FROM products WHERE product_id='$id_product'";
      $sql = "DELETE FROM cart WHERE cart_id_product='$id_product'";

       mysqli_query($conn, $sql);
       header("Location: ../cart.php");
      exit();
}
