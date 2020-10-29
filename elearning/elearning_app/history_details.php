<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["dhistory"] = array();
   
   
$id=$_POST['id'];

$right789=0;
$rong=0;
$r=0;
$user_id;
$exam_date;

if($id){
    
        $rs=$obj->fetchDetailById($id,"`question_answer_gov`","`id`"); 
        if($rs)
        {
        while($row=mysqli_fetch_assoc($rs))
        { 
       
             $user_id11=$row['user_id'];
            
        $ex44=$obj->fetchById($row['exam_type_id'],"gove_exam","id");
         $ttl=$ex44['total_marks'];
        
        
        $someArray = json_decode($row['question'], true);
        $amswerArray = json_decode($row['answer'], true);
 
        foreach($someArray as $u => $value)
        
        {  
        //     foreach($amswerArray as $u1 => $value)
        // {
            
             $rs=$obj->fetchDetailById($someArray[$u],"`gover_multiple_question`","`id`"); 
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
                             
                             //$info["answer"]=$row1['answer'];
                             
                             //$info["answer1"]=$amswerArray[$r];
                             $info["solution"]= $row1['solution'];
                             
                             //---------image------------
                             if($row1['question_image']=='0')
                             {
                                  $info["question_image"]="";
                             }
                             else
                             {
                             $info["question_image"]=$row1['question_image'];
                             }
                               if($amswerArray[$r]=='1')
                             {
                                 if($row1['option_img1']=='0')
                                 {
                                     $info["your_answerimg"]="";
                                 }
                                 else
                                 {
                             $info["your_answerimg"]=$row1['option_img1'];
                                 }
                             }
                              if($amswerArray[$r]=='2')
                             {
                                 if($row1['option_img12']=='0')
                                 {
                                     $info["your_answerimg"]="";
                                 }
                                 else
                                 {
                                    $info["your_answerimg"]=$row1['option_img12'];
                                 }
                             }
                              if($amswerArray[$r]=='3')
                             {
                                 if($row1['option_img3']=='0')
                                 {
                                     $info["your_answerimg"]="";
                                 }
                                 else
                                 {
                                     $info["your_answerimg"]=$row1['option_img3'];
                                 }
                             }
                              if($amswerArray[$r]=='4')
                             {
                                 if($row1['option_img4']=='0')
                                 {
                                     $info["your_answerimg"]="";
                                 }
                                 else
                                 {
                                     $info["your_answerimg"]=$row1['option_img4'];
                                 }
                             
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
                              
                              if($user_ans=="")
                              {
                                   $info["answer_status"]= "";
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
                       $rightm=$right789 * $ex44['q_marks_pluse'];
                        
                         $response["total_right_quntion"] =$right789;
                            $response["total_right_quntion_marks"] =$rightm;
                            $response["total_rong_question"] =$rong;
                            $response["total_rong_question_minus"]=$ex44['q_mark_min'];
                            
                            $mi=explode("/",$ex44['q_mark_min']);
                           
                           
                      if($mi[1]==0){
                            $total_rong=0;
                      }else{
                         $total_rong=$rong/$mi[1]; 
                      }
                            $response["total_rong_question_minus_cut"]=$total_rong;
                            $final=$total_rong*$mi[0];
                            $one_mark=$ex44['total_marks']/$ex44['numbers_of_que'];
                            $response["total_marks"]=$ex44['total_marks'];
                            $total_obtain=$rightm-$final;
                            $response["total_obtain_marks"]=$total_obtain;
                            $persentage=  $total_obtain/$ttl;
                            $ppr=$persentage*100;
                            $response["persentage"] =$ppr;
                          array_push($response["dhistory"], $info);
                          $right_question=$right789;
                           $rong_question=$rong;
                          
                         
                          
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
            
             if($user_id11=='')
             {
             }
             else
             {
            $ins=$obj->insert_history($user_id11,$id,$right_question,$rong_question,$total_obtain,$persentage,$exam_date);
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
}else{

  $response["msg"] = "No record Found";
            $response["error"] =true;
            $response["success"] =0;
            
            @array_push($response["dhistory"]);
            echo json_encode($response);   
}
?>