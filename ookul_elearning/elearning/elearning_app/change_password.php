<?php 
//session_start();
include"../include/database.php";
$obj=new database();
$info=array();
$response["change_password"] = array();

$user_id=$_POST['user_id'];
$opass=$_POST['opass'];
$npass=$_POST['npass'];
$cpass=$_POST['cpass'];
if($user_id){
if($npass==$cpass)
{
 $fetch=$obj->fetchById($user_id,"user_register_goverment","id");
      $data_pwd=$fetch['password'];
      if($data_pwd==$opass)
        {
			$insert=$obj->updateStatus($user_id,"user_register_goverment","password",$npass,"id");
			
			 $response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Change Password successfully";
			$info["password"] = $npass;
			array_push($response["change_password"], $info);
			echo json_encode($response);

		}
	else
	{
			$response["error"] =true;
			$response["success"] =0;
			$response["msg"] = "Password doesn't Match";
			@array_push($response["change_password"]);
			echo json_encode($response);
	}

}
}else{
    	$response["error"] =true;
			$response["success"] =0;
			$response["msg"] = "password not update";
			@array_push($response["change_password"]);
			echo json_encode($response);
}


?>