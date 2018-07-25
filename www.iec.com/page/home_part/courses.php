
	<!-- Courses section -->
	<section class="full-courses-section spad pt-5">
		<div class="container">
			<div class="text-center">
				<h3>KURSLAR</h3> 
			</div>
			<div class="row mt-2">

    <?php 
    $conn = mysqli_connect("localhost","root","","iec_kurs") ;
    $sql = "SELECT * FROM courses ORDER BY courses_id DESC limit 0,3";
     mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ ?>
		

 
				<!-- course item -->
				<div class="col-lg-4 col-md-6 course-item">
					<div class="course-thumb"style="height:270px">
						<img src="admin/adminlab/sekil/kursimg/<?=$row['kurs_img'];?>" alt="">
						<div class="course-cat">
							<span><?=$row['courses_name'];?></span> 
						</div>
					</div>
					<div class="course-info"> 
						<h4 class="cource-price">₼<?=$row['course_qiymet'];?><span>/<?=$row['course_vaxt'];?></span></h4>
						<h4><?=$row['course_text'];?></h4>
						
					</div>
				</div>
				<!-- course item -->
				 
     <?php } }else{ echo"0 netice"; }
             mysqli_close($conn); ?>




			</div>
			
		</div>
	</section>