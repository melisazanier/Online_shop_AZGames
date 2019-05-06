<?php
    include_once 'header.php';
?>

    <section class="main-container">
        <div class="main-wrapper">
          <!--aici punem content doar daca eti logat-->
          <?php

                if(isset($_SESSION['u_id'])){
                  if($_SESSION['u_type']=='user'){

                    //~~~~~~~~~~~~~Here we have the products (button)~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="myProducts.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:-30px;left:0px;" >My products</button>
                          </form>';

                    //~~~~~~~~~~~~~~~~~~~~~Here is the personal account information (button)~~~~~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="myAccount.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:10px;left:0px;" >Personal data</button>
                          </form>';

                    //~~~~~~~~~~~~~~~~~~Here we delete the personal account (button)~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="includes/askfirst.inc.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:90px;left:0px;" >Delete account</button>
                          </form>';



                    //~~~~~~~~~~~~~~~~~Here we change the account data (button)~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="#" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:50px;left:0px;" >Change data</button>
                          <p> <i style="position:absolute; top:60px;left:180px;  border: solid black;border-width: 0 3px 3px 0;display: inline-block;padding: 3px;transform: rotate(135deg);-webkit-transform: rotate(135deg);"></i></p>
                          </form>';

                    //~~~~~~~~~~~~~~~~Here is the content of change data page~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<div class="main-wrapper" style="position:absolute; top:30%;left:14%; ">
                          <h2 style="position:relative; top:-70px; ">Change account info</h2>
                          <form class="signup-form" style="margin-left:30%; " action="includes/changeData.inc.php" method="POST" ">
                            <input type="text" name="first" placeholder="Firstname" >
                            <input type="text" name="last" placeholder="Lastname">
                            <input type="text" name="email" placeholder="E-mail">
                            <input type="text" name="uid" placeholder="Username">
                            <input type="password" name="pwd" placeholder="Password">
                            <button type="submit" name="submit">Modify</button>
                          </form>
                          <p  class="warningt" > Automatically logout after submiting.</p>
                          </div>';

                      echo '<div class="personalData"></div>';

                        }
                }

                $fullUrl= "http://localhost/loginsystem/myAccount.php $_SERVER[REQUEST_URI]";

                //~~~~~~~~~~~~~~~~~~~popup user does not exist ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                if (strpos($fullUrl,"user_fail_delete")==true)
                {
                  echo '<div  style="background-color:rgb(179, 179, 179);position:fixed; top:54%;left:39%; width:310px; height:100px;"></div>
                        <p class="deleteText" style="color:rgb(153, 0, 0);position:fixed; top:57%; left:40%;">This user does not exist !</p>
                        <form action="includes/pressed.inc.php" method="POST"  >
                        <button  type="submit" name="submit"  style="width:200px;position:fixed; top:65%; left:46%; width:100px;" >OK</button>
                        </form>';
                }

                //~~~~~~~~~~~~~~~~~~~~popup successfully deleted~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                if (strpos($fullUrl,"user_deleted")==true)
                {
                  echo '<div  style="background-color:rgb(179, 179, 179);position:fixed; top:54%;left:39%; width:310px; height:100px;"></div>
                        <p class="deleteText" style="color:green;position:fixed; top:57%; left:42%;">Successfully deleted!</p>
                        <form action="includes/pressed.inc.php" method="POST"  >
                        <button  type="submit" name="submit"  style="width:200px;position:fixed; top:65%; left:46%; width:100px;" >OK</button>
                        </form>';
                }

                //~~~~~~~~~~~~~~~~~~~~popup user form empty ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                if (strpos($fullUrl,"user_empty")==true)
                {
                  echo '<div  style="background-color:rgb(179, 179, 179);position:fixed; top:54%;left:39%; width:310px; height:100px;"></div>
                        <p class="deleteText" style="color:rgb(153, 0, 0);position:fixed; top:57%; left:42%;">Please enter user!</p>
                        <form action="includes/pressed.inc.php" method="POST"  >
                        <button  type="submit" name="submit"  style="width:200px;position:fixed; top:65%; left:46%; width:100px;" >OK</button>
                        </form>';
                }

                //~~~~~~~~~~~~~~~~~~~~popup do you want to delete this account~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                if (strpos($fullUrl,"askfirst")==true)
                {
                  echo '<div  style="background-color:rgb(179, 179, 179);position:fixed; top:54%;left:32%; width:36%; height:100px;"></div>
                        <p class="deleteText" style="color:black;position:fixed; top:57%; left:33%;">Do you really want to delete this account?</p>
                        <form action="includes/user_delete_user.inc.php" method="POST"  >
                        <button  type="submit" name="submit"  style="position:fixed; top:65%; left:40%; width:7%;" >Yes</button>
                        </form>
                        <form action="includes/pressed.inc.php" method="POST"  >
                        <button  type="submit" name="submit"  style="position:fixed; top:65%; left:50%; width:7%;" >No</button>
                        </form>';
                }





            ?>
        </div>

    </section>

<?php
    include_once 'footer.php';
?>
