<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];
$potal_code=$_POST['potal_code'];
$delivery_charges=$_POST['delivery_charges'];


$rs=$obj->updatedelivery_charges($potal_code,$delivery_charges,$id);
if($rs)
{
	$_SESSION['msg']="Update Success Full";
	header("location:postal_charge.php");
}
else
{
	$_SESSION['msg']="Not Update";
	header("location:postal_charge.php");
}

?>