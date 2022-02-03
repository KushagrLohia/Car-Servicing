<?php  include('function.php') ; ?>
<div class="navbar navbar-expand-lg navbar-light bg-nav sticky-top">
        <a href="#" class="navbar-brand">Carvaa</a>

        <form class="form-inline ml-5 d-none d-sm-block w-50">
            <input class="form-control mr-1" type="text" placeholder="Search here">
            <button class="btn btn-outline-dark"><i>Search</i></button>
        </form>
                
        <button class="navbar-toggler d-lg-none d-block" type="button" data-toggle="collapse" data-target="#Myicon">  <!--d-md-none lgaya tha-->
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav collapse navbar-collapse" id="Myicon">
            <i><li><a href="index.php" class="nav-link ml-sm-5 font-weight-bolder tab">Home</a></li></i>
            <i><li><a href="About_us.php" class="nav-link ml-sm-5 font-weight-bolder tab">AboutUs</a></li></i>
            <i><li><a href="contact.php" class="nav-link ml-sm-5 font-weight-bolder tab">ContactUs</a></li></i>

            <i><li class="dropdown ml-sm-5 font-weight-bolder"><a class="nav-link dropdown-toggle tab" data-toggle="dropdown">Services</a>
                <div class="dropdown-menu mt-2">
                    <a class="dropdown-item" href="service.php">Range of Services</a>
                    <a class="dropdown-item" href="Insurance_Policy.php">Insurance Policy</a>
                </div>
            </li></i>

            <i><li><a href="img_gallery.php" class="nav-link ml-sm-5 font-weight-bolder tab">ImageGallery</a></li></i>
            <i><li class="dropdown ml-sm-5 font-weight-bolder"><a class="nav-link dropdown-toggle tab" data-toggle="dropdown">FAQ</a>
                <div class="dropdown-menu mt-2">
                    <a class="dropdown-item" href="faq.php">FAQ</a>
                    <a class="dropdown-item" href="Enquiry_form.php">Enquiry Form</a>
                </div>
            </li></i>
            <i><li><a class="btn btn-reg ml-sm-5  " data-toggle="modal" data-target="#myModal">Signup</a></li></i>
            <i><li><a class="btn btn-reg ml-sm-3" data-toggle="modal" data-target="#sec-modal">LogIn</a></li></i>
           
        </ul>
    </div>





    <!--Log In-->
    <div class="modal fade" id="sec-modal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header btn-reg-click">
                    <h4 class="modal-title">LOGIN</h4>
                    <button class="btn" data-dismiss="modal">
                        <span> &times; </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method='post' action='userlogin.php'>
                        <div class="form-group">
                            <label>Email Id :</label>
                            <input type="email" name='email' class="form-control" placeholder="Enter your Email id">
                        </div>
                        <div class="form-group">
                            <label>Password :</label>
                            <input type="password" name='psw' class="form-control" placeholder="Enter your password">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                        </div>
                    <!-- </form> -->
                </div>
                <div class="modal-footer">
                    <input type='submit' name="login" class="btn btn-success" value='Login' />
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>






    
    <!--Sign Up-->
    <div class="modal fade" id="myModal" data-backdrop="static">
        <div class="modal-dialog  modal-dialog-centered">

            <div class="modal-content">
                <div class="modal-header btn-reg-click">
                    <h5 class="madal-title">SIGNUP</h5>
                    <button class="close" data-dismiss="modal">
                        <span> &times; </span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="form-horizontal" method='post' action='userhandle.php'>
                        <div class="form-group">
                            <label>Name :</label>
                            <input class="form-control" type="text" name='name' placeholder="Enter your Name" required>
                        </div>
                        <div class="form-group">
                            <label>Email Id :</label>
                            <input class="form-control" type="email" name='email' placeholder="Enter your E-mail id" required>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number :</label>
                            <input class="form-control" type="number" name='mobile' placeholder="Enter your mobile Number" required>
                        </div>
                        <div class="form-group">
                            <label>Create Password :</label>
                            <input class="form-control" type="password" name='password' placeholder="Enter your new password" required>
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                        </div>
                    
                </div>

                <div class="modal-footer">
                    <input type="submit" name='submit' class="btn btn-success" value = 'Sign Up' />
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <?php
 
 if(isset($_SERVER['REQUEST_METHOD' == 'POST'])){

    signup();
 }

?>