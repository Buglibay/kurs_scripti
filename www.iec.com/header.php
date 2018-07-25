<?php include 'option/functions.php'; ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="description" content="Internaional Education Center">
	<meta name="keywords" content="international, education, center, courses,kurslar,html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->  		 	 
	<?php
    $sql = "SELECT * FROM siteayar_table ORDER BY ayar_id DESC limit 1"; 
    mysqli_query($conn,"set names utf8");
    $result = mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
    ?>
          	 <title><?=$row['site_title']?></title>
	<link href="admin/adminlab/sekil/siteimg/<?=$row['site_logo']?>" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section -->
	<header class="header-section">
		<div class="container">
	 
	 <div class="row">

			<!-- logo -->
		 <div class="col-md-1">

			<a href="index.php?page=home" ><img src="admin/adminlab/sekil/siteimg/<?=$row['site_logo']?>" class="pt-2" alt=""></a>
</div>
			<?php  } }  ?>

<div class="col-md-11">

<?php
    $sql = "SELECT * FROM contact ORDER BY contact_id DESC limit 1"; 
    mysqli_query($conn,"set names utf8");
    $result = mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
    ?>

			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-info">
				<div class="hf-item">
					<i class="fa fa-clock-o"></i>
					<p><span>İş Vaxtı:</span> <?=$row['worktime'];?></p>
				</div>
				<div class="hf-item">
					<i class="fa fa-phone"></i>
					<p><span>Telefon:</span> <?=$row['telefon'];?></p>
				</div>
			</div>
			<?php  } }  ?>
			</div >
			</div >
		 </div >
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			 
			<ul class="main-menu">
				<li class="active"><a href="index.php?page=home">Ana Səhİfə</a></li>
				<li><a style="font-weight: bold; " href="index.php?page=about">Hakkımızda</a></li>
				<li><a style="font-weight: bold; " href="index.php?page=courses">Kurslarımız</a></li>
				<li><a style="font-weight: bold; " href="index.php?page=ourevents">Aktİvİtələr</a></li>
				<li><a style="font-weight: bold; " href="page/galery.php">Foto Galerİ</a></li>
				<li><a style="font-weight: bold; " href="page/blog.php">Blog</a></li>
				<li><a style="font-weight: bold; " href="index.php?page=contact">Əlaqə</a></li>
			</ul>
		</div>
	</nav>
	<!-- Header section end -->







