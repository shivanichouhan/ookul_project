<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");

$id=$_POST['id'];
$exam_title=$_POST['title'];
$exam_name=$_POST['category'];
$content=$_POST['content'];

$rs=$obj->update_einstructions($exam_title,$exam_name,$content,$id);

if($rs)
{
	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Insert success');
          window.location.href='einstruction_list.php';
       </script>");
}
else
{
	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Not insert');
          window.location.href='einstruction_list.php';
       </script>");
}



?>