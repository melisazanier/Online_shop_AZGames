<?php

if (isset($_POST['submit'])){

      include_once 'dbh.inc.php';

      $search_text = mysqli_real_escape_string($conn, $_POST['search']);
      $raw_results = "SELECT * FROM products WHERE (product_title LIKE '%".$search_text."%') ";


     $result =mysqli_query($conn, $raw_results);
     echo $search_text;
    // echo $raw_results;
      $row = mysqli_fetch_assoc($result);
     if(mysqli_num_rows($row) > 0){ // if one or more rows are returned do following

                 while($results = mysql_fetch_array($raw_results)){
                 // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

                     echo $results['product_title '];
                     // posts results gotten from database(title and text) you can also show id ($results['id'])
                 }

             }
             else{ // if there is no matching rows do following
                 echo "No results";
             }

      //exit();

}
