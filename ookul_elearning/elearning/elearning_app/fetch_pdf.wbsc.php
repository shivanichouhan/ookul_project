<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["wbcs_pdf"] = array();

$topics=$_POST['topics'];

$subject=$_POST['subject'];


$rs=$obj->fetchDetailByIdByStatus($topics,"wbcs_pdf","topics","subject",$subject);

if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{	
			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "WBSC PDF";
			
			$info["id"]=$row['id'];
			$info["subject"] = $row['subject'];
			$info["topics"] = $row['topics'];
			$info["pdf"] = $row['pdf'];
			$info["status"] = $row['status'];
			$info["pstatus"] = $row['pstatus'];
            $info["title"] = $row['title'];			
			
array_push($response["wbcs_pdf"], $info);
}
echo json_encode($response);
}

else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;


array_push($response["wbcs_pdf"]);
echo json_encode($response);
}

?>