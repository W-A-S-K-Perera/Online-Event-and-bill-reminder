<?php
 include('connect.php');
?>


<!DOCTYPE html>
<html lan="en" and dir="Itr">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
       
        <link rel="stylesheet" href="../css/stylel.css">
        <script src="../js/login.js" ></script>
    </head>
    <body>

        <form class="box" action="configl.php" method="POST">
            <h1>
                Login Form
            </h1>
            
            <h3>User ID</h3>
            <input type="text" name="u_id" placeholder="Enter User ID" id="u_id">
            <h3>Password</h3>
            <input type="password" name="password" placeholder="Enter Password" id="password">
            <span>
                <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
            </span>
            <input type="submit" name="" value="Login" >
            <a href="../html/forgetPassword.html">Forgot your pssword?</a>
            <h4>OR</h4>
            <a href="../html/Registration.html">Don't have an account</a>
        </form>
        <br><br>
    </body>
</html>
