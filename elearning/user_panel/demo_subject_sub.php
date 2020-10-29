<?php
include"../include/database.php";
$obj=new database();

$class=$_POST['class'];
$subject=$_POST['subject'];



$rs=$obj->insert_demo_subject($class,$subject);
if($rs)
{
//	$_SESSION['msg']=" Insert Success Full";
//	header("location:demo_subject.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='demo_subject';
       </script>");
}
else
{
//	$_SESSION['msg']=" Not Insert";
//	header("location:demo_subject.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='demo_subject';
       </script>");
}
?>