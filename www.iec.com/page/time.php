<?php 

define('TIMEZONE', 'Asia/Baku'); // Baku, Azerbaijan, Asia
date_default_timezone_set('Asia/Baku');
$vaxt = date('h/m/s');
echo timeAgo($vaxt);

function timeAgo($timestamp){
	$time_ago =strtotime($timestamp);
	$current_time = time();
	$time_difference = $current_time - $time_ago;
	$seconds = $time_difference;
	$minutes = round($seconds/60); # value 60 seconds
	$hours   = round($seconds/3600);# value 3600 is 60 minuts * 60 seconds
	$days	 = round($seconds/86400);# value 86400 = 24*60*60
	$weeks	 = round($seconds/604800);# 7*24*60*60
	$months	 = round($seconds/2629440); #((365+365+365+365+366)/5/12)*24*60*60
	$years	 = round($seconds/31553280);#(365+365+365+365+366)/5*24*60*60


	if($seconds <= 60){return "Biraz əvvəl";}
	else if($minutes<= 60){
		if($minutes ==1){return "Bir dəqiqə əvvəl";}
		else{return "$minutes dəqiqə əvvəl";}
	}
	else if($hours<=24){
		if($hours ==1){return "Bir saat əvvəl";}
		else{return "$hours saat əvvəl";}
	}
	else if($days<=7){
		if($days ==1){return "Bir gün əvvəl";}
		else{return "$days gün əvvəl";}
	}
	else if($weeks<=4.3)/*:::4.3=52/12:::*/{
		if($weeks ==1){return "Bir həftə əvvəl";}
		else{return "$weeks həftə əvvəl";}
	}
	else if($months<=12) {
		if($months ==1){return "Bir ay əvvəl";}
		else{return "$months ay əvvəl";}
	}
	else{
		if($years ==1){return "Bir il əvvəl";}
		else{return "$years il əvvəl";}
	}

 

} #END FUNTION timeAgo 

?>