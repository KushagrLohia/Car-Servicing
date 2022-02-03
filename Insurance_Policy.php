<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Policy</title>
    <link href="css/bs_4_5_2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="enquiry-back">

    <?php include'header.php';?>

    <div class="container-fluid car-header">
    <div class="row">
        <div class="col-sm-12">
            <p class="text-center display-3 insurance-txt-head enquiry-header mt-3">Car Insurance Policy</p>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-3">
                <i><p class="text-center">Please fill out the form below. Once submitted, we will process the request and we will get in touch with you 
                    <br>through the phone number or email address that you will provide below: </p></i>
            </div>
        </div>
    </div>

    <div class="container">
        <form>
            <h6 class="mt-2 mb-4 text-info text-center text-head">Personal Information</h6>
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

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label>Mobile number</label>
                    <input type="number" class="form-control" placeholder="Enter your Mobile Number">
                </div>
                <div class="form-group col-sm-6">
                    <label>Email-Id</label>
                    <input type="email" class="form-control" placeholder="Enter your Email-Id">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Enter your address">
                </div>
            </div>

            <h6 class="mt-4 mb-4 text-info text-center text-head text-weight-bolder">Vehicle Information</h6>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label>Vehicle Plate Number</label>
                    <input type="number" class="form-control" placeholder="Enter your vehicle number">
                </div>
                <div class="form-group col-sm-6">
                    <label>Vehicle Make</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label>Vehicle Modal</label>
                    <input type="text" class="form-control" placeholder="Enter your vehicle number">
                </div>
                <div class="form-group col-sm-6">
                    <label>Year Manufactured</label>
                    <input type="text" class="form-control" placeholder="example@2018">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label>Seating Capacity</label>
                    <input type="number" class="form-control" placeholder="Enter your seating capacity (Including Driver)">
                </div>
                <div class="form-group col-sm-6">
                    <label>Flue Type</label>
                    <input type="text" class="form-control" placeholder="Petrol/Diesel">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label>Chassis Number</label>
                    <input type="number" class="form-control" placeholder="Enter your vehicle Chassis Number">
                </div>
                <div class="form-group col-sm-6">
                    <label>Engine Number</label>
                    <input type="number" class="form-control" placeholder="Enter your vehicle Engine number">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label>Type of body</label>
                    <input type="text" class="form-control" placeholder="Enter the type of body">
                </div>
                <div class="form-group col-sm-6">
                    <label>Color</label>
                    <input type="text" class="form-control" placeholder="Enter color of your car">
                </div>
            </div>

            <h6 class="mt-4 mb-2 text-info text-center text-head">Consent</h6>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 pt-3">
                        <i><p class="text-center mb-4">I confirm the information provided above is true and correct to the best of my knowledge. 
                            I further understand that<br> any misrepresentations on this form may cause the denial or decline of my request. </p></i>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="Enter your First Name">
                </div>
                <div class="form-group col-sm-6">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter your Last Name">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label>Email-Id</label>
                    <input type="email" class="form-control" placeholder="Confirm your Email-Id">
                </div>
            </div>

            <div class="form-group">
                <label>Upload your Signature</label>
                <input type="file" class="form-control-file mt-2">
            </div>
            <div class="justify-content-center d-flex">
                <input class="btn submit-btn w-25 mt-4 mb-5" type="submit" value="Submit">
            </div>
        </form>
    </div>

    <?php include'footer.php';?>

</body>
</html>