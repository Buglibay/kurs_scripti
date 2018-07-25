<?php include 'header.php' ?>

      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                   Blog Yazilari
                     
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                        
                       <li><a href="#">Blog Yazilari</a><span class="divider-last">&nbsp;</span></li>
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
                           <h4><i class="icon-globe"></i>Blog Yazilari</h4>
                                                
                        </div>
                        <div class="widget-body">
                           


<!-- .............................ICERIK............................. -->

 <?php

mysqli_query($conn,'set names utf8');


?>
  
<div class="row-fluid">


<div class="span4">
    

    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Blog kategoriyası</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a> 
                           </span>
                        </div>
                        <div class="widget-body form">

<!-- .....................INPUT................ -->
                                 <div class="control-group">
                              <label class="control-label">kategoria elave et</label>
                              <div class="controls">
                                <form action="" method="post" accept-charset="utf-8">
                                   <input type="text" name="yenielave" class="span9 ">  <input type="submit" name="elaveEt" class="btn btn-success" value="Submit"> 
                                </form>
                                
                              </div>
                           </div>
 
    <?php

        $yenielave =  @$_POST['yenielave']; 

if(@$_POST['elaveEt']){
      mysqli_query($conn ," INSERT INTO blog_categories(categoria_name) VALUES('$yenielave')");    
        }

    ?>


</div>
</div>

<!-- BEGIN ADVANCED TABLE widget--> 
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget"style="margin-top:30px">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Blog oxunma statistikası</h4>
                            
                        </div>
                        <div class="widget-body">
                            <div class="portlet-body"style="height:400px;overflow:scroll;">
                             

                                <table  class="table table-striped table-hover table-bordered" id=" ">
                                    <thead>
                                    <tr>
                                        <th>Başlıq</th> 
                                        <th>oxunma sayisi</th>
                                         
                                    </tr>
                                    </thead>
                                    <tbody>
                             
    <?php 
    $sql = "SELECT * FROM blog ORDER BY blog_hit DESC ";
    mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    ?>        
                  <tr class="">
                       <td><?=$row['blog_basliq']?></td>
                       <td><?=$row['blog_hit']?></td>  
                        
                  </tr>

             <?php } }   ?> 

                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
       


</div>

 

  <div class="span8">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Blog kategoriya bazasi</h4>
                            
                        </div>
                        <div class="widget-body">
                            <div class="portlet-body"style="height:550px;overflow:scroll;"> 
                                <table class="table table-striped table-hover table-bordered" id=" ">
                                    <thead>
                                    <tr>
                                        
                                        <th>Kategoriya</th>  
                                  
                                        <th> </th> 
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                             
    <?php 
    $sqlt = "SELECT * FROM blog_categories"; mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sqlt);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    ?>        
                  <tr class="">
                   
                       <td><?=$row['categoria_name']?></td> 
                       <td><center>---------</center></td>
                        
                       <td><a class=" btn btn-success btn-block  " href="hakkimizda_ayar.php?edite=<?=$row['categoria_id']?> ">Edit </a></td>
                       <td><a style="" class=" btn btn-warning  btn-block"
                        href="blogyazilari.php?delete=<?=$row['categoria_id']?>"> Delete</a></td>
                  </tr>

             <?php } }else{ echo"0 netice"; }

    
if(  @$_GET['delete']  ){
    $silmek = $_GET['delete'];
    mysqli_query($conn,"DELETE from blog_categories where categoria_id='$silmek'");

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






   

<div class="row-fluid">

 <div class="span3"> 

    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Blog yazıları</h4>
                         
                        </div>
                        <div class="widget-body form">

 <form action="" method="post" enctype="multipart/form-data">
<!-- .....................INPUT................ -->
                                 <div class="control-group">
                              <label class="control-label">Başlıq</label>
                              <div class="controls">
                                 <input type="text"  name="basliq" class="span12 ">  
                              </div>
                           </div>
                            

<!-- .....................INPUT................ -->

 <!-- katagoriya -->
 <div class="control-group">
                           <label class="control-label">Blog katagoriyalari</label>
                              <div class="controls">
                                 <select class="span12 " name="katagoriya" data-placeholder="Choose a Category" tabindex="1">
 <?php 
    $sql = "SELECT * FROM blog_categories"; mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    ?>        
                   <option value="<?=$row['categoria_id']?>"><?=$row['categoria_name']?>
 
             <?php } }else{ echo"bazada məlumat yoxdur"; }
         
