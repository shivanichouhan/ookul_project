<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["district"] = array();
 

$rs=$obj->fetchAllDetail("practiseexam_test");
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{	
			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "district";
	
			$ttt = stripslashes($row['question']);
			      
		
			$info["test"]=$ttt;

			
		array_push($response["district"], $info);
}

		echo json_encode($response);
}

else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["district"], $info);
echo json_encode($response);
}
?>