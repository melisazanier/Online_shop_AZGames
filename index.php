<?php
    include_once 'header.php';
?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~CSS for images after slider~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<style>
body{
  background: black
}
.imageGrid {
  line-height: 0;
}
.imageGrid .tile {
  width:100vw;
  min-height:120vh;
  height: auto;
  line-height: 1.2;
  display:inline-block;
  /*background-size: contain;*/
  background-size:100vw 100vh;
  background-position: center center;
  background-repeat: no-repeat;
  overflow: hidden;
  position: absolute;
  top:-120px;
  overflow: hidden;


}

</style>



<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Slider~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="slider-container">
<div class="slider-control left inactive"></div>
<div class="slider-control right"></div>
<ul class="slider-pagi"></ul>
<div class="slider">
  <div class="slide slide-0 active">
    <div class="slide__bg"></div>
  </div>
  <div class="slide slide-1 ">
    <div class="slide__bg"></div>
  </div>
  <div class="slide slide-2">
    <div class="slide__bg"></div>
  </div>
  <div class="slide slide-3">
    <div class="slide__bg"></div>
  </div>
</div>
</div>


<div class="imageGrid">
<div  style="background-color:black;height:10vh;position: relative;top:-50px;"> </div>
<div class="tile" style="background-image: url('newGamesHome/wolfenstein_youngblood.png');top:95%;"> </div>

<div class="tile" style="background-image: url('newGamesHome/borderlands_3.png');top:200%;"></div>

<div class="tile" style="background-image: url('newGamesHome/rage_2.png');top:305%;"></div>

<div class="tile" style="background-image: url('newGamesHome/star_wars_jedi_fallen_order.png');top:410%;"></div>
</div>


<?php
    include_once 'footer.php';
?>
