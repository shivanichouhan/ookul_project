<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");


$heading=$_POST['heading'];
$contant=$_POST['contant'];

$path="upload/";
$img=$_FILES['video']['name']; move_uploaded_file($_FILES['video']['tmp_name'],$path.$img);

$rs=$obj->insertfrontcontant($heading,$contant,$img);
if($rs)
{
	
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Succesfully Insert');
          window.location.href='demo_video';
       </script>");

}
else
{

	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Insert user  Not Success Full');
          window.location.href='demo_video';
       </script>");
}
?>