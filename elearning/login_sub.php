<?php
include"include/database.php";
$obj=new database();

  $user_name=$_POST['user_name'];

  $password=$_POST['password'];

 $rs=$obj->login($user_name,$password,"register","email","password","status","1");
 $rs78=$obj->login($user_name,$password,"register","phone","password","status","1");
if($rs)
{
	$_SESSION['user_id']=$rs['id']; 
	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Login Succesfully ');
          window.location.href='index.php';
       </script>");
}
else if($rs78){
$_SESSION['user_id']=$rs78['id']; 
	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Login Succesfully ');
          window.location.href='index.php';
       </script>");	
}
else
{
 echo ("<script LANGUAGE='JavaScript'>
          window.alert('try again');
          window.location.href='index.php';
       </script>");
}	


?>