<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/borrow/borrow/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Nov 2021 03:57:13 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Borrow - A Loan Company Website Templates</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>asset/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/css/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/all.css">
    <link href="<?php echo base_url();?>asset/css/fontello.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CMerriweather:300,300i,400,400i,700,700i" rel="stylesheet">
 
</head>
<script>
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Email must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["phone"].value;
  if (x == "") {
    alert("Phone must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["message"].value;
  if (x == "") {
    alert("Message must be filled out");
    return false;
  }
}
</script>

<body>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url('home');?>">Home</a></li>
                            <li class="active">Contact us</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                <h1 class="page-title">Contact Us</h1>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                <div class="btn-action"> <a href="#!" class="btn btn-secondary">How To Apply</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="sub-nav" id="sub-nav">
                        <ul class="nav nav-justified">
                            <li class="nav-item">
                                <a href="contact" class="nav-link">Give me call back</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="wrapper-content bg-white p-3 p-lg-5">
                        <div class="contact-form mb60">
                            <div class=" ">
                                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                                    <div class="mb60  section-title text-center  ">
                                        <!-- section title start-->
                                        <h1>Get In Touch</h1>
                                        <p>Reach out to us &amp; we will respond as soon as we can.</p>
                                    </div>
                                </div>
                                <?php 


                                 $success = $this->session->userdata('insert_s');
                                      $error = $this->session->userdata('insert_e'); ?>
                                           <?php        
                                        if($error != ""){  $this->session->unset_userdata('insert_e');
                                        
                                        ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                            </symbol>
                                            </svg>
                                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                            <div>
                                                <h5 class="mb-1 text-dark text-center"><?php echo $error;?></h5>
                                            </div>
                                            </div>
                                    <?php } ?>
                                    <?php        
                                        if($success != ""){  $this->session->unset_userdata('insert_s');
                                        ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                </symbol>
                                            </svg>
                                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                                <div>
                                                    <h5 class="mb-1 text-dark text-center"><?php echo $success;?></h5>
                                                </div>
                                            </div>
                                    <?php } ?>
                                <form name="myForm" onsubmit="return validateForm()" class="contact-us" method="POST" action="<?php echo base_url('contact')?>">
                                    <div class=" ">
                               
                                        <!-- Text input-->
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="name">name<span class=" "> </span></label>
                                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="email">Email<span class=" "> </span></label>
                                                    <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="phone">Phone<span class=" "> </span></label>
                                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                                                </div>
                                            </div>


                                            
                                           
                                            <!-- Select Basic -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="message"> </label>
                                                    <textarea class="form-control" id="message" rows="7" name="message" placeholder="Message"></textarea>
                                                </div>
                                            </div>

                                            
                                            <!-- Button -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.section title start-->
                        <div class="contact-us mb60">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="mb60  section-title">
                                        <!-- section title start-->
                                        <h1>We are here to help you </h1>
                                        <p class="lead">Various versions have evolved over the years sometimes by accident sometimes on purpose injected humour and the like.</p>
                                    </div>
                                    <!-- /.section title start-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="bg-boxshadow pinside60 outline text-center mb30">
                                        <div class="mb40"><i class="icon-briefcase icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">Branch Office</h2>
                                        <p>2843 Lakewood Drive
                                            <br> Jersey City, CA 07304</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="bg-boxshadow pinside60 outline text-center mb30">
                                        <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">Call us at </h2>
                                        <h1 class="text-big"><a href="tel:+1800-123-4567">+1800-123-4567</a></h1>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="bg-boxshadow pinside60 outline text-center mb30">
                                        <div class="mb40"> <i class="icon-letter icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">Email Address</h2>
                                        <p>lnfo@myfinancialservice.org</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="map" id="googleMap"></div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="footer section-space100">
    
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
    <script src="<?php echo base_url();?>asset/js/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?&amp;callback=initMap" async defer></script>
</body>


<!-- Mirrored from jituchauhan.com/borrow/borrow/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Nov 2021 03:57:13 GMT -->
</html>