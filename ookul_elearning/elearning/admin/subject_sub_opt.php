<?php
include"../include/database.php";
$obj=new database();

$subject=$_POST['subject'];

$path1="optional_upload/";
$img=$_FILES['image']['name']; move_uploaded_file($_FILES['image']['tmp_name'],$path1.$img);

// $path2="optional_upload/";
// $banner_image=$_FILES['banner_image']['name']; move_uploaded_file($_FILES['banner_image']['tmp_name'],$path2.$banner_image);
$rs=$obj->insert_subject_optional($subject,$img);
if($rs)
{
	
	header("location:add_subject_opt.php");
	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Success');
          window.location.href='add_subject_opt';
       </script>");
}
else
{
	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Not Success');
          window.location.href='add_subject_opt';
       </script>");

}
?>