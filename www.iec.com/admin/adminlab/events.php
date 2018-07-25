<?php include 'header.php' ?>
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">Aktivitələr</h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Aktivitələr</a><span class="divider-last">&nbsp;</span></li>
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
                           <h4><i class="icon-globe"></i>Aktivitələr</h4>
                                                
                        </div>
                        <div class="widget-body">
                           


<!-- .............................ICERIK............................. -->
<?php $conn = mysqli_connect('localhost','root','','iec_kurs') ;mysqli_query($conn,"set names utf8");
 if(!$conn){
     die("baglanti problemi: ".mysqli_connect_error());
 }
  ?> 
    
<form action="" method="post" enctype="multipart/form-data" >


<div class="row-fluid">

 <div class="span4"> 

    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Aktivitə Hakkında</h4>
                         
                        </div>
                        <div class="widget-body form">

 
<!-- .....................INPUT................ -->
                                 <div class="control-group">
                              <label class="control-label">Başlıq</label>
                              <div class="controls">
                                 <input type="text" name="basliq" class="span9 ">  
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Alt-Yazı</label>
                              <div class="controls">
                                 <input type="text"name="altyazi"  class="span9 "> 
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Adres</label>
                              <div class="controls">
                                 <input type="text" name="adres" class="span9 ">  
                              </div>
                           </div>

<!-- .....................INPUT................ -->


 
                                <div class="control-group">
                                    <label class="control-label">Saat</label>
                                    <div class="controls">
                                        <div class="input-append bootstrap-timepicker-component">
                                            <input type="text" name="saat" class=" m-ctrl-small timepicker-default" >
                                            <span class="add-on"><i class="icon-time"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tarix</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                            <input type="text" name="tarix" class=" m-ctrl-medium date-picker" size="16"  value="12-02-2012"><span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                          

 
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
                                    <label class="control-label">Aktivitə hakkında Mətn daxil edin</label>
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

</form>
<!-- melumatlarin bazaya yazilmasi --PHP codlari-- -->
<?php 
 
 $basliq =@$_POST['basliq'];
 $altyazi=@$_POST['altyazi']; 
 $adres  =@$_POST['adres'];
 $saat   =@$_POST['saat'];
 $tarix  =@$_POST['tarix'];  
 $metn   =@$_POST['editor1'];
   $image=@$_FILES['sekil']['name'] ;

    if(@$_POST['submit'] ){
   
  $target ="sekil/eventimg/".basename($_FILES['sekil']['name']);

   $sql = "INSERT INTO events(event_basliq,event_altyazi,event_adress,event_time,event_date,event_img,event_text) 
   VALUES ('$basliq','$altyazi','$adres','$saat','$tarix','$image','$metn' )";
   
   if(mysqli_query($conn,$sql) and move_uploaded_file($_FILES['sekil']['tmp_name'], $target)){
       echo "melumatlar ugurla yazildi";
   }else {
       echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>";
   }
   
   } 
 ?>








  <!-- bazada melumatin admine gosderilmesi --> 
 
 <div class="row-fluid">
   
   <form action="" method="post">
               <!-- BEGIN ADVANCED TABLE widget-->
                   <div class="span12">
                       <!-- BEGIN EXAMPLE TABLE widget-->
                       <div class="widget">
                           <div class="widget-title">
                               <h4><i class="icon-reorder"></i> Aktivitələr </h4>
                               
                           </div>
                           <div class="widget-body">
                              <div class="portlet-body">
                            



                                <table class="table table-striped table-hover table-bordered" id=" ">
                                    <thead>
                                    <tr>
                                        <th>Aktivite başlıqı</th>
                                        <th>Aktivite tarix</th>  
                                        <th>Aktivite Vaxt</th> 
                                        <th>Aktivite Adresi</th>
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                             
    <?php
 
  
    $sql = "SELECT * FROM events "; mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    ?>        
                  <tr class="">
                       <td><?=$row['event_basliq'];?></td>
                       <td><?=$row['event_date']?></td> 
                       <td><?=$row['event_time']?></td> 
                       <td><?=$row['event_adress']?></td>   
                       <td><a class=" btn btn-success btn-block  " href="events.php?edit=<?=$row['event_id']?> ">Edit </a></td>
                       <td><a style="" class=" btn btn-warning  btn-block"
                        href="events.php?del=<?=$row['event_id']?>"> Delete</a></td>
                  </tr>

             <?php } }else{ echo"0 netice"; }

    
if(  @$_GET['del']  ){
    $silmek = $_GET['del'];
    mysqli_query($conn,"DELETE from events where event_id ='$silmek'");
}


             
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

 
<?php
mysqli_close($conn);
?>
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