<?php
include"../include/database.php";
$obj=new database();

 $id=$_POST['id'];
 $subject=$_POST['subject'];

$path="optional_upload/";

 if($_FILES['image']['name']=="") { $img=$_POST['limg']; } else { $img=$_FILES['image']['name']; move_uploaded_file($_FILES['image']['tmp_name'],$path.$img); }
$rs=$obj->update_subject_opt($subject,$img,$id);
if($rs)
{

	  	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Update Success');
          window.location.href='optional_subject_list';
       </script>");
}
else
{
	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Not Update Success');
          window.location.href='optional_subject_list';
       </script>");
	
}
?>