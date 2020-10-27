<?php
include"../include/database.php";
$obj=new database();

$days=$_POST['days'];
$subject=$_POST['subject'];

$uu=$obj->fetchByIdByStatus($days,"assign_subject","days","subject",$subject);
if($uu)
{
    $_SESSION["mag"]="Subject All Rady Exit this day";
    header("location:day_wise_subject.php");
}
else
{ 
$rs=$obj->insert_subject_daywise($days,$subject);
if($rs)
{
	
	header("location:day_wise_subject.php");
}
else
{
	
	header("location:day_wise_subject.php");
}
}
?>