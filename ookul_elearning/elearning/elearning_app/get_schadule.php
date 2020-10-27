<?php 
include"../include/database.php";
$obj=new database();

$info=array();
$response["examschedule"] = array();
$exam_type=$_POST['exam_type'];
//$days=$_POST['days'];
$days='';

$day= date('l');
if($day=='Monday')
{
    $days='m';
}
if($day=='Tuesday')
{
    $days='t';
}
if($day=='Wednesday')
{
    $days='w';
}
if($day=='Thursday')
{
    $days='thu';
}
if($day=='Friday')
{
   $days='f';
}
if($day=='Saturday')
{
   $days='s';
}
if($day=='Sunday')
{
   $days='sun';
}

else
{
   $days; 
}


if($exam_type=='')
    {
        $response["msg"] = "Not  recod found ";
        $response["error"] =true;
        $response["success"] =0;
        @array_push($response["examschedule"]);
        echo json_encode($response);
    }
    else
    {
    
    $uu=0;
$rs44=$obj->fetchDetailByIdByStatus(1,"gove_exam","status","exam_type",$exam_type);
     if($rs44)
        {
            $i=0;
            while($row4=mysqli_fetch_assoc($rs44))
            {
                $uu=$uu+1;
             if($row4['monday']==$days){
                 
                   $day=$m;
             } 
              if($row4['tuesday']==$days){
                 
                  $day= $t;
             } 
              if($row4['wednesday']==$days){
                 
                  $day= $w;
             } 
              if($row4['thursday']==$days){
                 
                   $day=$thu;
             } 
              if($row4['friday']==$days){
                 
                  $day= $f;
             } 
              if($row4['saturday']==$days){
                 
                 $day= $s;
             } 
              if($row4['sunday']==$days){
                 
                 $day= $sun;
             } 
   
            
        }
    }
if($uu=='0')
{
     $response["msg"] = "No Exam Found ";
        $response["error"] =true;
        $response["success"] =0;
        @array_push($response["examschedule"]);
        echo json_encode($response);
}
else
{
    // echo $day;
    // echo"</br>";
    // echo $days;
    // if($day==$days)
    // {
        
$rs=$obj->fetchDetailByIdByStatus(1,"gove_exam","status","exam_type",$exam_type);
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
                if($row['monday']==$days)
                {
                   $info["days"]=$row['monday'];
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
                }
                elseif($row['tuesday']==$days)
                {
                     $info["days"]=$row['tuesday'];
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
                }
                elseif($row['wednesday']==$days)
                {
                    $info["days"]=$row['wednesday'];
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
                }
                elseif($row['thursday']==$days)
                {
                    $info["days"]=$row['thursday'];
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
                }
                elseif($row['friday']==$days)
                {
                    $info["days"]=$row['friday'];
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
                }
                elseif($row['saturday']==$days)
                {
                    $info["days"]=$row['saturday'];
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
                }
                elseif($row['sunday']==$days)
                {
                    $info["days"]=$row['sunday'];
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
                    
                }
               else
               {
                   $info["days"]="No Exam Found";
               }
                
                            
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
    // }
    // else
    // {
    //     $response["msg"] = "Not  recod found ";
    //     $response["error"] =true;
    //     $response["success"] =0;
    //     @array_push($response["examschedule"]);
    //     echo json_encode($response);
    // }
    }
        }

?>