<?php include 'header.php' ?>
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">İsdifadeci seviyyesi</h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">İsdifadeci seviyyesi</a><span class="divider-last">&nbsp;</span></li>
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
                           <h4><i class="icon-globe"></i>İsdifadeci seviyyesi</h4>
                                                
                        </div>
                        <div class="widget-body">
                           


<!-- .............................ICERIK............................. -->


<div class="row-fluid"> 
 <div class="span3">  
    <div class="widget">
 
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Komandamız</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a> 
                           </span>
                        </div>
                        <div class="widget-body form">
 
<form action="" method="post" enctype="multipart/form-data" > 
   
<!-- .....................INPUT................ -->
                                 <div class="control-group">
                              <label class="control-label">Ad Soyad</label>
                              <div class="controls">
                                 <input type="text" name="name" class="span9"> 
                                  
                                </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Vəzifəsi</label>
                              <div class="controls">
                                 <input type="text" name="vezife"  class="span9 "> 
                                  
                              </div>
                           </div>
                             <div class="control-group">
                              <label class="control-label">Facebook</label>
                              <div class="controls">
                                 <input type="text" name="facebook" class="span9"> 
                                  
                                </div>
                                </div>
                                 <div class="control-group">
                              <label class="control-label">Instagram</label>
                              <div class="controls">
                                 <input type="text" name="instagram" class="span9"> 
                                  
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
                                       <input type="file" name="sekil" class="default"></span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a> 
                                            </div>
                                        </div>
                                    </div>
                 <input type="submit" name="submit"  value="submit" class="btn btn-success">                                        
<!-- .....................END IMG select................ -->                              
</div>
</div>                   
</div>
<?php 
 
 $conn = mysqli_connect('localhost','root','','iec_kurs') or  die("baglanti problemi: ".mysqli_connect_error());
mysqli_query($conn,"set names utf8");
 
 $name =@$_POST['name'];
 $vezife =@$_POST['vezife']; 
 $facebook =@$_POST['facebook'];
 $instagram =@$_POST['instagram'];
 $image=@$_FILES['sekil']['name'];
 

  if( @$_POST['submit'] ){

$target ="sekil/komandamiz/".basename($_FILES['sekil']['name']);

 $sql = "INSERT INTO komandamiz(k_adsoyad,k_vezifesi,k_instagram,k_facebook,k_img) 
 VALUES ('$name','$vezife','$instagram','$facebook','$image')";
    
 if(mysqli_query($conn,$sql) and move_uploaded_file($_FILES['sekil']['tmp_name'], $target)){
     echo "melumatlar ugurla yazildi";
 }else {
     echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>";
 } 
 } 
 ?>
 































 <div class="row-fluid">
   
   <form action="" method="post">
               <!-- BEGIN ADVANCED TABLE widget-->
                   <div class="span9">
                       <!-- BEGIN EXAMPLE TABLE widget-->
                       <div class="widget">
                           <div class="widget-title">
                               <h4><i class="icon-reorder"></i> Komandamiz baza</h4>
                              
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
 
  
    $sql = "SELECT * FROM komandamiz "; mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    ?>        
                  <tr class="">
                       <td><?=$row['k_adsoyad']?></td>
                       <td><?=$row['k_vezifesi']?></td> 
                       <td><?=$row['k_img']?></td>  
                       <td><a class=" btn btn-success btn-block  " href="komandamiz.php?edit=<?=$row['k_id']?> ">Edit </a></td>
                       <td><a style="" class=" btn btn-warning  btn-block"
                        href="eventqeydiyyat.php?del=<?=$row['event_id']?>"> Delete</a></td>
                  </tr>

             <?php } }else{ echo"0 netice"; }

    
if(  @$_GET['del']  ){
    $silmek = $_GET['del'];
    mysqli_query($conn,"DELETE from komandamiz where k_id='$silmek'");
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
            </div>

            <!-- END ADVANCED TABLE widget-->
          
</form> 
</div> 
    







                               
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