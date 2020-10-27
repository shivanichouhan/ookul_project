<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];
$city=$_POST['city'];
$block=$_POST['block'];


$rs=$obj->updateblock($city,$block,$id);
if($rs)
{
	//$_SESSION['msg']=" Update Success Full";
//	header("location:block_list.php");
	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='block_list';
       </script>");
	
}
else
{
//	$_SESSION['msg']="Update Not Insert";
//	header("location:block_list.php");
		 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Update Not Insert');
          window.location.href='block_list';
       </script>");
	
}
?>