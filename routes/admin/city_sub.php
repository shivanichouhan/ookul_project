<?php
include"../include/database.php";
$obj=new database();


 $city=$_POST['city'];

 

$rs=$obj->insertcity($city);
if($rs)
{
	//$_SESSION['msg']="City Insert Success Full";
	//header("location:city.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('City Insert Success Full');
          window.location.href='city';
       </script>");
}
else
{
//	$_SESSION['msg']="City Not Insert";
	//header("location:city.php");
	
			echo ("<script LANGUAGE='JavaScript'>
          window.alert('City Not Insert');
          window.location.href='city';
       </script>");
}
?>