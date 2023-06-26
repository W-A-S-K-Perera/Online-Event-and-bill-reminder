<?php
   require 'configRegistration.php';
  
   // add file
   require "../html/Registration.html";

   if (isset ($_POST['btnSub'])) 
   {
      $fname = $_POST["firstname"];
      $lname = $_POST["lastname"];
      $user = $_POST["username"];
      $mobile = $_POST["mobile"];
      $email = $_POST["email"];
      $country = $_POST["country"];
      $password = $_POST["password"];

      // encrypt the password
      $passwordmd5 = md5($password);
   
      // insert data into sql database
      $sql = "INSERT INTO users (email, first_name, last_name, country, uname, mobile, password) VALUES ('$email', '$fname', '$lname', '$country', '$user', '$mobile', '$passwordmd5')";
   
      if ($conn->query ($sql)) 
      {
         // display successful message
	      echo "<script> alert ('Records added successfully!') </script>";
         echo "<script> alert ('Press Ok to see your User ID.') </script>";

         //filter the user id
         $sql = "SELECT * FROM users where u_id=(select max(u_id) from users)";
         $data = mysqli_query($conn, $sql);

         if ($data) {
            while ($row = mysqli_fetch_assoc($data)) 
            {
               $id = $row['User_ID'];

               echo '<script> alert('.$id.')</script>';
            }
        }
      }

      else 
      {
         // display error message
	      echo "<script> alert ('Error: Could not able to execute the query.') </script>";
      
	      echo $sql;
      }
   }
?>