<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/borrow/borrow/loan-calculator.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Nov 2021 03:56:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="EMI calculator for check how muach you can borrow a loan.">
    <meta name="keywords" content="EMI calculator, Loan calculator, Business Loan calculator">
    <title>Borrow - A Loan Company Website Templates</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/all.css">
    <link href="<?php echo base_url();?>asset/css/fontello.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/simple-slider.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7cMerriweather:300,300i,400,400i,700,700i" rel="stylesheet">
    
</head>

<body>
   
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url('home');?>">Home</a></li>
                            <li class="active">Loan Calculator</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                <h1 class="page-title">Loan Calculator</h1>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="btn-action"> <a href="contact" class="btn btn-secondary">How To Apply</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="sub-nav" id="sub-nav">
                        <ul class="nav nav-justified">
                            <li class="nav-item">
                                <a href="contact" class="nav-link">Give me call back</a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link">Emi Caculator</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="wrapper-content bg-white p-3 p-lg-5">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="bg-light bg-white p-3 p-lg-5 outline">
                                        <span>Loan Amount is </span>
                                        <strong>
                                            <span class="" id="la_value">30000</span></strong>
                                        <input type="text" data-slider="true" value="30000" data-slider-range="100000,5000000" data-slider-step="10000" data-slider-snap="true" id="la">
                                        <hr>
                                        <span>No. of Month is <strong>
                                                <span class="" id="nm_value">30</span> </strong>
                                        </span>
                                        <input type="text" data-slider="true" value="30" data-slider-range="120,360" data-slider-step="1" data-slider-snap="true" id="nm">
                                        <hr>
                                        <span>Rate of Interest [ROI] is <strong><span class="" id="roi_value">10</span>
                                            </strong>
                                        </span>
                                        <input type="text" data-slider="true" value="10.2" data-slider-range="8,16" data-slider-step=".05" data-slider-snap="true" id="roi">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-light p-3 outline">
                                                Monthly EMI
                                                <h2 id='emi' class="mb-0"></h2>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-light p-3 outline">
                                                Total Interest
                                                <h2 id='tbl_int' class="mb-0"></h2>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-light p-3 outline"> Payable Amount
                                                <h2 id='tbl_full' class="mb-0"></h2>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="bg-light p-3 outline">
                                                Interest Percentage
                                                <h2 id='tbl_int_pge' class="mb-0"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div id="loantable" class='table table-striped table-bordered loantable table-responsive'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content end -->
    <!-- back to top icon -->
    <a href="#0" class="cd-top" title="Go to top">Top</a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>asset/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/main.js"></script>
    <!-- Back to top script -->
    <script src="<?php echo base_url();?>asset/js/back-to-top.js"></script>
    <script src="<?php echo base_url();?>asset/js/simple-slider.js"></script>
    <script src="<?php echo base_url();?>asset/js/calculator.js"></script>
</body>


<!-- Mirrored from jituchauhan.com/borrow/borrow/loan-calculator.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Nov 2021 03:56:52 GMT -->
</html>