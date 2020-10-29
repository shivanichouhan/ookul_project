<?php
include"../include/database.php";
$obj=new database();
$info=array();

 $response["subscribe"] = array();

 
 $user_id=$_POST['user_id'];

 
 
 $rs=$obj->fetchAllDetailByIdByStatus_subscribtion($user_id, "gov_order","user_id","status","1");
 
 
 
if($rs)
{
	    
if($rs['partial_pay_status']=="1"){

 $subsdate=$rs['order_date'];
 
 $partial_payment_status=$rs['partial_pay_status'];
 
 $fourmonths=date("d-m-Y", strtotime("+24 months", strtotime($subsdate)));

if($rs['coupan_code']){
    
$paymenttype="Coupon Payment";

}else{

$paymenttype="Online Payment";
    
}    


$info["partial_payment_status"]=$partial_payment_status;

$info["user_id"]=$user_id;

$info["order_date"] =$subsdate;

$info["fourmonths"] =$fourmonths;

$info["paymenttype"] =$paymenttype;
     

$response["msg"] = "Details";
$response["error"] =false;
$response["success"] =1;

@array_push($response["subscribe"], $info);
echo json_encode($response);

}else{
    

$subsdate=$rs['order_date'];
 
$partial_payment_status=$rs['partial_pay_status'];
 
$fourmonths=date("d-m-Y", strtotime("+24 months", strtotime($subsdate)));

if($rs['coupan_code']){
    
$paymenttype="Coupon Payment";

}else{

$paymenttype="Online Payment";
    
}  


$info["partial_payment_status"]=$partial_payment_status;

$info["user_id"]=$user_id;

$info["order_date"] =$subsdate;

$info["fourmonths"] =$fourmonths;

$info["paymenttype"] =$paymenttype;
     

$response["msg"] = "Details";
$response["error"] =false;
$response["success"] =1;

@array_push($response["subscribe"], $info);
echo json_encode($response);  
    

    
}


}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;

@array_push($response["subscribe"]);
echo json_encode($response);
}

?>