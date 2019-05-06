<?php
  include_once 'header.php';
  include_once 'includes/dbh.inc.php';
?>
<section class="main-container">
    <div class="main-wrapper">
      <style>
          table {
            position: absolute;
            top:40%;
            left:15%;
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
              echo '<h2>My Cart</h2>';
              $sql= "SELECT * FROM cart";
              $result=mysqli_query($conn,$sql) or die ("Bad SQL:$sql");
              while($row=mysqli_fetch_assoc($result)){
                if($row['cart_id_user']==$_SESSION['u_id'])
                { $var=$row['cart_id_product'];
                  $sql1= "SELECT * FROM products WHERE product_id='$var'";
                  $result1=mysqli_query($conn,$sql1) or die ("Bad SQL:$sql");
                  $row1=mysqli_fetch_assoc($result1);
                  ?>
                  <tr>
                    <td><a href="more_info_product.php?name=<?php echo $row1['product_id']?>"><img style="width:120px; height:auto;position:relative;top:70px;"src="<?php echo $row1['product_image1'];?>"></a></td>
                    <td > <a style="color:black" href="more_info_product.php?name=<?php echo $row1['product_id']?>"><?php echo $row1['product_title']; ?></a></td>
                    <?php if($row1['product_reduced_price']<0): ?>
                    <td><div style="font-size:25px;position:relative;left:-12px;"><?php echo $row1['product_price']; ?>$</div></td>
                  <?php $total=$total+$row1['product_price'];
                 else: ?>
                      <td> <div style="text-decoration: line-through;"><?php echo $row1['product_price']; ?>$</div> <br><div style="font-size:25px;position:relative;left:-12px;"><?php echo $row1['product_reduced_price']; ?>$</div></td>
                    <?php $total=$total+$row1['product_reduced_price'];
                   endif;
                   $m=$row1['product_id']; ?>
                    <td><form action="includes/delete_product_cart.inc.php" method="POST" ><button style="position: relative;left:10px;top:-1px;background-color: rgb(255, 71, 26);border: none;color: white;padding: 10px 22px;text-align: center;text-decoration: none;  display: inline-block;font-size: 14px;margin: 4px 2px;cursor: pointer;" type="submit" name="delete" value="<?php echo $m ?>">Delete</button></form></td>
                  </tr>

<?php

                }

              }
}

        ?>
        </table>
<h1 class="total">Total: <?php echo $total ?> $</h1>
<?php if($total==0): ?>
  <h1 style="position:absolute; top:300px; left:45%;font-size:30px;">Empty cart</h1>
<form action="" method="POST" class="sub-main"><button class="button-two" style="position: absolute;right:150px;top:270px;background-color: black;border: none;color: white;padding: 10px 2px;text-align: center;text-decoration: none;  display: inline-block;font-size: 16px;cursor: pointer;" type="submit" name=delete><span>Finalize order</stan></button></form>
<?php else:?>
<form action="Finalize_order.php" method="POST" class="sub-main"><button class="button-two"style="position: absolute;right:150px;top:270px;background-color: black;border: none;color: white;padding: 10px 2px;text-align: center;text-decoration: none;  display: inline-block;font-size: 16px;cursor: pointer;" type="submit" name=delete><span>Finalize order</stan></button></form>
<?php endif; ?>
    </div>
</section>

<?php
include_once 'footer.php';
?>
