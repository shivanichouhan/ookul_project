<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["discount"] = array();

 $code=$_POST['code'];
 $user_id=$_POST['user_id'];
 $amount=$_POST['amount'];
 $order_id=$_POST['order_id'];
 
 $rs12=$obj->fetchById($order_id,"school_order","id");
 
 $amount=$rs12['total_price'];
 
$date=date('Y-m-d');
if($code){
    $add=0;
$rs=$obj->fetchById($code,"school_discount_code","random");

if($rs)
	{
	    
	    $ex=explode(",",$rs['user']); 
	    
    foreach($ex as $x => $y)
    {
		   if($ex[$x]==$user_id){
		       
		   if($rs['date']<=$date && $date<=$rs['expirydate'] ){ 
		       $add=$add+1;
	 	    
	 	    if($rs['flat_id']==1){
		    $price=$amount-$rs['amount'];
		    $diss=$rs['amount'];
		    $dis_price=$rs['amount'];
		    }
		    else
		    {
		    
		    $price78=$amount/100;
		    $price785=$price78*$rs['amount'];
		    $price=$amount-$price785;
		    $diss=$price785;
		    	$dis_price=$price785;
		}
			
		
			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Discount Price";
			$info["id"] =$rs['id'];
			
			$info["user_id"]=$user_id;
			$info["discount"]=$diss;
			$info["price"] =$price;
			
		$rs=$obj->update_order_discount_school($amount,$dis_price,$code,$price,$order_id);	
		
		$info['order_id']=$order_id;
		array_push($response["discount"], $info);
		echo json_encode($response);
        }
		    
		}
        
    }
	    if($add==0){
$response["msg"] = "Invalid Promo Code";
$response["error"] =true;
$response["success"] =0;
@array_push($response["discount"]);
echo json_encode($response);
	    }
	}

else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["discount"]);
echo json_encode($response);
}
    
    
}
else{
    $response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["discount"]);
echo json_encode($response);
}
?>