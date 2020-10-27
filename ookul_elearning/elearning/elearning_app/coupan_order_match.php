<?php

include_once("../include/database.php");
$obj= new database();

$info=array();
$response["coupan"] = array();

 $user_id=$_POST['user_id'];
 $class_id='0';
 $name=$_POST['name'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $price=$_POST['price'];
 $code=$_POST['code'];

$cod_id=$obj->fetchByIdByStatus($code,"coupan_class","code","class",$class_id);

if($cod_id)
{
    $id=$cod_id['id'];

	$agccww=$obj->fetchDetailById(1,"`asign_coupan`","status");
	
	 if($agccww)
		{	$i=0;
				while($agcc=mysqli_fetch_assoc($agccww))
			{	$i++;
     

	 $u1=explode(",",$agcc['coupan']); 
	
//$u=explode(",",$coupan);
$demo=0;
$sdemo=0;
		foreach($u1 as $uu =>$value)
			{
				 $r=$u1[$uu]; 
		       if($r==$id)
					{
					    $sdemo=1;
    $end_date = $cod_id['end_date'];


 $date= date("Y-m-d"); 

if($end_date >= $date )

{
    
   
 $rs=$obj->fetchDetailByIdByStatus1212($code,"coupan_class","code","status",0); 
    
if($rs)
{
      $sta1=$obj->updateStatuscoupan($rs['id'],"coupan_class","id"); 

  $rs1=$obj->insert_copan000($user_id,$name,$email,$mobile,$price,$code); 
$sta=$obj->updateStatusUsergove000000($user_id);
    
 $sta2=$obj->updateStatuscoupan($rs1['id'],"gov_order","id");
  
//$sta3=$obj->updateStatuscoupanuser00($user_id);

  //$upclass=obj->updateStatuscoupanuser($user_id,"user_register","id","class",$class_id);
$response["error"] =false;

$response["success"] =1;
$response["msg"] = "register coupan Success ";
$info["id"]=$rs1;

array_push($response["coupan"], $info);


echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["coupan"]);
echo json_encode($response);
}
}else{
$response["msg"] = "Coupan Code are expire";
$response["error"] =true;
$response["success"] =0;
@array_push($response["coupan"]);
echo json_encode($response);
}
 }
 else{
     $demo+$demo+0;
 
 }

					
			    
			}
														}
		    
		}else{
		    $response["msg"] = "Coupan Code Not asign";
$response["error"] =true;
$response["success"] =0;
array_push($response["coupan"]);
echo json_encode($response);
														    
														}
														
				



}
else
{
    $response["msg"] = "Coupan Code Invalid";
    $response["error"] =true;
    $response["success"] =0;
    @array_push($response["coupan"]);
    echo json_encode($response);
}


?>