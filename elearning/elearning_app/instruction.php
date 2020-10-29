<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["instruction"] = array();
$uu=0;
 
$table='instruction';
$rs=$obj->fetchDetailById(2,$table,"app_type");
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{
		    $uu=$uu+1;
		}
	}
if($uu==0)
{
    $response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["instruction"]);
echo json_encode($response);
    
}
else
{
$rs=$obj->fetchDetailById(2,$table,"app_type");
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{	
			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "instruction";
			$info["id"]=$row['id'];
			
			$info["image"] = $row['image'];
			$info["contant"]=strip_tags($row['contant']);
			
		array_push($response["instruction"], $info);
}

		echo json_encode($response);
}

else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["instruction"]);
echo json_encode($response);
}
}
?>