<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");


$subject=$_POST['subject'];
$title=$_POST['title'];


$path2="gov_upload/";
$document=$_FILES['document']['name']; move_uploaded_file($_FILES['document']['tmp_name'],$path2.$document);


//$path="upload/";
//=$_FILES['video']['name']; move_uploaded_file($_FILES['doucment']['video'],$path.$video);


$rs=$obj->fa_ebook_ins($subject,$title,$document);

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