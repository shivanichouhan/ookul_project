<?php
include"include/database.php";
$obj=new database();

$id=$_POST['id'];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$district=$_POST['district'];
$subject=$_POST['subject'];
$address=$_POST['address'];
$path="admin/upload/";
 if($_FILES['image']['name']=="") { $img=$_POST['limg']; } else { $img=$_FILES['image']['name']; move_uploaded_file($_FILES['image']['tmp_name'],$path.$img); }



$rs=$obj->updateprofile_front($fname,$lname,$phone,$email,$img,$country,$state,$city,$district,$subject,$address,$id);
if($rs)
{
	$_SESSION['msg']="Profile Update Success Full";
	header("location:u_account.php");
}
else
{
	$_SESSION['msg']="Profile  Not Update";
	header("location:u_account.php");
}
?>