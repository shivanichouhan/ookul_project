<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");


   $id=$_POST['id'];

 $name=$_POST['name'];

 $email=$_POST['email'];

 $password=$_POST['password'];

 $mobile=$_POST['mobile'];
 
 $amount=$_POST['amount'];


 $city_id=$_POST['city_id'];

  $block_id=$_POST['block_id'];

 $address=$_POST['address'];

 $adhar_no=$_POST['adhar_no'];
  $block_id1=$_POST['block_id1'];
  
   $account_holder_name=$_POST['account_holder_name'];
 $account_number=$_POST['account_number'];
  $ifc_code=$_POST['ifc_code'];
 $branch_name=$_POST['branch_name'];


$path1="upload/";
 if($_FILES['document']['name']=="") { $img1=$_POST['limg1']; } else { $img1=$_FILES['document']['name']; move_uploaded_file($_FILES['document']['tmp_name'],$path1.$img1); }

$path="upload/";
 if($_FILES['photo']['name']=="") { $img=$_POST['limg']; } else { $img=$_FILES['photo']['name']; move_uploaded_file($_FILES['photo']['tmp_name'],$path.$img); }

if($block_id1=$block_id)
	{

			$rs=$obj->update_sub_agent0021($name,$email,$password,$mobile,$amount,$city_id,$block_id,$address,$adhar_no,$account_holder_name,$account_number,$ifc_code,$branch_name,$img1,$img,$id);
					if($rs)
					{
									echo ("<script LANGUAGE='JavaScript'>
										  window.alert('Update Success');
										  window.location.href='subagent_list.php';
									   </script>");

					}
					else
					{
						echo ("<script LANGUAGE='JavaScript'>
							  window.alert('Update Not Successfull');
							  window.location.href='subagent_list.php';
						   </script>");
					}
 
	} 
	else { 
 
			$rs=$obj->update_sub_agent0021($name,$email,$password,$mobile,$amount,$city_id,$block_id,$address,$adhar_no,$img1,$img,$id);
 
			$up1=$obj->updateasignblock($block_id1);
				$up=$obj->asignblock($block_id);
					if($rs)
					{
									echo ("<script LANGUAGE='JavaScript'>
										  window.alert('Update Success');
										  window.location.href='subagent_list.php';
									   </script>");

					}
					else
					{
						echo ("<script LANGUAGE='JavaScript'>
							  window.alert('Update Not Successfull');
							  window.location.href='subagent_list.php';
						   </script>");
					}
}
?>