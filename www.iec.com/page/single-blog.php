 
 <?php include_once 'head.php' ;?>
 
<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Blog Mövzusu</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->

<!-- blog php kodlari -->
	<!-- Blog page section  -->
	<section class="blog-page-section spad pt-0">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php 

    $id=$_GET['blog']; 

    $sql = "SELECT * FROM blog where blog_id='$id'";


     mysqli_query($conn,"set names utf8"); 
     $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    	

 // blog hit linke her girilende herdefesinde 1+ artirilacaq;
    	/*bazadan hit kolonumuzu aliriq,mysqli sorgusu ile deyirik:-hit kolonu herdefesinde 
    	artirilsin secilen id kliklendiyinde . ve her kliklendiyinde 1+ olamgi ucun ++ ishledirik.*/
$blog_hit=$row['blog_hit'];
$blog_hit++;
$bloghit= mysqli_query($conn,"UPDATE blog SET blog_hit ='".$blog_hit."'where blog_id='$id'");

   // blog hit sonu

  ?>
		

					<div class="post-item post-details">
						<img class="" style="width:100%;height:350px;" src="../admin/adminlab/sekil/blogimg/<?=$row['blog_img'];?>" class="post-thumb-full" alt="">
						<div class="post-content">
							<h3 class="mt-5" > <?=$row['blog_basliq'];?> </h3>
							<div class="post-meta">
								<span><i class="fa fa-calendar-o"></i> <?=$row['blog_date'];?></span>
								<span><i class="fa fa-flag"></i> <?=$row['blog_categories'];?></span>
							</div>
							<?=$row['blog_text'];?>  
						</div>  
 





     <?php } }   ?>



<!-- COMMENT BOLUMU -->
						<div class="comment-warp">
							<?php
                                   

					$sql ="SELECT * FROM blog INNER JOIN blog_id ON blog.blog_id = blog_comment.blog_id where blog_id='$id'";
						$sql ="SELECT * FROM blog_comment  where blog_id='$id'";
						
        			mysqli_query($conn,"set names utf8"); 
          	  	  	$result = mysqli_query($conn,$sql);
    				if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ ?>

							<!-- <div class="rp-thumb set-bg" data-setbg=" ../img/blog/recent-post/1.jpg"></div> -->

<!-- COMMENT YAZANA  UYGUN OLARAQ SEKIL GORUNMELIDIR -->

							<ul class="comment-list"> 
								<li>
									<div class="comment" id="yorumlar">
										 
										<div class="comment-content"> 
											<h5><?=$row['name']?>on</h5>
											<span class="c-date"><?=$row['vaxt']?></span>
											<p><?=$row['comment_text']?></p>
											<!--  <a href="" class="c-btn">Like</a>
											 <a href="" class="c-btn">Reply</a> -->
										</div>
									</div>
						
								</li>
							</ul>
						 
 <?php } }else{ echo"İlk Şərhi siz yazın"; }
     ?>


							<div class="comment-form-warp">
								<h4 class="comment-title">Şərh Yazın</h4>
								<form action="" class="comment-form"id="yorumForm" on  method="post">
									<div class="row">
										<!-- hansi ipden (blog) yazildigini ipsine gore teyin etmek ucun  input hidden acib blogun ipsini bura cagiririq-->
										<input type="hidden" name="blog_id" value="<?php 
										$idsi = "SELECT * FROM blog where blog_id='$id'";
										$result = mysqli_query($conn,$idsi);
   										 if(mysqli_num_rows($result) > 0){ 
   										 	while($row=mysqli_fetch_assoc($result)){ 
										echo $row['blog_id'];
									}}?>">


										<div class="col-sm-6">
											<input type="text" name="adsoyad" class="inpt" placeholder="Ad,Soyad ...">
										</div>
										<div class="col-sm-6">
											<input type="email" name="eposta" class="inpt" placeholder="Email Adresiniz ...">
										</div>
										<div class="col-sm-12">
											<textarea name="yorum" class="inpt" placeholder="Şərhiniz ..."></textarea>
											<input class="site-btn" type="submit" name="gonder"  value="COMMENT" >   
										</div>
									</div>
								</form> 
							<?php

                          // melumatlari  formdan alib bazaya yazdiririq
								$adsoyad = @htmlspecialchars_decode(trim($_POST['adsoyad']));
								$eposta  = @htmlspecialchars_decode(trim($_POST['eposta']));
								$yorum = @htmlspecialchars_decode(trim($_POST['yorum']));
								$blog_id = @htmlspecialchars_decode(trim($_POST['blog_id']));
								$ip = @htmlspecialchars_decode(trim($_SERVER['REMOTE_ADDR'])); 

								if(@$_POST['gonder']){
								$sql = "INSERT INTO blog_comment(blog_id,name,comment_email,comment_text,comment_IP)
                   VALUES('$blog_id','$adsoyad','$eposta','$yorum','$ip')";
                   if(mysqli_query($conn,$sql)){'melumalar yazildi';}
                     }
								?> 
								
							</div>
						</div>
					</div>
				</div>
				<!-- sidebar -->
				<div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">
 
					<!-- widget  -->
					<div class="widget">
						<form class="search-widget" method="post" action="seach.php">
							<input type="text" name="axtaris" placeholder="Axratış...">
							<button type="submit" name="axtar"><i class="ti-search"></i></button>
						</form>
					</div>
					<!-- widget -->
					<div class="widget">
						 <h5 class="widget-title">Ən Çox Oxunan Bloglar</h5>
						 <?php 

    /*en cox klikleneni cagirmag ucun tableden hit ucun secilmis colon cagrilir ve DESC ile en yuksek
     reqem isdenilir "en cox kliklenen ustde olur "(ASC ile ise azdan coxe gedecekdi).limit ile ise necesinin goruneceyini teyin edirik*/
    $sql = "SELECT * FROM blog ORDER BY blog_hit DESC limit 0,6";
     mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ ?>
 
						<div class="recent-post-widget"> 

							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="../admin/adminlab/sekil/blogimg/<?=$row['blog_img'] ?>"></div>
								<div class="rp-content">
									<h6 ><a class="text-dark" href="single-blog.php?blog=<?=$row['blog_id'];?>" ><?=$row['blog_basliq'] ?></a></h6>
									<p><i class="fa fa-calendar-o"></i> <?=$row['blog_date'] ?></p>
								</div>
							</div>
							 
						</div>

     <?php } }else{ echo"0 netice"; }
     ?>
					</div>
 
<!-- widget -->
					<div class="widget">
						<h4 class="widget-title">Kateqoriyalar</h4>
						<ul>

							<?php 
    $sqlt = "SELECT * FROM blog_categories";
    
    $result = mysqli_query($conn,$sqlt);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    ?> 
<form   method="post" action="blogcat.php">

	 <li><a href="blogcat.php?ktgrya=<?=$row['categoria_id']?>"><?=$row['categoria_name']?></a></li>
</form>				 
<?php } }else{ echo"0 netice"; } ?>


					<!-- widget -->
							
						</div>
						 
					</div>
				 
					
					
				</div>
			</div>
		</div>
	</section>
	<!-- Blog page section end -->


 
<?php include 'foot.php'; ?>