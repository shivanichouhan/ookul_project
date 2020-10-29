<?php
include"../include/database.php";
$obj=new database();


$subject=$_POST['subject'];
$topic=$_POST['topic'];

$rs=$obj->fa_subjectwisetopic($subject,$topic);
if($rs)
{
    	echo ("<script LANGUAGE='JavaScript'>
          window.alert('insert succes fully');
          window.location.href='fa_topic';
       </script>");
}
else
{
    	echo ("<script LANGUAGE='JavaScript'>
          window.alert('insert not succes fully');
          window.location.href='fa_topic';
       </script>");
}
?>