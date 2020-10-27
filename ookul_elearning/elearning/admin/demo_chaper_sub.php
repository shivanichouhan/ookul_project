<?php
include"../include/database.php";
$obj=new database();

$class=$_POST['class'];
$subject=$_POST['subject'];
$chapter=$_POST['chapter'];


$rs=$obj->insert_demo_chapter($class,$subject,$chapter);
if($rs)
{
	$_SESSION['msg']=" Insert Success Full";
	header("location:demo_chapter.php");
}
else
{
	$_SESSION['msg']=" Not Insert";
	header("location:demo_chapter.php");
}
?>