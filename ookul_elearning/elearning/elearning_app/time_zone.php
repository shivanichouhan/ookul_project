<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response;




// I'm India so my timezone is Asia/Calcutta
date_default_timezone_set('Asia/Calcutta');

// 24-hour format of an hour without leading zeros (0 through 23)
$Hour = date('G');

if ( $Hour >= 5 && $Hour <= 11 ) {
	$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Good Morning";
	
	
   echo json_encode($response);
   
} else if ( $Hour >= 12 && $Hour <= 15 ) {
	$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Good Afternoon";
	
		
  echo json_encode($response);
    
} else if ( $Hour >= 16 || $Hour <= 21 ) {
		$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Good Evening";
	
		
  echo json_encode($response);
	

}
 else if ( $Hour >= 22 || $Hour <= 4 ) {
	 	$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Good Night";
	
		
   echo json_encode($response);
 
}
?>