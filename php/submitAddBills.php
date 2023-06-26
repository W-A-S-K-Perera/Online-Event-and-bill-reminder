<?php
   require 'config_AddNewBills.php';
   
   // add file
   require "../html/AddNewBills.html";
    
   if (isset ($_POST['btnSub'])) 
   {
      $type = $_POST["type"];
      $userid = $_POST["userid"];
      $date = $_POST["date"];
      $amount = $_POST["amount"];
      $desc = $_POST["desc"];  
      $remind = $_POST["remind"];
   
      // insert data into sql database
      $sql = "INSERT INTO bill (B_Type, u_id, Due_Date, Amount, Description, Remind_on) VALUES ('$type', '$userid', '$date', '$amount', '$desc', '$remind')";

      if ($conn->query ($sql)) 
      {
	      echo "<script> alert ('Records added successfully!') </script>";
      }

      else 
      {
	      echo "<script> alert ('Error: Could not able to execute the query.') </script>";
	      echo $sql;
      } 
   }
?>