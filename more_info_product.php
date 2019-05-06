<?php
    include_once 'header.php';
    include_once 'includes/dbh.inc.php';
  $id=$_GET['name'];
  $sql= "SELECT * FROM products WHERE product_id='$id'";
  $result=mysqli_query($conn,$sql) ;
  $row=mysqli_fetch_assoc($result);

?>


<img class="photo_item"src="<?php echo $row['product_image1'];?>">

<p id="title_item" ><?php echo $row['product_title']; ?></p>
<div style="position:absolute;left:35%; top:33%; width:60vw; height:1px; background-image: linear-gradient(to right, silver , black);
"></div>

<?php if($row['product_reduced_price']>=0):?>
<p id="price_item" style="color:rgb(102, 0, 0);position:absolute; left: 85%;top:35%;font-size: 45px;"><?php echo $row['product_reduced_price'] ; ?> $</p>
<p id="price_item" style="text-decoration: line-through;"><?php echo $row['product_price'] ; ?> $</p>
<?php else : ?>
<p id="price_item"><?php echo $row['product_price'] ; ?> $</p>


<?php endif;?>

<div class="main">
  <div class="sub-main">
    <?php if(isset($_SESSION['u_id']) && ($_SESSION['u_type']=='user')):?>
    <form action="includes/cart.inc.php" method="POST">
    <button type ="submit" name="submit" value="<?php echo $id ?>" class="button-two"><span>Add to cart</span></button>
  </form>
<?php endif;?>
  </div>
</div>
<div style="position:absolute;top:350px;left:75%; line-height: 1.2; ">
<p class="game_genre">Game genre : </p>
<p class="game_genre_item"><?php echo $row['product_game_genre'] ; ?> </p>
</div>

<div style="position:absolute;top:450px;left:75%;">
<p class="game_genre">Release date : </p>
<p class="game_genre_item"><?php echo $row['product_release_date'] ; ?> </p>
</div>


<div style="position:absolute;top:340%;left:5%;width:60%;font-family:monospace;">
<p class="game_genre" style="font-family:monospace;">About this game : </p>
<p class="game_genre_item" style="font-family:monospace;line-height: 1.6;"><?php echo $row['product_description'] ; ?> </p>
</div>

<div style="position:absolute;top:385%;left:5%;width:60%;font-family:monospace;">
<p class="game_genre" style="font-family:monospace;">System requirements : </p>
<p class="game_genre_item" style="font-family:monospace;line-height: 1.6;"><?php echo $row['product_system_requirements'] ; ?> </p>
</div>

<img class="photo_item2"src="<?php echo $row['product_image2'];?>">
<img class="photo_item3"src="<?php echo $row['product_image3'];?>">

<?php $link=$row['product_youtube_link'];?>
<iframe style="position:absolute; top:250px;left:35%;"width="460" height="260" src="https://www.youtube.com/embed/<?php echo $link?>?autoplay=1&start=3" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<footer style="position:absolute;left:0px; top:420%; width:100vw; height:50px; background:black;"></footer>



<style>
body{
  background-image: url("c.jpg");
   background-size: 100vh 100vw;
}
</style>




<?php
    include_once 'footer.php';
?>
