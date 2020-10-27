<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["subject"] = array();
 
$table='optional_subject';
$rs=$obj->fetchAllDetail($table);
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{	
			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "subject";
			$info["id"]=$row['id'];
			$info["subject"] = $row['subject'];
			$info["image"] = $row['image'];
			$info["banner"] = $row['banner'];
			$info["status"]=$row['status'];
			
		array_push($response["subject"], $info);
}

		echo json_encode($response);
}

else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["subject"], $info);
echo json_encode($response);
}

///https://app.bongosikha.com/admin/gov_upload/topic/ --- banner

////https://app.bongosikha.com/admin/optional_upload/ ----- button image


?>