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

 $block_supervisor_id1=$_POST['block_supervisor_id'];
$block_supervisor_id=implode(",",$block_supervisor_id1);
 $address=$_POST['address'];

// $expriy_date=$_POST['expriy_date'];

 $adhar_no=$_POST['adhar_no'];
  $account_holder_name=$_POST['account_holder_name'];
 $account_number=$_POST['account_number'];
  $ifc_code=$_POST['ifc_code'];
 $branch_name=$_POST['branch_name'];


$path1="upload/";
 if($_FILES['document']['name']=="") { $img1=$_POST['limg1']; } else { $img1=$_FILES['document']['name']; move_uploaded_file($_FILES['document']['tmp_name'],$path1.$img1); }

$path="upload/";
 if($_FILES['photo']['name']=="") { $img=$_POST['limg']; } else { $img=$_FILES['photo']['name']; move_uploaded_file($_FILES['photo']['tmp_name'],$path.$img); }


$rs=$obj->update_agent0024($name,$email,$password,$mobile,$amount,$block_supervisor_id,$address,$adhar_no,$account_holder_name,$account_number,$ifc_code,$branch_name,$img1,$img,$id);
if($rs)
{
		
	$up=$obj->updateblocksuperviser($rs,$r);
				if($up)
				{
				echo ("<script LANGUAGE='JavaScript'>
					  window.alert('Update Assign Block');
					  window.location.href='add_agent';
				   </script>");
				}
				else {
							echo ("<script LANGUAGE='JavaScript'>
						  window.alert('Not Update Assign Block');
						  window.location.href='add_agent';
					   </script>");
					}
			
}
else
{
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Update Not Successfull');
          window.location.href='agent_list';
       </script>");
}
?>