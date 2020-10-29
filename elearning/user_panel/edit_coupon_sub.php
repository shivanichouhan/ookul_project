<?php
include"../include/database.php";
$obj=new database();


$id=$_POST['id'];

$title=str_replace("'", "\'",$_POST['title']);
$code=rand(11111111111111,99999999999999);
$type=str_replace("'", "\'",$_POST['type']);
$discount=str_replace("'", "\'",$_POST['discount']);
$minimum_amount=str_replace("'", "\'",$_POST['minimum_amount']);
$start_date=str_replace("'", "\'",$_POST['start_date']);
$end_date=str_replace("'", "\'",$_POST['end_date']);
$path="upload/";
if($_FILES['image']['name']=="") { $img=$_POST['limg']; } else { $img=$_FILES['image']['name'].time(); move_uploaded_file($_FILES['image']['tmp_name'],$path.$img); }

$rs=$obj->updatecoupon($title,$code,$type,$discount,$minimum_amount,$start_date,$end_date,$img,$id);
if($rs)
{
	header("location:coupan_list.php");
}
else
{
	header("location:coupan_list.php");
}
?>