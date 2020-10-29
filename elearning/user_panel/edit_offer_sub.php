<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];
$select_type=$_POST['select_type'];
@$discription=$_POST['discription'];
$path="upload/";
 if($_FILES['image']['name']=="") { @$img=$_POST['limg']; } else { $img=$_FILES['image']['name']; move_uploaded_file($_FILES['image']['tmp_name'],$path.$img); }



$rs=$obj->Update_freeaccessoffer($select_type,$discription,$img,$id);
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