<?php
//aici vrificam daca a apasat butonul de submit si atunci se ruleaza codul

if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';
    include '../header.php';


    $var= $_SESSION['u_uid'];
    $sql = "DELETE FROM users WHERE user_uid='$var'";
    mysqli_query($conn, $sql);
    session_start();
    session_unset();
    session_destroy();

    header("Location: ../index.php");
    exit();
}
