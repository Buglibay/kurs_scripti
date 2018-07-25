

<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Aktivitələr</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Event section -->
	<section class="event-section spad">
		<div class="container">
 
			<div class="section-title text-center">
				<h3>AktİVİtələr</h3> 
			</div>
			<div class="row">

    <?php 
    $conn = mysqli_connect("localhost","root","","iec_kurs") ;
    $sql = "SELECT * FROM events ORDER BY event_id  DESC limit 0,6";
     mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ ?>
		
				<div class="col-md-6 event-item">
					<div class="event-thumb"style="height:300px;" >
						<img src="admin/adminlab/sekil/eventimg/<?=$row['event_img'];?>"style="height:100%;" alt="">
						<div class="event-date">
							<span><?=$row['event_date'];?></span>
						</div>
					</div>
					<div class="event-info">
						<h4><?=$row['event_basliq'];?><br><?=$row['event_altyazi'];?></h4>
						<p><i class="fa fa-clock-o"></i> <?=$row['event_time'];?> <i class="fa fa-map-marker"></i> <?=$row['event_adress'];?> </p>
  <a href="page/single_event.php?event_id=<?=$row['event_id'];?>" class="event-readmore site-btn" style="color:white;" >Ətraflı</a>
					</div>
				</div>
				 
			 
     <?php } }else{ echo"0 netice"; }
             mysqli_close($conn); ?>


			</div>
		</div>
	</section>
	<!-- Event section end -->