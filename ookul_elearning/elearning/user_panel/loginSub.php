<?php
include"../include/database.php";
$obj=new database();

 $user_name=$_POST['user_name'];

  $password=$_POST['password'];

 $rs=$obj->login($user_name,$password,"register","email","password","status","1");
if($rs)
{
	
	 $_SESSION['admin_id']=$rs['id'];
	 
	 $dateaa=date("d-m-Y h:i:sa");
     $rsss=$obj->login_insert(1,$rs['id'],$dateaa);
     
     
     echo ("<script LANGUAGE='JavaScript'>
          window.alert('Login Succesfully ');
          window.location.href='dashboard.php';
       </script>");
     
//	header("location:deshabord");
	
//	$_SESSION['msg']="Login Success Full";
}
else
{
 echo ("<script LANGUAGE='JavaScript'>
          window.alert('try again');
          window.location.href='index.php';
       </script>");
}	


?>