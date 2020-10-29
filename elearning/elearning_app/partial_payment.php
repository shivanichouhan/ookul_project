<?php
include"../include/database.php";
$obj=new database();
$info=array();

 $response["partial_pay"] = array();

 $partial_pay_status=1;
 $user_id=$_POST['user_id'];
 $order_id=$_POST['order_id'];
 
 
 $rs=$obj->fetchById($order_id,"gov_order","id");
 
 $amount1=$rs['total_price'];
 
 $plan_id=$rs['plan_id'];
 
 
 $rssssss=$obj->fetchById($plan_id,"goverment_plan","plan_id");
 
 $gst=$rssssss['partial_gst'];
 
 $amount=$rssssss['partial_payment'];
 
 
 
 $fullplanTitle=$rssssss['fullplan_ttitle'];
 $Fulldesc=$rssssss['fullplan_desc'];
 $PartialTitle=$rssssss['partial_title'];
 $partialdesc=$rssssss['partial_desc'];
 
 

 $date=date('Y-m-d');


if($rs)
{
	    

$info["user_id"]=$user_id;

$info["price"] =$amount;

$info["gst"] =$gst;



$amount_total=$gst+$amount;
			
$rs=$obj->update_order_discount_new_007($amount_total,$order_id,$partial_pay_status);	
		
$info['order_id']=$order_id;
$info["total"] =$amount_total;

 $info['fullplan_ttitle']=$fullplanTitle;
 $info['fullplan_desc']=$Fulldesc;
 $info['partial_title']=$PartialTitle;
 $info['partial_desc']=$partialdesc;
     

$response["msg"] = "Pay";
$response["error"] =false;
$response["success"] =1;

@array_push($response["partial_pay"], $info);
echo json_encode($response);


}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;

@array_push($response["partial_pay"]);
echo json_encode($response);
}

?>