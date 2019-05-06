<?php
    include_once 'header.php';

?>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~IT WILL BE VISIBLE ONLY IF YOU ARE LOGGED IN~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="main-container">
        <div class="main-wrapper">

          <?php
            if(isset($_SESSION['u_id'])){

                  //~~~~~~~~~~~~~~~Hello message for user~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                  echo '<h2>Add Product</h2>';


                  //~~~~~~~~~~~~~~~If the user is admin ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                  if($_SESSION['u_type']=='admin'){

                    //~~~~~~~~~~~~~Here we have the personal account data (button)~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="myAccount.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:100px;left:0px;" >Personal data</button>
                          </form>';

                    echo '<form action="#" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:140px;left:0px;" >Add Product</button>
                          <p> <i style="position:absolute; top:150px;left:180px;  border: solid black;border-width: 0 3px 3px 0;display: inline-block;padding: 3px;transform: rotate(135deg); -webkit-transform: rotate(135deg);"></i></p>
                          </form>';

                    echo '<form action="changeProduct.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:180px;left:0px;" >Modify Product</button>
                          </form>';

                    echo '<div class="personalData" style="height:150px;"></div> <footer></footer>';



                    //~~~~~~~~~~~~Here we delete any user we want and we create other accounts~~~~~~~~~~~~~~~~~~~
                    echo '<p class="deleteText">Delete user:</p><br>
                          <form action="includes/admin_delete_user.inc.php" method="POST" class="deleteForm">
                          <input type="text" name="uid" placeholder="Username/e-mail">
                          <button style="z-index:100;"  type="submit" name="submit">Delete</button>
                          </form>
                          <br>
                          <a href="signup.php" type="submit" name="submit" class="createAccount" >Create account</a>
                          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';

                          echo '<p class="deleteText" style="top:600px;">Delete product:</p><br>
                                <form style="top:630px;" action="includes/admin_delete_product.php" method="POST" class="deleteForm">
                                <input type="text" name="code" placeholder="code">
                                <button style="z-index:100;"  type="submit" name="submit">Delete</button>
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





              }





            ?>
            <div class="main-wrapper" style="position:absolute; top:40%;left:14%; ">

                  <form class="signup-form" style="margin-left:30%; " action="includes/addProduct.inc.php" method="POST" >
                    <input type="text" name="title" placeholder="Title" >
                    <input type="text" name="price" placeholder="Price">
                    <input type="text" name="img1" placeholder="Image url 1">
                    <input type="text" name="img2" placeholder="Image url 2">
                    <input type="text" name="img3" placeholder="Image url 3">
                    <textarea style=" width:395px; height:200px;"type="text" name="description" placeholder="Description"></textarea>
                    <input type="text" name="genre" placeholder="Genre">
                    <input type="text" name="date" placeholder="Release date">
                    <textarea style=" width:395px; height:100px;" type="text" name="req" placeholder="System requirements"></textarea>
                    <input type="text" name="link" placeholder="Youtube link">

                    <button type="submit" name="submit">Add product</button>
                  </form>


        </div>
    </section>

<?php  $fullUrl= "http://localhost/loginsystem/addProduct.php $_SERVER[REQUEST_URI]";

  //~~~~~~~~~~~~~~~~~~~~~~~~Popup user does not exist~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  if (strpos($fullUrl,"invalid")==true)
    {
        echo '<div  style="background-color:rgb(179, 179, 179);position:fixed; top:54%;left:37%; width:360px; height:100px;"></div>
              <p class="deleteText" style="color:rgb(153, 0, 0);position:fixed; top:57%; left:38%;">The price should be a number !</p>
              <form action="includes/pressed.inc.php" method="POST"  >
              <button  type="submit" name="submit"  style="width:200px;position:fixed; top:65%; left:46%; width:100px;" >OK</button>
              </form>';
    }

    if (strpos($fullUrl,"succes")==true)
      {
          echo '<div  style="background-color:rgb(179, 179, 179);position:fixed; top:54%;left:37%; width:360px; height:100px;"></div>
                <p class="deleteText" style="color:green;position:fixed; top:57%; left:38%;">Product added successfully !</p>
                <form action="includes/pressed.inc.php" method="POST"  >
                <button  type="submit" name="submit"  style="width:200px;position:fixed; top:65%; left:46%; width:100px;" >OK</button>
                </form>';
      }
    include_once 'footer.php';
?>
