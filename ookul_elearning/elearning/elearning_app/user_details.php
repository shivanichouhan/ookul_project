<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["profile"] = array();

$params = (array) json_decode(file_get_contents('php://input'), TRUE);


 $user_id=$params['user_id'];

$table='register';
$row=$obj->fetchById($user_id,$table,"id");

if($row)
	{	
		
	    	$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Profile Details";
		
		
			$info["user_id"]=$row['id'];
			$info["first_name"] = $row['fname'];
			$info["last_name"] = $row['lname'];
			$info["phone"] = $row['phone'];
			$info["email"] = $row['email'];
			$info["password"] = $row['password'];
			$info["dateofbirth"] = $row['dateofbirth'];
			$info["address"] = $row['address'];
			
			
			
			$info["picture"] = $row['picture'];
			$info["category"] = $row['category'];
			$info["registrationdate"] = $row['registrationdate'];
			
			
		
		array_push($response["profile"], $info);
		echo json_encode($response);
}

else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["profile"]);
echo json_encode($response);
}
?>