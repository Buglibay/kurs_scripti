<?php include_once 'head.php'; ?>
	<!-- Enroll section -->
	<section class=" spad  "  >
		<div class="container">
	 
			
	<!-- Gallery section -->
	<div class="gallery-section">
		<div class="gallery">
			<div class="grid-sizer"></div>
			 <?php
			include 'option/mysqli_connect.php'; 
    //connect  to database
   
    mysqli_query($conn,'set names utf8');
  
    $sql = "SELECT * FROM photogallery ORDER BY img_id DESC limit 0,65 ";
     mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ ?>
 




			<div class="gallery-item gi-long set-bg" data-setbg="../admin/adminlab/sekil/galery/<?=$row['img'];?>" style="border:4px solid #ffff;"> 
				<a class="img-popup" href="../admin/adminlab/sekil/galery/<?=$row['img'];?>"><i class="ti-plus"></i></a>
			</div>
			 

 

  <?php } }else{ echo"Yüklənmiş Şəkil Yoxdur"; }
        ?>

		</div>
	</div>
	<!-- Gallery section -->
			 
		</div> <!-- container -->
	</section>
	<!-- Enroll section end -->

<?php include_once 'foot.php'; ?>