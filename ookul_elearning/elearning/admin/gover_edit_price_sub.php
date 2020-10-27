<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];
$plan_id=$_POST['plan_id'];
$price=$_POST['price'];
$gst=$_POST['gst'];

$rs=$obj->update_price_plan($plan_id,$price,$gst,$id);
if($rs)
{
	$_SESSION['msg']=" Update Success Full";
	header("location:gover_plan_list.php");
}
else
{
	$_SESSION['msg']=" Not Update";
	header("location:gover_plan_list.php");
}
?>