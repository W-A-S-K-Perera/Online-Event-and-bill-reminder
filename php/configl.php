<?php
include "connect.php";
include "login.php";
if(isset($_POST['u_id']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $uid = validate($_POST['u_id']);
    $upass = validate ($_POST['password']);
    if (empty($uid)){
        header("location: login.php?error=Use ID is required");
        exit();

    }else if(empty($upass)){
        header("location: login.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE u_id='$uid' AND password='$upass' ";
        $result  = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)){
            echo "Login Successfully";
            header("location: ../html/dashbord1.html");
        }else{
            
            echo "<script>alert('Login Again ');</script>";
        }
    }

}else{
    
    header("location: login.php");
    exit();
}
?>