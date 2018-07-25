 
  <?php include_once 'head.php' ;?>

 

<!-- Breadcrumb section -->
<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Ana Səhifə</a> <i class="fa fa-angle-right"></i> 
			<span>Ətraflı</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->




	<!--SINGLE EVENT  page section  -->
	<section class="blog-page-section spad pt-0">

		<div class="container">
			<div class="row">

<!-- event php kodlari -->
<?php 

    $id=$_GET['event_id']; 
 
    $sql = "SELECT * FROM events where event_id='$id'";
     mysqli_query($conn,"set names utf8"); 
     $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    	?>
		
 


				<div class="col-md-12">
					<div class="post-item post-details">
                      

                      <div class="col-md-12 event-item">
					<div class="event-thumb">
						<img src="../admin/adminlab/sekil/eventimg/<?=$row['event_img'];?>" alt="">
						<div class="event-date">
							<span><?=$row['event_date'];?></span>
						</div>
					</div>
                    </div>
						<div class="post-content">
                        <h2> <?=$row['event_basliq'];?> </h2>
						<h4> <?=$row['event_altyazi'];?>  </h4>
							
                            <div class="post-meta  ">
								<span><i class="fa fa-clock-o"></i> <?=$row['event_time'];?></span>
								 
                                <span><i class="fa fa-map-marker"></i> <?=$row['event_adress'];?></span>
							</div>
                            
							<?=$row['event_text'];?>
							

            <div class="tag "><i class="fa fa-tag 	text-info"></i>  QEYDİYYATDAN KEÇİN</div>
						</div>
				</div>
			</div>


     <?php } } ?>


</div> 




			
            <form method="post" action="" class=" col-lg-12 comment-form --contact">
					<div class="row ">
						<input type="hidden" name="eventId"value="<?php 
										$idsi = "SELECT * FROM events where event_id='$id'";
										$result = mysqli_query($conn,$idsi);
   										 if(mysqli_num_rows($result) > 0){ 
   										 	while($row=mysqli_fetch_assoc($result)){ 
										echo $row['event_id'];
									}}?>">
						<div class="col-lg-4">
							<input type="text" name="namesurname" placeholder="Adınız,Soyadınız">
						</div>
						<div class="col-lg-4">
							<input type="text" name="email" placeholder="Email Adresiniz">
						</div>
						<div class="col-lg-4">
							<input type="text"name="telefon" placeholder="Telefon">
						</div>


						 <div class="col-lg-4">
							<input type="text" name="tehsil" placeholder="Təhsiliniz">
						</div>
						<div class="col-lg-4">
							<input type="text" name="ish" placeholder="Hazırda İşiniz">
						</div>
						<div class="col-lg-4">
							<input type="text"name="unvan" placeholder="Yaşadığınız Şəhər">
						</div>
							 
							<div class="text-center">
								<input type="submit" class="site-btn" name="gonder" value="Göndər" > 
							</div>
						 
					</div>
				</form>

				<?php
		  $eventId    	=htmlspecialchars_decode(trim(@$_POST['eventId']));
	      $namesurname	=htmlspecialchars_decode(trim(@$_POST['namesurname']));
          $email 		=htmlspecialchars_decode(trim(@$_POST['email']));
          $telefon 		=htmlspecialchars_decode(trim(@$_POST['telefon']));  
          $tehsil		=htmlspecialchars_decode(trim(@$_POST['tehsil']));
          $ish 			=htmlspecialchars_decode(trim(@$_POST['ish']));
          $unvan 		=htmlspecialchars_decode(trim(@$_POST['unvan'])); 
          $ip_adres    =@$_SERVER['REMOTE_ADDR'];
          //$hakkimizda_sekil =$_POST['hakkimizda_sekil'];
           
          
 			mysqli_query($conn,"set names utf8"); 
			if(isset($_POST['gonder'])){
           $sql = "INSERT INTO events_register(event_id,adsoyad,email,telefon,tehsil,ish,unvan,ip_adres)
           VALUES( '$eventId','$namesurname','$email','$telefon','$tehsil','$ish','$unvan','$ip_adres' )";

          if(mysqli_query($conn,$sql)){ 
          	
          }else {
              echo "<h1 stytle='color:red;'> ERROR VAR - ".$sql."<br>".mysqli_error($conn). "</h1>";
          } 
       }

?>
		</div>
	</section>


	<!-- event page section  -->

























 <?php include_once 'foot.php' ;?>