<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["data"] = array();

$params = (array) json_decode(file_get_contents('php://input'), TRUE);


$fname=$params['fname'];
$lname=$params['lname'];
$email=$params['email'];
$phone=$params['phone'];
$password=$params['password'];
$cpassword=$params['cpassword'];
$category=$params['category'];
$picture=$params['picture'];
$dob=$params['dob'];
$address=$params['address'];


if($password==$cpassword)
{
$check=$obj->fetchById($email, "register", "email");


if($check['email'])
{
	    $response["error"] =true;
        $response["status"] =0;
        $response["msg"] = "Email Already exists";
        @array_push($response["data"]);
        echo json_encode($response);
}
else
{

 $checkp=$obj->fetchById($phone, "register", "phone");
 
if($checkp['phone'])
{
        $response["error"] =true;
        $response["status"] =0;
        $response["msg"] = "Phone Already exists";
        @array_push($response["data"]);
        echo json_encode($response);
}
else
{


$rs=$obj->userInsert_new($fname,$lname,$email,$phone,$password,$category,$picture,$dob,$address);


if($rs)
{	

 //  $otp=rand(1000,9999);
 //  $ot_txt="Please use OTP ".$otp." to login in indorese.";
 //  $text=urlencode($ot_txt);
 //  $zurl="http://sms.abinfotech.net/api/sendhttp.php?authkey=341501AwGUj15IbI5f5cb122P1&mobiles=".$phone."&message=".$text."&sender=indorese&route=4&country=91";
 //  $data=file_get_contents($zurl);
 //  $rdd=$obj->updateStatus($rs,"register","otp",$otp,"user_id");
   
   
  	    $response["error"] =false;
        $response["status"] =1;
        $response["msg"] = "Login successfully";
        
        $info["id"]=$rs;
        
        $info["fname"]= $fname;
        $info["lname"]= $lname;
        $info["email"] = $email;
        $info["phone"] = $phone;
        $info["password"]= $password;
        $info["category"]= $category;
        $info["picture"] = $picture;
        $info["dob"] = $dob;
        $info["address"] = $address;
        
        
        @array_push($response["data"],$info);
        echo json_encode($response);
}
else
{

	    $response["error"] =true;
        $response["status"] =0;
        $response["msg"] = "Registered not successfully please try again!";
        @array_push($response["data"]);
        echo json_encode($response);
}
}

}
}
else 
{

	    $response["error"] =true;
        $response["status"] =0;
        $response["msg"] = "Password not Match";
        @array_push($response["data"]);
        echo json_encode($response);
}
