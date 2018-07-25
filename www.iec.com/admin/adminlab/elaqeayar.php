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
                   Əlaqə Ayarları
                     
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                        
                       <li><a href="#">Əlaqə Ayarları</a><span class="divider-last">&nbsp;</span></li>
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
                           <h4><i class="icon-globe"></i>Əlaqə Ayarları</h4>
                                                
                        </div>
                        <div class="widget-body">
                           


<!-- .............................ICERIK............................. -->


<div class="row-fluid">

<div class="span3"> 
<form action="" method="post">


   <div class="widget">
                       <div class="widget-title">
                           <h4><i class="icon-reorder"></i>Əlaqə</h4>
                        
                       </div>
                       <div class="widget-body form">
 
<!-- .....................INPUT................ -->
                                <div class="control-group">
                             <label class="control-label">Adres</label>
                             <div class="controls">
                                <input type="text"name="adres" class="span12 ">  
                             </div>
                          </div>
                          <div class="control-group">
                             <label class="control-label">Email</label>
                             <div class="controls">
                                <input type="text"name="email" class="span12 "> 
                             </div>
                          </div>
                          <div class="control-group">
                             <label class="control-label">Telefon</label>
                             <div class="controls">
                                <input type="text"name="telefon" class="span12 ">  
                             </div>
                          </div>
                          <div class="control-group">
                             <label class="control-label">Iş Vaxtı</label>
                             <div class="controls">
                                <input type="text" name="isvaxti" value ="Bazarertəsi - Şəmbə: 09 AM - 10 PM" class="span12 ">  
                             </div>
                          </div>
                          <div class="control-group">
                             <label class="control-label">Adreslink</label>
                             <div class="controls">
                                <input type="text" name="map" class="span12 ">  
                             </div>
                          </div>
<!-- .....................INPUT................ -->
<button type="submit" class="btn btn-success">Submit</button>
                         
</div>
</div>
</form>
</div> 


         <?php 
          
          $adres  =@$_POST['adres'];
          $email =@$_POST['email']; 
          $telefon =@$_POST['telefon'];
          $isvaxti =@$_POST['isvaxti'];
          $map =@$_POST['map'];
          //$hakkimizda_sekil =$_POST['hakkimizda_sekil'];
           if($_POST ){
          
          mysqli_query($conn,"set names utf8"); 
          
           $sql = "INSERT INTO contact(adress,telefon,email,worktime,gmap_location)  VALUES ('$adres','$telefon','$email','$isvaxti','$map' )";
          
          if(mysqli_query($conn,$sql)){
              echo "melumatlar ugurla yazildi";
          }else {
              echo "<h1 stytle='color:red;'> ERROR VAR".$sql."<br>".mysqli_error($conn). "</h1>";
          }
           
          } 
          ?>
    

    <div class="span9">
<form action="" method="post">
            <!-- BEGIN ADVANCED TABLE widget-->
               
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
                                        <th>Adres</th>
                                        <th>Email</th>  
                                        <th>Telefon</th> 
                                        <th>İş vaxtı</th>  
                                        <th>Google Location(Link)</th>
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                             
    <?php
 
  
    $sql = "SELECT * FROM contact "; mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    ?>        
                  <tr class="">
                       <td><?=$row['adress']?></td>
                       <td><?=$row['email']?></td> 
                       <td><?=$row['telefon']?></td>
                        <td><?=$row['worktime']?></td>
                       <td><?=$row['gmap_location']?></td>  

                         <!-- kommanda buttons -->
                       <td><a class=" btn btn-success btn-block  " href="hakkimizda_ayar.php?edit=<?=$row['aboutus_id']?> ">Edit </a></td>
                       <td><a style="" class=" btn btn-warning  btn-block"
                        href="elaqeayar.php?del=<?=$row['contact_id']?>"> Delete</a></td>
                  </tr>

             <?php } }else{ echo"0 netice"; }

    
if(  @$_GET['del']  ){
    $sil = $_GET['del'];
    mysqli_query($conn,"DELETE from contact where contact_id='$sil'");
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
   </div></div>
   <!-- END CONTAINER -->
<?php include 'footer.php' ?>