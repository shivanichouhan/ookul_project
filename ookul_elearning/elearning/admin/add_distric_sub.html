<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$amount=$_POST['amount'];

$distric_id=$_POST['distric_id'];
//$block_supervisor_id=$block_supervisor_id1;

$address=$_POST['address'];

$adhar_no=$_POST['adhar_no'];

 $account_holder_name=$_POST['account_holder_name'];
 $account_number=$_POST['account_number'];
  $ifc_code=$_POST['ifc_code'];
 $branch_name=$_POST['branch_name'];

$path1="upload/";
$img=$_FILES['photo']['name']; move_uploaded_file($_FILES['photo']['tmp_name'],$path1.$img);
$path="upload/";
$img1=$_FILES['document']['name']; move_uploaded_file($_FILES['document']['tmp_name'],$path.$img1);


$rs=$obj->insertdistricholder($name,$email,$password,$mobile,$amount,$distric_id,$address,$adhar_no,$account_holder_name,$account_number,$ifc_code,$branch_name,$img,$img1);
if($rs)
{
	
				
							//$block=$obj->fetchById($r,"`subagent`","id");
				//echo"(";	echo $block['name']; 	echo"),";
				
				$up=$obj->updatedistric($rs,$distric_id);
				if($up)
				{
				echo ("<script LANGUAGE='JavaScript'>
					  window.alert('Assign Block');
					  window.location.href='add_distric_holder';
				   </script>");
				}
				else {
							echo ("<script LANGUAGE='JavaScript'>
						  window.alert('Not Assign Block');
						  window.location.href='add_distric_holder';
					   </script>");
					}
					
				echo ("<script LANGUAGE='JavaScript'>
					  window.alert('Insert Success');
					  window.location.href='add_distric_holder';
				   </script>");
}
else
{
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('Insert Not  Successfull');
          window.location.href='add_distric_holder';
       </script>");
}
?>