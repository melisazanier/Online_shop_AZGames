<?php
//Here we check the register forms if they are correct and then we create an account
if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


    //Check for empty fields
    if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
         header("Location: ../signup.php?signup=emptyfield");
         exit();
    }else{
        //Check if inputs characters are valid
        if(!preg_match("/^[a-zA-Z]*$/", $first) ||!preg_match("/^[a-zA-Z]*$/", $last)){
                header("Location: ../signup.php?signup=invalid");
                exit();
        }
        else{
            //Check if email is valid

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                   header("Location: ../signup.php?signup=email");
                    exit();
            }
            else{
                //Check if the email or use has been used
                $sqlUser = "SELECT * FROM users WHERE user_uid= '$uid'";
                $resultUser=mysqli_query($conn, $sqlUser);
                $resultCheckUser=mysqli_num_rows($resultUser);

                $sqlEmail = "SELECT * FROM users WHERE user_email= '$email'";
                $resultEmail=mysqli_query($conn, $sqlEmail);
                $resultCheckEmail=mysqli_num_rows($resultEmail);


                if($resultCheckEmail>0){
                    header("Location: ../signup.php?emailUsed");
                    exit();
                }else
                if($resultCheckUser >0){
                    header("Location: ../signup.php?userUsed");
                    exit();
                }  else{
                    //Hashing the passwors
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //insert the user into the batabase
                    $sql = "INSERT INTO users ( user_type,user_first, user_last, user_email, user_uid, user_pwd) VALUES ('user','$first',  '$last', '$email', '$uid', '$hashedPwd');";
                    mysqli_query($conn, $sql);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }


  }
  else{
    //ii trimitem inapoi pe pagina de signup daca nu au apasat si au pus doar url-ul
    header("Location: ../signup.php");
    exit();
  }
