<?php

include_once("../include/database.php");
$obj= new database();

$info=array();
$response["order"] = array();

 $user_id=$_POST['user_id'];
 
 $us444=$obj->fetchById($user_id,"user_register_goverment","id");

 $select_plan=$us444['select_plan'];
 
  $us=$obj->fetchById($select_plan,"goverment_plan","plan_id");
 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $price1=$us['price'];
 $gst=$us['gst'];
 
 
 $fullplanTitle=$us['fullplan_ttitle'];
 $Fulldesc=$us['fullplan_desc'];
 $PartialTitle=$us['partial_title'];
 $partialdesc=$us['partial_desc'];
 
 
$price= $price1+$gst;
$total_price=$price;


 if($user_id=='')
 {
    $response["msg"] = "Enter User Id ";
    $response["error"] =true;
    $response["success"] =0;
    array_push($response["order"]);
    echo json_encode($response);
 }
 else
 {
     
     
  $check=$obj->fetchById($user_id,"gov_order","user_id");  
  
  
     
  if($check){
    
    $order_id=$check['id'];  
      
  $rs=$obj->update_order_gov($name,$email,$mobile,$price,$select_plan,$user_id,$total_price);
  
  if($order_id)
  {
    $response["error"] =false;
    $response["success"] =1;
    $response["msg"] = "Payment Request success";
    
    $info["order_id"]=$order_id;
    
    $us=$obj->fetchById($order_id,"gov_order","id");
    
    $info["user_id"]=$us['user_id'];
    $info["price"]=$price1;
    $info["gst"]=$gst;
    
     $info["total"]=$us['price'];
     $info["name"]=$us['name'];
     $info["email"]=$us['email'];
     $info["mobile"]=$us['mobile'];
     
     
 $info['fullplan_ttitle']=$fullplanTitle;
 $info['fullplan_desc']=$Fulldesc;
 $info['partial_title']=$PartialTitle;
 $info['partial_desc']=$partialdesc;
     
     
     array_push($response["order"], $info);
    
     echo json_encode($response);
      
  }
  else
  {
    $response["msg"] = "Paymnet Request Not Success";
    $response["error"] =true;
    $response["success"] =0;
    array_push($response["order"]);
    echo json_encode($response);
  } 
  
  
  
  }else{
   
   
      
  $rs=$obj->insert_order_gov($name,$email,$mobile,$price,$select_plan,$user_id,$total_price);
  if($rs)
  {
    $response["error"] =false;
    $response["success"] =1;
    $response["msg"] = "Payment Request success";
    
    $info["order_id"]=$rs;
    $us=$obj->fetchById($rs,"gov_order","id");
    
    $info["user_id"]=$us['user_id'];
    $info["price"]=$price1;
    $info["gst"]=$gst;
    
     $info["total"]=$us['price'];
     $info["name"]=$us['name'];
     $info["email"]=$us['email'];
     $info["mobile"]=$us['mobile'];
     
 $info['fullplan_ttitle']=$fullplanTitle;
 $info['fullplan_desc']=$Fulldesc;
 $info['partial_title']=$PartialTitle;
 $info['partial_desc']=$partialdesc;
     
     
     array_push($response["order"], $info);
    
    echo json_encode($response);
      
  }
  else
  {
    $response["msg"] = "Paymnet Request Not Success";
    $response["error"] =true;
    $response["success"] =0;
    array_push($response["order"]);
    echo json_encode($response);
  }
  
  }
  
  
  
 }
 ?>