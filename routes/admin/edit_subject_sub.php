<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];

$class=$_POST['class'];
$subject=$_POST['subject'];



$path2="upload/";

 if($_FILES['icon1']['name']=="") { $icon1=$_POST['limg1']; 
 } else { $icon1=$_FILES['icon1']['name']; move_uploaded_file($_FILES['icon1']['tmp_name'],$path2.$icon1); }

  if($_FILES['images']['name']=="") { $images=$_POST['limg2']; 
 } else { $images=$_FILES['images']['name']; move_uploaded_file($_FILES['images']['tmp_name'],$path2.$images); }


$rs=$obj->update_subject($icon1,$images,$class,$subject,$id);

if($rs)
{
//	$_SESSION['msg']=" Update Success Full";
	//header("location:subject_list.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='subject_list.php';
       </script>");
}
else
{
	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='subject_list.php';
       </script>");
}
?>