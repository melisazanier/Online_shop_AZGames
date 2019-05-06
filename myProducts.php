<?php
    include_once 'header.php';
    include_once 'includes/dbh.inc.php';

?>

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~IT WILL BE VISIBLE ONLY IF YOU ARE LOGGED IN~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="main-container">
        <div class="main-wrapper">

          <?php
            if(isset($_SESSION['u_id'])){

                  //~~~~~~~~~~~~~~~Hello message for user~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                  echo '<h2>My Orders</h2>';


                  //~~~~~~~~~~~~~~~If the user is admin ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                  if($_SESSION['u_type']=='user'){



                    //~~~~~~~~~~~~~Here we have the products (button)~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="#" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:-30px;left:0px;" >My products</button>
                          <p> <i style="position:absolute; top:-20px;left:180px;  border: solid black;border-width: 0 3px 3px 0;display: inline-block;padding: 3px;transform: rotate(135deg); -webkit-transform: rotate(135deg);"></i></p>
                          </form>';


                    //~~~~~~~~~~~~~Here we have the personal account data (button)~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="myAccount.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:10px;left:0px;" >Personal data</button>
                          </form>';

                    //~~~~~~~~~~~~~Here we can delete the personal account (button)~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="includes/askfirst.inc.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:90px;left:0px;" >Delete account</button>
                          </form>';

                    //~~~~~~~~~~~~~Here we can change the account data (button)~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="changeData.php" method="POST" class="deleteForm" >
                        <button  type="submit" name="submit"  style="width:200px;position:absolute; top:50px;left:0px;" >Change data</button>
                        </form>';

                    echo '<div class="personalData"></div>';

                  }

              }





            ?>

            <style>
                table {
                  position: absolute;
                  top:40%;
                  left:20%;
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 60%;

            }

            td {
                border: 0px solid #dddddd;
                text-align: left;
                padding: 8px;
                height: 10px;
            }


            body{
              background-image: url("w2.jpg");
               background-size: 100vh 100vw;
            }

            .total{
            position: absolute;
            top:200px;
            right:100px;
            font-size:40px;
            }
            </style>
            <div style="position:absolute;left:20%; top:28%; width:60vw; height:1px; background-image: linear-gradient(to right, silver , black, silver);
            "></div>
            <table>
            <?php
              if(isset($_SESSION['u_id'])){
                $total=0;
                    //~~~~~~~~~~~~~~~Hello message for user~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

                    $sql= "SELECT * FROM users_orders ";
                    $result=mysqli_query($conn,$sql) or die ("Bad SQL:$sql");
                    while($row=mysqli_fetch_assoc($result)){
                      if($row['order_id_user']==$_SESSION['u_id'])
                      { $product=$row['order_product_id'];
                        $sql1= "SELECT * FROM products WHERE product_id='$product'";
                        $result1=mysqli_query($conn,$sql1) or die ("Bad SQL:$sql");
                        $row1=mysqli_fetch_assoc($result1);
                        ?>
                        <tr>
                          <td><img style="width:120px; height:auto;position:relative;top:70px;"src="<?php echo $row1['product_image1'];?>"></td>
                          <td > <?php echo $row1['product_title']; ?></td>
                          <td >Activation Code: <?php echo $row['order_code']; ?></td>
                          </tr>

            <?php

                      }

                    }
            }

              ?>
              </table>

        </div>
    </section>

<?php
    include_once 'footer.php';
?>
