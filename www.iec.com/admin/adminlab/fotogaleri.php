<?php include 'header.php' ?>
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">Foto Galeri</h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Foto Galeri</a><span class="divider-last">&nbsp;</span></li>
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
                           <h4><i class="icon-globe"></i>Foto galeri</h4>
                                                
                        </div>
                        <div class="widget-body">
                           


<!-- .............................ICERIK............................. -->

<?php 
 
 $conn = mysqli_connect('localhost','root','','iec_kurs') or  die("baglanti problemi: ".mysqli_connect_error());
mysqli_query($conn,"set names utf8"); 

?>
<form action="" method="post" enctype="multipart/form-data" >


<div class="row-fluid">

 <div class="span4"> 

    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Ana Səhifə photo</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a> 
                           </span>
                        </div>
                        <div class="widget-body form">

 
<!-- .....................INPUT................ -->
<div class="control-group">
                                   
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
                                       <input type="file" name="sekil" class="default"></span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a> 
                                            </div>
                                        </div>
                                    </div>
                                   <input type="submit" name="sekil" value="Submit"class="btn btn-success">                      
<!-- .....................END IMG select................ -->                        
                             
</div>  
<!-- .....................INPUT................ -->
 </div> 
<!-- .....................IMG select................ -->                          
</div>   
</div>

<?php



  $image= @$_FILES['sekil']['name'] ; 
// sekil  
  if(@$_POST['sekil']){
 $target ="sekil/galery/".basename($_FILES['sekil']['name']);  
 $sql = "INSERT INTO photogallery(img) VALUES ('$image')"; 
 if(mysqli_query($conn,$sql) and move_uploaded_file($_FILES['sekil']['tmp_name'],$target)){
   
 echo "melumatlar ugurla yazildi";
 }else { echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>";}

 } 
 

?>

<!--   Bazadaki siyahinin admine gosderilmesi -->
  
            <!-- BEGIN ADVANCED TABLE widget-->
                <div class="span8">
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
                                            
                                        <th>Şəkil</th>
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                             
    <?php
 
  
    $sql = "SELECT * FROM photogallery"; mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    ?>        
                  <tr class=""> 
                       <td><?=$row['img']?></td>    
                       <td><a class=" btn btn-success btn-block  " href="fotogaleri.php?edit=<?=$row['aboutus_id']?> ">Edit </a></td>
                       <td><a style="" class=" btn btn-warning  btn-block"
                        href="fotogaleri.php?del=<?=$row['img_id']?>"> Delete</a></td>
                  </tr>

             <?php } }else{ echo"0 netice"; }

    
if(  @$_GET['del']  ){
    $silmek = $_GET['del'];
    mysqli_query($conn,"DELETE from photogallery where img_id='$silmek'");
}

 
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

<!--   Bazadaki siyahinin admine gosderilmesi -->
  
<div class="row-fluid">
            <!-- BEGIN ADVANCED TABLE widget-->
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Ana Səhifədə Görsənənlər</h4>
                            
                        </div>
                        <div class="widget-body">
                            <div class="portlet-body"style="height:500px;overflow:scroll;">
                            

<?php 
     
    $sqlt = "SELECT * FROM photogallery ORDER BY img_id DESC limit 0,8";
     mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sqlt);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ ?>
 

 
         <img src="sekil/galery/<?=$row['img'];?>" alt=""style="width: 250px;  " >
      
       




     <?php } }else{ echo"0 netice"; }
             mysqli_close($conn); ?>



 
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
           

            <!-- END ADVANCED TABLE widget-->

 
<!--   Bazadaki siyahinin admine gosderilmesi -->
</div><!-- end row -->
</form><!-- end form -->                                 
</div>   
 
 
 
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