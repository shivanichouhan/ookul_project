<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];
$gst=$_POST['gst'];
$class=$_POST['class'];
$price=$_POST['price'];


$rs=$obj->update_price($gst,$class,$price,$id);
if($rs)
{
	$_SESSION['msg']=" Update Success Full";
	header("location:price_list.php");
}
else
{
	$_SESSION['msg']=" Not Update";
	header("location:price_list.php");
}
?>