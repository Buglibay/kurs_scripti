 <!DOCTYPE html>

<?php  
include 'adminlab/option/connect.php'; ?>

<!--
Template Name: Admin Lab Dashboard build with Bootstrap v2.3.1
Template Version: 1.3
Author: Mosaddek Hossain
Website: http://thevectorlab.net/
-->

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8">
  <title>Login page</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="author">
  <link href="adminlab/assets\bootstrap\css\bootstrap.css" rel="stylesheet">
  <link href="adminlab/assets\font-awesome\css\font-awesome.css" rel="stylesheet">
  <link href="adminlab/css\style.css" rel="stylesheet">
  <link href="adminlab/css\style_responsive.css" rel="stylesheet">
  <link href="adminlab/css\style_default.css" rel="stylesheet" id="style_color">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body id="login-body">
  <div class="login-header">
      <!-- BEGIN LOGO -->
      <div id="logo" class="center">
          <img src="adminlab/img/logo.png" alt="logo" class="center">
      </div>
      <!-- END LOGO -->
  </div>
  <!-- BEGIN LOGIN -->
  <div id="login">
    <!-- BEGIN LOGIN FORM -->
    <form id="loginform" class="form-vertical no-padding no-margin" action="login.php" method="post">
      <div class="lock">
          <i class="icon-lock"></i>
      </div> 
      <div class="control-wrap">
          <h4>İdarəçi Girişi</h4>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-user"></i></span><input id="input-username" type="text" name="name" placeholder="İsdifadəçi adı ...">
                  </div>
              </div>
          </div>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-key"></i></span><input id="input-password" type="password" name="pass" placeholder="Şifrə ...">
                  </div>
                   
                  <div class="clearfix space5"></div>
              </div>

          </div>
          <?php 
          if(@$_GET['login']="no"){
           echo 'Ad veya sifre yalnishdir' ;
          } 
          ?>
      </div> 

      <input type="submit" id="login-btn" class="btn btn-block login-btn" name="giris" value="Login">
    </form>
    <!-- END LOGIN FORM -->    
     
  </div>
  <!-- END LOGIN -->


<?php
mysqli_close($conn);
?>
 


  <!-- BEGIN COPYRIGHT -->
  <div id="login-copyright">
      &copy; Admin :::: I.E.C ::::
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  <script src="adminlab/js\jquery-1.8.3.js"></script>
  <script src="adminlab/assets\bootstrap\js\bootstrap.js"></script>
  <script src="adminlab/js\jquery.js"></script>
  <script src="adminlab/js\scripts.js"></script>
  <script>
    jQuery(document).ready(function() {     
      App.initLogin();
    });
  </script>
  <!-- END JAVASCRIPTS -->
  
</body>
<!-- END BODY -->
</html>
