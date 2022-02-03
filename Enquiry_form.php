<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form</title>
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
    
    <div class="container-fluid enquiry-head">
        <div class="row">
            <div class="col-sm-12 px-0">
        <p class="display-3 text-center enquiry-header mt-3"> Enquiry Form</p>
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

            <div class="form-row mt-3">
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
                <div class="form-group col-sm-6 mt-3">
                    <label>Service Type</label>
                    <select class="form-control">
                        <option value="Service Type" selected>Service Type</option>
                        <option value="General Service">General Service</option>
                        <option value="Custom Repairs">Custom Repairs</option>
                    </select>
                </div>

                <div class="form-group col-sm-6 mt-3">
                    <label>Service Modal</label>
                    <select class="form-control">
                        <option value="Make & Modal" selected>Make & Modal</option>
                        <option value="Audi A6">Audi A6</option>
                        <option value="Audi Q8">Audi Q8</option>
                        <option value="BMW Serier-3">BMW Serier-3</option>
                        <option value="BMW Serier-5">BMW Serier-5</option>
                        <option value="BMW Serier-6">BMW Serier-6</option>
                        <option value="BMW Serier-7">BMW Serier-7</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6 mt-3">
                    <label>Select Year</label>
                    <select class="form-control">
                        <option value="Service Type" selected>Year</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select>
                </div>

                <div class="form-group col-sm-6 mt-3">
                    <label>Service Packages</label>
                    <select class="form-control">
                        <option value="Package" selected>Package</option>
                        <option value="General Service">General Service</option>
                        <option value="Insurance Claims">Insurance Claims</option>
                        <option value="Dentaing Painting">Dentaing Painting</option>
                        <option value="DryCleaning & Spa">DryCleaning & Spa</option>
                        <option value="Custom Repairs">Custom Repairs</option>
                    </select>
                </div>
            </div>

            <div class="form-row text-center my-5">
                <div class="col-sm-12">
                    <input type="submit" value="Submit" class="submit-btn rounded w-25 h-100">
                </div>
            </div>
        </form>
    </div>

    <?php include'footer.php';?>

</body>
</html>