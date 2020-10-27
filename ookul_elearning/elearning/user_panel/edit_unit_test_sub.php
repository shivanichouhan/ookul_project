<?php
include"../include/database.php";
$obj=new database();

 $id=$_POST['id']; 
$class_id=$_POST['class_id'];

$subject=$_POST['subject'];
//$chapter=$_POST['chapter'];
//$question=$_POST['question'];

$path="upload/";
 if($_FILES['question']['name']=="") { $question=$_POST['limg']; } else { $question=$_FILES['question']['name']; move_uploaded_file($_FILES['question']['tmp_name'],$path.$question); }


$rs=$obj->updateunit_test($class_id,$subject,$question,$id);
if($rs)
{
//	$_SESSION['msg']=" Update Success Full";
//	header("location:unit_question_list.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='unit_question_list.php';
       </script>");
}
else
{
//	$_SESSION['msg']=" Not Update";
	//header("location:unit_question_list.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='unit_question_list.php';
       </script>");
}
?>