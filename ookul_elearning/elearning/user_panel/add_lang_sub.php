<?php
include"../include/database.php";
$obj=new database();



$language=$_POST['language'];


$rs=$obj->insert_add_language($language);
if($rs)
{

$_SESSION['msg']=" Insert  Success Full";
	header("location:language_list.php");
}
else
{
	$_SESSION['msg']="Insert   Not Success Full";
	header("location:add_language.php");
}



?>