<?php
include"../include/database.php";
$obj=new database();

$class_id=$_POST['class_id'];

$subject=$_POST['subject'];
//$chapter=$_POST['chapter'];
//$question=$_POST['question'];
$path="upload/";
$question=$_FILES['question']['name']; move_uploaded_file($_FILES['question']['tmp_name'],$path.$question);



$rs=$obj->insert_unit_test($class_id,$subject,$question);
if($rs)
{
//	$_SESSION['msg']=" Insert Success Full";
	//header("location:unit_question.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='unit_question.php';
       </script>");
}
else
{
//	$_SESSION['msg']=" Not Insert";
//	header("location:unit_question.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='unit_question.php';
       </script>");
}
?>