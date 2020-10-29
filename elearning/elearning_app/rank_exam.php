<?php

include_once("../include/database.php");
$obj= new database();


$info=array();
$response["exam"] = array();
$examid=$_POST['exam_type_id'];

$user_id=$_POST['user_id'];
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
    if($user_id=='')
    {
        $response["msg"] = "No record Found";
        $response["error"] =true;
        $response["success"] =0;
        @array_push($response["exam"]);
        echo json_encode($response);
    }
    else
    {

            $rs=$obj->fetchDetailByIdByStatus00test(2,"`gover_multiple_question`","`exam_type`","exam_type_id",$examid);
            if($rs)
            {
            while($row=mysqli_fetch_assoc($rs))
            { 
                $u=$u+1;
            }
            }
            
            $rs=$obj->fetchDetailByIdByStatus00test(2,"`gover_multiple_question`","`exam_type`","exam_type_id",$examid); 
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
            //$info["each_set_question"]  =$exa['each_set_question'];
           // $info["each_set_question"]  =$su['subject'];
            if($row['question']=='0')
            {
                $info["question"] = "";
            }
            else
            {
            $info["question"] = stripslashes($row['question']);
            }
             if($row['option1']=='0')
            {
                $info["option1"] ="";
            }
            else
            {
            $info["option1"] = stripslashes($row['option1']);
            }
            if($row['option2']=='0')
            {
                $info["option2"] = "";
            }
            else
            {
            $info["option2"] = stripslashes($row['option2']);
            }
            if($row['option3']=='0')
            {
                 $info["option3"] ="";
            }
            else
            {
            $info["option3"] = stripslashes($row['option3']);
            }
            if($row['option4']=='0')
            {
            $info["option4"] = "";
            }
            else
            {
            $info["option4"] = stripslashes($row['option4']);
            }
            if($row['solution']=='0')
            {
                $info["solution"] ="";
            }
            else
            {
            $info["solution"] = stripslashes($row['solution']);
            }
        //     $info["question_image"] = $row['question_image'];
        //     $info["option_img1"] = $row['option_img1'];
        //     $info["option_img12"] = $row['option_img12'];
        //     $info["option_img3"] = $row['option_img3'];
        //     $info["option_img4"] = $row['option_img4'];
        //   $info["solution1"] = $row['solution1'];
         if($row['question_image']=='0')
            {
                $info["question_image"] = "";
            }
            else
            {
                $info["question_image"] = $row['question_image'];
            }
            if($row['option_img1']=='0')
            {
                $info["option_img1"]="";
            }
            else
            {
            $info["option_img1"] = $row['option_img1'];
            }
            if($row['option_img12']=='0')
            {
            $info["option_img12"] = "";
            }
            else
            {
                 $info["option_img12"] = $row['option_img12'];
            }
            if($row['option_img3']=='0')
            {
                $info["option_img3"] = "";
            }
            else
            {
                $info["option_img3"] = $row['option_img3'];
            }
            if($row['option_img4']=='0')
            {
                $info["option_img4"] ="";
            }
            else
            {
            $info["option_img4"] = $row['option_img4'];
            }
            if($row['solution1']=='0')
            {
                 $info["solution1"] ="";
            }
            else
            {
          $info["solution1"] = $row['solution1'];
            }
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
        
          
     // }
     
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
    
}
?>