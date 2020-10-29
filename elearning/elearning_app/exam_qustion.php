<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["exam"] = array();

   $examid=$_POST['exam_type_id'];
   
   $exam_type=$_POST['exam_type'];

if($examid=='')
{
    
    $response["msg"] = "No record Found";
    $response["error"] =true;
    $response["success"] =0;
    @array_push($response["exam"]);
    echo json_encode($response);
    
}
else
{
   
        
            $exa=$obj->fetchById($examid,"gove_exam","id");
    
            $rs=$obj->fetchDetailById($examid,"`gover_multiple_question`","`exam_type_id`"); 
            
            if($rs)
            {
            while($row=mysqli_fetch_assoc($rs))
            { 
                
            $response["error"] =false;
            $response["success"] =1;
            $response["msg"] = "Exam Question Answer For Practice List";
            
            $info["id"]=$row['id'];
            $info["type"] = $row['type'];
            $info["each_set_question"]  =$exa['each_set_question'];
            $info["each_set_question"]  =$row['subject'];
            $info["question"] = $row['question'];
            $info["option1"] = $row['option1'];
            $info["option2"] = $row['option2'];
            $info["option3"] = $row['option3'];
            $info["option4"] = $row['option4'];
            $info["option4"] = $row['option4'];
            $info["solution"] = $row['solution'];
            $info["question_image"] = $row['question_image'];
            $info["option_img1"] = $row['option_img1'];
            $info["option_img12"] = $row['option_img12'];
            $info["option_img3"] = $row['option_img3'];
            $info["option_img4"] = $row['option_img4'];
            $info["solution1"] = $row['solution1'];
            array_push($response["exam"], $info);
             
            }
           
           
            }
          
           echo json_encode($response);        
    }

?>