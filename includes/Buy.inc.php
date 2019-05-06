<?php
//Here we check the register forms if they are correct and then we create an account
if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $exp_date = mysqli_real_escape_string($conn, $_POST['expiration_date']);
    $card_no = mysqli_real_escape_string($conn, $_POST['card_number']);
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);


    //Check for empty fields
    if(empty($exp_date) || empty($card_no) || empty($cvv) ){
         header("Location: ../finalize_order.php");
         exit();
}
  else{


    //echo $exp_date;
    //echo $card_no;
    //echo $cvv;

    $id_user= $_POST['submit'];
    //echo $id_user;

    $sql= "SELECT * FROM cart WHERE cart_id_user='$id_user'";
    $result =mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $id_product=mysqli_real_escape_string($conn,$row['cart_id_product']);

        //echo $id_product;
        $code= (rand(100000000, 999999999) );
        echo $code. "<br>";
        $sql1="INSERT INTO users_orders(order_product_id,order_id_user,order_code) VALUES ('$id_product','$id_user','$code');";

         mysqli_query($conn, $sql1);
  }
  $sql2="DELETE FROM cart WHERE cart_id_user ='$id_user'";
  mysqli_query($conn, $sql2);

    header("Location: ../myProducts.php");
    exit();

 }
}
