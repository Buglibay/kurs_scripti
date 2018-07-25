<?php include 'mysqli_connect.php';?>

<?php
   #FUNCTION LINK MENU
function link_menu(){
    
   switch ( @$_GET['page']) {
       case 'home':   include 'page/home.php';        break;
       case 'about':  include 'page/about.php';       break;
       case 'courses':include 'page/course.php';      break;    
      // case 'blog':   include 'page/blog.php';        break;    
       case 'contact':include 'page/contact.php';     break;
       //case 'single': include 'page/single-blog.php'; break;
       case 'ourevents': include 'page/ourevent.php';    break;
       //case '$row["event_id"]': include 'page/single_event.php';   break;
       //case 'galery': include 'page/galery.php';    break;
       default:       include 'page/home.php';        break;
           
   }


}



?>