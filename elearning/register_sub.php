<?php
include"include/database.php";
$obj=new database();
$info=array();
$response["data"] = array();



$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
if($password==$cpassword)
{
$check=$obj->fetchById($email, "register", "email");


if($check['email'])
{
	   echo ("<script LANGUAGE='JavaScript'>
          window.alert('Email already exist ,try again');
          window.location.href='index.php';
       </script>");
}
else
{

 $checkp=$obj->fetchById($phone, "register", "phone");
 
if($checkp['phone'])
{
        echo ("<script LANGUAGE='JavaScript'>
          window.alert('phone already exist ,try again');
          window.location.href='index.php';
       </script>");
}
else
{


$rs=$obj->userInsert_web($fname,$lname,$email,$phone,$password);


if($rs)
{	
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Register successfully');
          window.location.href='index.php';
       </script>");
 
}
else
{

	   
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('Registered not successfully please try again!');
          window.location.href='index.php';
       </script>");
}
}

}
}
else 
{

		
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('Password not Match');
          window.location.href='index.php';
       </script>");
}
