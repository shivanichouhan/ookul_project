<?php
include"../include/database.php";
$obj=new database();



$id=$_POST['id'];
$class_id=$_POST['class_id'];
$subject=$_POST['subject'];
$chapter=$_POST['chapter'];
$topic=$_POST['topic'];
 $question=$_POST['question'];
 $answer=$_POST['answer'];


$rs=$obj->updatequestiontruefalse($class_id,$subject,$chapter,$topic,$question,$answer,$id);
if($rs)
{
//	$_SESSION['msg']="Insert Success Full";
//	header("location:question_tru_false.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='question_tru_false.php';
       </script>");
}
else
{
	//$_SESSION['msg']=" Not Insert";
//	header("location:question_tru_false.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='question_tru_false.php';
       </script>");
}
?>