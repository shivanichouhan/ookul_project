<?php 
//session_start();
include"../include/database.php";
$obj=new database();
$info=array();
$response["contactus"] = array();

 $user_id=$_POST['user_id'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $title=$_POST['title'];
 $contant=$_POST['contant'];



$rs=$obj->inser_contact_us001($user_id,$email,$mobile,$title,$contant);

if($rs)
{
$_SESSION['user_id']=$rs;
$response["error"]=false;
$response["success"] =1;
$response["msg"] = "contactus";
$info["id"] = $_SESSION['user_id'];

$row=$obj->fetchById($_SESSION['user_id'],"gover_contact_us","id");
$info["user_id"] = $row['user_id'];


if($row['email']=="")
{
    $info["email"]="";
}
else
{
    $info["email"]=$row['email'];
}

if($row['mobile']=="")
{
    $info["mobile"]="";
}
else
{
    $info["mobile"]=$row['mobile'];
}

if($row['title']=="")
{
    $info["title"]="";
}
else
{
    $info["title"]=$row['title'];
}

if($row['contant']=="")
{
    $info["contant"]="";
}
else
{
    $info["contant"]=$row['contant'];
}
//$info["email"] = $row['email'];
//$info["mobile"] = $row['mobile'];
//$info["title"] = $row['title'];
//$info["contant"] = $row['contant'];



$response["msg"] = " Submitted Sucssesfully";

array_push($response["contactus"], $info);
echo json_encode($response);
}
else
{
$response["msg"] = "Not Submitted Sucssesfully";
$response["error"] =true;
$response["success"] =0;
array_push($response["contactus"], $info);
echo json_encode($response);
}

?>