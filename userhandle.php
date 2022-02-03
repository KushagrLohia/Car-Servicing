<?php

$conn = mysqli_connect('localhost' , 'root','', 'car_service');

$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);            //it will allow the special character enter inside the database
$phone = mysqli_real_escape_string($conn,$_POST['mobile']);
$psw = mysqli_real_escape_string($conn,$_POST['password']);


$pass=password_hash($psw, PASSWORD_BCRYPT);                         //It will encrypt our password

$emailquery = "select * from user where email='$email' || phone='$phone' ";
$query = mysqli_query($conn,$emailquery);
$emailcount = mysqli_num_rows($query);
if($emailcount > 0){
    ?>
    <script>
        alert("Email or mobile number already exist");
        location="index.php";
    </script>

    <?php
    // header('location:index.php');  You can't mix a header-based redirect with page content. The header is telling the browser to skip displaying a page and go straight to another page.
}
else{
    $sql = "insert into user values('' , '$name' , '$email' ,'$phone' ,'$pass')";
    mysqli_query($conn,$sql);
    ?>
    <script>
        alert("Account Created Successfully");
        location="index.php";
    </script>
    <?php
}

?>