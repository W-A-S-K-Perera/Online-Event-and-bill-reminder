<?php
   require 'config_AddNewEvents.php';
   
   // add file
   require "../html/AddNewEvents.html";
   
   if (isset ($_POST['btnSub'])) 
   {
      $ename = $_POST["eventname"];
      $userid = $_POST["userid"];
      $date = $_POST["date"];
      $time = $_POST["time"];
      $desc = $_POST["desc"];
      $location = $_POST["location"];   
      $remind = $_POST["remind"];
   
      // insert data into sql database
      $sql = "INSERT INTO event (E_name, u_id, E_Date, E_Time, Description, Location, Remind_on) VALUES ('$ename', '$userid', '$date', '$time', '$desc', '$location', '$remind')";

   
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