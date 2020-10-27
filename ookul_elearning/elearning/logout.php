<?php
include"include/database.php";
 include"include/session.php";
$obj=new database();
session_start();
 
unset($_SESSION['user_id']);

	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Logout Successfull');
          window.location.href='index.php';
       </script>");
?>