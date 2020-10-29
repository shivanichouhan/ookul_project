<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["profile"] = array();
 $user_id=$_POST['user_id'];
$table='user_register_goverment';
$row=$obj->fetchById($user_id,$table,"id");
if($row)
	{	
		
	$block=$obj->fetchById($row['block'],"block","id");
	
	        $class=$obj->fetchById($row['class'],"class","id");
		    $cou1=$obj->fetchById($user_id,"class_order","user_id");
        	$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Profile Get";
			$info["id"]=$row['id'];
			$info["name"] = $row['name'];
			$info["email"] = $row['email'];
			$info["city_id"] = $row['city_id'];
			$info["mobile"] = $row['mobile'];
			$info["block"] = $block['block'];
			$info["refferel_id"] = $row['refferel_id'];
			$info["dob"] = $row['dob'];
			$info["select_language"] = $row['select_language'];
            $info["select_plan"] = $row['select_plan'];
			$info["img"] = $row['img'];
			$info["status"] = $row['status'];
			$info["register_date"]=$row['register_date'];
			$info["success_date"]=$row['success_date'];
			if($row['success_date']){
			$endDate=(  date('d-m-Y', strtotime('+180day', strtotime($row['success_date'])))); 
			}else{
			    $endDate="";
			}
		$info["expiry_date"]=$endDate;
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