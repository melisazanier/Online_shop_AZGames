<?php
  include_once 'header.php';
  include_once 'includes/dbh.inc.php';
?>
<style>




@font-face {
  font-family: 'icons';
  src: url("fonts/icomoon.woff") format('woff'), url("fonts/icomoon.ttf") format('truetype'), url("fonts/icomoon.otf") format('opentype'), url("fonts/icomoon.eot") format('embedded-opentype');
}

.clearfix:before,
.clearfix:after {
  content: "";
  display: table;
}
.clearfix:after {
  clear: both;
}
.clearfix {
  zoom: 1;
}

#title{
  font-family: 'Roboto';
  font-size: 100px;
  color: #e0e0e0;
  position: absolute;
  left: 10%;
  top:50%;
  transform: rotate(-30deg);
  transform-origin: bottom left;
}

.card-bounding{
  width: 90%;
  max-width: 500px;
  margin: 0 auto;
  position: relative;
  top:250px;
  transform: translateY(-50%);
  padding: 30px;
  border: 1px solid orange;
  border-radius: 6px;
  font-family: 'Roboto';
  background: #ffffff;
}

.card-bounding aside{

  font-size:24px;
  padding-bottom: 8px;
}
.card-container {
  width: 100%;
  padding-left: 80px;
  padding-right: 40px;
  position: relative;
  box-sizing: border-box;
  border: 1px solid #ccc;
  margin: 0 auto 30px auto;
}
.card-container input {
  width: 100%;
  letter-spacing: 1px;
  font-size: 30px;
  padding: 15px 15px 15px 25px;
  border: 0;
  outline: none;
  box-sizing: border-box;
}
.card-type {
  width: 80px;
  height: 56px;
  background: url("images/cards.png");
  background-position: 0 -291px;
  background-repeat: no-repeat;
  position: absolute;
  top: 3px;
  left: 4px;
}
.card-type.mastercard {
  background-position: 0 0;
}
.card-type.visa {
  background-position: 0 -115px;
}
.card-type.amex {
  background-position: 0 -57px;
}
.card-type.discover {
  background-position: 0 -174px;
}
.card-valid {
  position: absolute;
  top: 0;
  right: 15px;
  line-height: 60px;
  font-size: 40px;
  font-family: 'icons';
  color: #ccc;
}
.card-valid.active {
  color: #42ca7c;
}
.card-details {
  width: 100%;
  text-align: left;
  margin-bottom: 30px;
  transition: 300ms ease;
}
.card-details input {
  font-size: 30px;
  padding: 15px;
  box-sizing: border-box;
  width: 100%;
}
.card-details input.error {
  border: 1px solid rgb(255,110, 0);
  box-shadow: 0 4px 8px 0 rgba(238,76,87,0.3);
  outline: none;
}
.card-details .expiration {
  width: 50%;
  float: left;
  padding-right: 5%;
}
.card-details .cvv {
  width: 45%;
  float: left;
}


</style>
<div class="card-bounding">
<form  action="includes/Buy.inc.php" method="POST" >
   <aside>Card Number:</aside>
   <div class="card-container">
     <!--- ".card-type" is a sprite used as a background image with associated classes for the major card types, providing x-y coordinates for the sprite --->
     <div class="card-type"></div>
     <input name="card_number" placeholder="**** **** **** ****" onkeyup="$cc.validate(event)" />
     <!-- The checkmark ".card-valid" used is a custom font from icomoon.io --->
     <div class="card-valid">&#xea10;</div>
   </div>

   <div class="card-details clearfix">

     <div class="expiration">
       <aside>Expiration Date</aside>
       <input name="expiration_date" onkeyup="$cc.expiry.call(this,event)" maxlength="7" placeholder="mm/yyyy" />
     </div>

     <div class="cvv">
       <aside>CVV</aside>
       <input name="cvv" placeholder="XXX"/>
     </div>

   </div>
   <?php
   $sql= "SELECT * FROM cart";
   $result=mysqli_query($conn,$sql) or die ("Bad SQL:$sql");
   $row=mysqli_fetch_assoc($result);
   $var=$row['cart_id_user'];

   ?>
  <button type="submit" name="submit"  value="<?php echo $var?> "class="button-two"style="position: absolute;right:220px;top:355px;background-color:rgb(255,110, 0);border: none;color: white;padding: 10px 18px;text-align: center;text-decoration: none;  display: inline-block;font-size: 36px;cursor: pointer;" ><span>Buy</stan></button>

