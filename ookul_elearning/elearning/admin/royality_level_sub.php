<?php
include"../include/database.php";
$obj=new database();


$level=$_POST['level'];
$price=$_POST['price'];

$rs=$obj->ins_level($level,$price);
if($rs)
{
	$_SESSION['msg']=" Insert Success Full";
	header("location:royal_level.php");
}
else
{
	$_SESSION['msg']=" Not Insert";
	header("location:royal_add.php");
	
}
?>