<?php 
include"../include/database.php";
$obj=new database();

$info=array();
$response["examschedule"] = array();

$exam_type=$_POST['exam_type'];

$exam_id=$_POST['exam_id'];

 $uu=0;
 $uum=0;
 $uut=0;
 $uuw=0;
 $uuf=0;
 $uuss=0;
 $uusun=0;
 
 
 
    if($exam_type=='')
    {
        $response["msg"] = "No Exam Found ";
        $response["error"] =true;
        $response["success"] =0;
        @array_push($response["examschedule"]);
        echo json_encode($response);
    }
    else
    {
        
        $day= date('l');
        
  
         $rsm=$obj->fetchDetailByIdByStatus_007_007(1,"gove_exam","status","exam_type",$exam_type,"id",$exam_id);
             if($rsm)
                {
                    $i=0;
                    while($rowm=mysqli_fetch_assoc($rsm))
                    {
                        $uum=$uum+1;
                        //echo $row['id'];
                    }
                }
                if($uum=='0')
                {
                    $y1=0;
                      $rs=$obj->fetchDetailByIdByStatus_007_007(1,"gove_exam","status","exam_type",$exam_type,"id",$exam_id);
                     if($rs)
                        {
                            $i=0;
                            while($row=mysqli_fetch_assoc($rs))
                            {
                                $y1=$y1+1;
                            }
                        }
                        if($y1=='0')
                        {
                    
                   $rs=$obj->fetchDetailByIdByStatus_007_007(1,"gove_exam","status","exam_type",$exam_type,"id",$exam_id);
                         if($rs)
                            {
                                $i=0;
                                while($row=mysqli_fetch_assoc($rs))
                                {
                               
                                    $i++;
                                    $response["error"] =false;
                        			$response["success"] =1;
                        			$response["msg"] = "exam schadule";
                        			
                                    $info["id"] = $row['id'];
                                    $info["exam_name"]=$row['exam_name'];
                                    if($row['monday']=="")
                                    {
                                        $info["monday"]="0";
                                    }
                                    else
                                    {
                                        $info["monday"]=$row['monday'];
                                    }
                                    if($row['tuesday']=="")
                                    {
                                        $info["tuesday"]="0";
                                    }
                                    else
                                    {
                                    $info["tuesday"]=$row['tuesday'];
                                    }
                                    if($row['wednesday']=="")
                                    {
                                        $info["wednesday"]="0";
                                    }
                                    else
                                    {
                                    $info["wednesday"]=$row['wednesday'];
                                    }
                                    if($row['thursday']=="")
                                    {
                                        $info["thursday"]="0";
                                    }
                                    else
                                    {
                                    $info["thursday"]=$row['thursday'];
                                    }
                                          if($row['friday']=="")
                                    {
                                        $info["friday"]="0";
                                    }
                                    else
                                    {
                                    $info["friday"]=$row['friday'];
                                    }
                                          if($row['saturday']=="")
                                    {
                                        $info["saturday"]="0";
                                    }
                                    else
                                    {
                                    $info["saturday"]=$row['saturday'];
                                    }
                                    if($row['sunday']=="")
                                    {
                                        $info["sunday"]="0";
                                    }
                                    else
                                    {
                                     $info["sunday"]=$row['sunday'];
                                    }
                                   
                                    if($row["exam_type"]=='1')
                                    {
                                     $info["exam_type"]="Practise";
                                    }
                                    if($row["exam_type"]=='2')
                                    {
                                        $info["exam_type"]="Rank";
                                    }
                                     $info["time_dur"]=$row['time_dur'];
                                     $info["start_time"]=$row['start_time'];
                                     $info["end_time"]=$row['end_time'];
                                     $info["numbers_of_que"]=$row['numbers_of_que'];
                                     $info["total_marks"]=$row['total_marks'];
                                     $info["q_marks_pluse"]=$row['q_marks_pluse'];
                                     $info["q_mark_min"]=$row['q_mark_min'];
                                     $info["each_set_question"]=$row['each_set_question'];
                                     
                                     
                                     $info["instruction_title"]=$row['instruction_title'];
                                     $info["instruction_desc"]=$row['instruction_desc'];
                                                
                                    @array_push($response["examschedule"], $info);
                                }
                    
                                echo json_encode($response);
                            }
                            else
                            {
                            $response["msg"] = "No Exam Found ";
                            $response["error"] =true;
                            $response["success"] =0;
                            @array_push($response["examschedule"]);
                            echo json_encode($response);
                            
                            }
                        }
                }
                else
                {
                        
                        $rsm1=$obj->fetchDetailByIdByStatus_007_007(1,"gove_exam","status","exam_type",$exam_type,"id",$exam_id);
                        
                        if($rsm1)
                        {
                            $i=0;
                            while($rowm2=mysqli_fetch_assoc($rsm1))
                            {
                                $i++;
                                $response["error"] =false;
                    			$response["success"] =1;
                    			$response["msg"] = "Exam Schedule";
                    			
                                $info["id"] = $rowm2['id'];
                                $info["exam_name"]=$rowm2['exam_name'];
                                if($rowm2['monday']=="")
                                {
                                    $info["monday"]="";
                                }
                                else
                                {
                                    $info["monday"]='Monday';
                                }
                                if($rowm2['tuesday']=="")
                                {
                                    $info["tuesday"]="";
                                }
                                else
                                {
                                $info["tuesday"]='Tuesday';
                                }
                                if($rowm2['wednesday']=="")
                                {
                                    $info["wednesday"]="";
                                }
                                else
                                {
                                $info["wednesday"]='wednesday';
                                }
                                if($rowm2['thursday']=="")
                                {
                                    $info["thursday"]="";
                                }
                                else
                                {
                                $info["thursday"]='Thursday';
                                }
                                      if($rowm2['friday']=="")
                                {
                                    $info["friday"]="";
                                }
                                else
                                {
                                $info["friday"]='Friday';
                                }
                                      if($rowm2['saturday']=="")
                                {
                                    $info["saturday"]="";
                                }
                                else
                                {
                                $info["saturday"]='Saturday';
                                }
                                if($rowm2['sunday']=="")
                                {
                                    $info["sunday"]="";
                                }
                                else
                                {
                                 $info["sunday"]='Sunday';
                                }
                               
                                if($rowm2["exam_type"]=='1')
                                {
                                 $info["exam_type"]="Practise";
                                }
                                if($rowm2["exam_type"]=='2')
                                {
                                    $info["exam_type"]="Rank";
                                }
                                 $info["time_dur"]=$rowm2['time_dur'];
                                 $info["start_time"]=$rowm2['start_time'];
                                 $info["end_time"]=$rowm2['end_time'];
                                 $info["numbers_of_que"]=$rowm2['numbers_of_que'];
                                 $info["total_marks"]=$rowm2['total_marks'];
                                 $info["q_marks_pluse"]=$rowm2['q_marks_pluse'];
                                 $info["q_mark_min"]=$rowm2['q_mark_min'];
                                 $info["each_set_question"]=$rowm2['each_set_question'];
                                 
                                 $info["instruction_title"]=$rowm2['instruction_title'];
                                 $info["instruction_desc"]=$rowm2['instruction_desc'];
                                            
                                @array_push($response["examschedule"], $info);
                            }
                
                            echo json_encode($response);
                        }
                        else
                        {
                        $response["msg"] = "Not Recod Found ";
                        $response["error"] =true;
                        $response["success"] =0;
                        @array_push($response["examschedule"]);
                        echo json_encode($response);
                        
                        }
                        
                }
        
//         else if($day=='Tuesday')
//         {
//         $days='t';
//             $rst=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"tuesday",'t');
//              if($rst)
//                 {
//                     $i=0;
//                     while($rst=mysqli_fetch_assoc($rsm))
//                     {
//                         $uut=$uut+1;
//                         //echo $row['id'];
//                     }
//                 }
//                 if($uut=='0')
//                 {
//                     $y3=0;
//                     $rs=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"wednesday",'w');
//      if($rs)
//         {
//             $i=0;
//             while($row=mysqli_fetch_assoc($rs))
//             {
//           $y3=$y3+1;
           
//             }
//         }
//         if($y3=='0')
//                     {
//                       $response["msg"] = "No Recod Found ";
//         $response["error"] =true;
//         $response["success"] =0;
//         @array_push($response["examschedule"]);
//         echo json_encode($response); 
//                     }
//                     else
//                     {
//                   $rs=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"wednesday",'w');
//      if($rs)
//         {
//             $i=0;
//             while($row=mysqli_fetch_assoc($rs))
//             {
           
//                 $i++;
//                 $response["error"] =false;
//     			$response["success"] =1;
//     			$response["msg"] = "Exam Schedule";
    			
//                 $info["id"] = $row['id'];
//                 $info["exam_name"]=$row['exam_name'];
//                 if($row['monday']=="")
//                 {
//                     $info["monday"]="0";
//                 }
//                 else
//                 {
//                     $info["monday"]=$row['monday'];
//                 }
//                 if($row['tuesday']=="")
//                 {
//                     $info["tuesday"]="0";
//                 }
//                 else
//                 {
//                 $info["tuesday"]=$row['tuesday'];
//                 }
//                 if($row['wednesday']=="")
//                 {
//                     $info["wednesday"]="0";
//                 }
//                 else
//                 {
//                 $info["wednesday"]=$row['wednesday'];
//                 }
//                 if($row['thursday']=="")
//                 {
//                     $info["thursday"]="0";
//                 }
//                 else
//                 {
//                 $info["thursday"]=$row['thursday'];
//                 }
//                       if($row['friday']=="")
//                 {
//                     $info["friday"]="0";
//                 }
//                 else
//                 {
//                 $info["friday"]=$row['friday'];
//                 }
//                       if($row['saturday']=="")
//                 {
//                     $info["saturday"]="0";
//                 }
//                 else
//                 {
//                 $info["saturday"]=$row['saturday'];
//                 }
//                 if($row['sunday']=="")
//                 {
//                     $info["sunday"]="0";
//                 }
//                 else
//                 {
//                  $info["sunday"]=$row['sunday'];
//                 }
               
//                 if($row["exam_type"]=='1')
//                 {
//                  $info["exam_type"]="Practise";
//                 }
//                 if($row["exam_type"]=='2')
//                 {
//                     $info["exam_type"]="Rank";
//                 }
//                  $info["time_dur"]=$row['time_dur'];
//                  $info["start_time"]=$row['start_time'];
//                  $info["end_time"]=$row['end_time'];
//                  $info["numbers_of_que"]=$row['numbers_of_que'];
//                  $info["total_marks"]=$row['total_marks'];
//                  $info["q_marks_pluse"]=$row['q_marks_pluse'];
//                  $info["q_mark_min"]=$row['q_mark_min'];
//                  $info["each_set_question"]=$row['each_set_question'];
                            
//                 @array_push($response["examschedule"], $info);
//             }

//             echo json_encode($response);
//         }
//         else
//         {
//         $response["msg"] = "No Exam Found ";
//         $response["error"] =true;
//         $response["success"] =0;
//         @array_push($response["examschedule"]);
//         echo json_encode($response);
        
//         }
                
//                     }
//                     }
//                 else
//                 {
//                 $rst1=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"tuesday",'t');
//                      if($rst1)
//                         {
//                             $i=0;
//                             while($rowt2=mysqli_fetch_assoc($rst1))
//                             {
//                                 $i++;
//                                 $response["error"] =false;
//                     			$response["success"] =1;
//                     			$response["msg"] = "exam schadule";
                    			
//                                 $info["id"] = $rowt2['id'];
//                                 $info["exam_name"]=$rowt2['exam_name'];
//                                 if($rowt2['monday']=="")
//                                 {
//                                     $info["monday"]="0";
//                                 }
//                                 else
//                                 {
//                                     $info["monday"]=$rowt2['monday'];
//                                 }
//                                 if($rowt2['tuesday']=="")
//                                 {
//                                     $info["tuesday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["tuesday"]=$rowt2['tuesday'];
//                                 }
//                                 if($rowt2['wednesday']=="")
//                                 {
//                                     $info["wednesday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["wednesday"]=$rowt2['wednesday'];
//                                 }
//                                 if($rowt2['thursday']=="")
//                                 {
//                                     $info["thursday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["thursday"]=$rowt2['thursday'];
//                                 }
//                                       if($rowt2['friday']=="")
//                                 {
//                                     $info["friday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["friday"]=$rowt2['friday'];
//                                 }
//                                       if($rowt2['saturday']=="")
//                                 {
//                                     $info["saturday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["saturday"]=$rowt2['saturday'];
//                                 }
//                                 if($rowt2['sunday']=="")
//                                 {
//                                     $info["sunday"]="0";
//                                 }
//                                 else
//                                 {
//                                  $info["sunday"]=$rowt2['sunday'];
//                                 }
                               
//                                 if($rowt2["exam_type"]=='1')
//                                 {
//                                  $info["exam_type"]="Practise";
//                                 }
//                                 if($rowt2["exam_type"]=='2')
//                                 {
//                                     $info["exam_type"]="Rank";
//                                 }
//                                  $info["time_dur"]=$rowt2['time_dur'];
//                                  $info["start_time"]=$rowt2['start_time'];
//                                  $info["end_time"]=$rowt2['end_time'];
//                                  $info["numbers_of_que"]=$rowt2['numbers_of_que'];
//                                  $info["total_marks"]=$rowt2['total_marks'];
//                                  $info["q_marks_pluse"]=$rowt2['q_marks_pluse'];
//                                  $info["q_mark_min"]=$rowt2['q_mark_min'];
//                                  $info["each_set_question"]=$rowt2['each_set_question'];
                                            
//                                 @array_push($response["examschedule"], $info);
//                             }
                
//                             echo json_encode($response);
//                         }
//                         else
//                         {
//                         $response["msg"] = "No Exam Found ";
//                         $response["error"] =true;
//                         $response["success"] =0;
//                         @array_push($response["examschedule"]);
//                         echo json_encode($response);
                        
//                         }
//                     }
//         }
//         else if($day=='Wednesday')
//         {
//         $days='w';
//         $rsw=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"wednesday",'w');
//              if($rsw)
//                 {
//                     $i=0;
//                     while($roww=mysqli_fetch_assoc($rsw))
//                     {
//                         $uuw=$uuw+1;
//                         //echo $row['id'];
//                     }
//                 }
//                 if($uuw=='0')
//                  {
//                   $rs=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"thursday",'thu');
//      if($rs)
//         {
//             $i=0;
//             while($row=mysqli_fetch_assoc($rs))
//             {
           
//                 $i++;
//                 $response["error"] =false;
//     			$response["success"] =1;
//     			$response["msg"] = "exam schadule";
    			
//                 $info["id"] = $row['id'];
//                 $info["exam_name"]=$row['exam_name'];
//                 if($row['monday']=="")
//                 {
//                     $info["monday"]="0";
//                 }
//                 else
//                 {
//                     $info["monday"]=$row['monday'];
//                 }
//                 if($row['tuesday']=="")
//                 {
//                     $info["tuesday"]="0";
//                 }
//                 else
//                 {
//                 $info["tuesday"]=$row['tuesday'];
//                 }
//                 if($row['wednesday']=="")
//                 {
//                     $info["wednesday"]="0";
//                 }
//                 else
//                 {
//                 $info["wednesday"]=$row['wednesday'];
//                 }
//                 if($row['thursday']=="")
//                 {
//                     $info["thursday"]="0";
//                 }
//                 else
//                 {
//                 $info["thursday"]=$row['thursday'];
//                 }
//                       if($row['friday']=="")
//                 {
//                     $info["friday"]="0";
//                 }
//                 else
//                 {
//                 $info["friday"]=$row['friday'];
//                 }
//                       if($row['saturday']=="")
//                 {
//                     $info["saturday"]="0";
//                 }
//                 else
//                 {
//                 $info["saturday"]=$row['saturday'];
//                 }
//                 if($row['sunday']=="")
//                 {
//                     $info["sunday"]="0";
//                 }
//                 else
//                 {
//                  $info["sunday"]=$row['sunday'];
//                 }
               
//                 if($row["exam_type"]=='1')
//                 {
//                  $info["exam_type"]="Practise";
//                 }
//                 if($row["exam_type"]=='2')
//                 {
//                     $info["exam_type"]="Rank";
//                 }
//                  $info["time_dur"]=$row['time_dur'];
//                  $info["start_time"]=$row['start_time'];
//                  $info["end_time"]=$row['end_time'];
//                  $info["numbers_of_que"]=$row['numbers_of_que'];
//                  $info["total_marks"]=$row['total_marks'];
//                  $info["q_marks_pluse"]=$row['q_marks_pluse'];
//                  $info["q_mark_min"]=$row['q_mark_min'];
//                  $info["each_set_question"]=$row['each_set_question'];
                            
//                 @array_push($response["examschedule"], $info);
//             }

//             echo json_encode($response);
//         }
//         else
//         {
//         $response["msg"] = "No Exam Found";
//         $response["error"] =true;
//         $response["success"] =0;
//         @array_push($response["examschedule"]);
//         echo json_encode($response);
        
//         }
//                 }
//                 else
//                 {
//                 $rsw1=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"wednesday",'w');
//                      if($rsw1)
//                         {
//                             $i=0;
//                             while($roww2=mysqli_fetch_assoc($rsw1))
//                             {
//                                 $i++;
//                                 $response["error"] =false;
//                     			$response["success"] =1;
//                     			$response["msg"] = "exam schadule";
                    			
//                                 $info["id"] = $roww2['id'];
//                                 $info["exam_name"]=$roww2['exam_name'];
//                                 if($roww2['monday']=="")
//                                 {
//                                     $info["monday"]="0";
//                                 }
//                                 else
//                                 {
//                                     $info["monday"]=$roww2['monday'];
//                                 }
//                                 if($roww2['tuesday']=="")
//                                 {
//                                     $info["tuesday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["tuesday"]=$roww2['tuesday'];
//                                 }
//                                 if($roww2['wednesday']=="")
//                                 {
//                                     $info["wednesday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["wednesday"]=$roww2['wednesday'];
//                                 }
//                                 if($roww2['thursday']=="")
//                                 {
//                                     $info["thursday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["thursday"]=$roww2['thursday'];
//                                 }
//                                       if($roww2['friday']=="")
//                                 {
//                                     $info["friday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["friday"]=$roww2['friday'];
//                                 }
//                                       if($roww2['saturday']=="")
//                                 {
//                                     $info["saturday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["saturday"]=$roww2['saturday'];
//                                 }
//                                 if($roww2['sunday']=="")
//                                 {
//                                     $info["sunday"]="0";
//                                 }
//                                 else
//                                 {
//                                  $info["sunday"]=$roww2['sunday'];
//                                 }
                               
//                                 if($roww2["exam_type"]=='1')
//                                 {
//                                  $info["exam_type"]="Practise";
//                                 }
//                                 if($roww2["exam_type"]=='2')
//                                 {
//                                     $info["exam_type"]="Rank";
//                                 }
//                                  $info["time_dur"]=$roww2['time_dur'];
//                                  $info["start_time"]=$roww2['start_time'];
//                                  $info["end_time"]=$roww2['end_time'];
//                                  $info["numbers_of_que"]=$roww2['numbers_of_que'];
//                                  $info["total_marks"]=$roww2['total_marks'];
//                                  $info["q_marks_pluse"]=$roww2['q_marks_pluse'];
//                                  $info["q_mark_min"]=$rowt2['q_mark_min'];
//                                  $info["each_set_question"]=$roww2['each_set_question'];
                                            
//                                 @array_push($response["examschedule"], $info);
//                             }
                
//                             echo json_encode($response);
//                         }
//                         else
//                         {
//                         $response["msg"] = "No Exam Found ";
//                         $response["error"] =true;
//                         $response["success"] =0;
//                         @array_push($response["examschedule"]);
//                         echo json_encode($response);
                        
//                         }
//                     }
//         }
//         else if($day=='Thursday')
//         {
//         //$days='thu';
           
//             $rs=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"thursday",'thu');
//              if($rs)
//                 {
//                     $i=0;
//                     while($row=mysqli_fetch_assoc($rs))
//                     {
//                         $uu=$uu+1;
//                         //echo $row['id'];
//                     }
//                 }
//                 if($uu=='0')
//                 {
//                     $y2=0;
//                       $rs=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"friday",'f');
//      if($rs)
//         {

//             $i=0;
//             while($row=mysqli_fetch_assoc($rs))
//             {
//                 $y2=$y2+1;
//             }
//         }
//               if($y2=='0')
//               {
//                   $response["msg"] = "Not  recod found ";
//                     $response["error"] =true;
//                     $response["success"] =0;
//                     @array_push($response["examschedule"]);
//                     echo json_encode($response);
//               }
//               else
//               {
                    
//                   $rs=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"friday",'f');
//      if($rs)
//         {

//             $i=0;
//             while($row=mysqli_fetch_assoc($rs))
//             {
           
//                 $i++;
//                 $response["error"] =false;
//     			$response["success"] =1;
//     			$response["msg"] = "exam schadule";
    			
//                 $info["id"] = $row['id'];
//                 $info["exam_name"]=$row['exam_name'];
//                 if($row['monday']=="")
//                 {
//                     $info["monday"]="0";
//                 }
//                 else
//                 {
//                     $info["monday"]=$row['monday'];
//                 }
//                 if($row['tuesday']=="")
//                 {
//                     $info["tuesday"]="0";
//                 }
//                 else
//                 {
//                 $info["tuesday"]=$row['tuesday'];
//                 }
//                 if($row['wednesday']=="")
//                 {
//                     $info["wednesday"]="0";
//                 }
//                 else
//                 {
//                 $info["wednesday"]=$row['wednesday'];
//                 }
//                 if($row['thursday']=="")
//                 {
//                     $info["thursday"]="0";
//                 }
//                 else
//                 {
//                 $info["thursday"]=$row['thursday'];
//                 }
//                       if($row['friday']=="")
//                 {
//                     $info["friday"]="0";
//                 }
//                 else
//                 {
//                 $info["friday"]=$row['friday'];
//                 }
//                       if($row['saturday']=="")
//                 {
//                     $info["saturday"]="0";
//                 }
//                 else
//                 {
//                 $info["saturday"]=$row['saturday'];
//                 }
//                 if($row['sunday']=="")
//                 {
//                     $info["sunday"]="0";
//                 }
//                 else
//                 {
//                  $info["sunday"]=$row['sunday'];
//                 }
               
//                 if($row["exam_type"]=='1')
//                 {
//                  $info["exam_type"]="Practise";
//                 }
//                 if($row["exam_type"]=='2')
//                 {
//                     $info["exam_type"]="Rank";
//                 }
//                  $info["time_dur"]=$row['time_dur'];
//                  $info["start_time"]=$row['start_time'];
//                  $info["end_time"]=$row['end_time'];
//                  $info["numbers_of_que"]=$row['numbers_of_que'];
//                  $info["total_marks"]=$row['total_marks'];
//                  $info["q_marks_pluse"]=$row['q_marks_pluse'];
//                  $info["q_mark_min"]=$row['q_mark_min'];
//                  $info["each_set_question"]=$row['each_set_question'];
                            
//                 @array_push($response["examschedule"], $info);
//             }

//             echo json_encode($response);
//         }
//         else
//         {
            
//         $response["msg"] = "No Exam Found ";
//         $response["error"] =true;
//         $response["success"] =0;
//         @array_push($response["examschedule"]);
//         echo json_encode($response);
        
//         }
//               }
//                 }
//                 else
//                 {
//                 $rs2=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"thursday",'thu');
//                      if($rs2)
//                         {
//                             $i=0;
//                             while($row2=mysqli_fetch_assoc($rs2))
//                             {
//                                 $i++;
//                                 $response["error"] =false;
//                     			$response["success"] =1;
//                     			$response["msg"] = "exam schadule";
                    			
//                                 $info["id"] = $row2['id'];
//                                 $info["exam_name"]=$row2['exam_name'];
//                                 if($row2['monday']=="")
//                                 {
//                                     $info["monday"]="0";
//                                 }
//                                 else
//                                 {
//                                     $info["monday"]=$row2['monday'];
//                                 }
//                                 if($row2['tuesday']=="")
//                                 {
//                                     $info["tuesday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["tuesday"]=$row2['tuesday'];
//                                 }
//                                 if($row2['wednesday']=="")
//                                 {
//                                     $info["wednesday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["wednesday"]=$row2['wednesday'];
//                                 }
//                                 if($row2['thursday']=="")
//                                 {
//                                     $info["thursday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["thursday"]=$row2['thursday'];
//                                 }
//                                       if($row2['friday']=="")
//                                 {
//                                     $info["friday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["friday"]=$row2['friday'];
//                                 }
//                                       if($row2['saturday']=="")
//                                 {
//                                     $info["saturday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["saturday"]=$row2['saturday'];
//                                 }
//                                 if($row2['sunday']=="")
//                                 {
//                                     $info["sunday"]="0";
//                                 }
//                                 else
//                                 {
//                                  $info["sunday"]=$row2['sunday'];
//                                 }
                               
//                                 if($row2["exam_type"]=='1')
//                                 {
//                                  $info["exam_type"]="Practise";
//                                 }
//                                 if($row2["exam_type"]=='2')
//                                 {
//                                     $info["exam_type"]="Rank";
//                                 }
//                                  $info["time_dur"]=$row2['time_dur'];
//                                  $info["start_time"]=$row2['start_time'];
//                                  $info["end_time"]=$row2['end_time'];
//                                  $info["numbers_of_que"]=$row2['numbers_of_que'];
//                                  $info["total_marks"]=$row2['total_marks'];
//                                  $info["q_marks_pluse"]=$row2['q_marks_pluse'];
//                                  $info["q_mark_min"]=$row2['q_mark_min'];
//                                  $info["each_set_question"]=$row2['each_set_question'];
                                            
//                                 @array_push($response["examschedule"], $info);
//                             }
                
//                             echo json_encode($response);
//                         }
//                         else
//                         {
//                         $response["msg"] = "No Recod Found ";
//                         $response["error"] =true;
//                         $response["success"] =0;
//                         @array_push($response["examschedule"]);
//                         echo json_encode($response);
                        
//                         }
//                     }
//         }
//         else if($day=='Friday')
//         {
//         $days='f';
//         $rsf=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"friday",'f');
//              if($rsf)
//                 {
//                     $i=0;
//                     while($rowf=mysqli_fetch_assoc($rsf))
//                     {
//                         $uuf=$uuf+1;
//                         //echo $row['id'];
//                     }
//                 }
//                 if($uuf=='0')
//               {
//                   $y4=0;
//                   $rs=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"saturday",'s');
//      if($rs)
//         {
//             $i=0;
//             while($row=mysqli_fetch_assoc($rs))
//             {
//                 $y4=$y4+1;
//             }
//         }
//                 if($y4=='0')
//                 {
//                     $response["msg"] = "No Recod Found ";
//         $response["error"] =true;
//         $response["success"] =0;
//         @array_push($response["examschedule"]);
//         echo json_encode($response);
//                 }
//                 else
//                 {
//                   $rs=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"saturday",'s');
//      if($rs)
//         {
//             $i=0;
//             while($row=mysqli_fetch_assoc($rs))
//             {
           
//                 $i++;
//                 $response["error"] =false;
//     			$response["success"] =1;
//     			$response["msg"] = "exam schadule";
    			
//                 $info["id"] = $row['id'];
//                 $info["exam_name"]=$row['exam_name'];
//                 if($row['monday']=="")
//                 {
//                     $info["monday"]="0";
//                 }
//                 else
//                 {
//                     $info["monday"]=$row['monday'];
//                 }
//                 if($row['tuesday']=="")
//                 {
//                     $info["tuesday"]="0";
//                 }
//                 else
//                 {
//                 $info["tuesday"]=$row['tuesday'];
//                 }
//                 if($row['wednesday']=="")
//                 {
//                     $info["wednesday"]="0";
//                 }
//                 else
//                 {
//                 $info["wednesday"]=$row['wednesday'];
//                 }
//                 if($row['thursday']=="")
//                 {
//                     $info["thursday"]="0";
//                 }
//                 else
//                 {
//                 $info["thursday"]=$row['thursday'];
//                 }
//                       if($row['friday']=="")
//                 {
//                     $info["friday"]="0";
//                 }
//                 else
//                 {
//                 $info["friday"]=$row['friday'];
//                 }
//                       if($row['saturday']=="")
//                 {
//                     $info["saturday"]="0";
//                 }
//                 else
//                 {
//                 $info["saturday"]=$row['saturday'];
//                 }
//                 if($row['sunday']=="")
//                 {
//                     $info["sunday"]="0";
//                 }
//                 else
//                 {
//                  $info["sunday"]=$row['sunday'];
//                 }
               
//                 if($row["exam_type"]=='1')
//                 {
//                  $info["exam_type"]="Practise";
//                 }
//                 if($row["exam_type"]=='2')
//                 {
//                     $info["exam_type"]="Rank";
//                 }
//                  $info["time_dur"]=$row['time_dur'];
//                  $info["start_time"]=$row['start_time'];
//                  $info["end_time"]=$row['end_time'];
//                  $info["numbers_of_que"]=$row['numbers_of_que'];
//                  $info["total_marks"]=$row['total_marks'];
//                  $info["q_marks_pluse"]=$row['q_marks_pluse'];
//                  $info["q_mark_min"]=$row['q_mark_min'];
//                  $info["each_set_question"]=$row['each_set_question'];
                            
//                 @array_push($response["examschedule"], $info);
//             }

//             echo json_encode($response);
//         }
//         else
//         {
//         $response["msg"] = "No Exam Found ";
//         $response["error"] =true;
//         $response["success"] =0;
//         @array_push($response["examschedule"]);
//         echo json_encode($response);
        
//         }
                
//                 }
//                 }
//                 else
//                 {
//                 $rsf2=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"friday",'f');
//                      if($rsf2)
//                         {
//                             $i=0;
//                             while($rowf2=mysqli_fetch_assoc($rsf2))
//                             {
//                                 $i++;
//                                 $response["error"] =false;
//                     			$response["success"] =1;
//                     			$response["msg"] = "exam schadule";
                    			
//                                 $info["id"] = $rowf2['id'];
//                                 $info["exam_name"]=$rowf2['exam_name'];
//                                 if($rowf2['monday']=="")
//                                 {
//                                     $info["monday"]="0";
//                                 }
//                                 else
//                                 {
//                                     $info["monday"]=$rowf2['monday'];
//                                 }
//                                 if($rowf2['tuesday']=="")
//                                 {
//                                     $info["tuesday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["tuesday"]=$rowf2['tuesday'];
//                                 }
//                                 if($rowf2['wednesday']=="")
//                                 {
//                                     $info["wednesday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["wednesday"]=$rowf2['wednesday'];
//                                 }
//                                 if($rowf2['thursday']=="")
//                                 {
//                                     $info["thursday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["thursday"]=$rowf2['thursday'];
//                                 }
//                                       if($rowf2['friday']=="")
//                                 {
//                                     $info["friday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["friday"]=$rowf2['friday'];
//                                 }
//                                       if($rowf2['saturday']=="")
//                                 {
//                                     $info["saturday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["saturday"]=$rowf2['saturday'];
//                                 }
//                                 if($rowf2['sunday']=="")
//                                 {
//                                     $info["sunday"]="0";
//                                 }
//                                 else
//                                 {
//                                  $info["sunday"]=$rowf2['sunday'];
//                                 }
                               
//                                 if($rowf2["exam_type"]=='1')
//                                 {
//                                  $info["exam_type"]="Practise";
//                                 }
//                                 if($rowf2["exam_type"]=='2')
//                                 {
//                                     $info["exam_type"]="Rank";
//                                 }
//                                  $info["time_dur"]=$rowf2['time_dur'];
//                                  $info["start_time"]=$rowf2['start_time'];
//                                  $info["end_time"]=$rowf2['end_time'];
//                                  $info["numbers_of_que"]=$rowf2['numbers_of_que'];
//                                  $info["total_marks"]=$rowf2['total_marks'];
//                                  $info["q_marks_pluse"]=$rowf2['q_marks_pluse'];
//                                  $info["q_mark_min"]=$rowf2['q_mark_min'];
//                                  $info["each_set_question"]=$rowf2['each_set_question'];
                                            
//                                 @array_push($response["examschedule"], $info);
//                             }
                
//                             echo json_encode($response);
//                         }
//                         else
//                         {
//                         $response["msg"] = "Not  recod found ";
//                         $response["error"] =true;
//                         $response["success"] =0;
//                         @array_push($response["examschedule"]);
//                         echo json_encode($response);
                        
//                         }
//                     }
//         }
//         else if($day=='Saturday')
//         {
//         $days='s';
//              $rss=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"saturday",'s');
//              if($rss)
//                 {
//                     $i=0;
//                     while($rows=mysqli_fetch_assoc($rss))
//                     {
//                         $uuss=$uuss+1;
//                         //echo $row['id'];
//                     }
//                 }
//                 if($uuss=='0')
//                 {
//                     $y6=0;
//                      $rs=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"sunday",'sun');
//      if($rs)
//         {
//             $i=0;
//             while($row=mysqli_fetch_assoc($rs))
//             {
//                 $y6=$y6+1;
//             }
//         }
//         if($y6=='0')
//         {
//             $response["msg"] = "No Recod Found ";
//         $response["error"] =true;
//         $response["success"] =0;
//         @array_push($response["examschedule"]);
//         echo json_encode($response);
//         }
//         else
//         {
//                   $rs=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"sunday",'sun');
//      if($rs)
//         {
//             $i=0;
//             while($row=mysqli_fetch_assoc($rs))
//             {
           
//                 $i++;
//                 $response["error"] =false;
//     			$response["success"] =1;
//     			$response["msg"] = "exam schadule";
    			
//                 $info["id"] = $row['id'];
//                 $info["exam_name"]=$row['exam_name'];
//                 if($row['monday']=="")
//                 {
//                     $info["monday"]="0";
//                 }
//                 else
//                 {
//                     $info["monday"]=$row['monday'];
//                 }
//                 if($row['tuesday']=="")
//                 {
//                     $info["tuesday"]="0";
//                 }
//                 else
//                 {
//                 $info["tuesday"]=$row['tuesday'];
//                 }
//                 if($row['wednesday']=="")
//                 {
//                     $info["wednesday"]="0";
//                 }
//                 else
//                 {
//                 $info["wednesday"]=$row['wednesday'];
//                 }
//                 if($row['thursday']=="")
//                 {
//                     $info["thursday"]="0";
//                 }
//                 else
//                 {
//                 $info["thursday"]=$row['thursday'];
//                 }
//                       if($row['friday']=="")
//                 {
//                     $info["friday"]="0";
//                 }
//                 else
//                 {
//                 $info["friday"]=$row['friday'];
//                 }
//                       if($row['saturday']=="")
//                 {
//                     $info["saturday"]="0";
//                 }
//                 else
//                 {
//                 $info["saturday"]=$row['saturday'];
//                 }
//                 if($row['sunday']=="")
//                 {
//                     $info["sunday"]="0";
//                 }
//                 else
//                 {
//                  $info["sunday"]=$row['sunday'];
//                 }
               
//                 if($row["exam_type"]=='1')
//                 {
//                  $info["exam_type"]="Practise";
//                 }
//                 if($row["exam_type"]=='2')
//                 {
//                     $info["exam_type"]="Rank";
//                 }
//                  $info["time_dur"]=$row['time_dur'];
//                  $info["start_time"]=$row['start_time'];
//                  $info["end_time"]=$row['end_time'];
//                  $info["numbers_of_que"]=$row['numbers_of_que'];
//                  $info["total_marks"]=$row['total_marks'];
//                  $info["q_marks_pluse"]=$row['q_marks_pluse'];
//                  $info["q_mark_min"]=$row['q_mark_min'];
//                  $info["each_set_question"]=$row['each_set_question'];
                            
//                 @array_push($response["examschedule"], $info);
//             }

//             echo json_encode($response);
//         }
//         else
//         {
//         $response["msg"] = "No Recod Found ";
//         $response["error"] =true;
//         $response["success"] =0;
//         @array_push($response["examschedule"]);
//         echo json_encode($response);
        
//         }
//         }
//                 }
//                 else
//                 {
//                 $rss2=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"saturday",'s');
//                      if($rss2)
//                         {
//                             $i=0;
//                             while($rows2=mysqli_fetch_assoc($rss2))
//                             {
//                                 $i++;
//                                 $response["error"] =false;
//                     			$response["success"] =1;
//                     			$response["msg"] = "exam schadule";
                    			
//                                 $info["id"] = $rows2['id'];
//                                 $info["exam_name"]=$rows2['exam_name'];
//                                 if($rows2['monday']=="")
//                                 {
//                                     $info["monday"]="0";
//                                 }
//                                 else
//                                 {
//                                     $info["monday"]=$rows2['monday'];
//                                 }
//                                 if($rows2['tuesday']=="")
//                                 {
//                                     $info["tuesday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["tuesday"]=$rows2['tuesday'];
//                                 }
//                                 if($rows2['wednesday']=="")
//                                 {
//                                     $info["wednesday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["wednesday"]=$rows2['wednesday'];
//                                 }
//                                 if($rows2['thursday']=="")
//                                 {
//                                     $info["thursday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["thursday"]=$rows2['thursday'];
//                                 }
//                                       if($rows2['friday']=="")
//                                 {
//                                     $info["friday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["friday"]=$rows2['friday'];
//                                 }
//                                       if($rows2['saturday']=="")
//                                 {
//                                     $info["saturday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["saturday"]=$rows2['saturday'];
//                                 }
//                                 if($rows2['sunday']=="")
//                                 {
//                                     $info["sunday"]="0";
//                                 }
//                                 else
//                                 {
//                                  $info["sunday"]=$rows2['sunday'];
//                                 }
                               
//                                 if($rows2["exam_type"]=='1')
//                                 {
//                                  $info["exam_type"]="Practise";
//                                 }
//                                 if($rows2["exam_type"]=='2')
//                                 {
//                                     $info["exam_type"]="Rank";
//                                 }
//                                  $info["time_dur"]=$rows2['time_dur'];
//                                  $info["start_time"]=$rows2['start_time'];
//                                  $info["end_time"]=$rows2['end_time'];
//                                  $info["numbers_of_que"]=$rows2['numbers_of_que'];
//                                  $info["total_marks"]=$rows2['total_marks'];
//                                  $info["q_marks_pluse"]=$rows2['q_marks_pluse'];
//                                  $info["q_mark_min"]=$rows2['q_mark_min'];
//                                  $info["each_set_question"]=$rows2['each_set_question'];
                                            
//                                 @array_push($response["examschedule"], $info);
//                             }
                
//                             echo json_encode($response);
//                         }
//                         else
//                         {
//                         $response["msg"] = "No Recod Found ";
//                         $response["error"] =true;
//                         $response["success"] =0;
//                         @array_push($response["examschedule"]);
//                         echo json_encode($response);
                        
//                         }
//                     }
//         }
//         else if($day=='Sunday')
//         {
//         $days='sun';
//          $rssun=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"sunday",'sun');
//              if($rssun)
//                 {
//                     $i=0;
//                     while($rowsun=mysqli_fetch_assoc($rssun))
//                     {
//                         $uusun=$uusun+1;
//                         //echo $row['id'];
//                     }
//                 }
//                 if($uusun=='0')
//                  {
//                   $rs=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"monday",'m');
//      if($rs)
//         {
//             $i=0;
//             while($row=mysqli_fetch_assoc($rs))
//             {
           
//                 $i++;
//                 $response["error"] =false;
//     			$response["success"] =1;
//     			$response["msg"] = "exam schadule";
    			
//                 $info["id"] = $row['id'];
//                 $info["exam_name"]=$row['exam_name'];
//                 if($row['monday']=="")
//                 {
//                     $info["monday"]="0";
//                 }
//                 else
//                 {
//                     $info["monday"]=$row['monday'];
//                 }
//                 if($row['tuesday']=="")
//                 {
//                     $info["tuesday"]="0";
//                 }
//                 else
//                 {
//                 $info["tuesday"]=$row['tuesday'];
//                 }
//                 if($row['wednesday']=="")
//                 {
//                     $info["wednesday"]="0";
//                 }
//                 else
//                 {
//                 $info["wednesday"]=$row['wednesday'];
//                 }
//                 if($row['thursday']=="")
//                 {
//                     $info["thursday"]="0";
//                 }
//                 else
//                 {
//                 $info["thursday"]=$row['thursday'];
//                 }
//                       if($row['friday']=="")
//                 {
//                     $info["friday"]="0";
//                 }
//                 else
//                 {
//                 $info["friday"]=$row['friday'];
//                 }
//                       if($row['saturday']=="")
//                 {
//                     $info["saturday"]="0";
//                 }
//                 else
//                 {
//                 $info["saturday"]=$row['saturday'];
//                 }
//                 if($row['sunday']=="")
//                 {
//                     $info["sunday"]="0";
//                 }
//                 else
//                 {
//                  $info["sunday"]=$row['sunday'];
//                 }
               
//                 if($row["exam_type"]=='1')
//                 {
//                  $info["exam_type"]="Practise";
//                 }
//                 if($row["exam_type"]=='2')
//                 {
//                     $info["exam_type"]="Rank";
//                 }
//                  $info["time_dur"]=$row['time_dur'];
//                  $info["start_time"]=$row['start_time'];
//                  $info["end_time"]=$row['end_time'];
//                  $info["numbers_of_que"]=$row['numbers_of_que'];
//                  $info["total_marks"]=$row['total_marks'];
//                  $info["q_marks_pluse"]=$row['q_marks_pluse'];
//                  $info["q_mark_min"]=$row['q_mark_min'];
//                  $info["each_set_question"]=$row['each_set_question'];
                            
//                 @array_push($response["examschedule"], $info);
//             }

//             echo json_encode($response);
//         }
//         else
//         {
//         $response["msg"] = "No Recod Found ";
//         $response["error"] =true;
//         $response["success"] =0;
//         @array_push($response["examschedule"]);
//         echo json_encode($response);
        
//         }
//                 }
//                 else
//                 {
//                     $y7=0;
//                     $rssun2=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"sunday",'sun');
//                      if($rssun2)
//                         {
//                             $i=0;
//                             while($rowsun2=mysqli_fetch_assoc($rssun2))
//                             {
//                                 $y7=$y7+1;
//                             }
//                         }
//                         if($y7=='0')
//                         {
//                             $response["msg"] = "Not  recod found ";
//                         $response["error"] =true;
//                         $response["success"] =0;
//                         @array_push($response["examschedule"]);
//                         echo json_encode($response);
//                         }
//                         else
//                         {
//                 $rssun2=$obj->fetchDetailByIdByStatusByType(1,"gove_exam","status","exam_type",$exam_type,"sunday",'sun');
//                      if($rssun2)
//                         {
//                             $i=0;
//                             while($rowsun2=mysqli_fetch_assoc($rssun2))
//                             {
//                                 $i++;
//                                 $response["error"] =false;
//                     			$response["success"] =1;
//                     			$response["msg"] = "exam schadule";
                    			
//                                 $info["id"] = $rowsun2['id'];
//                                 $info["exam_name"]=$rowsun2['exam_name'];
//                                 if($rowsun2['monday']=="")
//                                 {
//                                     $info["monday"]="0";
//                                 }
//                                 else
//                                 {
//                                     $info["monday"]=$rowsun2['monday'];
//                                 }
//                                 if($rowsun2['tuesday']=="")
//                                 {
//                                     $info["tuesday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["tuesday"]=$rowsun2['tuesday'];
//                                 }
//                                 if($rowsun2['wednesday']=="")
//                                 {
//                                     $info["wednesday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["wednesday"]=$rowsun2['wednesday'];
//                                 }
//                                 if($rowsun2['thursday']=="")
//                                 {
//                                     $info["thursday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["thursday"]=$rowsun2['thursday'];
//                                 }
//                                       if($rowsun2['friday']=="")
//                                 {
//                                     $info["friday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["friday"]=$rowsun2['friday'];
//                                 }
//                                       if($rowsun2['saturday']=="")
//                                 {
//                                     $info["saturday"]="0";
//                                 }
//                                 else
//                                 {
//                                 $info["saturday"]=$rowsun2['saturday'];
//                                 }
//                                 if($rowsun2['sunday']=="")
//                                 {
//                                     $info["sunday"]="0";
//                                 }
//                                 else
//                                 {
//                                  $info["sunday"]=$rowsun2['sunday'];
//                                 }
                               
//                                 if($rowsun2["exam_type"]=='1')
//                                 {
//                                  $info["exam_type"]="Practise";
//                                 }
//                                 if($rowsun2["exam_type"]=='2')
//                                 {
//                                     $info["exam_type"]="Rank";
//                                 }
//                                  $info["time_dur"]=$rowsun2['time_dur'];
//                                  $info["start_time"]=$rowsun2['start_time'];
//                                  $info["end_time"]=$rowsun2['end_time'];
//                                  $info["numbers_of_que"]=$rowsun2['numbers_of_que'];
//                                  $info["total_marks"]=$rowsun2['total_marks'];
//                                  $info["q_marks_pluse"]=$rowsun2['q_marks_pluse'];
//                                  $info["q_mark_min"]=$rowsun2['q_mark_min'];
//                                  $info["each_set_question"]=$rowsun2['each_set_question'];
                                            
//                                 @array_push($response["examschedule"], $info);
//                             }
                
//                             echo json_encode($response);
//                         }
//                         else
//                         {
//                         $response["msg"] = "No Recod Found ";
//                         $response["error"] =true;
//                         $response["success"] =0;
//                         @array_push($response["examschedule"]);
//                         echo json_encode($response);
                        
//                         }
//                         }
//                     }
//         }
//       else{
//           $rs=$obj->fetchDetailByIdByStatus(1,"gove_exam","status","exam_type",$exam_type);
//           $yy=0;
//      if($rs)
//         {
//             $i=0;
//             while($row=mysqli_fetch_assoc($rs))
//             {
//                 $yy=$yy+1;
//             }
//         }
//         if($yy=='0')
//         {
//             $response["msg"] = "Not  recod found ";
//         $response["error"] =true;
//         $response["success"] =0;
//         @array_push($response["examschedule"]);
//         echo json_encode($response);
//         }
//         else
//         {
           
// $rs=$obj->fetchDetailByIdByStatus(1,"gove_exam","status","exam_type",$exam_type);
//      if($rs)
//         {
//             $i=0;
//             while($row=mysqli_fetch_assoc($rs))
//             {
           
//                 $i++;
//                 $response["error"] =false;
//     			$response["success"] =1;
//     			$response["msg"] = "exam schadule";
    			
//                 $info["id"] = $row['id'];
//                 $info["exam_name"]=$row['exam_name'];
//                 if($row['monday']=="")
//                 {
//                     $info["monday"]="0";
//                 }
//                 else
//                 {
//                     $info["monday"]=$row['monday'];
//                 }
//                 if($row['tuesday']=="")
//                 {
//                     $info["tuesday"]="0";
//                 }
//                 else
//                 {
//                 $info["tuesday"]=$row['tuesday'];
//                 }
//                 if($row['wednesday']=="")
//                 {
//                     $info["wednesday"]="0";
//                 }
//                 else
//                 {
//                 $info["wednesday"]=$row['wednesday'];
//                 }
//                 if($row['thursday']=="")
//                 {
//                     $info["thursday"]="0";
//                 }
//                 else
//                 {
//                 $info["thursday"]=$row['thursday'];
//                 }
//                       if($row['friday']=="")
//                 {
//                     $info["friday"]="0";
//                 }
//                 else
//                 {
//                 $info["friday"]=$row['friday'];
//                 }
//                       if($row['saturday']=="")
//                 {
//                     $info["saturday"]="0";
//                 }
//                 else
//                 {
//                 $info["saturday"]=$row['saturday'];
//                 }
//                 if($row['sunday']=="")
//                 {
//                     $info["sunday"]="0";
//                 }
//                 else
//                 {
//                  $info["sunday"]=$row['sunday'];
//                 }
               
//                 if($row["exam_type"]=='1')
//                 {
//                  $info["exam_type"]="Practise";
//                 }
//                 if($row["exam_type"]=='2')
//                 {
//                     $info["exam_type"]="Rank";
//                 }
//                  $info["time_dur"]=$row['time_dur'];
//                  $info["start_time"]=$row['start_time'];
//                  $info["end_time"]=$row['end_time'];
//                  $info["numbers_of_que"]=$row['numbers_of_que'];
//                  $info["total_marks"]=$row['total_marks'];
//                  $info["q_marks_pluse"]=$row['q_marks_pluse'];
//                  $info["q_mark_min"]=$row['q_mark_min'];
//                  $info["each_set_question"]=$row['each_set_question'];
                            
//                 @array_push($response["examschedule"], $info);
//             }

//             echo json_encode($response);
//         }
//         else
//         {
//         $response["msg"] = "No Recod Found ";
//         $response["error"] =true;
//         $response["success"] =0;
//         @array_push($response["examschedule"]);
//         echo json_encode($response);
        
//         }
//         }
    
           
//       }
    


    }

?>