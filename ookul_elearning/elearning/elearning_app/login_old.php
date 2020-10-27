<?php 
//session_start();
include"../include/database.php";
$obj=new database();
$info=array();
$response["mobile_Info"] = array();

 $mobile=$_POST['mobile'];
 $password=$_POST['password'];
 $mac=$_POST['mac'];
 $fcm_token=$_POST['fcm_token'];

 $mak=$obj->fetchByIdByStatus(1,"user_register_goverment","status","mobile",$mobile); 
if($mak){
	
	
	
	$mac1=$mak['mac'];
if($mac1=='')
{
	
	$ma=$obj->fetchById($mobile,"user_register_goverment","mobile");
	$newmac=$obj->mac_update00000($mac,$fcm_token,$mobile);
//	$exp1=$obj->fetchById($class,"class","class");
	
	$response["error"] =false;
$response["success"] =1;
$response["msg"] = "success";
$response["msg"] = "Update MAC Adress";

$info["id"]=$ma['id'];
$info["name"]=$ma['name'];
$info["email"]=$ma['email'];
$info["mobile"]=$ma['mobile'];
//$info["expriy_date"]=$exp1['expiry_date'];
$info["city_id"]=$ma['city_id'];
$info["block"]=$ma['block'];
// $info["address"]=$ma['address'];
// $info["gender"]=$ma['gender'];
$info["dob"]=$ma['dob'];
//$info["password"]=$ma['password'];

$info["refferel_id"]=$ma['refferel_id'];
$info["img"]=$ma['img'];
$info["mac"]=$ma['mac'];
$info["fcm_token"]=$ma['fcm_token'];
$info["status"]=$ma['status'];
$info["pstatus"]=$ma['pstatus'];

$info["register_date"]=$ma['register_date'];
$info["success_date"]=$ma['success_date'];

@array_push($response["mobile_Info"], $info);
echo json_encode($response);

}
else
{
$ifc12=$obj->ifc_update000($fcm_token,$mobile);

$check=$obj->loginuser($mobile,$password,"user_register_goverment","mobile","password","mac",$mac,"status","1");
if($check)
{
	//$exp=$obj->fetchById($check['class'],"class","id");
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Success";

$info["id"]=$check['id'];
$info["name"]=$check['name'];
$info["email"]=$check['email'];
$info["mobile"]=$check['mobile'];
//$info["expriy_date"]=$exp1['expiry_date'];
$info["city_id"]=$check['city_id'];
$info["block"]=$check['block'];
// $info["address"]=$ma['address'];
// $info["gender"]=$ma['gender'];
$info["dob"]=$check['dob'];
//$info["password"]=$ma['password'];

$info["refferel_id"]=$check['refferel_id'];
$info["img"]=$check['img'];
$info["mac"]=$check['mac'];
$info["fcm_token"]=$check['fcm_token'];
$info["status"]=$check['status'];
$info["pstatus"]=$check['pstatus'];

$info["register_date"]=$check['register_date'];
$info["success_date"]=$check['success_date'];

@array_push($response["mobile_Info"], $info);
echo json_encode($response);
}

else
{
	
$response["error"] =true;
$response["success"] =0;
$response["msg"] = "This mobile all ready exit another mobile number";
@array_push($response["mobile_Info"]);
echo json_encode($response);

}
}
}
else
{
	
$response["error"] =true;
$response["success"] =0;
$response["msg"] = "Please Confirm your paymet";

// $mak=$obj->fetchByIdByStatus(1,"user_register","pstatus","mobile",$mobile); 
 $mak20=$obj->fetchByIdByStatus(0,"user_register_goverment","status","mobile",$mobile); 
  $mobile12=$mak20['mobile'];
  $password12=$mak20['password'];
 $id=$mak20['id'];
if($mak20=='')
{
$response["error"] =true;
$response["success"] =0;
$response["msg"] = "Mobile Number & Password Dos't  Match";
@array_push($response["mobile_Info"]);
echo json_encode($response);	
}
else
{
$mak=$mak20['mac'];
if($mak==$mac)
{
$info["id"]=$mak20['id'];
$info["name"]=$mak20['name'];
$info["email"]=$mak20['email'];
$info["mobile"]=$mak20['mobile'];
//$info["expriy_date"]=$exp1['expiry_date'];
$info["city_id"]=$mak20['city_id'];
$info["block"]=$mak20['block'];
// $info["address"]=$ma['address'];
// $info["gender"]=$ma['gender'];
$info["dob"]=$mak20['dob'];
//$info["password"]=$ma['password'];

$info["refferel_id"]=$mak20['refferel_id'];
$info["img"]=$mak20['img'];
$info["mac"]=$mak20['mac'];
$info["fcm_token"]=$mak20['fcm_token'];
$info["status"]=$mak20['status'];
$info["pstatus"]=$mak20['pstatus'];

$info["register_date"]=$mak20['register_date'];
$info["success_date"]=$mak20['success_date'];
@array_push($response["mobile_Info"], $info);
echo json_encode($response);
}
else
{
		
$response["error"] =true;
$response["success"] =0;
$response["msg"] = "Mobile Number & Password Dos't  Match";
@array_push($response["mobile_Info"]);
echo json_encode($response);
	
}
}
}
?>