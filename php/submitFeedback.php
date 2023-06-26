<?php

    require 'config.php';

    $userCode = $_POST["code"];
    $rating = $_POST["ratings"];
    $suggest = $_POST["suggestions"];

    $sql = "INSERT INTO Feedback (User_id, Rating, Comment) VALUES ($userCode, $rating, '$suggest')";

    if($conn -> query($sql))
    {
        echo "<script> alert('Records added succesfully!')</script> ";
    }
    else
    {
        echo "<script> alert('Error! Could not execute the query.') </script>";
    }

?>