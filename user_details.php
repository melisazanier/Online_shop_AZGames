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
                  echo '<h2>User details</h2>';


                  //~~~~~~~~~~~~~~~If the user is admin ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                  if($_SESSION['u_type']=='admin'){


                    //~~~~~~~~~~~~~Here we have the personal account data (button)~~~~~~~~~~~~~~~~~~~~~~~
                    echo '<form action="myAccount.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:100px;left:0px;" >Personal data</button>
                          </form>';

                    echo '<form action="addProduct.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:140px;left:0px;" >Add Product</button>
                          </form>';

                    echo '<form action="changeProduct.php" method="POST" class="deleteForm" >
                          <button  type="submit" name="submit"  style="width:200px;position:absolute; top:180px;left:0px;" >Modify Product</button>                          </form>';

                    echo '<div class="personalData" style="height:150px;"></div> <footer></footer>';



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
                          echo '<form action="#" method="POST" class="deleteForm" >
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
<style>
    table {
      position: absolute;
      top:40%;
      left:30%;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 60%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>





<table>
  <tr style="font-weight:990;">
    <th>First name</th>
    <th>Last name</th>
    <th>Username</th>
    <th>E-mail</th>
  </tr>


<?php

$sql= "SELECT * FROM users";

$result=mysqli_query($conn,$sql) or die ("Bad SQL:$sql");

while($row=mysqli_fetch_assoc($result)):
  ?>
  <tr>
    <td><?php echo $row['user_first']; ?></td>
    <td><?php echo $row['user_last']; ?></td>
    <td><?php echo $row['user_uid']; ?></td>
    <td><?php echo $row['user_email']; ?></td>
  </tr>

<?php
endwhile;

?>
</table>

        </div>
    </section>

<?php
    include_once 'footer.php';
?>
