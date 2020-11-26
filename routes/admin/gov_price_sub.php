<?php
include"../include/database.php";
$obj=new database();

$plan_id=$_POST['plan_id'];
$price=$_POST['price'];
$gst=$_POST['gst'];


$rs=$obj->insertgovprice($plan_id,$price,$gst);
if($rs)
{
	$_SESSION['msg']=" Insert Success Full";
	header("location:gover_plan_list.php");
}
else
{
	$_SESSION['msg']=" Not Insert";
	header("location:gover_plan.php");
}
?>