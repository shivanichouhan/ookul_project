<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["exam"] = array();
    $examid=$_POST['exam_type_id'];
$yyy=0;
$u=0;


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
        $sub=explode(",",$exa['subject']);
       $each_set_question=$exa['each_set_question'];
    $start_time = $exa['start_time'];    
       $stime;
     
    //  die();
        foreach ($sub as $su1 => $value) 
        {
            
          $sub[$su1];
          $set=explode(",",$each_set_question);
  
       $settotal=$set[$yyy];
       
            $rs=$obj->fetchDetailByIdByStatusexampractis55555($sub[$su1],"`gover_multiple_question`","`subject`","exam_type",2,"exam_type_id",$examid,$settotal);
            if($rs)
            {
            while($row=mysqli_fetch_assoc($rs))
            { 
                $u=$u+1;
            }
            }
            
            $rs=$obj->fetchDetailByIdByStatusexampractis55555($sub[$su1],"`gover_multiple_question`","`subject`","exam_type",2,"exam_type_id",$examid,$settotal); 
            if($rs)
            {
            while($row=mysqli_fetch_assoc($rs))
            { 
                // print_r($row);
    $su=$obj->fetchById($row['subject'],"gov_subject","id");
            
            $response["error"] =false;
            $response["success"] =1;
            $response["msg"] = "Exam Quetion Answer For Practise List";
            $info["id"]=$row['id'];
            $info["type"] = $row['type'];
            $info["each_set_question"]  =$exa['each_set_question'];
            $info["each_set_question"]  =$su['subject'];
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
            else
            {
            $response["msg"] = "No record Found";
            $response["error"] =true;
            $response["success"] =0;
            @array_push($response["exam"]);
            echo json_encode($response);
            }

        
            $yyy=$yyy+1;
        }
     
        if($u=='0')
        {
            
        }
        else
        {
           echo json_encode($response); 
      
        }
        if($u=='0')
        {
             $response["msg"] = "No record Found";
            $response["error"] =true;
            $response["success"] =0;
            @array_push($response["exam"]);
            echo json_encode($response);
        }
    
}
?>