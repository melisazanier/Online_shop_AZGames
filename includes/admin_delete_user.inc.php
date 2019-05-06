<?php
//~~~~~~~~~~~~~~~~~~~~~~~Here we delete any user from admin account~~~~~~~~~~~~~~~~~~~~~~~

if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';
    include '../header.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);

    //~~~~~~~~~~~~~~~~~Check for empty fields~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if( empty($uid) ){
         header("Location: ../myAccount.php?user_empty");
         exit();
       }
       else{
         $sqlUser = "SELECT * FROM users WHERE user_uid= '$uid'";
         $resultUser=mysqli_query($conn, $sqlUser);
         $resultCheckUser=mysqli_num_rows($resultUser);

         if($resultCheckUser>0){
            //delete the user into the batabase
            $sql = "DELETE FROM users WHERE user_uid='$uid'";
            mysqli_query($conn, $sql);
            header("Location: ../myAccount.php?user_deleted");
            exit();
          }
          else{

            header("Location: ../myAccount.php?user_fail_delete");
            exit();
          }

        }
}
