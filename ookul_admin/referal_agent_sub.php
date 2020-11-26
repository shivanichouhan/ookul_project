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


$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$amount=$_POST['amount'];
$address=$_POST['address'];
$note=$_POST['note'];
$executive_id1=$_POST['executive_id'];
$executive_id=implode(",",$executive_id1);
//$block=$_POST['block'];
//$block=implode(",",$block);

 $account_holder_name=$_POST['account_holder_name'];
 $account_number=$_POST['account_number'];
  $ifc_code=$_POST['ifc_code'];
 $branch_name=$_POST['branch_name'];

$path1="upload/";
$img2=$_FILES['image']['name']; move_uploaded_file($_FILES['image']['tmp_name'],$path1.$img2);

$path="upload/";
$img1=$_FILES['document']['name']; move_uploaded_file($_FILES['document']['tmp_name'],$path.$img1);


$rs=$obj->referal_add0024($username,$email,$password,$mobile,$amount,$address,$note,$executive_id,$account_holder_name,$account_number,$ifc_code,$branch_name,$img2,$img1);
if($rs)
{
	$u=explode(",",$executive_id);
	
//$u=explode(",",$coupan);
		foreach($u as $uu =>$value)
			{
				$r=$u[$uu];
			
				
							//$block=$obj->fetchById($r,"`subagent`","id");
				//echo"(";	echo $block['name']; 	echo"),";
				
				$up=$obj->updateexequitysuperviser($rs,$r);
				if($up)
				{
				echo ("<script LANGUAGE='JavaScript'>
					  window.alert('Insert Success');
					  window.location.href='referal_agent.php';
				   </script>");
				}
				else {
							echo ("<script LANGUAGE='JavaScript'>
						  window.alert('Insert Not Success');
						  window.location.href='referal_agent.php';
					   </script>");
					}
			}
				echo ("<script LANGUAGE='JavaScript'>
					  window.alert('Insert Success');
					  window.location.href='referal_agent.php';
				   </script>");
}
else
{
	echo ("<script LANGUAGE='JavaScript'>
						  window.alert('Insert Not Success');
						  window.location.href='referal_agent.php';
					   </script>");
}
?>