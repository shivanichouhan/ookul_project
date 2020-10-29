<?php
include"../include/database.php";
$obj=new database();


$info=array();
$response["instruction"] = array();
$exam_type=$_POST['exam_type'];
$uu=0;
 
$table='school_exam_instruction';

$rs=$obj->fetchDetailById($exam_type,$table,"exam_type");
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
$rs=$obj->fetchDetailById($exam_type,$table,"exam_type");
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{	
			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "instruction";
			$info["id"]=$row['id'];
			
		$info["title"]=$row['title'];
		$info["description"]=htmlspecialchars($row['description']);
			
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