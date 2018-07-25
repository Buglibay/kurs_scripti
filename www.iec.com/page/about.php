<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php?page=home"><i class="fa fa-home"></i> Ana Səhifə</a> <i class="fa fa-angle-right"></i>
			<span>Hakkımızda</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- About section -->
	<section class="about-section spad pt-0">

<?php
 
    $conn = mysqli_connect("localhost","root","","iec_kurs") ;
    $sql = "SELECT * FROM about_us ORDER BY aboutus_id DESC limit 1"; mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ ?>
		<div class="container">
			<div class="section-title text-center">

				<h3><?=$row['basliq']?></h3>
				<p><?=$row['altyazi']?></p>
			</div>
			<div class="row">
				<div class="col-lg-6 about-text"> 
					<?=$row['metn']?>
				</div>
				<div class="col-lg-6 pt-5 pt-lg-0">
					<img src="admin/adminlab/sekil/<?=$row['hakkimizda_img']?>" alt="">
				</div>
			</div>
		</div>

			<?php } } ?>
	</section>
	<!-- About section end-->


	<!-- Team section  -->
	<section class="team-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Komanda Üzvlərimiz</h3>
				 
			</div>
			<div class="row">


    <?php  
    $sql = "SELECT * FROM komandamiz ORDER BY k_id  DESC limit 0,6";
     mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ ?>




				<div class="col-md-6 col-lg-3">
					<div class="member">
						<div class="member-pic set-bg" data-setbg="admin/adminlab/sekil/komandamiz/<?=$row['k_img'];?>">
							<div class="member-social">
								<a href="<?=$row['k_facebook'];?>" target="blank" ><i class="fa fa-facebook"></i></a>
								<a href="<?=$row['k_instagram'];?>"target="blank"><i class="fa fa-instagram"></i></a> 
							</div>
						</div>
						<h5><?=$row['k_adsoyad'];?></h5>
						<p><?=$row['k_vezifesi'];?></p>
					</div>
				</div>
				 



     <?php } }else{ echo"0 netice"; }
             mysqli_close($conn); ?>



			</div>
		</div>
	</section>
	<!-- Team section end -->

