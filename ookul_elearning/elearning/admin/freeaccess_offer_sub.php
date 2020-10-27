<?php
include"../include/database.php";
$obj=new database();


$select_type=$_POST['select_type'];
@$discription=$_POST['discription'];
$path="upload/";
 @$img=$_FILES['image']['name']; move_uploaded_file($_FILES['image']['tmp_name'],$path.$img);


$rs=$obj->freeaccessoffer($select_type,$discription,$img);
if($rs)
{

//$_SESSION['msg']=" Insert  Success Full";
//	header("location:free_offerlist.php");
	
	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='free_offerlist';
       </script>");
}
else
{
//	$_SESSION['msg']="Insert   Not Success Full";
//	header("location:free_offerlist.php");
 echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='free_offerlist';
       </script>");
}



?>