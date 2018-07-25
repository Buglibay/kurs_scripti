<?php include 'header.php' ?>
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">Slider</h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Slider</a><span class="divider-last">&nbsp;</span></li>
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
                           <h4><i class="icon-globe"></i>Slider</h4>
                                                
                        </div>
                        <div class="widget-body">
                           


<!-- .............................ICERIK............................. -->

<div class="row-fluid">

 <div class="span3"> 

    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Ana Səhifə Slider</h4>
                        
                        </div>
                        <div class="widget-body form">

 
<form action="" method="post" enctype="multipart/form-data" >


<!-- .....................INPUT................ -->
                                 <div class="control-group">
                              <label class="control-label">Slider_Başlıq</label>
                              <div class="controls">
                                 <input type="text" name="slide_basliq" class="span12 ">  
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Slider Başlıqa Üst-Yazı</label>
                              <div class="controls">
                                 <input type="text" name="slide_ustyazi" class="span12 "> 
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Slider Qısa Açıqlama</label>
                              <div class="controls">
                                 <input type="text" name="slide_aciqlama" class="span12 ">  
                              </div>
                           </div>
                           

<!-- .....................INPUT................ -->
 
<!-- .....................IMG select................ -->
                                    <label class="control-label">Slider Şəkili yüklənməsi</label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Şəkil Seç</span>
                                       <span class="fileupload-exists">Dəyiş</span>
                                       <input type="file" name="image" class="default"></span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Sil</a> 
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" name="submit" value="Submit"class="btn btn-success"> 
<!-- .....................END IMG select................ -->            

</form>              
</div>


<?php 
 $msg= "";
   
    #baza ile elaqe qurulur
   $conn = mysqli_connect('localhost','root','','iec_kurs') or  die("baglanti problemi: ".mysqli_connect_error());
 mysqli_query($conn,"set names utf8"); 

 $slide_basliq  =@$_POST['slide_basliq'];
 $slide_ustyazi =@$_POST['slide_ustyazi']; 
 $slide_aciqlama =@$_POST['slide_aciqlama']; 
 //$slide_img =$_POST['slide_img']; 
   
  
  $image=@$_FILES['image']['name'] ;
 

 if( @$_POST['submit'] ){

#seklin yuklenme yolu hazirlanir 
$target ="sekil/slide/".basename($_FILES['image']['name']);


 $sql = "INSERT INTO slider_table(slider_basliq,slider_ustyazi,Slider_aciqlama,slider_img) 
 VALUES ('$slide_basliq',' $slide_ustyazi','$slide_aciqlama','$image')";
     
 if(mysqli_query($conn,$sql) and move_uploaded_file($_FILES['image']['tmp_name'], $target)){
     echo "melumatlar ugurla yazildi";
 }else {
     echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>";
 }
 
 } ?>





</div>
</div>

<!--   Bazadaki siyahinin admine gosderilmesi -->
  
            <!-- BEGIN ADVANCED TABLE widget-->
                <div class="span9">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Gallery baza</h4>
                            
                        </div>
                        <div class="widget-body">
                            <div class="portlet-body"style="height:250px;overflow:scroll;">
                            



                                <table class="table table-striped table-hover table-bordered" id=" ">
                                    <thead>
                                    <tr>
                                            
                                        <th>slider başlıq</th>
                                        <th>Şəkil</th>
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody >
                             
    <?php
 
  
    $sql = "SELECT * FROM slider_table"; mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    ?>        
                  <tr class=""> 
                       <td><?=$row['slider_basliq']?></td>  
                       <td><?=$row['slider_img']?></td>  
                       <td><a class=" btn btn-success btn-block  " href="hakkimizda_ayar.php?edit=<?=$row['aboutus_id']?> ">Edit </a></td>
                       <td><a style="" class=" btn btn-warning  btn-block"
                        href="hakkimizda_ayar.php?del=<?=$row['slider_id']?>"> Delete</a></td>
                  </tr>

             <?php } }else{ echo"0 netice"; }

    
if(  @$_GET['del']  ){
    $silmek = $_GET['del'];
    mysqli_query($conn,"DELETE from slider_table where slider_id='$silmek'");
}

 mysqli_close($conn);
?> 

                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
           

            <!-- END ADVANCED TABLE widget-->

 
<!--   Bazadaki siyahinin admine gosderilmesi -->

</div>   


  

<!-- .............................ICERIK............................. -->   
 </div></div> 
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