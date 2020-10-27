<?php
include"include/database.php";
$obj=new database();
  $email=$_GET["email"];
 
	$row1=$obj->updateStatus($email, "user_register", "status",1,"email");
	 $_SESSION['msg']="Welcome Dear ".ucwords($row['name']);
	header("location:../index.php");
 ?>