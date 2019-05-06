<?php
    include_once 'header.php';
    include_once 'includes/dbh.inc.php';

  $sql= "SELECT * FROM products";
//  mysqli_query($conn, $sql);
//  $result =mysqli_query($conn, $sql);
$result=mysqli_query($conn,$sql) or die ("Bad SQL:$sql");
?>
<p style="position:absolute;top:17%;left:40%;  font-size: 3.6vw;font-weight: 900;font-family:monospace;">Discounts</p>

<div class="imageGrid1">
<?php
while($row=mysqli_fetch_assoc($result)  ):
  $var=$row['product_id'];
  if($row['product_reduced_price']>=0):
  ?>
  <div class="tile1" >  <a href='more_info_product.php?name=<?php echo $var?>' >
  <img src="<?php echo $row['product_image1'];?>">
  </a>
  <p id="title"><?php echo $row['product_title']; ?></p>
  <p id="price" style="text-decoration: line-through;"><span>Price:</span> <?php echo $row['product_price'] ; ?> $</p>
    <p id="price" style="color:rgb(102, 0, 0);position:absolute; left: 0%;top:80%;font-size: 25px;"> <?php echo $row['product_reduced_price'] ; ?> $</p>
  </div>
<?php
endif;
endwhile;


?>


</div>






<?php
    include_once 'footer.php';
?>
