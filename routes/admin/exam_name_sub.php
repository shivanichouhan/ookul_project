<?php
include"../include/database.php";
$obj=new database();


$category=$_POST['category'];
$duration=$_POST['duration'];

 $subject1=$_POST['subject_id'];
 $subject=implode(",",$subject1);

$type=$_POST['type'];
$package=$_POST['package'];
$question_no=$_POST['question_no'];
$total_marks=$_POST['total_marks'];
$marks_per_quest=$_POST['marks_per_quest'];
$negative_marking=$_POST['negative_marking'];
$live_duration=$_POST['live_duration'];



$datess=date_create($_POST['dateofexam']);
$dateofexam=date_format($datess,"d/m/Y");

$edatess=date_create($_POST['edate']);
$edate=date_format($edatess,"d/m/Y");


$stime=$_POST['stime'];
$etime=$_POST['etime'];
$contant=$_POST['contant'];



$path1="upload/";
$img=$_FILES['imagess']['name']; move_uploaded_file($_FILES['imagess']['tmp_name'],$path1.$img);





$rs=$obj->insert_exam_007($subject,$category,$duration,$type,$package,$question_no,$total_marks,$marks_per_quest,$negative_marking,$live_duration,$dateofexam,$edate,$stime,$etime,$contant,$img);
if($rs)
{
	$_SESSION['msg']=" Insert SuccessFully";
	header("location:exam_name.php");
}
else
{
	$_SESSION['msg']=" Not Insert";
	header("location:exam_name.php");
}
?>