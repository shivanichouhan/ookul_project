<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["ebook"] = array();

$topics=$_POST['topics'];

$subject=$_POST['subject'];


$rs=$obj->fetchDetailByIdByStatus($topics,"ebook","topics","subject",$subject);

if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{	
			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "E-Book";
			
			$info["id"]=$row['id'];
			$info["title"] = $row['title'];
			$info["document"] = $row['document'];
			
		array_push($response["ebook"], $info);
}
echo json_encode($response);
}

else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;


array_push($response["ebook"]);
echo json_encode($response);
}

?>