<?php include 'header.php' ?>
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">İsdifadeciler</h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">İsdifadeciler</a><span class="divider-last">&nbsp;</span></li>
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
                           <h4><i class="icon-globe"></i>İsdifadeciler</h4>
                                                
                        </div>
                        <div class="widget-body">
                           


<!-- .............................ICERIK............................. -->


<div class="row-fluid">

 <div class="span3"> 

<form action="" method="post">

    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>İsdifadəçilər</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a> 
                           </span>
                        </div>
                        <div class="widget-body form">

 
<!-- .....................INPUT................ -->
                                 <div class="control-group">
                              <label class="control-label">User adi</label>
                              <div class="controls">
                                 <input type="text" name="name" class="span12 ">  
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">User Sifresi</label>
                              <div class="controls">
                                 <input type="text" name="pass" class="span12 "> 
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">User Səviyyəsi</label>
                              <div class="controls">
                                 <select class="span12 " name="level" data-placeholder="Choose a Category" tabindex="1"> 
                                    <option value="Admin">Admin
                                    <option value="Editor"> Editor
                                 </select>
                              </div>
                           </div>
                           <input type="submit" name="qeydiyyat" class="btn btn-success"value="Submit"> 
<!-- .....................INPUT................ -->                
</div>
</div>   
</form>  
<?php
  $name = htmlspecialchars_decode(trim(@$_POST['name']));
   $pass = htmlspecialchars_decode(trim(md5(@$_POST['pass']))); 
   $level = htmlspecialchars_decode(trim(@$_POST['level']));
  if(@$_POST['qeydiyyat']){
    $sql = "INSERT INTO user_table(uye_adi,uye_sifre,user_seviyyesi)VALUES('$name','$pass','$level')";
    if(mysqli_query($conn,$sql)){
      echo "Qeydiyyat ugurlu oldu";
    }else{echo mysqli_error($conn);}
  }
  ?>           
</div> <!-- Span3 -->



  <!-- bazada melumatin admine gosderilmesi --> 
  
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
                                        <th>User Name</th>
                                        <th>User Password</th>  
                                        <th>user_seviyyesi</th>  
                                        <th> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                             
    <?php 
    $sql = "SELECT * FROM user_table "; mysqli_query($conn,"set names utf8"); 
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){ while($row=mysqli_fetch_assoc($result)){ 
    ?>        
                  <tr class="">
                       <td><?=$row['uye_adi']?></td>
                       <td><?=$row['uye_sifre']?></td> 
                       <td><?=$row['user_seviyyesi']?></td>  
                         <!-- kommanda buttons -->
                        
                       <td><a style="" class=" btn btn-info  btn-block"
                        href="isdifadeciler.php?del=<?=$row['user_id']?>"> Delete</a></td>
                  </tr>

             <?php } }  
if(  @$_GET['del']  ){
    $sil = $_GET['del'];
    mysqli_query($conn,"DELETE from user_table where user_id='$sil'");
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
</div> 
  






                               
                        </div><!-- end row --> 
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