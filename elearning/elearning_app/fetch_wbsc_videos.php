<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["wbsc_videos"] = array();

$topics=$_POST['topics'];

$subject=$_POST['subject'];


$rs=$obj->fetchDetailByIdByStatus($topics,"wbsc_videos","topics","subject",$subject);

if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{	
			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "WBSC Videos";
			
			$info["id"]=$row['id'];
			$info["subject"] = $row['subject'];
			$info["videos"] = $row['videos'];
			
			$info["status"] = $row['status'];
			$info["pstatus"] = $row['pstatus'];
			
			$info["topics"] = $row['topics'];
			
			$info["thumbnail"] = $row['thumbnail'];
			
			
		array_push($response["wbsc_videos"], $info);
}
echo json_encode($response);
}

else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;


array_push($response["wbsc_videos"]);
echo json_encode($response);
}

?>