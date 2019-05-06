<?php
//~~~~~~~~~~~~~~~~~~Here we made the popup disappear aafter clicking on the button ~~~~~~~~~~~~~~~~~~~~~~``
if (isset($_POST['submit'])){

    header("Location: ../myAccount.php");
    exit();
}
