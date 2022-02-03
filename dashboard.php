<?php
  session_start();

  if(!isset($_SESSION['username'])){
    header('location:index.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bs_4_5_2.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <title>User Dashboard</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
      background-color: whitesmoke;
    }

    #toggle-btn{
      position: fixed;
      top:20px;
      right:30px;
      border:none;
      color: teal;
      transition: all 0.3s linear;
      animation: bounce 2s ease-in-out infinite;
    }
    @keyframes bounce {
      0%{
        transform:scale(1);
      }
      50%{
        transform:scale(1.5);
      }
      100%{
        transform:scale(1);
      }
    }


    .hide_sidebar{               /*Toggle part*/
      display:none;
    }

    .sidebar_width{
      width:60px !important;
      
    }


    .side-bar{
      position: absolute;
      top:0px;
      left:0px;
      width:250px;
      height:100%;
      background-color:rgb(13, 160, 160);
      transition:all 0.1s linear;
      display:grid;
      grid-template-rows: 0.2fr 2fr;
      grid-row-gap: 0px ;
    }
    .headd{                        
        font-size: 35px;
        color: white;
        font-weight: bold;
        text-align:center;
        margin:20px;
    }
    .link ul li a{
      color: white;
      margin:20px 30px 0px 0px;
      text-decoration: none;
    }
    .link ul li{
      margin:16px 20px;
      font-size:18px;
      color:white;
      font-weight:bold;
      display:flex;
    }
    .txt{            
      padding:20px;
    }
    li{
      text-decoration:none;
      list-style-type:none;
    }
    .social-link ul{
      display:flex;
    }
    .social-link ul li{
      padding:10px;
      margin-left:10px;
    }
    .social-link ul li a{                 
      color:white;
    }

    .main{
      height:98vh;
      width:100vw;
      display:grid;
      place-items:center;
    }

    .main h1{
      text-shadow: 2px 2px 4px black;
      color: rgb(13, 160, 160);
      font-family: 'Dancing Script', cursive;
    }
    .user_details{
      border:3px solid rgb(13, 160, 160);
      border-radius:50px;
      background-color:white;
      height:550px;
      width:600px;
      padding:30px;
      text-align:center;
    }

</style>
<body>

<button id="toggle-btn"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>

<aside class="side-bar">
    <div>
      <span><i class="fa fa-car fa-2x" style="padding:20px 10px; color:white;" aria-hidden="true"></i></span>
      <span class="headd">Carva</span>
    </div>
    <div class="link">
      <ul>
        <li>
          <a href="index.php">
            <span><i class="fa fa-home" aria-hidden="true"></i></span>
            <span class="txt">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="index.php">
          <i class="fa fa-info-circle" aria-hidden="true"></i>
          <span class="txt">About Us</span>
          </a>
        </li>
        <li>
          <a href="index.php">
          <i class="fa fa-wrench" aria-hidden="true"></i>
          <span class="txt">Services</span>
          </a>
        </li>
        <li>
          <a href="index.php">
          <i class="fa fa-question-circle" aria-hidden="true"></i>
          <span class="txt">Help</span>
          </a>
        </li>
        <li>
          <a href="dashbord_logout.php">
          <i class="fa fa-sign-out" aria-hidden="true"></i>
          <span class="txt">Sign Out</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="social-link">
      <ul>
        <li>
          <a href="https://www.twitter.com" class="bottom_icon">
            <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="https://www.twitter.com" class="bottom_icon">
            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="https://www.twitter.com" class="bottom_icon">
            <i class="fa fa-fax fa-2x" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="https://www.twitter.com" class="bottom_icon">
            <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
    </div>
</aside>

<div class="main">
  <h1 class="m-0 p-0 display-3">Welcome <?php echo $_SESSION['username'];?></h1>
  <div class="user_details">
  
  <?php
  
  $conn= mysqli_connect('localhost', 'root', '', 'car_service');
  
  $sql= "select  * from jobcard where email= '".$_SESSION['login_email']."'";

  $result= mysqli_query($conn , $sql);

  if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
      echo "<h5>"."First Name : " . $row["first_name"]."</h5>"."<br>";
      echo "<h5>"."Last Name : ". $row["last_name"]."</h5>"."<br>";
      echo "<h5>"."Mobile Number : ". $row["mobile"]."</h5>"."<br>";
      echo "<h5>"."Email Id : ". $row["email"]."</h5>"."<br>";
      echo "<h5>"."Vehicle Number : ". $row["vehicle_number"]."</h5>"."<br>";
      echo "<h5>"."Year of Manufactured : ". $row["year_manufactured"]."</h5>"."<br>";
      echo "<h5>"."Color : ". $row["color"]."</h5>"."<br>";
      echo "<h5>"."Modal : ". $row["modal"]."</h5>"."<br>";
      echo "<h5>"."Issues      : ". $row["issue"]."</h5>"."<br>";
    }

  } else {
    echo "0 results";
  }
  
  ?>


  </div>
</div>


  
</body>

<script>
  var toggle=document.getElementById("toggle-btn");
  var side_bar=document.querySelector(".side-bar");
  var headd=document.querySelector(".headd");
  var txt=document.querySelectorAll(".txt");
  var bottom_icon=document.querySelectorAll(".bottom_icon");
  toggle.addEventListener("click",function(){

    side_bar.classList.toggle("sidebar_width");

    headd.classList.toggle("hide_sidebar");
    
    txt.forEach((curele)=>{
      curele.classList.toggle("hide_sidebar")
    });

    bottom_icon.forEach((curele)=>{
      curele.classList.toggle("hide_sidebar")
    });

  });

</script>
</html>