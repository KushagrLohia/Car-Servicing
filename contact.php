<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us_11</title>
    <link href="css/bs_4_5_2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
</head>
<body class="enquiry-back">
    
    <?php include'header.php';?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center enquiry-head enquiry-header display-3 mt-2">Contact Us</h2>
            </div>
        </div>

    </div>

    <div class="container mt-3">
        <form>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group col-sm-6">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name">
                </div>
            </div>

            <div class="form-row mt-2">
                <div class="form-group col-sm-6">
                    <label>Phone Number</label>
                    <input type="number" class="form-control" placeholder="Enter your Mobile Number">
                </div>
                <div class="form-group col-sm-6">
                    <label>Email Id</label>
                    <input type="email" class="form-control" placeholder="Enter your Email Id">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-12 mt-2">
                    <label>Query</label><br>
                    <textarea rows="2" cols="152" class="form-control" placeholder="Enter your query HERE"></textarea>
                </div>

                <div class="form-group col-sm-12 mt-2">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Enter your permanent Address">
                </div>

                <div class="form-group col-sm-12 mt-2">
                    <label>Feedback</label><br>
                    <textarea rows="2" cols="152" class="form-control" placeholder="Enter your valuable Feedback"></textarea>
                </div>
            </div>

            <div class="form-row text-center mt-4 mb-5">
                <div class="col-sm-12">
                    <input type="submit" value="Submit" class="submit-btn rounded w-25 h-100">
                </div>
            </div>
        </form>
    </div>
    
    <?php include'footer.php';?>

</body>
</html>