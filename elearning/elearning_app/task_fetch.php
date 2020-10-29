<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["task_fetch"] = array();
 $date=date('d-m-Y');
 
 
 $a=0;
 $rs=$obj->fetchById_proregistercountdate($date,"add_task","date");
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{
	$a=$a+1;
		}
	}
if($a=='0')
{
   $response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["task_fetch"], $info);
echo json_encode($response); 
}
else
{
$rs=$obj->fetchById_proregistercountdate($date,"add_task","date");
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{																			

			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = " View Task";
			$info["id"]=$row['id'];
			//$info["add_task"] = $row['add_task'];

if($row['add_task']=="")
{
    $info["add_task"]="";
}
else
{
    $info["add_task"]=$row['add_task'];
}
			
		array_push($response["task_fetch"], $info);
}
		echo json_encode($response);
}

else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["task_fetch"], $info);
echo json_encode($response);
}
}
?>