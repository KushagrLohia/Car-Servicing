
<?php

session_start();

$conn = mysqli_connect('localhost' , 'root','', 'car_service');

$_SESSION['login_email'] = $_POST['email'];
$psw = $_POST['psw'];

$sql = "select * from user where email = '".$_SESSION['login_email']."'";    


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row=mysqli_fetch_assoc($result)){
        $_SESSION['username']=$row['name'];                  // Storing user name in the session
        if(password_verify($psw,$row['password'])){         // It will matches our encrypted password i.e it will matches our password which user will enter during login with the enycrpted password corresponding to the email
            header('location:dashboard.php'); 
        }
        else{                                          // if password does not matches with the email
            ?>
            <script>
                alert("Invalid Password");
                location="index.php";
            </script>
            <?php
            }
    }    
} 
else {
    ?>
    <script>
        alert("Invalid Email Address");
        location="index.php";
    </script>

    <?php
}


?>




