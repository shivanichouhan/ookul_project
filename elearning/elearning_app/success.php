<?php 

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["success000"] = array();


 $oid=$_POST['oid'];
 
 $status_new=$_POST['plan_status'];
 
 
 
 if($oid=='')
 {
    $response["msg"] = "Payment Request Not Successfull";
    $response["error"] =true;
    $response["success"] =0;
    @array_push($response["success000"]);
    echo json_encode($response);
    
 }
 else
 {
     
    
    $userss=$obj->fetchById($oid,"gov_order","id");
     
    $user_id=$userss['user_id'];
    
    if($userss['status']==1){
        
    $uus=$obj->updatestatus_order_new($oid,$status_new);    
     
    }else{ 
    
    $userss=$obj->updatestatus_con($user_id);
  
    $uus=$obj->updatestatus_order($oid);
    
    }
    
    
    
    $price=$userss['total_price']; 
    
    $inserttt=$obj->insert_order_new($oid,$user_id,$price,$status_new);   
    
     
    $response["error"] =false;
    $response["success"] =1;
    $response["msg"] = "Payment Request successfull";
    
    $info["order_id"]=$oid;
    
    array_push($response["success000"], $info);
    
    echo json_encode($response);
     
}


?>