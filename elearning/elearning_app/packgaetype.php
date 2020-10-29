<?php
include"../include/database.php";
$obj=new database();
$info=array();

 $response["subscribe_type"] = array();

 
 $user_id=$_POST['user_id'];

 
$rs=$obj->fetchAllDetailByIdByStatus_subscribtion($user_id, "gov_order","user_id","status","1");
 

$paystatus=$rs['partial_pay_status'];

if($rs){

if($paystatus==0)
{
 
$info['partial_pay_status']=1;
     

$response["msg"] = "Full Package Details";
$response["error"] =false;
$response["success"] =1;

@array_push($response["subscribe_type"], $info);
echo json_encode($response);

}elseif($paystatus==1){
 
$info['partial_pay_status']=0;
     

$response["msg"] = "Partial Package Details";
$response["error"] =false;
$response["success"] =1;

@array_push($response["subscribe_type"], $info);
echo json_encode($response);

}else{

$info['partial_pay_status']=5;    

$response["msg"] = "Package Free Access";
$response["error"] =false;
$response["success"] =1;

@array_push($response["subscribe_type"], $info);
echo json_encode($response);  
    
}
}else{
 
 
$info['partial_pay_status']=5;  
 
$response["msg"] = "Package Free Access";
$response["error"] =false;
$response["success"] =1;

@array_push($response["subscribe_type"], $info);
echo json_encode($response);  
   
    
    
}



?>