<?php

    require 'config.php';

    $email = $_POST["gmail"];
    $Contact = $_POST["contact"];
    $method = $_POST["Rmethod"];

    $sql = "INSERT INTO ForgotPassword (Email, Contact_number, Method ) VALUES ('$email', $Contact, '$method')";

    if($conn -> query($sql))
    {
        echo "<script> alert('Records added succesfully!')</script> ";
    }
    else
    {
        echo "<script> alert('Error! Could not execute the query.') </script>";
    }

?>