<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["dhistory"] = array();
    $id=$_POST['id'];
$right789=0;
$rong=0;
$r=0;
$blank=0;
$user_id;
$exam_date;
 $rs=$obj->fetchDetailById($id,"`fa_p_answer`","`id`"); 
        if($rs)
        {
        while($row=mysqli_fetch_assoc($rs))
        { 
        $someArray = json_decode($row['question'], true);
        $amswerArray = json_decode($row['answer'], true);
 
        foreach($someArray as $u => $value)
        
        {  
        //     foreach($amswerArray as $u1 => $value)
        // {
            
             $rs=$obj->fetchDetailById($someArray[$u],"`fa_multiple_question`","`id`"); 
                    if($rs)
                    {
                        
                        while($row1=mysqli_fetch_assoc($rs))
                        {  $response["error"] =false;
                                $response["success"] =1;
                                $response["msg"] = "Exam Details";
                                 $info["i"]=$r;
                                
                                $info["id"]=$row['id'];
                                $info["user_id"]=$row['user_id'];   
                             $info["question"]=$row1['question'];
                             if($amswerArray[$r]=='1')
                             {
                             $info["your_answer"]=$row1['option1'];
                             }
                              if($amswerArray[$r]=='2')
                             {
                             $info["your_answer"]=$row1['option2'];
                             }
                              if($amswerArray[$r]=='3')
                             {
                             $info["your_answer"]=$row1['option3'];
                             }
                              if($amswerArray[$r]=='4')
                             {
                             $info["your_answer"]=$row1['option4'];
                             }
                             
                             if($row1['answer']=='1')
                             {
                             $info["right_answer"]=$row1['option1'];
                             }
                             if($row1['answer']=='2')
                             {
                             $info["right_answer"]=$row1['option2'];
                             }
                             if($row1['answer']=='3')
                             {
                             $info["right_answer"]=$row1['option3'];
                             }
                             if($row1['answer']=='4')
                             {
                             $info["right_answer"]=$row1['option4'];
                             }
                             //---------------
                              $info["question_image"]=$row1['question_image'];
                               if($amswerArray[$r]=='1')
                             {
                             $info["your_answerimg"]=$row1['option_img1'];
                             }
                              if($amswerArray[$r]=='2')
                             {
                             $info["your_answerimg"]=$row1['option_img12'];
                             }
                              if($amswerArray[$r]=='3')
                             {
                             $info["your_answerimg"]=$row1['option_img3'];
                             }
                              if($amswerArray[$r]=='4')
                             {
                             $info["your_answerimg"]=$row1['option_img4'];
                             }
                             
                              if($row1['answer']=='1')
                             {
                             $info["right_answerimg"]=$row1['option_img1'];
                             }
                             if($row1['answer']=='2')
                             {
                             $info["right_answerimg"]=$row1['option_img12'];
                             }
                             if($row1['answer']=='3')
                             {
                             $info["right_answerimg"]=$row1['option_img3'];
                             }
                             if($row1['answer']=='4')
                             {
                             $info["right_answerimg"]=$row1['option_img4'];
                             }
                              $info["solution1"]= $row1['solution1'];
                              $user_ans=$amswerArray[$r];
                              if($user_ans==0)
                              {
                                  $blank=$blank+1;
                                  $info["answer_status"]="";
                              }
                             if($row1['answer']==$user_ans)
                             {
                               
                                  $right789=$right789+1;
                                 $info["answer_status"]= "right";
                             }
                             else
                             {
                                 if($user_ans==" "){
                                 $info["answer_status"]= "skipped";
                                 }
                                 else
                                 {
                                     
                                  $rong=$rong+1;
                                  $info["answer_status"]= "rong";    
                                 }
                             }
                              $info["solution"]= $row1['solution'];
                        }
                       $exam_date= $row['date'];
                        $response["exam_date"]=$row['date'];
                         $response["exam_time"]=$row['time'];
                         if($ex44['exam_type']=='1')
                    {
                        $response["exam_type"]="Practise";
                    }
                    else
                    {
                         $response["exam_type"]="Rank";
                    }
                        $response["total_right"]=$right789;
                         $response["total_rong"]=$rong;
                          array_push($response["dhistory"], $info);
                       
                          
                         
                          
                          $r++;
                    }
        }
        //}
  
       
        }
        $us=$obj->fetchById($id,"exam_history","ins_id");
        if($us)
        {
            
        }
        else
        {
             if($user_id=='')
             {}
             else
             {
            $ins=$obj->insert_history($user_id,$id,$right_question,$rong_question,$total_obtain,$persentage,$exam_date);
        
             }
             }
         echo json_encode($response);
        }
        else
        {
            $response["msg"] = "No record Found";
            $response["error"] =true;
            $response["success"] =0;
            
            array_push($response["dhistory"]);
            echo json_encode($response);
        }

?>