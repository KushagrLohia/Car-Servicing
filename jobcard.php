<?php

session_start();

if(!isset($_SESSION['pass'])){
    header('location:admin.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bs_4_5_2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Job Card</title>
</head>

<style>
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
    body{
        background-color: whitesmoke;
    }
    .main{
        /* width: 100vw;
        height: 100vh; */
        display: grid;
        place-items: center;
    }
    .jc{
        margin:30px;
        background-color: darkcyan;
        width: 1200px;
        height: 850px;
        border-radius: 50px;
    }
    label{
        color: rgb(225, 238, 238);
    }
    .fa{
        position:fixed;
        top:20px;
        right:20px;
        color:darkcyan;
        cursor: pointer;
        animation:bounce 2.5s ease-in-out infinite;
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
</style>

<body>

    <a href="admin_logout.php">
        <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
    </a>

    <div class="main">
        <div class="jc">
            <h1 class="text-center mt-3 mb-5" style="color: rgb(209, 238, 238);">Job Card</h1>
            <form method="post" action="jobcard_db.php">
            <div class="form-row my-3">
                <div class="form-group col-sm-6">
                    <label class="ml-5">First Name</label>
                    <input type="text" class="form-control w-75 ml-5" name="fname" placeholder="First Name" required>
                </div>
                <div class="form-group col-sm-6">
                    <label>Last Name</label>
                    <input type="text" class="form-control w-75" name="lname" placeholder="Last Name" required>
                </div>
            </div>

            <div class="form-row my-3">
                <div class="form-group col-sm-6">
                    <label class="ml-5">Mobile number</label>
                    <input type="number" class="form-control w-75 ml-5" name="mobile" placeholder="Enter your Mobile Number" required>
                </div>
                <div class="form-group col-sm-6">
                    <label>Email-Id</label>
                    <input type="email" class="form-control w-75" name="email" placeholder="Enter your Email-Id" required>
                </div>
            </div>

            <div class="form-row my-3">
                <div class="form-group col-sm-6">
                    <label class="ml-5">Vehicle Plate Number</label>
                    <input type="text" class="form-control w-75 ml-5" name="vehicle_no" placeholder="Enter your vehicle number" required>
                </div>
                <div class="form-group col-sm-6">
                    <label>Year Manufactured</label>
                    <input type="text" class="form-control w-75" name="yom" placeholder="example@2018">
                </div>
            </div>

            <div class="form-row my-3">
                <div class="form-group col-sm-6">
                    <label class="ml-5">Color</label>
                    <input type="text" class="form-control w-75 ml-5" name="color" placeholder="Enter color of your car">
                </div>
                <div class="form-group col-sm-6">
                    <label>Modal</label>
                    <input type="text" class="form-control w-75" name="modal" placeholder="example@2018">
                </div>
            </div>

            <div class="text-center my-5" style="display:grid; grid-template-columns:1fr 0.8fr 1fr;">
                <div style="margin:20% 0%;">
                    <input type="checkbox" id="d1" name="issue[]" value="Allignment">
                    <label  class="mr-5">Allignment</label>
                    <input type="checkbox" id="d2" name="issue[]" value="Damaged">
                    <label>Damaged</label><br>
                </div>
                <div>
                    <input type="image" src="images/car_stru.png" height="200px" width="200px" /><br>
                </div>
                <div style="margin:20% 0%;">
                    <input type="checkbox" id="d3" name="issue[]" value="Oiling">
                    <label  class="mr-5">Oiling</label>
                    <input type="checkbox" id="d4"  class="ml-5" name="issue[]" value="Brake Issue">
                    <label >Brake Issuse</label><br>   
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn rounded-pill" style="background-color: rgb(162, 230, 230);">Subtmit</button>
            </div>


        </form>
            
        </div>
    </div>
</body>
</html>