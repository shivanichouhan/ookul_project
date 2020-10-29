<?php 
//session_start();
include"../include/database.php";

$obj=new database();

$info=array();
$response["class_order_success"] = array();

$web=$obj->fetchByIdTable("website_details");


 $id=$_POST['order_id'];
 $pay_status=1;
 $user_id=$_POST['user_id'];
 
 $order=$obj->fetchById($id,"gov_order","id");
 
 $email=$order['email'];
 


$r=$obj->updateStatus($id,"gov_order","status",$pay_status,"id");


if($r)
{
$response["error"]=false;
$response["success"] =1;
$response["msg"] = "Successfull Registration";

 $order=$obj->fetchById($id,"gov_order","id");
 
 //$sta=$obj->updateStatusUser1000($order['user_id'],"user_register","id","payment_type",1);
 //$sta=$obj->updateStatusUser1000($user_id,"user_register","id","payment_type",1);
 //---------todayyyyyyyyyy-------------03-02-2019-------------
 
 $sta=$obj->updateStatusUsergove($user_id,"user_register_goverment","id",$order['success_date']);
 
 $info["id"]=$order['id'];
 $info["name"]=$order['name'];

$info["email"]=$order['email'];
$info["mobile"]=$order['mobile'];
$info["user_id"]=$order['user_id'];	
$info["success_date"]=$order['success_date'];



array_push($response["class_order_success"], $info);
echo json_encode($response);
}
else
{
$response["msg"] = "Not Submitted Sucssesfully";
$response["error"] =true;
$response["success"] =0;
array_push($response["class_order_success"], $info);
echo json_encode($response);
}

?>
