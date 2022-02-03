<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/dist/css/adminlte.min.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?php echo base_url('admin_login');?>" class="h1"><b>AdminRegister</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form id="register" action="<?php echo base_url('admin/admin_register');?>" method="POST">
        <div class="input-group mb-3">
          <input type="text" name="name" id="name" class="form-control required" placeholder="Full name" >
          <small><?php echo form_error('name'); ?></small>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="email" id="email" class="form-control" placeholder="Email" >
          <small><?php echo form_error('email'); ?></small>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
          <small><?php echo form_error('password'); ?></small>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       <!-- <div class="input-group mb-3">
          <input type="password" name="retype_password" id="retype_passsword" class="form-control" placeholder="Retype password"/>
          <small><?php //echo form_error('retype_password'); ?></small>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>--->
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block" >Register</button>
          </div>
          <!-- /.col -->
        </div>
     
</div>
<!-- /.register-box -->
<script>
if ($("#register").length > 0) {
      $("#register").validate({
    rules: {
      name: {
        required: true,
      },
      email: {
        required: true,
        maxlength: 50,
        email: true,
      }, 
      password: {
        required: true,
      },   
    },
    messages: {
      name: {
        required: "Please enter name",
      },
      email: {
        required: "Please enter valid email",
        email: "Please enter valid email",
        maxlength: "The email name should less than or equal to 50 characters",
        },      
        password: {
        required: "Please enter password",
      },
    },
  })
}
</script>

<!-- jQuery -->
<script src="<?php echo base_url();?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>/dist/js/adminlte.min.js"></script>
</body>
</html>
