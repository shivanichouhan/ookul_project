<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];
$plan_name=$_POST['plan_name'];

$rs=$obj->insert_govplan($plan_name,$id);
if($rs)
{
	$_SESSION['msg']=" Insert Success Full";
	header("location:gov_plan_list.php");
}
else
{
	$_SESSION['msg']=" Not Insert";
	header("location:gov_plan_list.php");
}
?>