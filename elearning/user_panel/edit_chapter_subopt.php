<?php
include"../include/database.php";
$obj=new database();

 $id=$_POST['id'];

 $chapter=$_POST['chapter'];
 $subject=$_POST['subject'];


$path="optional_upload/";

 if($_FILES['image']['name']=="") { $img=$_POST['limg']; } else { $img=$_FILES['image']['name']; move_uploaded_file($_FILES['image']['tmp_name'],$path.$img); }



$rs=$obj->update_chapter_opt($subject,$chapter,$img,$id);
if($rs)
{
//	$_SESSION['msg']=" Update Success Full";
	//header("location:subject_list.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='chapter_list';
       </script>");
}
else
{
	//$_SESSION['msg']=" Not Update";
//	header("location:subject_list.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='chapter_list';
       </script>");
}
?>