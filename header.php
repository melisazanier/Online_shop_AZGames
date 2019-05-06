<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
     <link rel="stylesheet" href="css/logo.css">
     <link rel="stylesheet" href="css/shopping_cart.css">
     <link rel="stylesheet" href="css/myAccountAdmin.css">
     <link rel="stylesheet" href="css/slider.css">
     <link rel="stylesheet" href="css/search.css">
     <link rel="stylesheet" href="css/personalData.css">
     <link rel="stylesheet" href="css/game_data_start.css">
     <link rel="stylesheet" href="css/product_item.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">



</head>

<body>
    <header>
        <nav>

        <div class="main-wrapper">
            <div id="logo" ><a href="index.php"><img src="photos/MV_logo.png" id="myImage"  ></a></div>
            <div class="cntr">
              <div class="cntr-innr">
                <!--form class="search" action="includes/search.inc.php" for="inpt_search" method="POST">
                  <input id="inpt_search" type="text" name="search"/>
                  <button type="submit" name="submit"></button>
                </form-->
              </div>
            </div>
            <div class="nav-login">

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~PHP CODE HERE~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <?php
                //~~~~~~~~~~~~~~~~~~~~~Daca sunt logat (logout+my account + cos imagine)~~~~~~~~~~~~~~~~~~~~~~
                if(isset($_SESSION['u_id'])){
                    echo '<form action="includes/logout.inc.php" method="POST">
                          <button type="submit" name="submit" style="position:absolute; right:200px;"> Logout</button>
                          </form>
                          <a href="myAccount.php" style="width:100px; font-style: italic; font-size: 13px; position:absolute; right:80px; "> My account</a>';
                          if($_SESSION['u_type']=="user"){
                            echo '<div id="shopping_cart" ><a href="cart.php"><img src="photos/shopping_icon.png" id="myImage1"  ></a></div>';
                          }
                }

                //~~~~~~~~~~~~~~~~~~Daca nu sunt logat (login + sign up)~~~~~~~~~~~~~~~~~~~~~~
                else{
                   echo '<form action="includes/login.inc.php" method="POST">
                         <input type="text" name="uid" placeholder="Username/e-mail">
                         <input type="password" name="pwd" placeholder="password">
                         <button class="b" type="submit" name="submit">Login</button>
                         </form>
                         <a href="signup.php">Sign up</a>';

                   $fullUrl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                   //~~~~~~~~~~~~~Popup cu alert wrong user or password~~~~~~~~~~~~~~~~~~~~~~~~~
                   if (strpos($fullUrl,"login=error")==true)
                   {
                     $message = "Wrong username or password !";
                     echo "<script type='text/javascript'>alert('$message');</script>";
                   }

                  //~~~~~~~~~~~Popup cu alert empty field~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                  if (strpos($fullUrl,"login=empty")==true)
                  {
                    $message = "Please enter your username and password !";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                  }

                }
                ?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~END PHP CODE HERE~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            </div>
        </div>
        </nav>
    </header>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Menu here~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
         <nav class="menu1">
	          <ol>
		            <li class="menu-item"><a href="index.php" style="text-align:center;padding-top:12px;font-size:15px;">Home</a></li>
		            <li class="menu-item"><a href="games.php" style="text-align:center;padding-top:12px;font-size:15px;"style="text-align:center">Games</a></li>
                <li class="menu-item"><a href="discounts.php" style="text-align:center;padding-top:12px;font-size:15px;">Discounts</a></li>
                <li class="menu-item"><a href="contact.php" style="text-align:center;padding-top:12px;font-size:15px;">Contact</a></li>
	             </ol>
        </nav>


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~CODE REST OF THE HOME PAGE HERE~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
