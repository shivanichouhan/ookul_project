<?php
include"../include/database.php";
$obj=new database();

   $id=$_GET['id'];

  $mac=base64_decode($_GET['mac']);
  $mac1='';



$rs=$obj->updatemac001($mac1,$id);
if($rs)
{
	$_SESSION['msg']=" Releas SuccessFull";
	header("location:goverment_user_list.php");
}
else
{
	$_SESSION['msg']="Not Update";
	header("location:goverment_user_list.php");
}

?>