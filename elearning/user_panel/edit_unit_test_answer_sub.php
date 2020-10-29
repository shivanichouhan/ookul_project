<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];
$class_id=$_POST['class_id'];

$subject=$_POST['subject'];
//$chapter=$_POST['chapter'];
//$answer=$_POST['answer'];


$path="upload/";
 if($_FILES['answer']['name']=="") { $answer=$_POST['limg']; } else { $answer=$_FILES['answer']['name']; move_uploaded_file($_FILES['answer']['tmp_name'],$path.$answer); }

$rs=$obj->updateunit_test_answer($class_id,$subject,$answer,$id);
if($rs)
{
//	$_SESSION['msg']=" Update Success Full";
//	header("location:unit_answer_list.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='unit_answer_list.php';
       </script>");
}
else
{
//	$_SESSION['msg']=" Not Update";
//	header("location:unit_answer_list.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='unit_answer_list.php';
       </script>");
}
?>