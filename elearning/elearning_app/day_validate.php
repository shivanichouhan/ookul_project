<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

    $response["day_check"] = array();
    
    $user_id=$_POST['user_id'];
    
    $day=$_POST['day'];


    $user=$obj->fetchByIdByStatus($user_id,"user_register_goverment","id","pstatus",1);


    $user['success_date'];
    
    $days2;

    $now = time(); // or your date as well
    
    $your_date = strtotime($user['success_date']);
    
    $datediff = $now - $your_date;

    $da=round($datediff / (60 * 60 * 24));

    $da;
    
    $oo=$obj->fetchById($da,"days","days");
    
    $days44=$oo['id'];
    
    $days2=$oo['days'];





if($day<=$days2)
    {

$response["error"] =false;
        $response["success"] =1;
        $response["msg"] = "Day Check";
       for($i=1; $i<$days44; $i++)
       {
             $info['id']=$i;
            
             $info['status']=1;
        
              @array_push($response["day_check"],$info);
              
       }
        echo json_encode($response);
    
       
}
else 
{
    
        $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No Record Found";
        @array_push($response["day_check"]);
        echo json_encode($response);
}

    
?>