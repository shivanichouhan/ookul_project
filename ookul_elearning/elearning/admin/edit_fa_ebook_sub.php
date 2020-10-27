<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");

$id=$_POST['id'];
$subject=$_POST['subject'];
$title=$_POST['title'];


//$path2="gov_upload/";
//$document=$_FILES['document']['name']; move_uploaded_file($_FILES['document']['tmp_name'],$path2.$document);

$path="gov_upload/";

 if($_FILES['document']['name']=="") { $document=$_POST['limg']; } else { $document=$_FILES['document']['name']; move_uploaded_file($_FILES['document']['tmp_name'],$path.$document); }



$rs=$obj->edit_fa_ebook_ins($subject,$title,$document,$id);

if($rs)
{
	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Insert success');
          window.location.href='fa_ebook.php';
       </script>");
}
else
{
	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Not insert');
          window.location.href='fa_ebook.php';
       </script>");
}



?>