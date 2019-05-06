<?php
    include_once 'header.php';
    include_once 'includes/dbh.inc.php';
    ?>

    <form method="post" style="position:absolute;left:1%; top:17%;  font-size: 1.6vw;font-weight: 900;font-family:monospace;">
      <h1>Sort by : </h1>
    <select name='PreviousReceiver' style="font-family:monospace;background:rgb(230, 230, 230);  border: none;" onchange='if(this.value != 0) { this.form.submit(); }'>
         <option value='0' style="font-family:monospace;background:rgb(230, 230, 230);" ></option>
         <option value='1' style="font-family:monospace;">Most popular</option>
         <option value='2' style="font-family:monospace;background:rgb(230, 230, 230);">Low to high price</option>
         <option value='3' style="font-family:monospace;">A-Z</option>
         <option value='4' style="font-family:monospace;background:rgb(230, 230, 230);">Oldest to newest</option>
    </select>
</form>

    <?php

    if (isset($_POST['PreviousReceiver']))
    {
        $category = $_POST['PreviousReceiver'];

    }else {
      $category=1;
    }
if($category==1){

$sql= "SELECT * FROM products";
}elseif ($category==2){
  $sql="SELECT * FROM products ORDER BY product_price";}
elseif ($category==3){
  $sql= "SELECT * FROM products ORDER BY product_title";}
elseif ($category==4){
  $sql="SELECT * FROM products ORDER BY product_year";}
  else {
    $sql= "SELECT * FROM products";
  }

$result=mysqli_query($conn,$sql) or die ("Bad SQL:$sql");
?>
<p style="position:absolute;top:17%;left:45%;  font-size: 3.6vw;font-weight: 900;font-family:monospace;">Games</p>
<div class="imageGrid1">
<?php
while($row=mysqli_fetch_assoc($result)):
  $var=$row['product_id'];
  ?>
  <div class="tile1" >  <a href='more_info_product.php?name=<?php echo $var?>' >
  <img src="<?php echo $row['product_image1'];?>">
  </a>
  <p id="title"><?php echo $row['product_title']; ?></p>
  <?php if($row['product_reduced_price']<0): ?>
  <p id="price">Price: <?php echo $row['product_price'] ; ?> $</p>
<?php else: ?>

  <p id="price" style="text-decoration: line-through;"><span>Price:</span> <?php echo $row['product_price'] ; ?> $</p>
    <p id="price" style="color:rgb(102, 0, 0);position:absolute; left: 0%;top:80%;font-size: 25px;"> <?php echo $row['product_reduced_price'] ; ?> $</p>
<?php endif; ?>
  </div>
<?php
endwhile;


?>


</div>






<?php
    include_once 'footer.php';
?>
