<?php
include"../include/database.php";
$obj=new database();

         @$id=$_POST['id'];
     @$title=$_POST['title'];
   
    @$discription=$_POST['discription'];

   @$date=$_POST['date'];

     $path="upload/";
    $img=$_FILES['photo']['name']; move_uploaded_file($_FILES['photo']['tmp_name'],$path.$img);
  
  
  $path1="upload/";
   $video=$_FILES['video']['name']; move_uploaded_file($_FILES['video']['tmp_name'],$path1.$video);


$rs=$obj->updatelatest_update($title,$discription,$date,$video,$img,$id);
if($rs)
{
	//$_SESSION['msg']=" update Success Full";
//	header("location:latest_update_list.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='latest_update_list';
       </script>");
}
else
{
	//$_SESSION['msg']=" Not update";
	//header("location:latest_update_list.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='latest_update_list';
       </script>");
}
?>