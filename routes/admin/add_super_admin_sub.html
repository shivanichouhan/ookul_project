<?php
include"../include/database.php";
$obj=new database();


$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$digination=$_POST['digination'];
$password=$_POST['password'];
@$class=$_POST['class'];
@$subject=$_POST['subject'];

$path1="upload/";
$image=$_FILES['image']['name']; move_uploaded_file($_FILES['image']['tmp_name'],$path1.$image);
$check=$obj->fetchById($email,"`super_admin`", "email");
if($check['email'])
{
	$_SESSION['msg']=" Email All Ready Register";
	header("location:add_super_admin.php");

}
else{
$rs=$obj->insertsuperadmin($name,$email,$phone,$digination,$password,$class,$subject,$image);
if($rs)
{
	$_SESSION['msg']=" Insert Success Full";
	header("location:add_super_admin.php");
}
else
{
	$_SESSION['msg']=" Not Insert";
	header("location:add_super_admin.php");
}	
}
?>