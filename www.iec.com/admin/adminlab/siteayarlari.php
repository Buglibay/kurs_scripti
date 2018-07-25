<?php include 'header.php' ?>
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">Site Ayarlari</h3>
                   <ul class="breadcrumb">
                       <li>
                           <i class="icon-home"></i> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Site Ayarlari</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-cog"></i>Site Ayarlari</h4>
                                                
                        </div>
                        <div class="widget-body">
                           


<!-- .............................ICERIK............................. -->
                                    

<form action="" method="post" enctype="multipart/form-data" >

<div class="row-fluid">

 <div class="span4"> 

    <div class="widget">
       <div class="widget-title">
                            <h4><i class="icon-picture"></i>LOGO Image Upload</h4>
                         
                        </div>
                        <div class="widget-body form">

 
<!-- .....................IMG select................ -->
                                    
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>

                                       <input type="file" name="sekil" class="default"></span>  
                                       <input type="submit" name="logo" value="Submit"class="btn btn-success">
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a> 
                                            </div>

                                        </div>
                                    
                                      

<!-- .....................END IMG select................ -->
                      
                  </div>
                           <!--  Site title-->
                     <div class="control-group">
                              <label class="control-label">SiteTitle</label>
                              <div class="controls">
                                 <input type="text" name="basliq" class="span9 ">

                              </div> <input type="submit" name="title" value="Submit"class="btn btn-success"> 
                           </div>
                           <!--footer Metini-->
                     <div class="control-group">
                              <label class="control-label">Footer Mətini</label>
                              <div class="controls">
                                 <textarea type="text" name="footermetn" class="span9 "></textarea>

                              </div> <input type="submit" name="textarea" value="Submit"class="btn btn-success"> 
                           </div>


                           <!--Social sebekeler-->
                          <div class="control-group">
                              <label class="control-label">Facebook</label>
                              <div class="controls">
                                 <input type="text" name="facebook" class="span9 "> 
                              </div> <input type="submit" name="f" value="Submit"class="btn btn-success"> 
                          </div>
                          <!--instagram link-->
                          <div class="control-group">
                              <label class="control-label">Instagram</label>
                              <div class="controls">
                                 <input type="text" name="instagram" class="span9 "> 
                              </div> <input type="submit" name="i" value="Submit"class="btn btn-success"> 
                          </div>
                          <!--youtube link-->
                          <div class="control-group">
                              <label class="control-label">Youtube</label>
                              <div class="controls">
                                 <input type="text" name="youtube" class="span9 "> 
                              </div> <input type="submit" name="y" value="Submit"class="btn btn-success"> 
                          </div>







               </div>
               </div>
               </div>
               </div>
</form>


<?php 
$image=@$_FILES['sekil']['name'] ;
$title=@$_POST['basliq'] ;
$footermetn=@$_POST['footermetn']; 
$facebook=@$_POST['facebook'];
$instagram=@$_POST['instagram'];
$youtube=@$_POST['youtube'];



mysqli_query($conn,'set names utf8');

//LOGO YUKLEME
    if(@$_POST['logo'] ){ 
  $target ="sekil/siteimg/".basename($_FILES['sekil']['name']);

   $sql = "UPDATE siteayar_table SET site_logo='$image' "; 
   if(mysqli_query($conn,$sql) and move_uploaded_file($_FILES['sekil']['tmp_name'], $target)){
       echo "melumatlar ugurla yazildi";
   }else {
       echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>"; } } 

//TITLE YUKLE 
    if(@$_POST['title'] ){   
   $sql = "UPDATE siteayar_table SET site_title='$title' "; 
   if(mysqli_query($conn,$sql)){
       echo "Title  ugurla yazildi";
   }else {
       echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>"; }  } 

//Footer Mətini
 if(@$_POST['textarea'] ){   
   $sql = "UPDATE siteayar_table SET footer_text='$footermetn' "; 
   if(mysqli_query($conn,$sql)){
       echo "Title  ugurla yazildi";
   }else { echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>"; }  } 

//Facebook
 if(@$_POST['f'] ){   
   $sql = "UPDATE siteayar_table SET facebook ='$facebook' "; 
   if(mysqli_query($conn,$sql)){
       echo "Facebook  ugurla yenilendi";
   }else { echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>"; }  } 


//instagram
 if(@$_POST['i'] ){   
   $sql = "UPDATE siteayar_table SET instagram='$instagram' "; 
   if(mysqli_query($conn,$sql)){
       echo "Istagram ugurla yenilendi";
   }else { echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>"; }  } 



//youtube
 if(@$_POST['y'] ){   
   $sql = "UPDATE siteayar_table SET youtube='$youtube' "; 
   if(mysqli_query($conn,$sql)){
       echo "youtube ugurla yenilendi";
   }else { echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>"; }  } 




  ?>

               
<!-- .............................ICERIK............................. -->                
                        </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
  <?php include 'footer.php' ?>