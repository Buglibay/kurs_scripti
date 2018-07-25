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
                   Aktivitə Qeydiyyat
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                        
                       <li><a href="#">Aktivitə Qeydiyyat</a><span class="divider-last">&nbsp;</span></li>
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
                           <h4><i class="icon-globe"></i>Aktivitə Qeydiyyat</h4>
                                                
                        </div>
                        <div class="widget-body">
                           


                            <!-- BEGIN ADVANCED TABLE widget-->
                              


 <div class="row-fluid">
   
   <form action="" method="post">
               <!-- BEGIN ADVANCED TABLE widget-->
                   <div class="span9">
                       <!-- BEGIN EXAMPLE TABLE widget-->
                       <div class="widget">
                           <div class="widget-title">
                               <h4><i class="icon-reorder"></i> Aktivitə Qeydiyyatları</h4>
                              
                           </div>
                           <div class="widget-body">
                              <div class="portlet-body">
                            



                                <table class="table table-striped table-hover table-bordered" id=" ">
                                    <thead>
                                    <tr>
                                        <th>Aktivitələr</th>
                                         
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
                       <td><?=$row['event_basliq']?></td>
 
                        
                       <td><a style="" class=" btn btn-warning  btn-block"
                        href="eventqeydiyyat.php?look=<?=$row['event_id'] ?>">Siyahıya bax</a></td>
                  </tr>

             <?php } }else{ echo"0 netice"; }


?> 

                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
           
</form> 
</div> 
    
 

 <div class="row-fluid">
 <div class="span11">
<?php    
if(  @$_GET['look']  ){
    $id = @$_GET['look'];
    ?>
   <!-- BEGIN EXAMPLE TABLE widget-->
                       <div class="widget">
                           <div class="widget-title">
                               <h4><i class="icon-reorder"></i><?php 
                                        $idsi = "SELECT * FROM events where event_id ='$id'";
                                        $result = mysqli_query($conn,$idsi);
                                         if(mysqli_num_rows($result) > 0){ 
                                            while($row=mysqli_fetch_assoc($result)){ 
                                        echo $row['event_basliq']." - SIYAHISI";
                                    }}?></h4>
                              
                           </div>
                           <div class="widget-body">
                              <div class="portlet-body">
                            



                                <table class="table table-striped table-hover table-bordered" id=" ">
                                    <thead>
                                    <tr>
                                       
                                        <th>Ad Soyad </th>
                                        <th>Email </th>
                                        <th>Telefon</th>
                                        <th>Təhsili </th> 
                                        <th>İşi </th> 
                                        <th>Yaşadığı Şəhər</th>

                                    </tr>
                                    </thead>
                                    <tbody>

<?php

 

    $sql ="SELECT * FROM events INNER JOIN event_id ON events.event_id =events_register.event_id where event_id='$id'";
    $sql ="SELECT * FROM events_register  where event_id='$id'";
                        
    mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){
               ?>
                  <tr class="">
                       <td><?=$row['adsoyad']?></td>
                       <td><?=$row['email']?></td>
                       <td><?=$row['telefon']?></td>
                       <td><?=$row['tehsil']?></td>
                       <td><?=$row['ish']?></td>
                       <td><?=$row['unvan']?></td> 
                        
                  </tr>

             <?php } }else{ echo"Qeydiyyatdan Keçən yoxdur"; }
}else {echo "Siyahı Seçilməyib";}

?> 
                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
            </div> 


 </div> 
 </div> 

                    <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->

<!-- .............................ICERIK............................. -->
 
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
   <?php include 'footer.php' ; ?>