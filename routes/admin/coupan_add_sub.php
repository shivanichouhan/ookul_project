<?php
include"../include/database.php";
$obj=new database();

$web=$obj->fetchByIdTable("website_details");

$address1=$web['address'];
$sphone=$web['phone'];
$semail=$web['email'];
$logo=$web['logo'];
$facebook=$web['facebook'];
$google=$web['google'];
$twitter=$web['twitter'];
$web_name=$web['web_name'];

$title=str_replace("'", "\'",$_POST['title']);
echo $quntity=$_POST['quntity'];
echo "</br>";
echo $code=rand(11111111111111,99999999999999);
echo "</br>";
$totalcoupan=$quntity*$code;
echo $totalcoupan;
die();
$type=str_replace("'", "\'",$_POST['type']);
$discount=str_replace("'", "\'",$_POST['discount']);
$minimum_amount=str_replace("'", "\'",$_POST['minimum_amount']);
$start_date=str_replace("'", "\'",$_POST['start_date']);
$end_date=str_replace("'", "\'",$_POST['end_date']);

$path="upload/";
$img=$_FILES['image']['name'].time(); move_uploaded_file($_FILES['image']['tmp_name'],$path.$img); 

$rs=$obj->insertcoupon($title,$code,$type,$discount,$minimum_amount,$start_date,$end_date,$img);
if($rs)
{

	header("location:coupan_add.php");
}
else
{
	header("location:coupan_add.php");
}
?>