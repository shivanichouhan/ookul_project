<?php
include"../include/database.php";
$obj=new database();

$class_id=$_POST['class_id'];

$subject=$_POST['subject'];
//$chapter=$_POST['chapter'];
//$answer=$_POST['answer'];

$path="upload/";
$answer=$_FILES['answer']['name']; move_uploaded_file($_FILES['answer']['tmp_name'],$path.$answer);


$rs=$obj->insert_unit_test_answer($class_id,$subject,$answer);
if($rs)
{
	//$_SESSION['msg']=" Insert Success Full";
//	header("location:unit_answer.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='unit_answer.php';
       </script>");
}
else
{
	//$_SESSION['msg']=" Not Insert";
	//header("location:unit_answer.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='unit_answer.php';
       </script>");
}
?>