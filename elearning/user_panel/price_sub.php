<?php
include"../include/database.php";
$obj=new database();

$class=$_POST['class'];
$price=$_POST['price'];
$gst=$_POST['gst'];
$nprice=$_POST['nprice'];
$ngst=$_POST['ngst'];


$rs=$obj->insertprice($class,$price,$gst,$nprice,$ngst);
if($rs)
{
	//$_SESSION['msg']=" Insert Success Full";
//	header("location:price.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='price.php';
       </script>");
}
else
{
//	$_SESSION['msg']=" Not Insert";
//	header("location:price.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='price.php';
       </script>");
}
?>