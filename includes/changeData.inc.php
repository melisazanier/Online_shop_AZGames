<?php
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Here we change the data base elements with mysql~~~~~~~~~~~~~~~~~~~~~~~~~~~~
if (isset($_POST['submit'])){

      include_once 'dbh.inc.php';

      $first = mysqli_real_escape_string($conn, $_POST['first']);
      $last = mysqli_real_escape_string($conn, $_POST['last']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $uid = mysqli_real_escape_string($conn, $_POST['uid']);
      $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

      include '../header.php';

      $var= $_SESSION['u_id'];

      //~~~~~~~~~~~~~~~~~~~~~~~~~Here we change the first name~~~~~~~~~~~~~~~~~~~~~~~~
      if(!empty($first)&&preg_match("/^[a-zA-Z]*$/", $first) ){
        $sql = "UPDATE users SET user_first ='$first' WHERE user_id= '$var'";
        mysqli_query($conn, $sql);

    }
    if(!preg_match("/^[a-zA-Z]*$/", $first) ||!preg_match("/^[a-zA-Z]*$/", $last)){
      header("Location: ../myAccount.php?invalid");
      exit();
    }

      //~~~~~~~~~~~~~~~~~~~~~~~~~Here we change the last name~~~~~~~~~~~~~~~~~~~~~~~~
      if(!empty($last) &&preg_match("/^[a-zA-Z]*$/", $last)){
        $sql = "UPDATE users SET user_last ='$last' WHERE user_id= '$var'";
        mysqli_query($conn, $sql);
      }

      //~~~~~~~~~~~~~~~~~~~~~~~~~Here we change and verify the email ~~~~~~~~~~~~~~~~~
      if(!empty($email)){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../myAccount.php?signup=email");
            exit();
          }
        $sqlEmail = "SELECT * FROM users WHERE user_email= '$email'";
        $resultEmail=mysqli_query($conn, $sqlEmail);
        $resultCheckEmail=mysqli_num_rows($resultEmail);
        if($resultCheckEmail >0){
          header("Location: ../myAccount.php?emailUsed");
          exit();
        }
        else{
          $sql = "UPDATE users SET user_email ='$email' WHERE user_id= '$var'";
          mysqli_query($conn, $sql);
        }
      }

      //~~~~~~~~~~~~~~~~~~~~~~~~~Here we change and verify theusername~~~~~~~~~~~~~~~
      if(!empty($uid)){
        $sqlUser = "SELECT * FROM users WHERE user_uid= '$uid'";
        $resultUser=mysqli_query($conn, $sqlUser);
        $resultCheckUser=mysqli_num_rows($resultUser);

        if($resultCheckUser >0){
          header("Location: ../myAccount.php?userUsed");
          exit();
        }
        else{
          $sql = "UPDATE users SET user_uid ='$uid' WHERE user_id= '$var'";
          mysqli_query($conn, $sql);
        }
      }

      //~~~~~~~~~~~~~~~~~~~~~~~~~Here we change the password~~~~~~~~~~~~~~~~~~~~~~~~
      if(!empty($pwd)){
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET user_pwd ='$hashedPwd' WHERE user_id= '$var'";
        mysqli_query($conn, $sql);
      }

      if(empty($first) && empty($last) && empty($email) && empty($uid) && empty($pwd)){
        header("Location: ../changeData.php");
        exit();
      }
      else{
      session_unset();
      session_destroy();
      session_start();
      header("Location: ../index.php");
      exit();
    }


}
