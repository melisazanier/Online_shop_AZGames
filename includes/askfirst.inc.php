<?php
//~~~~~~~~~~~~~~~~~~~~~~~~~Here we ask if the user is sure about deleting the account by changing the url~~~~~~~~~~~~~~~~

if (isset($_POST['submit'])){

    header("Location: ../myAccount.php?askfirst");
    exit();

}
