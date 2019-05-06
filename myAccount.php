<?php
    include_once 'header.php';


?>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~IT WILL BE VISIBLE ONLY IF YOU ARE LOGGED IN~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="main-container">
        <div class="main-wrapper">

          <?php
            if(isset($_SESSION['u_id'])){

                  //~~~~~~~~~~~~~~~Hello message for user~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                  echo '<h2>Hello '. $_SESSION["u_first"]. '</h2>';


                  //~~~~~~~~~~~~~~~If the user is admin ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                  if($_SESSION['u_type']=='admin'){
                    echo "<p style='position:absolute; left:43%;'>You are logged in as an admin</p><br><br>";

                    //~~~~~~~~~~~~~Here we have the personal account data (button)~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="#" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:100px;left:0px;" >Personal data</button>
                          <p> <i style="position:absolute; top:110px;left:180px;  border: solid black;border-width: 0 3px 3px 0;display: inline-block;padding: 3px;transform: rotate(135deg); -webkit-transform: rotate(135deg);"></i></p>
                          </form>';

                    echo '<form action="addProduct.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:140px;left:0px;" >Add Product</button>
                          </form>';

                    echo '<form action="changeProduct.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:180px;left:0px;" >Modify Product</button>
                          </form>';
//aici ar trebui sa pun o cond ca sa se actualizeze datele personale dupa modificari

                    echo '<div class="personalData1" style="height:150px;"><div class="footer_1"></div></div> ';

                    echo '<br><br><br><br><br><br><p class="TextLabel"style="left:44%;">Firstname:'. $_SESSION["u_first"]. ' </p>';

                    echo '<br><br> <pre class="TextLabel"style="left:44%;">Lastname :'. $_SESSION["u_last"]. ' </pre>';

                    echo '<br><br> <pre class="TextLabel"style="left:44%;">Username :'. $_SESSION["u_uid"]. ' </pre>';

                    echo '<br><br> <pre class="TextLabel"style="left:44%;">E-mail   :'. $_SESSION["u_email"]. ' </pre>';


                    //~~~~~~~~~~~~Here we delete any user we want and we create other accounts~~~~~~~~~~~~~~~~~~~
                    echo '<p class="deleteText">Delete user:</p><br>
                          <form action="includes/admin_delete_user.inc.php" method="POST" class="deleteForm">
                          <input type="text" name="uid" placeholder="Username/e-mail">
                          <button  type="submit" name="submit">Delete</button>
                          </form>
                          <br>
                          <a href="signup.php" type="submit" name="submit" class="createAccount" >Create account</a>
                          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';

                    echo '<p class="deleteText" style="top:600px;">Delete product:</p><br>
                          <form style="top:630px;" action="includes/admin_delete_product.php" method="POST" class="deleteForm">
                          <input type="text" name="code" placeholder="code">
                          <button  type="submit" name="submit">Delete</button>
                          </form>';
                          echo '<form action="user_details.php" method="POST" class="deleteForm" >
                                <button  type="submit" name="submit"  style="width:200px;position:absolute; top:330px;left:0px;" >Users details</button>
                                </form>';

                          echo '<form action="product_details.php" method="POST" class="deleteForm" >
                                <button  type="submit" name="submit"  style="width:200px;position:absolute; top:370px;left:0px;" >Products details</button>

                                </form>';
                          echo '<form action="total_orders.php" method="POST" class="deleteForm" >
                                <button  type="submit" name="submit"  style="width:200px;position:absolute; top:410px;left:0px;" >Total orders</button>
                                  </form>';

                    }



                  //~~~~~~~~~~~~~~~~If the user is user~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                  else{
                    echo "<p  style='position:absolute; left:43%;'>You are logged in as an user </p><br>";

                    //~~~~~~~~~~~~~Here we have the products (button)~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="myProducts.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:-30px;left:0px;" >My products</button>
                          <p> <i style="position:absolute; top:20px;left:180px;  border: solid black;border-width: 0 3px 3px 0;display: inline-block;padding: 3px;transform: rotate(135deg); -webkit-transform: rotate(135deg);"></i></p>
                          </form>';


                    //~~~~~~~~~~~~~Here we have the personal account data (button)~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="#" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:10px;left:0px;" >Personal data</button>
                          <p> <i style="position:absolute; top:20px;left:180px;  border: solid black;border-width: 0 3px 3px 0;display: inline-block;padding: 3px;transform: rotate(135deg); -webkit-transform: rotate(135deg);"></i></p>
                          </form>';

                    //~~~~~~~~~~~~~Here we can delete the personal account (button)~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="includes/askfirst.inc.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:90px;left:0px;" >Delete account</button>
                          </form>';

                    //~~~~~~~~~~~~~Here we can change the account data (button)~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="changeData.php" method="POST" class="deleteForm" >
                        <button  type="submit" name="submit"  style="width:200px;position:absolute; top:50px;left:0px;" >Change data</button>
                        </form>';

                    echo '<div class="personalData"></div> <footer></footer>';

                    echo '<br><br><br><br><br><br><p class="TextLabel">Firstname:'. $_SESSION["u_first"]. ' </p>';

                    echo '<br><br> <pre class="TextLabel">Lastname :'. $_SESSION["u_last"]. ' </pre>';

                    echo '<br><br> <pre class="TextLabel">Username :'. $_SESSION["u_uid"]. ' </pre>';

                    echo '<br><br> <pre class="TextLabel">E-mail   :'. $_SESSION["u_email"]. ' </pre>';
                  }

              }



          $fullUrl= "http://localhost/loginsystem/myAccount.php $_SERVER[REQUEST_URI]";

          //~~~~~~~~~~~~~~~~~~~~~~~~Popup user does not exist~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          if (strpos($fullUrl,"user_fail_delete")==true)
            {
                echo '<div  style="background-color:rgb(179, 179, 179);position:fixed; top:54%;left:39%; width:310px; height:100px;"></div>
                      <p class="deleteText" style="color:rgb(153, 0, 0);position:fixed; top:57%; left:40%;">This user does not exist !</p>
                      <form action="includes/pressed.inc.php" method="POST"  >
                      <button  type="submit" name="submit"  style="width:200px;position:fixed; top:65%; left:46%; width:100px;" >OK</button>
                      </form>';
            }

          //~~~~~~~~~~~~~~~~~~~~~~~~Popup account successfully deleted~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
          if (strpos($fullUrl,"user_deleted")==true)
              {
                 echo '<div  style="background-color:rgb(179, 179, 179);position:fixed; top:54%;left:39%; width:310px; height:100px;"></div>
                       <p class="deleteText" style="color:green;position:fixed; top:57%; left:42%;">Successfully deleted!</p>
                       <form action="includes/pressed.inc.php" method="POST"  >
                       <button  type="submit" name="submit"  style="width:200px;position:fixed; top:65%; left:46%; width:100px;" >OK</button>
                       </form>';
              }

            //~~~~~~~~~~~~~~~~~~~~~~~~Popup username empty at admin when delete~~~~~~~~~~~~~~~~~~~
            if (strpos($fullUrl,"user_empty")==true)
                {
                    echo '<div  style="background-color:rgb(179, 179, 179);position:fixed; top:54%;left:39%; width:310px; height:100px;"></div>
                          <p class="deleteText" style="color:rgb(153, 0, 0);position:fixed; top:57%; left:42%;">Please enter user!</p>
                          <form action="includes/pressed.inc.php" method="POST"  >
                          <button  type="submit" name="submit"  style="width:200px;position:fixed; top:65%; left:46%; width:100px;" >OK</button>
                          </form>';
                }

              //~~~~~~~~~~~~~~~~~~~~~~~~Popup ask if u really want to delete account~~~~~~~~~~~~~~~~~~~
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

                 if (strpos($fullUrl,"code_empty")==true)
                   {
                     echo '<div  style="background-color:rgb(179, 179, 179);position:fixed; top:54%;left:39%; width:310px; height:100px;"></div>
                           <p class="deleteText" style="color:rgb(153, 0, 0);position:fixed; top:57%; left:42%;">Enter product code!</p>
                           <form action="includes/pressed.inc.php" method="POST"  >
                           <button  type="submit" name="submit"  style="width:200px;position:fixed; top:65%; left:46%; width:100px;" >OK</button>
                           </form>';
                    }
                    if (strpos($fullUrl,"product_fail_delete")==true)
                      {
                        echo '<div  style="background-color:rgb(179, 179, 179);position:fixed; top:54%;left:39%; width:340px; height:100px;"></div>
                              <p class="deleteText" style="color:rgb(153, 0, 0);position:fixed; top:57%; left:40%;">The product does not exist!</p>
                              <form action="includes/pressed.inc.php" method="POST"  >
                              <button  type="submit" name="submit"  style="width:200px;position:fixed; top:65%; left:48%; width:100px;" >OK</button>
                              </form>';
                       }
              //~~~~~~~~~~~~~~~~~~~~~~~~Popup alert change data username taken~~~~~~~~~~~~~~~~~~~~~~~~~~
              if (strpos($fullUrl,"userUsed")==true)
                 {
                  $message = "Thos user is already taken !";
                  echo "<script type='text/javascript'>alert('$message');</script>";
                 }

              //~~~~~~~~~~~~~~~~~~~~~~~~Popup alert change data email used~~~~~~~~~~~~~~~~~~~~~~~~~~
              if (strpos($fullUrl,"emailUsed")==true)//work here
                {
                  $message = "You have already an account with this e-mail!";
                  echo "<script type='text/javascript'>alert('$message');</script>";
                }

              //~~~~~~~~~~~~~~~~~~~~~~~~Popup alert change data invalid email~~~~~~~~~~~~~~~~~~~~~~~~~~
              if (strpos($fullUrl,"signup=email")==true)//work here
                {
                  $message = "Invalid email!";
                  echo "<script type='text/javascript'>alert('$message');</script>";
                }
                if (strpos($fullUrl,"invalid")==true)//work here
                  {
                    $message = "Invalid characters!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                  }

            ?>


        </div>
    </section>

<?php
    include_once 'footer.php';
?>
