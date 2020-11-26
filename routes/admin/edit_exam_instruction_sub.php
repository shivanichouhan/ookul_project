<?php
include"../include/database.php";
$obj=new database();
$id=$_POST['id'];
$exam_type=$_POST['exam_type'];
$title=$_POST['title'];
$description=$_POST['description'];



$rs=$obj->updateexam($exam_type,$title,$description,$id);
if($rs)
{
	//$_SESSION['msg']=" Insert Success Full";
//	header("location:price.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='exam_instruction';
       </script>");
}
else
{
//	$_SESSION['msg']=" Not Insert";
//	header("location:price.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='exam_instruction';
       </script>");
}
?>