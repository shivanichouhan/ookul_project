<?php
include"../include/database.php";
$obj=new database();
$info=array();

$response["expire"] = array();

$user_id=$_POST['user_id'];

//$day=$_POST['day'];
//$rs=$obj->fetchByIdByStatus($user_id, "gov_order","user_id","status","1");
 
$rs=$obj->fetchAllDetailByIdByStatus_subscribtion($user_id, "gov_order","user_id","status","1");

if($rs['partial_pay_status']=="1"){

$user=$obj->fetchByIdByStatus($user_id,"user_register_goverment","id","pstatus",1);

$date1 = $user['success_date']; 
$date2 = date('d-m-Y');

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff)/ (60*60*24));

if($days >=   731)
    {
        $response["msg"] = "Your Plan Expired!! ";
        $response["error"] =false;
    	$response["success"] =0;
    	
    	
        $test=$obj->updateStatus($user_id,"user_register_goverment","pstatus",0,"id");
        
        @array_push($response["expire"]);
        echo json_encode($response);
    }
    else
    {
        $response["msg"] = "Account Activate";
        $response["error"] =true;
        $response["success"] =1;
        
        
        
        @array_push($response["expire"]);
        echo json_encode($response);
    }
    
}else{
    
$user=$obj->fetchByIdByStatus($user_id,"user_register_goverment","id","pstatus",1);


$date1 = $user['success_date']; 
$date2 = date('d-m-Y');
$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff)/ (60*60*24));

if($days >=   731)
    {
        $response["msg"] = "Your Plan Expired!! ";
        $response["error"] =false;
    	$response["success"] =0;
    	
    	
    	
        $test=$obj->updateStatus($user_id,"user_register_goverment","pstatus",0,"id");
        
        @array_push($response["expire"]);
        echo json_encode($response);
    }
    else
    {
        
        $response["msg"] = "Account Activate";
        $response["error"] =true;
        $response["success"] =1;
        
        
        @array_push($response["expire"]);
        
        echo json_encode($response);
    }    
    
}    
    
    
?>    
    