 
	<!-- Gallery section -->
	<div class="gallery-section">
		<div class="gallery">
			<div class="grid-sizer"></div>
			<?php
			include 'option/mysqli_connect.php';
 //$conn = mysqli_connect("localhost","root","","iec_kurs") ;
     
    $sql = "SELECT * FROM photogallery ORDER BY img_id DESC limit 0,8";
     mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ ?>
 


			<div class="gallery-item gi-big set-bg"style="border:3px solid white;" data-setbg="admin/adminlab/sekil/galery/<?=$row['img'];?>">
				<a class="img-popup" href="admin/adminlab/sekil/galery/<?=$row['img'];?>"><i class="ti-plus"></i></a>
			</div>
			 




     <?php } }else{ echo"0 netice"; }
             mysqli_close($conn); ?>


		</div>
	</div>
	<!-- Gallery section -->
