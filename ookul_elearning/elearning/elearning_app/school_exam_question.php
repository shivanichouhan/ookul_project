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
   			$exam_cal=0;
    		$rs7=$obj->fetchDetailByIdByStatus00($examid,"question_answer_school","exam_type_id","user_id",$user_id);
    		if($rs7)
            {
            while($row7=mysqli_fetch_assoc($rs7))
            { 
            $exam_cal=$exam_cal+1;
            }
            }
           
    		$exa=$obj->fetchById($examid,"school_exam","id");
			
        	$sub=explode(",",$exa['subject']);
       		$each_set_question=$exa['each_set_question'];
       
    		$start_time = $exa['start_time'];    
       		$stime;
     	
        	foreach ($sub as $su1 => $value) 
        	{
            
          	$sub[$su1];
          	$set=explode(",",$each_set_question);
  
       		$settotal=$set[$yyy];
       
       		$demo=$exam_cal*$settotal; 
       
            $rs=$obj->fetchDetailByIdByStatusexampractis55555($sub[$su1],"`school_multiple_question`","`subject`","exam_type",1,"exam_type_id",$examid,$settotal,$demo);
            if($rs)
            {
            while($row=mysqli_fetch_assoc($rs))
            { 
                $u=$u+1;
            }
            }
            
            $rs=$obj->fetchDetailByIdByStatusexampractis55555($sub[$su1],"`school_multiple_question`","`subject`","exam_type",1,"exam_type_id",$examid,$settotal,$demo); 
            if($rs)
            {
            while($row=mysqli_fetch_assoc($rs))
            { 
            // print_r($row);
    		$su=$obj->fetchById($row['subject'],"subject","id");
            
            $response["error"] =false;
            $response["success"] =1;
            $response["msg"] = "Exam Quetion Answer For School List";
            
			$info["id"]=$row['id'];
            $info["type"] = $row['type'];
            $info["each_set_question"]  =$exa['each_set_question'];
            $info["each_set_question"]  =$su['subject'];
            
			$info["question"] = stripslashes($row['question']);
            $info["option1"] = stripslashes($row['option1']);
            $info["option2"] = stripslashes($row['option2']);
            $info["option3"] = stripslashes($row['option3']);
            $info["option4"] = stripslashes($row['option4']);
            $info["option4"] = stripslashes($row['option4']);
            $info["solution"] = stripslashes($row['solution']);
            
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
    
}
?>