<?php

include 'configMyprofile.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="../css/Myprofile.css">
    <title>My Profile</title>


    <!--Navigation bar starts here-->
    <header class="header">

        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="logo"><img src="../Images/Remindmee_3.png" width="60px"></div>
                <div class="logo1">

                    <a href="../html/dashbord1.html">Remind mee</a>
                </div>
                <button type="button" class="nav-toggler">
                    <span></span>
                </button>
                <nav class="nav">
                    <ul>
                        <li><a href="../html/dashbord1.html" >Dashboard</a></li>
                        <li><a href="../html/globalevents.html">global events</a></li>
                        <li><a href="#" class="active">My Profile</a></li>
                        <li><a href="../html/Home.html" class="lbtn">log out</a></li>
                        <li><a href="Edit.php" class="ebtn">Edit</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!--Navigation bar ends here-->
</head>

<body>
    <div class="table-topic">Upcoming events</div>
    <table class="contable1">
        <thead>
            <td>Event No</td>
            <td>Event Name</td>
            <td>Date</td>
            <td>Time</td>
            <td></td>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT Event_ID, E_NAME, E_Date,E_Time FROM event';
            $data = mysqli_query($conn, $sql);
            if ($data) {

                while ($row = mysqli_fetch_assoc($data)) {
                    $id = $row['Event_ID'];
                    $Ename = $row['E_NAME'];
                    $Edate = $row['E_Date'];
                    $Etime = $row['E_Time'];
                    echo '<tr>
                        <td>' . $id . '</td>
                        <td>' . $Ename . '</td>
                        <td>' . $Edate . '</td>
                        <td>' . $Etime . '</td>
                        <td>
                             <button class="delete-button"><a href="Delete.php?
                             deleteid='.$id.'">Delete</a></button>
                        </td>
                        </tr>
                    ';
                }
            }


            ?>


            
        </tbody>
    </table>
    <Button class="add-button"><a href="../html/AddNewEvents.html">Add +</a></Button>

    </div>
    
    <div class="table-topic">Upcoming bills</div>
    <table class="contable">
        <thead>
            <td>Bill code</td>
            <td>Bill type</td>
            <td>Due date</td>
            <td>Amount</td>
            <td></td>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT Bill_Code, B_Type,Due_Date,Amount FROM bill';
            $Bdata = mysqli_query($conn, $sql);
            if ($Bdata) {

                while ($row = mysqli_fetch_assoc($Bdata)) {
                    $Bid = $row['Bill_Code'];
                    $Btype = $row['B_Type'];
                    $Bdate = $row['Due_Date'];
                    $Bamount = $row['Amount'];
                    echo '<tr>
                        <td>' . $Bid . '</td>
                        <td>' . $Btype . '</td>
                        <td>' . $Bdate . '</td>
                        <td>' . $Bamount . '</td>
                        <td>
                             <button class="delete-button"><a href="Delete.php?
                             deletebid='.$Bid.'">Delete</a></button>
                        </td>
                        </tr>
                    ';
                }
            }


            ?>



        </tbody>
    </table>
    </div>

    <div class="table-topic">Past events</div>
    <table class="contable">
        <thead>
            <td>Event No</td>
            <td>Event Name</td>
            <td>Date</td>
            <td>location</td>
            <td></td>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT PEvent_ID, PE_NAME, PE_Date,PE_Location FROM past_event';
            $data = mysqli_query($conn, $sql);
            if ($data) {

                while ($row = mysqli_fetch_assoc($data)) {
                    $peid = $row['PEvent_ID'];
                    $pename = $row['PE_NAME'];
                    $pedate = $row['PE_Date'];
                    $pelocation = $row['PE_Location'];
                    echo '<tr>
                        <td>' . $peid . '</td>
                        <td>' . $pename . '</td>
                        <td>' . $pedate . '</td>
                        <td>' . $pelocation . '</td>
                        </tr>
                    ';
                }
            }


            ?>



        </tbody>
    </table>
    </div>
    

    <!-- calendar-->

    <center>
    <div class="container1">
        <div class="calendar">
            <div class="month">
                <i class="fas fa-angle-left prev"></i>
                <div class="date">
                    <h1></h1>
                    <p></p>
                </div>
                <i class="fas fa-angle-right next"></i>
            </div>
            <div class="weekdays">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="days"></div>
        </div>
    </div>

    </div>
    </center>







    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <span class="underline"></span>
                    <ul>
                        <li><a href="../html/AboutUs.html">About us</a></li>
                        <li><a href="../html/Feedback.html">Feedback</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <span class="underline"></span>
                    <ul>
                        <li><a href="../html/FAQ.html">FAQ</a></li>
                        <li><a href="../html/Contact.html">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Quick links</h4>
                    <span class="underline"></span>
                    <ul>
                        <li><a href="../html/AddNewEvents.html">Add new events</a></li>
                        <li><a href="../html/AddNewBills.html">Add new bills</a></li>
                        <li><a href="../html/globalevents.html">Global events</a></li>
                        
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <span class="underline"></span>
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
    </div>
    <script src="../js/Calender.js"></script>
    <script src="../js/FAQ.js"></script>
</body>

</html>