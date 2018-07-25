<?php include 'header.php' ?>
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">Kurslar</h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Kurslar</a><span class="divider-last">&nbsp;</span></li>
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
                           <h4><i class="icon-globe"></i>Kurslar</h4>
                                                
                        </div>
                        <div class="widget-body">
                           


<!-- .............................ICERIK............................. -->



<div class="row-fluid">

 <div class="span3"> 

<form action="" method="post" enctype="multipart/form-data" >
    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Kurs Paylaşımı</h4>
                        
                        </div>
                        <div class="widget-body form">

 
<!-- .....................INPUT................ -->
                                 <div class="control-group">
                              <label class="control-label">Başlıq</label>
                              <div class="controls">
                                 <input type="text"name="kurs_basliq" class="span12 ">  
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Alt-Yazı</label>
                              <div class="controls">
                                 <input type="text"name="kurs_altyazi" class="span12 "> 
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Qiymət</label>
                              <div class="controls">
                                 <input type="text"name="kurs_qiymet" class="span12 ">  
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Ödəmə Vaxtı</label>
                              <div class="controls">
                                 <select class="span12 "name="kurs_odemevaxt" data-placeholder="Choose a Category" tabindex="1">
                                    <option value="" >Ödəmə vaxtı
                                    <option value="Aylıq">Aylıq
                                    <option value="Həftəlik">Həftəlik
                                    <option value="Günlük">Günlük
                                    <option value="saatı">Saatı
                                 </select>
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
                                       <input type="file" name="kurs_sekil" class="default"></span>
                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a> 
                                            </div>
                                        </div>
                                    </div>
                                   <input type="submit" name="submit" value="Submit"class="btn btn-success">                      
<!-- .....................END IMG select................ -->                          
</div>
</div>   
</form>                
</div> <!-- span4 -->   
    
<?php 
  
 mysqli_query($conn,"set names utf8"); 
 $kurs_basliq  =@$_POST['kurs_basliq'];
 $kurs_altyazi =@$_POST['kurs_altyazi']; 
 $kurs_qiymet =@$_POST['kurs_qiymet'];
 $kurs_odemevaxti =@$_POST['kurs_odemevaxt']; 
 $image=@$_FILES['kurs_sekil']['name'] ;
 

  if( @$_POST['submit'] ){

$target ="sekil/kursimg/".basename($_FILES['kurs_sekil']['name']);

 $sql = "INSERT INTO courses(courses_name,course_text,course_qiymet,course_vaxt,kurs_img) 
 VALUES ('$kurs_basliq','$kurs_altyazi','$kurs_qiymet','$kurs_odemevaxti','$image')";
    
 if(mysqli_query($conn,$sql) and move_uploaded_file($_FILES['kurs_sekil']['tmp_name'], $target)){
     echo "melumatlar ugurla yazildi";
 }else {
     echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>";
 }
  
 } 
 ?>
  




 
                  <!-- BEGIN ADVANCED TABLE widget-->
                   <div class="span9">
   <form action="" method="post">

                       <!-- BEGIN EXAMPLE TABLE widget-->
                       <div class="widget">
                           <div class="widget-title">
                               <h4><i class="icon-reorder"></i> Kurslar </h4>
                               
                           </div>
                           <div class="widget-body">
                              <div class="portlet-body">
                            



                                <table class="table table-striped table-hover table-bordered" id=" ">
                                    <thead>
                                    <tr>
                                        <th>Kurs adı</th>
                                        <th>Kurs Qiyməti</th>  
                                        <th>Ödəniş Vaxt</th>
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                             
    <?php
 
  
    $sql = "SELECT * FROM courses "; mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    ?>        
                  <tr class="">
                       <td><?=$row['courses_name'];?></td>
                       <td><?=$row['course_qiymet']?></td> 
                       <td><?=$row['course_vaxt']?></td>  
                       <td><a class=" btn btn-success btn-block  " href="kurslar.php?edit=<?=$row['courses_id']?> ">Edit </a></td>
                       <td><a style="" class=" btn btn-warning  btn-block"
                        href="kurslar.php?del=<?=$row['courses_id']?>"> Delete</a></td>
                  </tr>

             <?php } }else{ echo"0 netice"; }

    
if(  @$_GET['del']  ){
    $silmek = $_GET['del'];
    mysqli_query($conn,"DELETE from courses where courses_id ='$silmek'");
}

 
?> 

                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->

</form> 
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->
       
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