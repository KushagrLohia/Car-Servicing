<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bs_4_5_2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <title>Admin Login</title>
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
        top: 25px;
        right: 25px;
        background-color: transparent;
        border: none;
        color: teal;
        cursor: pointer;
        transition: all 0.3 linear;
        animation: bounce 2s ease-in-out infinite;
    }
    @keyframes bounce{
      0%{
        transform: scale(1);
      }
      50%{
        transform: scale(1.5);
      }
      100%{
        transform: scale(1);
      }
    }
    .container{
        position: fixed;
        top: 0px;
        left: 0px;
        height: 100%;
        display: grid;
        grid-template-rows:auto 1fr auto;
        row-gap: 25px;
        width: 250px;
        /* margin: 25px; */
        background-color: white;
        transition: all 0.3s linear;              /*for smothning effect*/
        transform: translate(-100%);              /*hide the sidebar*/
    }
    .show-sidebar{
      transform: translate(0);
    }

    #title{
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.85rem;
    }
    p{
        font-size: 30px;
        color: teal;
        font-weight: bold;
    }
    #cross-btn{
        background-color: transparent;
        border: none;
        color: rgb(175, 4, 4);
        cursor: pointer;
    }
    #cross-btn:hover{
      color: red;
      transition: all 0.3s linear;
      transform: rotate(360deg);
    }
    .sidebar-link{
    list-style-type: none;
    }
    .sidebar-link a{
      display: block;
      text-decoration: none;
      color: rgb(13, 160, 160);
      font-size: 25px;
      padding: 0.6rem 1.5rem;
    }
    .sidebar-link a:hover{
      transition: all 0.3s linear;
      padding-left: 2rem;
    }
    .social-icons{
      display: flex;
      list-style-type: none;
      padding: 1rem 1.5rem;
    }
    .social-icons a{
      padding: 0.41rem;
      color: rgb(13, 160, 160);
      cursor: pointer;
      font-size: 20px;
    }
    .center{
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        /* display: grid;
        place-items: center; */
    }
    .inner{
        width: 360px;
        height: 360px;
        border-radius: 50px;
        background-color: teal;
    }
</style>
<body>

    <div class="center">
        <div class="inner">
            <h1 class="text-center my-3" style="color: rgb(209, 238, 238);">Admin Login</h1>
            <form method="post" action="adminlogin.php">
                <div class="form-group">
                  <label class="ml-5">Email address</label>
                  <input type="email" name="email" class="form-control w-75 mx-auto" placeholder="Enter Email Id" required>
                </div>
                <div class="form-group">
                  <label class="ml-5">Password</label>
                  <input type="password" name="pwd" class="form-control w-75 mx-auto" placeholder="Enter Password" required>
                </div>
                <div class="form-group form-check w-75 mx-auto">
                  <input type="checkbox" class="form-check-input">
                  <label class="form-check-label">Remember me</label>
                </div>
                <div class="w-25 mx-auto">
                <button type="submit" name="submit" class="btn rounded-pill" style="background-color: rgb(162, 230, 230);letter-spacing:0.8px;">LogIn</button>
                </div>
              </form>
        </div>
    </div>
    
    <button id="toggle-btn"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>
    <aside class="container">
        <div id="title">
            <p>Carva</p>
            <button id="cross-btn"><i class="fa fa-times fa-2x" aria-hidden="true"></i></button>
        </div>
        <ul class="sidebar-link">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="About_us.html">About Us</a>
            </li>
            <li>
              <a href="service_11.html">Services</a>
            </li>
            <li>
              <a href="contactus.html">Contact</a>
            </li>
        </ul>

        <ul class="social-icons">
            <li>
              <a href="https://www.twitter.com">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://www.twitter.com">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://www.twitter.com">
                <i class="fa fa-fax" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://www.twitter.com">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
    </aside>
    
</body>

<script>
  var toggle=document.getElementById("toggle-btn");
  var close=document.getElementById("cross-btn");
  var sidebar=document.querySelector(".container");
  toggle.addEventListener("click",function(){
    sidebar.classList.toggle("show-sidebar");
  });
  close.addEventListener("click",function(){
    sidebar.classList.remove("show-sidebar");
  });
</script>
</html>