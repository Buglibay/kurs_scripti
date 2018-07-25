<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Contact</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
	<section class="contact-page spad pt-0">
		<div class="container">

<?php
 include 'option/mysqli_connect.php';
    // $conn = mysqli_connect("localhost","root","","iec_kurs") ;
     
    $sql = "SELECT * FROM contact ORDER BY contact_id DESC limit 1";

          mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
          	?>


			<div class="map-section">
				<div class="contact-info-warp">
					<div class="contact-info">
						
						<h4>Ünvan</h4>
						<p><?=$row['adress'];?></p>
					</div>
					<div class="contact-info">
						<h4>Telefon</h4>
						<p><?=$row['telefon'];?></p>
					</div>
					<div class="contact-info">
						<h4>Email</h4>
						<p><?=$row['email'];?></p>
					</div>
					<div class="contact-info">
						<h4>İş Vaxtı</h4>
						<p><?=$row['worktime'];?></p>
					</div>
				</div>
				<!-- Google map -->
				<div class="map" id="map-canvas"> <?=$row['gmap_location'];?> </div>

			</div>

			<?php
        }
    }else{
        echo"0 netice";
    }

    // mysqli_close($conn);
?>


			<div class="contact-form spad pb-0">
				<div class="section-title text-center">
					<h3>Əlaqə Formu</h3>
					<p>
					Bizə mesajınızı buradanda Göndərə bilərsiniz</p>
				</div> 
            <!-- form -->
				<form action="" method="post" class="comment-form --contact">
					<div class="row">
						<div class="col-lg-6">
							<input type="text" name="name" placeholder="Your Name">
						</div>
						<div class="col-lg-6">
							<input type="text" name="email" placeholder="Your Email">
						</div> 
						<div class="col-lg-12">
							<textarea placeholder="Message" name="text"></textarea>
							<div class="text-center">
								<input type="submit" value="Göndər" class="site-btn" name="gonder" > 
							</div>
						</div>
					</div>
				</form>


				<?php
	      $name =htmlspecialchars_decode(trim(@$_POST['name']));
          $email =htmlspecialchars_decode(trim(@$_POST['email']));
          $text=htmlspecialchars_decode(trim(@$_POST['text']));
          $ip_adresi =@$_SERVER['REMOTE_ADDR'];
          //$hakkimizda_sekil =$_POST['hakkimizda_sekil'];
           
          // $conn = mysqli_connect('localhost','root','','iec_kurs') or  die("baglanti problemi: ".mysqli_connect_error());
mysqli_query($conn,"set names utf8");
if(isset($_POST['gonder'])){
           $sql = "INSERT INTO contact_form (adsoyad,email,metn,IP_adress) VALUES('$name','$email','$text','$ip_adresi')";

          if(mysqli_query($conn,$sql)){ 
          	
          }else {
              echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>";
          } 
       }

?>
</div>
			</div>
		</div>
	</section>
	<!-- Courses section end-->