<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$response["top5"] = array();
$i=0;
$user=0;
$date=date("Y-m-d");
$rs=$obj->top5("exam_history"); 
if($rs)
{
    while($row=mysqli_fetch_assoc($rs))
    { 
        $i=$i+1;
    }
}

if($i==0)
{
    $response["msg"] = "No record Found";
    $response["error"] =true;
    $response["success"] =0;
    @array_push($response["top5"]);
    echo json_encode($response);
}
else
{ $i=0;
    $rs=$obj->top5("exam_history"); 
    if($rs)
    {
        while($row=mysqli_fetch_assoc($rs))
        { 
           
            $response["error"] =false;
            $response["success"] =1;
            $response["msg"] = "Top 5 List";
           
            
            $us4=$obj->fetchById($row['ins_id'],"question_answer_gov","id");
            $us5=$obj->fetchById($us4['exam_type_id'],"gove_exam","id");
       
    
            if($us5['exam_type']=='1')
            {  $i=$i+1;
                $user=$user+1;
                $info["user_id"]=$row['user_id'];
                $us=$obj->fetchById($row['user_id'],"user_register_goverment","id");
                
                if($us["name"]){
                    $info["name"]= $us["name"];
                }else{
                    $info["name"]="";
                }
                if($us["img"]=='')
                {
                    $info["image"]="";
                }
                else
                {
                $info["image"]= $us["img"];
                }
                $info["rank"]=$i;
                $info["total_obtain"]=$row['total_obtain'];
                $info["persentage"]=$row['persentage'];
                array_push($response["top5"], $info);
            }
            else
            {
                
            }
            //echo $row['user_id'];
          
        
        
        }
    echo json_encode($response);
    }
    else
    {
       $response["msg"] = "No record Found";
        $response["error"] =true;
        $response["success"] =0;
        array_push($response["top5"]);
        echo json_encode($response);
    }

}

?>