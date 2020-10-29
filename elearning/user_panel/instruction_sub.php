<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");


$exam_title=$_POST['title'];
$exam_name=$_POST['category'];
$content=$_POST['content'];

$rs=$obj->insert_einstructions($exam_title,$exam_name,$content);

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
          window.location.href='instruction.php';
       </script>");
}



?>