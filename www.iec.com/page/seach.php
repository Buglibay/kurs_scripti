 <?php include_once 'head.php' ;?>



<!-- Breadcrumb section -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Blog</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Blog page section  -->
	<section class="blog-page-section spad pt-0">

		<div class="container">


			<div class="row"> 

			<!-- col-1 -->
				<div class="col-md-7 post-list" >
					<div class="widget">
						<h5 class="widget-title">Sorğuda Tapılan Bloglar</h5>
<?php

// baglanti qurmaq 
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,"iec_kurs");
 mysqli_query($conn,"set names utf8"); 
// axtarilan kelimeni almaq

$axtaris = htmlspecialchars_decode(trim(@$_POST['axtaris']));

if($axtaris ){
$result = mysqli_query($conn,"SELECT * FROM blog where blog_text like '%$axtaris%' ORDER BY blog_id DESC " );
 
if(mysqli_num_rows($result)>0)
while($row = mysqli_fetch_assoc($result)){
	 $date    = $row['blog_date'] ;
	 $kategori= $row['blog_categories'] ;
	 $basliq  = $row['blog_basliq'] ;
	 $img 	  = $row['blog_img'] ;
	 $text    = $row['blog_text'] ;

	?>
	<div class="recent-post-widget"> 

							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="../admin/adminlab/sekil/blogimg/<?=$row['blog_img'] ?>"> </div>
								<div class="rp-content">
									<h5><a class="text-dark" href="single-blog.php?blog=<?=$row['blog_id'] ;?>" ><?=$row['blog_basliq'] ?></a></h5>
									<p><i class="fa fa-clock-o"></i> <?=$row['blog_date'] ?></p>
								</div>
								<?=substr($text, 0,400 ) ?>  . . .
							</div>
							 
						</div>

	 
			   
<?php  }/*while sonluqu*/ } ?> 
    </div>



      </div> 
      	<!-- sidebar rifht -->
		 <div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar " >
					<!-- widget -->
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
    if(mysqli_num_rows($result) > 0){ 
    	while($row=mysqli_fetch_assoc($result)){ 
    		?>
 
						<div class="recent-post-widget"> 

							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="../admin/adminlab/sekil/blogimg/<?=$row['blog_img'] ?>"></div>
								<div class="rp-content">
									<h6><a class="text-dark" href="single-blog.php?blog=<?=$row['blog_id'] ;?>" ><?=$row['blog_basliq'] ?></a></h6>
									<p><i class="fa fa-clock-o"></i> <?=$row['blog_date'] ?></p>
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

	 <li><a href="blogcat.php?ktgrya<?=$row['categoria_id']?>"><?=$row['categoria_name']?></a></li>
</form>				 
<?php } }else{ echo"0 netice"; } ?>


						</ul>
					</div>
				</div>
					<!-- widget -->
					
				 
			</div>  
 
</div>	 
			
</div> <!--container end-->

	</section>
	<!-- Blog page section end -->














<?php include 'foot.php'; ?>