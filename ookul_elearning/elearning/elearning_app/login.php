<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["data_Info"] = array();

$params = (array) json_decode(file_get_contents('php://input'), TRUE);

 $email=$params['email'];
 $password=$params['password'];


if($email){
    
$rs=$obj->login1($email,$password,"register","email","password","status","1");

if($rs)
{
        $response["error"] =false;
        $response["status"] =1;
        $response["msg"] = "Login successfully";
        $info["id"]=$rs['id'];
      
     
         
        @array_push($response["data_Info"],$info);
        echo json_encode($response);

	
}
else
{
		$response["error"] =true;
        $response["status"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["data_Info"]);
        echo json_encode($response);
}	
}else{
   	$response["error"] =true;
        $response["status"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["data_Info"]);
        echo json_encode($response); 
}
?>