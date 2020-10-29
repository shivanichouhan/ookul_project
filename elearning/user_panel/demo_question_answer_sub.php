<?php
include"../include/database.php";
$obj=new database();


$class_id=$_POST['class_id'];

$subject=$_POST['subject'];
$chapter=$_POST['chapter'];

$answer=$_POST['answer'];


$rs=$obj->insertanswer_demo($class_id,$subject,$chapter,$answer);
if($rs)
{
//	$_SESSION['msg']=" Update Success Full";
//	header("location:demo_test_list.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='demo_test_list';
       </script>");
}
else
{
//	$_SESSION['msg']=" Not Update";
	//header("location:demo_test_list.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='demo_test_list';
       </script>");
}
?>