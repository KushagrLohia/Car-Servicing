<?php
session_start();

$user="hgg@jhh.com";
$_SESSION['pass']="abc";
// $pass="abc";

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    if($email==$user && $pwd==$_SESSION['pass']){
        header('location:jobcard.php');
    }
    else{
        ?>
        <script>
            alert ("Invalid Email or Password");
            location="admin.php";
        </script>
        <?php
    }
}

?>