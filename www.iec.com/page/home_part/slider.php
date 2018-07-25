    
    <!-- SLIDER -->
    <!-- Hero section -->
	<section class="hero-section">
		<?php
 
    $conn = mysqli_connect("localhost","root","","iec_kurs") ;
    $sql = "SELECT * FROM slider_table ORDER BY slider_id DESC limit 0,2 ";
     mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ ?>
		
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="admin/adminlab/sekil/slide/<?=$row['slider_img'];?>">
				<div class="hs-text">
					<div class="container">

						<div class="row">
							<div class="col-lg-8">
								<div class="hs-subtitle"style="font-size:22px;font-weight:bold;color:orange;"><?=$row['slider_ustyazi'];?></div>
								<h2 class="hs-title"style="color:black;"><?=$row['slider_basliq'];?></h2>
								<p class="hs-des"style="font-size:20px;"><?=$row['Slider_aciqlama'];?></p> 
							</div>
						</div>
					</div>
				</div>
			</div> 

			<?php } }else{ echo"0 netice"; }
             mysqli_close($conn); ?>
	</section>
	<!-- Hero section end --> 