<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["history"] = array();
   $user_id=$_POST['user_id'];
$exam_type=$_POST['exam_type'];
if($user_id=='')
{
    
    $response["msg"] = "No record Found";
    $response["error"] =true;
    $response["success"] =0;
    @array_push($response["history"]);
    echo json_encode($response);
}
else
{
    if($exam_type=='')
    {
        $response["msg"] = "No record Found";
    $response["error"] =true;
    $response["success"] =0;
    @array_push($response["history"]);
    echo json_encode($response);
    }
    else
    {
        
    
$yo=0;
 $rs=$obj->fetchDetailByIdByStatus($user_id,"`question_answer_gov`","`user_id`","exam_type",$exam_type); 
        if($rs)
        {
            while($row=mysqli_fetch_assoc($rs))
            { 
               $yo=$yo+1; 
                
            }
        
        }


    if($yo=='0')
    {
        $response["msg"] = "No record Found";
        $response["error"] =true;
        $response["success"] =0;
        @array_push($response["history"]);
        echo json_encode($response);
    }
    else
    {
        $rs=$obj->fetchDetailByIdByStatus($user_id,"`question_answer_gov`","`user_id`","exam_type",$exam_type); 
        if($rs)
        {
        while($row=mysqli_fetch_assoc($rs))
        { 
        $response["error"] =false;
        $response["success"] =1;
        $response["msg"] = "Exam History";
        $info["id"]=$row['id'];
        
        
        $exa=$obj->fetchById($row['exam_type_id'],"gove_exam","id");
        
        if($exa['exam_type']==$exam_type)
        {
        $info["exam_name"]=$exa['exam_name'];
    // if($exa['exam_type']=='1'){
    //         $info["exam_type"]="Practise";
    // }if($exa['exam_type']=='2')
    // {
    //         $info["exam_type"]="Rank";
    // }
//         $myJSON = json_decode($row['question']);
//          //$info["quest"]=$myJSON;
//       //print_r($myJSON);
//         $uu=explode(" ",$myJSON);
//         foreach ($uu as $uu1 => $value) {
//             $info["quest"]=$value;
// }
        
        $info["date"]=$row['date'];
        }

         array_push($response["history"], $info);
        }
       
        echo json_encode($response);
        }
        else
        {
        $response["msg"] = "No record Found";
        $response["error"] =true;
        $response["success"] =0;
        array_push($response["history"]);
        echo json_encode($response);
        }


    
}
}
}
?>