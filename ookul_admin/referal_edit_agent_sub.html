<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");


  $id=$_POST['id'];

 $username=$_POST['username'];

 $email=$_POST['email'];

 $password=$_POST['password'];

 $mobile=$_POST['mobile'];
$amount=$_POST['amount'];
 $address=$_POST['address'];

 $note=$_POST['note'];

$executive_id1=$_POST['executive_id'];
$executive_id=implode(",",$executive_id1);
//$block1=$_POST['block'];
//$block=implode(",",$block1);
$path="upload/";
 if($_FILES['image']['name']=="") { $img=$_POST['limg']; } else { $img=$_FILES['image']['name']; move_uploaded_file($_FILES['image']['tmp_name'],$path.$img); }

$path1="upload/";
 if($_FILES['document']['name']=="") { $img1=$_POST['limg1']; } else { $img1=$_FILES['document']['name']; move_uploaded_file($_FILES['document']['tmp_name'],$path1.$img1); }
$executive_id1=$_POST['executive_id1'];

if($executive_id1==$executive_id)
{
	$rs=$obj->update_refferal_agent($username,$email,$password,$mobile,$amount,$address,$note,$executive_id,$img,$img1,$id);
	if($rs)
	{	
	$u=explode(",",$executive_id);
	
//$u=explode(",",$coupan);
		foreach($u as $uu =>$value)
			{
				$r=$u[$uu];
				$up=$obj->updateexequitysuperviser($rs,$r);
					if($up)
					{
					echo ("<script LANGUAGE='JavaScript'>
						  window.alert('Update Assign Block');
						  window.location.href='add_agent.php';
					   </script>");
					}
					else {
								echo ("<script LANGUAGE='JavaScript'>
							  window.alert('Not Update Assign Block');
							  window.location.href='add_agent.php';
						   </script>");
						}
		}
					
	}
	else
	{
		echo ("<script LANGUAGE='JavaScript'>
						  window.alert('Update Success');
						  window.location.href='add_agent.php';
					   </script>");
	}
}
else
{
	$rs=$obj->update_refferal_agent($username,$email,$password,$mobile,$amount,$address,$note,$executive_id,$img,$img1,$id);
//	update_refferal_agent($username,$email,$password,$mobile,$amount,$address,$note,$executive_id,$img1,$id)
if($rs)
{	
$u=explode(",",$executive_id1);
	
//$u=explode(",",$coupan);
		foreach($u as $uu =>$value)
			{
				$r=$u[$uu];
			
				$test=$obj->updat22222($rs,$r);
			}
			$u=explode(",",$executive_id);
	
	//$u=explode(",",$coupan);
		foreach($u as $uu =>$value)
			{
				$r=$u[$uu];
				$up=$obj->updateexequitysuperviser($rs,$r);
				if($up)
				{
				echo ("<script LANGUAGE='JavaScript'>
					  window.alert('Update Assign Block');
					  window.location.href='add_agent.php';
				   </script>");
				}
				else {
							echo ("<script LANGUAGE='JavaScript'>
						  window.alert('Not Update Assign Block');
						  window.location.href='add_agent.php';
					   </script>");
					}
			}


}
else
{
	echo ("<script LANGUAGE='JavaScript'>
					  window.alert('Update Success');
					  window.location.href='add_agent.php';
				   </script>");
}
}
?>