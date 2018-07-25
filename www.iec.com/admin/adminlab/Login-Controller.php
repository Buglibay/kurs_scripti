<?php
include 'option/connect.php';

if(isset($_POST['giris'])){
	$user_name = $_POST['name'];
	$user_pass = $_POST['pass'];

	 if($user_name && $user_pass){
	 	$sql=mysqli_query("SELECT * FROM user_table where uye_adi ='$user_name' and uye_sifre ='$user_pass'");

	 	$result=mysqli_num_rows($conn,$sql);

	 	if($result>0){

	 		$_SESSION['uye_adi'] = $user_name;
	 		header('Location:index.php');
	 	}else{

	 		header('Location:../index.php?Login=no');
	 	}
	 }
}

mysqli_close($conn);
?>