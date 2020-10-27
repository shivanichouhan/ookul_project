<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];
 $category=$_POST['category'];
$subcategory=$_POST['subcategory'];
 

$rs=$obj->updatesubcategoryexamupdate($category,$subcategory,$id);
if($rs)
{
//	$_SESSION['msg']="Block Insert Success Full";
//	header("location:block.php");
		 echo ("<script LANGUAGE='JavaScript'>
          window.alert('added Successfull');
          window.location.href='exam_subcategory_list';
       </script>");
	
	
}
else
{
//	$_SESSION['msg']="Block Not Insert";
//	header("location:block.php");
	
	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('added Not Insert');
          window.location.href='exam_subcategory_list';
       </script>");
}
?>


