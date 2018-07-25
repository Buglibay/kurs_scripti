<?php include 'header.php' ?>
<?php 
 $conn = mysqli_connect('localhost','root','','iec_kurs') ;
  mysqli_query($conn,"set names utf8");

?>
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">Hakkımızda Ayar</h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Hakkımızda Ayar</a><span class="divider-last">&nbsp;</span></li>
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
                           <h4><i class="icon-globe"></i>Hakkımızda Ayar</h4>
                                                
                        </div>
                        <div class="widget-body">
                           


<!-- .............................ICERIK............................. -->



<div class="row-fluid"> 
 <div class="span4">  
    <div class="widget">
 
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Hakkımızda Dəyişikliklər</h4>
                         
                        </div>
                        <div class="widget-body form">
 
<form action="" method="post" enctype="multipart/form-data" > 
   
<!-- .....................INPUT................ -->
                                 <div class="control-group">
                              <label class="control-label">Başlıq</label>
                              <div class="controls">
                                 <input type="text" name="hakkimizda_basliq" class="span9"> 
                                  
                                </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Alt-Yazı</label>
                              <div class="controls">
                                 <input type="text" name="hakkimizda_altyazi"  class="span9 "> 
                                  
                              </div>
                           </div>
 
<!-- .....................INPUT................ -->

 

<!-- .....................IMG select................ -->
                                    <label class="control-label">Image Upload</label>
                                    <div class="controls">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="hakkimizda_sekil" class="default"></span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a> 
                                            </div>
                                        </div>
                                    </div>
                                                         
<!-- .....................END IMG select................ -->                              
</div>
</div>                   
</div>
<!-- .....................BEGIN ck................ -->
               <div class="span8">
                 <!-- BEGIN ck  -->
                <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>CKEditor</h4>
                         
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Hakkımızda Mətn daxil edin</label>
                                    <div class="controls">
                                        <textarea class="span12 ckeditor" name="editor1" rows="6"></textarea>
                                         
                                    </div>
                                </div>
                                <input type="submit" name="submit" value="Submit"class="btn btn-success">
                            </form><!-- END FORM-->
                        </div> <!-- END ck widget-->
                    </div>  <!-- end span -->
                 </div>   
 <!-- .....................END ck................ -->

</div>   <!-- end row --> 
 
</form> <!-- form sonu -->
  
<?php 

$hakkimizda_basliq =@$_POST['hakkimizda_basliq'];
$hakkimizda_altyazi =@$_POST['hakkimizda_altyazi'];
$hakkimizda_metn =@$_POST['editor1'];
 $image=@$_FILES['hakkimizda_sekil']['name'] ; 

 if(isset($_POST['submit'] )){

$target ="sekil/".basename($_FILES['hakkimizda_sekil']['name']);

$sql = "INSERT INTO about_us(basliq,altyazi,metn,hakkimizda_img) VALUES ('$hakkimizda_basliq','$hakkimizda_altyazi','$hakkimizda_metn','$image')";

if(!$conn){
    die("baglanti problemi: ".mysqli_connect_error());
}
 
   
 if(mysqli_query($conn,$sql) and move_uploaded_file($_FILES['hakkimizda_sekil']['tmp_name'], $target)){
     echo "melumatlar ugurla yazildi";
 }else {
    echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>";
}
 } 
?>



 <div class="row-fluid">
   
<form action="" method="post">
            <!-- BEGIN ADVANCED TABLE widget-->
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Hakkımızda</h4>
                            
                        </div>
                        <div class="widget-body">
                            <div class="portlet-body">
                            



                                <table class="table table-striped table-hover table-bordered" id=" ">
                                    <thead>
                                    <tr>
                                        <th>Başlıq</th>
                                        <th>Alt Yazı</th>  
                                        <th>Şəkil</th>
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                             
    <?php
 
  
    $sql = "SELECT * FROM about_us  "; mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    ?>        
                  <tr class="">
                       <td><?=$row['basliq']?></td>
                       <td><?=$row['altyazi']?></td> 
                       <td><?=$row['hakkimizda_img']?></td>  
                       <td><a class=" btn btn-success btn-block  " href="hakkimizda_ayar.php?edit=<?=$row['aboutus_id']?> ">Edit </a></td>
                       <td><a style="" class=" btn btn-warning  btn-block"
                        href="hakkimizda_ayar.php?del=<?=$row['aboutus_id']?>"> Delete</a></td>
                  </tr>

             <?php } }else{ echo"0 netice"; }

    
if(  @$_GET['del']  ){
    $silmek = $_GET['del'];
    mysqli_query($conn,"DELETE from about_us where aboutus_id='$silmek'");
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

</form>
</div> 
 
<!-- .............................ICERIK............................. -->







                               
                        
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
   </div>
   
  <?php include 'footer.php' ?>