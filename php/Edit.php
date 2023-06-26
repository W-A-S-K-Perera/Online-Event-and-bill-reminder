<?php



include 'config.php';


if(isset($_POST["submit"])){

   $user_id=mysqli_real_escape_string($conn,$_POST["u_id"]);
   $first_name =mysqli_real_escape_string($conn,  $_POST["first_name"]);
   $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
   $uname =  $_POST["uname"];
   $email = mysqli_real_escape_string($conn, $_POST["email"]);
   $mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
   $country = mysqli_real_escape_string($conn, $_POST["country"]);
   $password = $_POST["password"];
   $cpassword =$_POST["cpassword"];

  if($password === $cpassword ){
      $sql = "UPDATE users SET first_name = '$first_name',last_name = '$last_name',uname ='$uname',email = '$email',mobile = '$mobile',country = '$country', password = '$password' WHERE u_id ='$user_id'";
     $result = mysqli_query($conn, $sql);{
        if($result){
         echo "<script>alert('Profile updated');</script>";

        }else{
             echo "<script>alert('Profile cant updated');</script>";
        }
     }
   
     
   }else {
      echo "<script>alert('Password not matched ');</script>";
      echo $conn->error;
   }

}

?> 

<!DOCTYPE html>

<head>
    
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="../css/stylee.css">
   
   <!-- add a title (a) --> 
	  <title> Edit Profile </title>

      <!-- link the css stylesheet -->
      
   

</head>
<body>
<div class="logo">
      <img src="../images/logo1.png" alt="logo">
      </div>

<!--Navigation bar starts here-->
  <header class="header">
   
   <div class="containerrr">
       <div class="row align-items-center justify-content-between">
           <div class="logo">
              
               <a href="../html/dashbord1.html">remind mee</a>
           </div>
           <button type="button" class="nav-toggler">
               <span></span>
           </button>
           <nav class="nav">
               <ul>
                   <li><a href="../html/dashbord1.html" >Dashboard</a></li>
                   <li><a href="../html/globalevents.html">global events</a></li>
                   <li><a href="../html/contact.html">contact us</a></li>
                   <li><a href="MyProfile.php">My Profile</a></li>
                   <li><a href="../html/Home.html" class="lbtn">Log Out</a></li>
               </ul>
           </nav>
       </div>
   </div>
   </header>
   <!--Navigation bar ends here-->

   <!-- edit page -->
   <div class = "Editform"><h1> Edit Profile</h1>
   
   <div class = "econtainer">
      <form  action="" method="POST">
        <?php
        $sql = "SELECT * FROM users ";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
           while($row = mysqli_fetch_assoc($result)){
              ?>
              <?php
               }
            }
            ?>
         <div class="inputboxe">
               <label for="u_id"> User ID </label>
		         <input type = "text" class = "u_id"  name = "u_id"  required>
        </div>
      
	     <div class="inputboxe">
		         <label for="name"> Name </label>
			      <input type = "text" class = "firstname"  name = "first_name" placeholder = "First Name"  required>
			      <input type = "text" class = "lastname"  name = "last_name" placeholder = "Last Name"   required>
		 </div>
		 <div class="inputboxe">
               <label for="uname"> Username </label>
		         <input type = "text" class = "username"  name = "uname"  required>
        </div>
		 
      <div class="inputboxe">
               <label for="email"> Email </label> 
		         <input type = "email" class= "email"  name = "email"  required>
		 </div>
		 <div class="inputboxe">
               <label for="mobile">Contact No </label>
		         <input type = "text" class = "mobile"  name = "mobile"   required>
      </div>
      <div class="inputboxe">
                <label for="country"> Country </label>
		          <input type = "text" class= "country"  name = "country"  >
      </div> 
		 
      <div class="inputboxe">
               <label for="password"> Password</label>
		         <input type = "password" class= "password" name="password" placeholder = "Enter Password"  required>
      </div> 
		<div class="inputboxe">
                <label for="cpassword">Confirm Password</label>
                <input type = "password" class= "cpassword" name="cpassword" placeholder = "Confirm Password"  required>
       </div> <br>
       <div class="inputboxe">
            <button type="submit"name="submit" class="ebtn">Save Changes</button>
       </div>
      
		 <br>
       
         </form>
         </div>
         </div>
           

          <!--footer section starts here-->
  <div>
    <footer class="footer">
       <div class="container">
          <div class="row">
             <div class="footer-col">
                <h4>Company</h4>
                <ul>
                   <li><a href="../html/AboutUs.html">about us</a></li>
                   <li><a href="../html/Feedback.html">Feedback</a></li>
                </ul>
             </div>
             <div class="footer-col">
                <h4>get help</h4>
                <ul>
                   <li><a href="../html/Faq.html">FAQ</a></li>
                   <li><a href="../html/Contact.html">Contact us</a></li>
                </ul>
             </div>
             <div class="footer-col">
                <h4>quick links</h4>
                <ul>
                   <li><a href="../html/AddNewEvents.html">Add New Events</a></li>
                   <li><a href="../html/AddNewBills.html">Add New Bills</a></li>
                   <li><a href="../html/globalevents.html">Global Events</a></li>
                   
                </ul>
             </div>
             <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                   <a href="#"><i class="fab fa-facebook-f"></i></a>
                   <a href="#"><i class="fab fa-twitter"></i></a>
                   <a href="#"><i class="fab fa-instagram"></i></a>
                   <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
             </div>
 
          </div>
       </div>
    </footer>
    <!--footer section ends here-->

<!-- link the js file -->
<script src = "../js/Edit.js"> </script>





  