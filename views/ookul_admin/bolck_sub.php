<?php
include"../include/database.php";
$obj=new database();


 $city=$_POST['city'];
$block=$_POST['block'];
 

$rs=$obj->insertblock($city,$block);
if($rs)
{
//	$_SESSION['msg']="Block Insert Success Full";
//	header("location:block.php");
		 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Logout Successfull');
          window.location.href='block';
       </script>");
	
	
}
else
{
//	$_SESSION['msg']="Block Not Insert";
//	header("location:block.php");
	
	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Block Not Insert');
          window.location.href='block';
       </script>");
}
?>