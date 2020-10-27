<?php
include"../include/database.php";
$obj=new database();


 $category=$_POST['category'];
$subcategory=$_POST['subcategory'];
 

$rs=$obj->insertsubcategoryexamupdate($category,$subcategory);
if($rs)
{
//	$_SESSION['msg']="Block Insert Success Full";
//	header("location:block.php");
		 echo ("<script LANGUAGE='JavaScript'>
          window.alert('added Successfull');
          window.location.href='exam_update_subcategory';
       </script>");
	
	
}
else
{
//	$_SESSION['msg']="Block Not Insert";
//	header("location:block.php");
	
	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('added Not Insert');
          window.location.href='exam_update_subcategory';
       </script>");
}
?>