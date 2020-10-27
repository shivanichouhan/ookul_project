<?php
include"../include/database.php";
$obj=new database();
$info=array();

 $response["ask_me"] = array();


 $subject=$_POST['subject'];
 $user_id=$_POST['user_id'];
 $descp=$_POST['descp'];
 $image=$_POST['image'];
 
 $date=date('Y-m-d');
 
 $rs=$obj->insert_ask_me_details($subject,$user_id,$descp,$image,$date);
 

 

if($rs)
{
	    

$info["user_id"]=$user_id;

$info["price"] =$amount;

$info["gst"] =$gst;
		
$info['order_id']=$order_id;

$info["total"] =$amount_total;

     

$response["msg"] = "Pay";
$response["error"] =false;
$response["success"] =1;

@array_push($response["ask_me"], $info);
echo json_encode($response);

}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;

@array_push($response["ask_me"]);
echo json_encode($response);
}

?>