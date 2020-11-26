<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");



		
$id=$_POST['id'];

$coupon=$_POST['coupon'];
$type=$_POST['type'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$amount=$_POST['amount'];

$rs=$obj->update_user_discount_update1_1_007($amount,$coupon,$type,$sdate,$edate,$id);


if($rs)
{
   
            		
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('updated');
          window.location.href='discount_coupon_schl_list';
       </script>");
     
  
}
else
{ 
    	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='discount_coupon_schl_list';
       </script>");
    
}
	
?>