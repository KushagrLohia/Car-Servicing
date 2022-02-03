<?php

$conn = mysqli_connect('localhost', 'root', '','car_service' );

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$vehicle_no = $_POST['vehicle_no'];
$yom = $_POST['yom'];
$color = $_POST['color'];
$modal = $_POST['modal'];
// $issue = $_POST['issue'];
$issue_str="";
if(!isset( $_POST['issue'])){
    $_POST['issue']="";
}
else{
    $issue_str=implode(',', $_POST['issue']);
}

$query="select * from jobcard where email='$email' ";

$email_db=mysqli_query($conn , $query);

$email_count=mysqli_num_rows($email_db);

if($email_count > 0){
    ?>
    <script>
        alert("Invalid Details \nEmail Already Exist");
        location="jobcard.php";
    </script>
    <?php
}
else{

$sql = "insert into jobcard values('', '$fname', '$lname', '$mobile', '$email', '$vehicle_no', '$yom', '$color', '$modal', '$issue_str' )";

if(mysqli_query($conn , $sql)){
    ?>
    <script>
        alert("Jobcard Created Successfully \nSignUp with the same Email to access your dashboard");
        location="jobcard.php";
    </script>
    <?php
}
}

?>