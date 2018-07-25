 
 
	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
				<!-- widget -->
				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="about-widget">
<?php
    $sql = "SELECT * FROM siteayar_table ORDER BY ayar_id DESC limit 1"; 
    mysqli_query($conn,"set names utf8");
    $result = mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
    ?>
<a href="index.php?page=home" ><img src="../admin/adminlab/sekil/siteimg/<?=$row['site_logo']?>" class="pt-2" alt=""></a>

						<p><?=$row['footer_text']?></p>
						<div class="social pt-1">
							<a href="<?=$row['facebook']?>"target="blank"><i class="biq  fa fa-facebook-square"></i></a>
							<a href="<?=$row['instagram']?>"target="blank"><i class="biq  fa fa-instagram "></i></a>
							<a href="<?=$row['youtube']?>"target="blank"><i class="biq  fa fa-youtube-square"></i></a>
							 
						</div>
					</div>
				</div>
				<!-- widget -->
 
			<?php  } }  ?>


				<div class="col-sm-6 col-lg-3 footer-widget">
					<div class="dobule-link">
						<ul>

					<h6 class="fw-title">MENU</h6>
							<li><a href="../index.php?page=home">Ana Səhifə</a></li>
							<li><a href="../index.php?page=about">Hakkımızda</a></li> 
							<li><a href="../index.php?page=contact">Əlaqə</a></li>
						 
						 
							<li><a href="../index.php?page=courses">Kurslarımız</a></li>
							<li><a href="../index.php?page=ourevents">Aktivitələr</a></li>
							<li><a href="blog.php">Blog</a></li> 
						</ul>
					</div>
				</div>
				 
				<div class="col-sm-6 col-lg-3 footer-widget">

<?php
  
    $sql = "SELECT * FROM contact ORDER BY contact_id DESC limit 1"; 
          mysqli_query($conn,"set names utf8");
          $result = mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
          	?>
          	
					<h6 class="fw-title">Əlaqə</h6>	
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> <?=$row['adress'];?></p></li>
						<li><p><i class="fa fa-phone"></i> <?=$row['telefon'];?></p></li>
						<li><p><i class="fa fa-envelope"></i> <?=$row['email'];?></p></li>
						<li><p><i class="fa fa-clock-o"></i> <?=$row['worktime'];?></p></li>
					</ul>
				<?php  } }else{ echo"0 netice";  } 
                   mysqli_close($conn); ?>
				</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>Bütün Hüquqları Qorunur | İnternational Education Center | Developer <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">BugliBay</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.countdown.js"></script>
	<script src="../js/masonry.pkgd.min.js"></script>
	<script src="../js/magnific-popup.min.js"></script>
	<script src="../js/main.js"></script>
	
</body>
</html>