<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");

$address1=$web['address'];
$sphone=$web['phone'];
$semail=$web['email'];
$logo=$web['logo'];
$facebook=$web['facebook'];
$google=$web['google'];
$twitter=$web['twitter'];
$web_name=$web['web_name'];
$email_admin=$web['email'];


$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$expriy_date=$_POST['expriy_date'];
$city=$_POST['city'];
$block=$_POST['block'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];

$class=$_POST['class'];
$school=$_POST['school'];
$path1="upload/";
$img=$_FILES['photo']['name']; move_uploaded_file($_FILES['photo']['tmp_name'],$path1.$img);


 $check=$obj->fetchById($mobile,"`user_register`", "mobile");
if($check['mobile'])
{
	 echo "<script>
alert('Mobile Already Exist');
window.location.href='add_user.php';
</script>"; 
	
}
else
{
$rs=$obj->insertuser($name,$email,$mobile,$password,$expriy_date,$city,$block,$address,$gender,$dob,$class,$school,$img);
if($rs)
{
    
   
	 echo ("<script LANGUAGE='JavaScript'>
          window.alert();
          window.location.href='add_user.php';
       </script>");
	
//	$_SESSION['msg']=" Insert  User Success Full";
//	header("location:add_user.php");
}
else
{
	//$_SESSION['msg']="Insert user  Not Success Full";
//	header("location:add_user.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Not Insert ');
          window.location.href='add_user.php';
       </script>");
}
 echo "<script>
alert('Register not Successfull ');
window.location.href='add_user.php';
</script>";
}
?>
