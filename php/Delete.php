<?php
    include 'configMyprofile.php';

    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $bid=$_GET['deletebid'];

        $sql = "delete from event  where Event_ID=$id";
        $result = mysqli_query($conn, $sql);
        if($result){
            header('location:Myprofile.php');
        }else{
            echo"Error : Could not delete the record";
        }

        $sql = "delete from bill  where Bill_Code=$bid";
        $Bresult = mysqli_query($conn, $sql);
        if($Bresult){
            header('location:Myprofile.php');
        }else{
            echo"Error : Could not delete the record";
        }

    }

?>

<?php
    include 'configMyprofile.php';

    if(isset($_GET['deletebid'])){
        $bid=$_GET['deletebid'];

        $sql = "delete from bill  where Bill_Code=$bid";
        $Bresult = mysqli_query($conn, $sql);
        if($Bresult){
            header('location:Myprofile.php');
        }else{
            echo"Error : Could not delete the record";
        }

    }

?>



    