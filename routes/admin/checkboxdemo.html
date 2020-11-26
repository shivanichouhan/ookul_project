<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");

$admin_id=$_SESSION['admin_id'];
$oo=$obj->fetchBYId($admin_id,"admin","id");
$phone=$oo['phone'];
 $coupan1=$_POST['coupan'];
   $coupan=implode(",",$coupan1);

  $agent_type=$_POST['agent_type'];

  $agent=$_POST['agent'];


$rs=$obj->coupan_asign12($coupan,$agent,$agent_type);
if($rs)
{
    if($agent_type=='2')
    {
            $i2=$obj->fetchById($agent,"pro_register","id");
    		$agent0=$i2['name'];
    		//$block11=$i2['block_id'];
    		//$block2=$obj->fetchById($i2['block_id'],"block","id");
    		$pro_id=$i2['pro_id'];
    
    	$otp=rand(1111,9999);
    
    	$ot_txt="One Time verification code " .$otp. " for assign PRO  name  " .$agent0. " and PRO Id ".$pro_id;
    		$text=urlencode($ot_txt);
     	$zurl="http://2sms.in/api/sendhttp.php?authkey=240201AdTisMa1iO5baf6912&mobiles=".$phone."&message=".$text."&sender=bongos&route=4&country=91";
     
     $data=file_get_contents($zurl);
    
    
    	$co4=$obj->coupanotp($admin_id,$rs,$otp);
    
    	$_SESSION['msg']=" Verify check mobile";
        header("location:otpasin.php");
    }
    if($agent_type=='1')
    {
    
        	$i2=$obj->fetchById($agent,"subagent","id");
        	$agent0=$i2['name'];
        	//$block11=$i2['block_id'];
        	$block2=$obj->fetchById($i2['block_id'],"block","id");
        	$block=$block2['block'];
        
        $otp=rand(1111,9999);
        
        $ot_txt="One Time verification code " .$otp. " for assign Block Supervisor name  " .$agent0. " and Block name ".$block;
        	$text=urlencode($ot_txt);
         $zurl="http://2sms.in/api/sendhttp.php?authkey=240201AdTisMa1iO5baf6912&mobiles=".$phone."&message=".$text."&sender=bongos&route=4&country=91";
        
        $data=file_get_contents($zurl);
        
        
        
        $co4=$obj->coupanotp($admin_id,$rs,$otp);
        
        $_SESSION['msg']=" Verify check mobile";
        header("location:otpasin.php");
    }
    else
    {
        $_SESSION['msg']="Verify check mobile";
	header("location:otpasin.php");
    }
}
else
{
	$_SESSION['msg']="Insert   Not Success Full";
	header("location:relasedcoupan.php");
}
?>