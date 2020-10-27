<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["days"] = array();

$yy=0;
$rs=$obj->fetchAllDetail("days");
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{
		    $yy=$yy+1;
		}
	}

if($yy=='0')
{
    $response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["days"]);
echo json_encode($response);
}
else
{
$rs=$obj->fetchAllDetail("days");
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{																			

			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Days List";
			
  
                $info["id"]=$row['id'];
                $info["days"]=$row['days'];
                $info["status"]='1';
  
			
		array_push($response["days"], $info);
}
		echo json_encode($response);
}

else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["days"]);
echo json_encode($response);
}
}

?>