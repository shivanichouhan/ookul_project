<?php
include"../include/database.php"; 
$obj= new database();

 $coupan1=$_POST['coupan'];
 $pro_id=$_POST['pro_id'];
 $agent_id=$_POST['agent_id'];
  $coupan=implode(",",$coupan1); 
  if($pro_id==""){
      $_SESSION['msg']="Please Enter Pro Id";
     header("location:asign_user_list"); 
  }else{
  $check=$obj->fetchById($pro_id,"pro_register","pro_id");
  if($check){
  
$rs=$obj->add_pro_coupan($pro_id,$agent_id,$coupan);
if($rs)
{
    $ex=explode(",",$coupan); 
    foreach($ex as $x => $y)
    {   
        $coupan_id=$ex[$x]; 
     $rs77=$obj->update_coupan_pro($coupan_id);   
    }
    $_SESSION['msg']="Coupan Assign Successfully";
header("location:asign_user_list");
    
}else{
    header("location:asign_user_list");
}
}else{
   $_SESSION['msg']="Please Enter valid Pro Id";
     header("location:asign_user_list");  
}
}
?>