?>  
                                 </select>
                              </div>
                           </div>
 <!-- katagoriya -->
<!-- .....................TARİX................ -->
                                <div class="control-group">
                                    <label class="control-label">Tarix</label>
                                    <div class="controls">
                                        <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                            <input class=" m-ctrl-medium date-picker" name="tarix" size="14" type="text" value="12-02-2012"style="width: 170px;"><span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
<!-- .....................TARİX................ -->
                           
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
               <div class="span9">
                 <!-- BEGIN ck  -->
                <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>CKEditor</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a> 
                           </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM--> 
                                <div class="control-group" style="margin-left: 0;"> 
                                    <div class="controls" style="margin-left: 0;">
                                        <textarea   style="margin-left: 0;"class="span12 ckeditor" name="editor1" rows="6"></textarea>
                                    </div>
                                </div>
                                        <input type="submit" name="gonder" class="btn btn-success" value="Submit"  > 
                            
                        </div> <!-- END ck widget-->
                    </div>  <!-- end span -->
                 </div>   
 <!-- .....................END ck................ -->
</form><!-- END FORM-->
</div>   <!-- end row -->

 

<!-- melumatlarin bazaya yazilmasi php code -->
<?php 

          $basliq = @$_POST['basliq'];
          $katagoriya =@$_POST['katagoriya']; 
          $tarix=@$_POST['tarix']; 
          $image=@$_FILES['sekil']['name'] ; 
          $text=@$_POST['editor1'];

           if(@$_POST['gonder']){

          
           $target ="sekil/blogimg/".basename($_FILES['sekil']['name']);

           $sql = "INSERT INTO blog(blog_date,blog_categories,blog_basliq,blog_img,blog_text)
                   VALUES('$tarix','$katagoriya','$basliq','$image','$text')";
          
          
 if(mysqli_query($conn,$sql) and move_uploaded_file($_FILES['sekil']['tmp_name'], $target)){
     echo "melumatlar ugurla yazildi";
 }else {
     echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn)."</h1>";
 }
          
          }
?>
</div>













  <!-- bazada melumatin admine gosderilmesi --> 

 <div class="row-fluid">
    
            <!-- BEGIN ADVANCED TABLE widget-->
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Bloglar</h4>
                            
                        </div>
                        <div class="widget-body">
                            <div class="portlet-body"style="height:600px;overflow:scroll;">
                            



                                <table class="table table-striped table-hover table-bordered" id=" ">
                                    <thead>
                                    <tr>
                                        <th>Başlıq</th>
                                        <th>Kategoriya</th>  
                                        <th>Paylashim tarixi</th>
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                             
    <?php 
    $sql = "SELECT * FROM blog "; mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    ?>        
                  <tr class="">
                       <td><?=$row['blog_basliq']?></td>
                       <td><?=$row['blog_categories']?></td> 
                       <td><?=$row['blog_date']?></td>  
                       <td><a class=" btn btn-success btn-block  " href="hakkimizda_ayar.php?edit=<?=$row['blog_id']?> ">Edit </a></td>
                       <td><a style="" class=" btn btn-warning  btn-block"
                        href="blogyazilari.php?del=<?=$row['blog_id']?>"> Delete</a></td>
                  </tr>

             <?php } }else{ echo"0 netice"; }

    
if(  @$_GET['del']  ){
    $silmek = $_GET['del'];
    mysqli_query($conn,"DELETE from blog where blog_id='$silmek'");

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

</div> 
<!-- .............................ICERIK............................. -->






</form>
                               
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