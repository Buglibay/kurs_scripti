<?php include  'option/connect.php'; ?> 
 

<!DOCTYPE html> 
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8">
   <title>İdarəEtmə Paneli</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="" name="description">
   <meta content="" name="author">
   <link href="assets\bootstrap\css\bootstrap.css" rel="stylesheet">
   <link href="assets\bootstrap\css\bootstrap-responsive.css" rel="stylesheet">
   <link href="assets\bootstrap\css\bootstrap-fileupload.css" rel="stylesheet">
   <link href="assets\font-awesome\css\font-awesome.css" rel="stylesheet">
   <link href="css\style.css" rel="stylesheet">
   <link href="css\style_responsive.css" rel="stylesheet">
   <link href="css\style_default.css" rel="stylesheet" id="style_color">
   
   <!-- CSS dropdown -->
   <link href="assets\fancybox\source\jquery.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="assets\gritter\css\jquery.css">
   <link rel="stylesheet" type="text/css" href="assets\uniform\css\uniform.css">
   <link rel="stylesheet" type="text/css" href="assets\chosen-bootstrap\chosen\chosen.css">
   <link rel="stylesheet" type="text/css" href="assets\jquery-tags-input\jquery.css">    
   <link rel="stylesheet" type="text/css" href="assets\clockface\css\clockface.css">
   <link rel="stylesheet" type="text/css" href="assets\bootstrap-wysihtml5\bootstrap-wysihtml5.css">
   <link rel="stylesheet" type="text/css" href="assets\bootstrap-datepicker\css\datepicker.css">
   <link rel="stylesheet" type="text/css" href="assets\bootstrap-timepicker\compiled\timepicker.css">
   <link rel="stylesheet" type="text/css" href="assets\bootstrap-colorpicker\css\colorpicker.css">
   <link rel="stylesheet" href="assets\bootstrap-toggle-buttons\static\stylesheets\bootstrap-toggle-buttons.css">
   <link rel="stylesheet" href="assets\data-tables\DT_bootstrap.css">
   <link rel="stylesheet" type="text/css" href="assets\bootstrap-daterangepicker\daterangepicker.css">
   <link rel="stylesheet" href="assets\data-tables\DT_bootstrap.css">
   <link href="assets\fancybox\source\jquery.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="assets\uniform\css\uniform.css">
   
   <link href="assets\bootstrap-tag\css\bootstrap-tag.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets\bootstrap-wysihtml5\bootstrap-wysihtml5.css">
    <link href="assets\fancybox\source\jquery.css" rel="stylesheet">
    <link href="assets\bootstrap-wysihtml5\bootstrap-wysihtml5.css" rel="stylesheet" type="text/css">
    
   <link href="assets\jquery-file-upload\css\jquery.css" rel="stylesheet" type="text/css">
   <link href="css\inbox.css" rel="stylesheet" type="text/css">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!-- BEGIN LOGO --> 
               <a class="brand" href="index.php?page=home">
                   <img src="img\logo.png" alt=" ">
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
                
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu">

                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="img\avatar1_small.jpg" alt="">
                               <span class="username">Admin</span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu">
                                
                               <li class="divider"></li>
                               <li><a href="../logout.php"><i class="icon-key"></i> Log Out</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div id="sidebar" class="nav-collapse collapse">

         <div class="sidebar-toggler hidden-phone"></div>   

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search">
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li class="has-sub active">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-leaf"></i></span> Admin Panel
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="index.php">Ana Səhifə</a></li> 
                      <li><a class="" href="siteayarlari.php">Site Setting</a></li> 

                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"> <i class="icon-user"></i></span>Site Idarə Heyyəti
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="isdifadeciler.php">USERS</a></li> 
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-pencil"></i></span> Blog Ayarları
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="blogyazilari.php">Blog Yazıları</a></li>
                      <li><a class="" href="blogcomments.php">Blog comments</a></li>
                      
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-picture"></i></span> Şəkil Ayarları
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                    <li><a class="" href="slider.php">Slider</a></li>
                      <li><a class="" href="fotogaleri.php">Foto Qaleri</a></li>
                  </ul>
                      
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-cloud"></i></span> Əlaqə
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="elaqeayar.php">Əlaqə  Ayarları</a></li>
                      <li><a class="" href="mesajlar.php">Mesajlar</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class=" icon-edit"></i></span> Paylaşımlar
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="kurslar.php">Kurslar</a></li>
                      <li><a class="" href="events.php">Aktivitələr</a></li>
                 
                  </ul>
              </li>
 <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class=" icon-star"></i></span> Qeydiyyat
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub"> 
                      <li><a class="" href="eventqeydiyyat.php">Aktivitə Qeydiyyatları</a></li>
                  </ul>
              </li>
              <li class="has-sub">
                  <a href="javascript:;" class="">
                      <span class="icon-box"><i class="icon-group"></i></span> Hakkımızda
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="hakkimizda_ayar.php">Hakkımızda Ayarları</a></li>
                      <li><a class="" href="komandamiz.php">Komandamız Ayarları</a></li>
                      
                  </ul>
              </li>
            
         <!-- END SIDEBAR MENU -->
      </div>
      
      <!-- END SIDEBAR -->
