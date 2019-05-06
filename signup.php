<?php
    include_once 'header.php';
?>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~FORMS FOR SIGN UP   ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Signup</h2>
            <form class="signup-form" action="includes/signup.inc.php" method="POST">
                <input type="text" name="first" placeholder="Firstname">
                <input type="text" name="last" placeholder="Lastname">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">Sign up</button>
            </form>
        </div>
    </section>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~PHP POPUP ALERT FOR SIGNUP HERE~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php

    $fullUrl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullUrl,"signup=emptyfield")==true)
    {
    $message = "Please complete the empty fields !";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (strpos($fullUrl,"signup=invalid")==true)
    {
      $message = "Please use valid characters !";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (strpos($fullUrl,"signup=email")==true)//work here
    {
      $message = "Please enter valid e-mail !";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (strpos($fullUrl,"userUsed")==true)//work here
    {
      $message = "This username is already taken!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

    if (strpos($fullUrl,"emailUsed")==true)//work here
    {
      $message = "You have already an account with this e-mail!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }

    include_once 'footer.php';
?>
