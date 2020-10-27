<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["district"] = array();
 
$table='city';
$rs=$obj->fetchDetailByStatus(1,"city","status");
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{	
			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "district";
			$info["id"]=$row['id'];
			$info["city"] = $row['city'];
			

			
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