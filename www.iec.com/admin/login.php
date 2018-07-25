
<?php 

include_once 'adminlab/option/connect.php'; 
  $user_name = @$_POST['name'];
  $user_pass = md5(@$_POST['pass']);

if(isset($_POST['giris'])){
   if($user_name && $user_pass){
    $sql=mysqli_query($conn,"SELECT * FROM user_table where uye_adi ='$user_name' and uye_sifre ='$user_pass' ");

    $result=mysqli_num_rows($sql);

    if($result > 0 ){

         $_SESSION['uye_adi']== $user_name;
      header('Location: adminlab/index.php');

    }
    else{
       header('Location:index.php?login=no');
    } 
   }else{
       header('Location:index.php?login=no');
    } 
}?>