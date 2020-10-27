<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];
$category=$_POST['category'];


$rs=$obj->updateexamupdarecategory($category,$id);
if($rs)
{
	$_SESSION['msg']=" Insert Success Full";
	header("location:exam_category_list.php");
}
else
{
	$_SESSION['msg']=" Not Insert";
	header("location:exam_category_list.php");
}
?>