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
				<div class="col-md-7 post-list">

					<?php 

    //connect  to database  up ^
    mysqli_query($conn,'set names utf8');
 
    //define how many result you want per page
      $results_per_page =3;
      $ktgrya=$_GET['ktgrya'];

    //find out the number of results stored in database
     $sqlt="SELECT * FROM blog 
  	  where blog_categories ='$ktgrya'";
     $result=mysqli_query($conn,$sqlt);
     $number_of_results =mysqli_num_rows($result); 

    //determine  number of total pages avaible
    $nubmer_of_pages=ceil($number_of_results/$results_per_page);

    //determine which page number visitor currently on  
     if (!isset($_GET['page'])) {
     	$page=1;
     }else{
     	$page=$_GET['page'];
     }

    //determine the sql LIMIT starting number  for the results on the displaying page
     $this_page_fist_result = ($page-1)*$results_per_page;
    //retvive selected results from database  and display them on page 
      

     $sql ="SELECT * FROM blog 
     INNER JOIN blog_categories ON blog.blog_categories = blog_categories.categoria_id where blog_categories ='$ktgrya' ORDER BY blog_id DESC LIMIT ".$this_page_fist_result.",".$results_per_page;

     $result=mysqli_query($conn,$sql);
     while( $row=mysqli_fetch_assoc($result) ){

     	 
                                        ?>

<div class="post-item mt-5">
					<!-- burda share facebook istifade edilib .linke qosulduqdan sonra duzelis edilmelidir -->
						<div class="mt-4 post-thumb set-bg" data-setbg="../admin/adminlab/sekil/blogimg/<?=$row['blog_img'] ?>"></div>
						<div class="post-content">
                       <h3><a href="single-blog.php?blog=<?=$row['blog_id'];?>" ><?=$row['blog_basliq'] ?></a></h3>	
                       
                            <div class="post-meta">
								<span><i class="fa fa-calendar-o"></i> <?=$row['blog_date'] ?></span>
								<span><i class="fa fa-flag"></i> <?=$row['categoria_name'] ?></span>
								<span><a class="text-secondary"href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/iec/page/single-blog.php?blog=<?=$row['blog_id'];?>&amp;src=sdkpreparse" ><i class="fa fa-share" ></i>Facebook</a></span>
							</div>
							<?=substr($row['blog_text'], 0,400 ) ?>  . . .
						</div>
 
					</div> 

	<?php
     } 
    // display the links to the pages
    ?>

	<div><center>

			<ul class="mt-5 site-pageination">
			<li><a href="blogcat.php?ktgrya=<?=$ktgrya?>&page=<?=$page?>"><i>İLK</i></a></li>	 
		<li><a href="blogcat.php?ktgrya=<?=$ktgrya?>&page=<?=($page-1)?>"><i class="fa fa-angle-left"></i></a></li>
 			
		<?php  
		$ekgoster = 2 ;
		 for ($i = $page-$ekgoster; $i <=  $page + $ekgoster  ; $i++)  {
if($i>0  && $i<=$nubmer_of_pages){

	if($i==$page){
		 ?> 
 		 <li><a href="blogcat.php?ktgrya=<?=$ktgrya?>&page=<?=$i?>"class="active"><?=$i?></a></li> 
		<?php 	 
}else{ ?> <li><a href="blogcat.php?ktgrya=<?=$ktgrya?>&page=<?=$i?>"><?=$i?></a></li> <?php }
}
		   
	    } ?> 
	    
       <li><a href="blogcat.php?ktgrya=<?=$ktgrya?>&page=<?=($page+1)?>"><i class="fa fa-angle-right"></i></a></li>
       <li><a href="blogcat.php?ktgrya=<?=$ktgrya?>&page=<?=$nubmer_of_pages?>"><i>SON</i></a></li>
     </ul>

	</center>
		 
	</div>
       
        
</div>
 
				<!-- sidebar rifht -->
				<div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">
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
<form   method="post" action="">

	 <li><a href="blogcat.php?ktgrya=<?=$row['categoria_id']?>"><?=$row['categoria_name']?></a></li>
</form>				 
<?php } }else{ echo"0 netice"; } ?>



						</ul>
						
					</div>
					 
				 
			</div>  


</div>	 
			
</div> <!--container end-->

	</section>
	<!-- Blog page section end -->


 

 
<?php include 'foot.php'; ?>