</form>
 </div>
 <script>


 var $cc = {}
 $cc.validate = function(e){

   //if the input is empty reset the indicators to their default classes
   if (e.target.value == ''){
     e.target.previousElementSibling.className = 'card-type';
     e.target.nextElementSibling.className = 'card-valid';
     return
   }

   //Retrieve the value of the input and remove all non-number characters
   var number = String(e.target.value);
   var cleanNumber = '';
   for (var i = 0; i<number.length; i++){
     if (/^[0-9]+$/.test(number.charAt(i))){
       cleanNumber += number.charAt(i);
     }
   }

   //Only parse and correct the input value if the key pressed isn't backspace.
   if (e.key != 'Backspace'){
     //Format the value to include spaces in the correct locations
     var formatNumber = '';
     for (var i = 0; i<cleanNumber.length; i++){
       if (i == 3 || i == 7 || i == 11 ){
           formatNumber = formatNumber + cleanNumber.charAt(i) + ' '
       }else{
         formatNumber += cleanNumber.charAt(i)
       }
     }
     e.target.value = formatNumber;
   }

   //run the Luhn algorithm on the number if it is at least equal to the shortest card length
   if (cleanNumber.length >= 12){
     var isLuhn = luhn(cleanNumber);
   }

   function luhn(number){
     var numberArray = number.split('').reverse();
     for (var i=0; i<numberArray.length; i++){
       if (i%2 != 0){
         numberArray[i] = numberArray[i] * 2;
         if (numberArray[i] > 9){
           numberArray[i] = parseInt(String(numberArray[i]).charAt(0)) + parseInt(String(numberArray[i]).charAt(1))
         }
       }
     }
     var sum = 0;
     for (var i=1; i<numberArray.length; i++){
       sum += parseInt(numberArray[i]);
     }
     sum = sum * 9 % 10;
     if (numberArray[0] == sum){
       return true
     }else{
       return false
     }
   }

   //if the number passes the Luhn algorithm add the class 'active'
   if (isLuhn == true){
     e.target.nextElementSibling.className = 'card-valid active'
   }else{
     e.target.nextElementSibling.className = 'card-valid'
   }

   var card_types = [
     {
       name: 'amex',
       pattern: /^3[47]/,
       valid_length: [15]
     }, {
       name: 'diners_club_carte_blanche',
       pattern: /^30[0-5]/,
       valid_length: [14]
     }, {
       name: 'diners_club_international',
       pattern: /^36/,
       valid_length: [14]
     }, {
       name: 'jcb',
       pattern: /^35(2[89]|[3-8][0-9])/,
       valid_length: [16]
     }, {
       name: 'laser',
       pattern: /^(6304|670[69]|6771)/,
       valid_length: [16, 17, 18, 19]
     }, {
       name: 'visa_electron',
       pattern: /^(4026|417500|4508|4844|491(3|7))/,
       valid_length: [16]
     }, {
       name: 'visa',
       pattern: /^4/,
       valid_length: [16]
     }, {
       name: 'mastercard',
       pattern: /^5[1-5]/,
       valid_length: [16]
     }, {
       name: 'maestro',
       pattern: /^(5018|5020|5038|6304|6759|676[1-3])/,
       valid_length: [12, 13, 14, 15, 16, 17, 18, 19]
     }, {
       name: 'discover',
       pattern: /^(6011|622(12[6-9]|1[3-9][0-9]|[2-8][0-9]{2}|9[0-1][0-9]|92[0-5]|64[4-9])|65)/,
       valid_length: [16]
     }
   ];

   //test the number against each of the above card types and regular expressions
   for (var i = 0; i< card_types.length; i++){
     if (number.match(card_types[i].pattern)){
       //if a match is found add the card type as a class
       e.target.previousElementSibling.className = 'card-type '+card_types[i].name;
     }
   }
 }

 $cc.expiry = function(e){
   if (e.key != 'Backspace'){
     var number = String(this.value);

     //remove all non-number character from the value
     var cleanNumber = '';
     for (var i = 0; i<number.length; i++){
       if (i == 1 && number.charAt(i) == '/'){
         cleanNumber = 0 + number.charAt(0);
       }
       if (/^[0-9]+$/.test(number.charAt(i))){
         cleanNumber += number.charAt(i);
       }
     }

     var formattedMonth = ''
     for (var i = 0; i<cleanNumber.length; i++){
       if (/^[0-9]+$/.test(cleanNumber.charAt(i))){
         //if the number is greater than 1 append a zero to force a 2 digit month
         if (i == 0 && cleanNumber.charAt(i) > 1){
           formattedMonth += 0;
           formattedMonth += cleanNumber.charAt(i);
           formattedMonth += '/';
         }
         //add a '/' after the second number
         else if (i == 1){
           formattedMonth += cleanNumber.charAt(i);
           formattedMonth += '/';
         }
         //force a 4 digit year
         else if (i == 2 && cleanNumber.charAt(i) <2){
           formattedMonth += '20' + cleanNumber.charAt(i);
         }else{
           formattedMonth += cleanNumber.charAt(i);
         }

       }
     }
     this.value = formattedMonth;
   }
 }


 </script>
<?php
include_once 'footer.php';
?>
