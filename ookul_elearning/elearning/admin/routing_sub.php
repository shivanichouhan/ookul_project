<?php
include"../include/database.php";
$obj=new database();


// $plan=$_POST['plan'];
// $level=$_POST['level'];
$app_type=$_POST['app_type'];
$day=$_POST['day'];
$description=$_POST['description'];

// $us=$obj->fetchById($day,"routine","day");
// if($us)
// {
//     	$_SESSION['msg']=" This day all rady assign";
// 	header("location:routing.php");
// }
// else
// {
$rs=$obj->insert_routing($day,$description,$app_type);
if($rs)
{
	$_SESSION['msg']=" Insert Success Full";
	header("location:routing.php");
}
else
{
	$_SESSION['msg']=" Not Insert";
	header("location:routing.php");
	
}
//}
?>