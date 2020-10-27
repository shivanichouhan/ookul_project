<?php
include"../include/database.php";
$obj=new database();


//$state_id=$_POST['state_id'];
$id=$_POST['id'];
$school=$_POST['school'];
$city=$_POST['city'];
$block=$_POST['block'];


$rs=$obj->update_school($school,$city,$block,$id);
if($rs)
{
	$_SESSION['msg']=" update Success Full";
	header("location:add_school.php");
}
else
{
	$_SESSION['msg']=" Not Insert";
	header("location:add_school.php");
}
?>