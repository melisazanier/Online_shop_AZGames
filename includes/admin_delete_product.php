<?php
//~~~~~~~~~~~~~~~~~~~~~~~Here we delete any user from admin account~~~~~~~~~~~~~~~~~~~~~~~

if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';
    include '../header.php';

    $code = mysqli_real_escape_string($conn, $_POST['code']);

    //~~~~~~~~~~~~~~~~~Check for empty fields~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if( empty($code) ){
         header("Location: ../myAccount.php?code_empty");
         exit();
       }
       else{
         $sqlUser = "SELECT * FROM products WHERE product_id= '$code'";
         $resultUser=mysqli_query($conn, $sqlUser);
         $resultCheckUser=mysqli_num_rows($resultUser);

         if($resultCheckUser>0){
            //delete the user into the batabase
            $sql = "DELETE FROM products WHERE product_id='$code'";
            mysqli_query($conn, $sql);
            header("Location: ../myAccount.php?user_deleted");
            exit();
          }
          else{

            header("Location: ../myAccount.php?product_fail_delete");
            exit();
          }

        }
}
