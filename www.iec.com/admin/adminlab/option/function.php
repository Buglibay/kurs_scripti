<?php
// include 'connect.php';
// function left_slidebar(){
//     $page=@$_GET['page'];

//     switch ( $page ) {

//         case 'home':  include 'home.php'; break; 

//         case 'komandamiz':  include 'komandamiz.php'; break; 
//         case 'isdifadeciler' :  include 'isdifadeciler.php'; break;   
//       //  case 'blogyazilari' :  include 'blogyazilari.php';   break;  
//       //  case 'blogcomments':      include 'blogcomments.php';   break;
//         case 'slider':     include 'slider.php';   break;
//         case 'fotogaleri' :       include 'fotogaleri.php';  break; 
//         case 'elaqeayar' :    include 'elaqeayar.php';     break;  
//         case 'mesajlar' :  include 'mesajlar.php';   break;  
//         case 'kurslar':  include 'kurslar.php';    break;
//         case 'events':  include 'events.php';  break;
//         case 'eventqeydiyyat' : include 'eventqeydiyyat.php';  break;  
//         case 'hakkimizda_ayar' : include 'hakkimizda_ayar.php'; break;  
         
//         default:  include 'home.php';  break;
//     }
// }

// ob_start();
// session_start();
// function contorol(){

// 	$admin_uye =$_SESSION['uye_adi'];

// 	$quaryname=mysqli_query("SELECT * FROM user_table where uye_adi = '$admin_uye'");
// 	$nameresult=mysqli_num_rows($quaryname);

// 	if($nameresult==0){
// 		header('Location:../logout.php');
// 	}
// }

?>