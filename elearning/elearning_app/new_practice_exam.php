<?php
include"../include/database.php";
$obj=new database();
$info=array();


$response["exam_days"] = array();

$user_id=$_POST['user_id'];

$rs=$obj->fetchAllDetailByIdByStatus_subscribtion($user_id, "gov_order","user_id","status","1");
 
if($rs['partial_pay_status']=="1")
{

$user44=$obj->fetchByIdByStatus($user_id,"user_register_goverment","id","pstatus",1);

if($user44)
{

$now1 = time(); // or your date as well
$your_date1 = strtotime($user44['success_date']);
$datediff1 = $now1 - $your_date1;
$da11=round($datediff1 / (60 * 60 * 24));

if($da11=='0')
{
$da110= $da11+3;
}
else
{
$da110=$da11+3;
}

//echo $da110; die();

$oo1=$obj->fetchById($da110,"days","days");

//$days414=$oo1['id'];

$days21=$oo1['days'];
    
    
    if($user44['id']=='')
    {
        $response["msg"] = "No Record Found";
        $response["error"] =true;
        $response["success"] =0;
        
        @array_push($response["exam_days"]);
        echo json_encode($response);
    }
    else
    {

$rs11=$obj->fetchAllDetailByDayASC_1("gove_exam");

if($rs11)
	{	
		while($row11=mysqli_fetch_assoc($rs11))
		{																			

			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Exam List";

            if($row11["day"] <= $days21 && $row11["day"]<=120 )
            {
                
$showdays=$obj->fetchById($row11["day"],"days","id");                
$info["days"]=$showdays['days'];                
                
$info["id"]=$row11['id'];
$info["exam_name"] = $row11['exam_name'];
$info["subject"] = $row11['subject'];
$info["exam_type"] = $row11['exam_type'];
$info["time_dur"] = $row11['time_dur'];
$info["start_time"] = $row11['start_time'];
$info["end_time"] = $row11['end_time'];
$info["numbers_of_que"] = $row11['numbers_of_que'];
$info["total_marks"] = $row11['total_marks'];
$info["q_marks_pluse"] = $row11['q_marks_pluse'];
$info["q_mark_min"] = $row11['q_mark_min'];
$info["each_set_question"] = $row11['each_set_question'];
$info["status"] = $row11['status'];
$info["show_status"]='1';
                
            
            }elseif($row11["day"]<='3'){
                
$showdays=$obj->fetchById($row11["day"],"days","id");                
$info["days"]=$showdays['days'];                  
                
                
$info["id"]=$row11['id'];
$info["exam_name"] = $row11['exam_name'];
$info["subject"] = $row11['subject'];
$info["exam_type"] = $row11['exam_type'];
$info["time_dur"] = $row11['time_dur'];
$info["start_time"] = $row11['start_time'];
$info["end_time"] = $row11['end_time'];
$info["numbers_of_que"] = $row11['numbers_of_que'];
$info["total_marks"] = $row11['total_marks'];
$info["q_marks_pluse"] = $row11['q_marks_pluse'];
$info["q_mark_min"] = $row11['q_mark_min'];
$info["each_set_question"] = $row11['each_set_question'];
$info["status"] = $row11['status'];

$info["show_status"]='1';  
                
            }
            else
            {
                
$showdays=$obj->fetchById($row11["day"],"days","id");                
$info["days"]=$showdays['days'];                  
                
$info["id"]=$row11['id'];
$info["exam_name"] = $row11['exam_name'];
$info["subject"] = $row11['subject'];
$info["exam_type"] = $row11['exam_type'];
$info["time_dur"] = $row11['time_dur'];
$info["start_time"] = $row11['start_time'];
$info["end_time"] = $row11['end_time'];
$info["numbers_of_que"] = $row11['numbers_of_que'];
$info["total_marks"] = $row11['total_marks'];
$info["q_marks_pluse"] = $row11['q_marks_pluse'];
$info["q_mark_min"] = $row11['q_mark_min'];
$info["each_set_question"] = $row11['each_set_question'];
$info["status"] = $row11['status'];

$info["show_status"]='0';
            
                
            }

			
		array_push($response["exam_days"], $info);
}
		echo json_encode($response);
}

else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;

array_push($response["exam_days"]);
echo json_encode($response);
}
}
}
else
{

$user=$obj->fetchByIdByStatus($user_id,"user_register_goverment","id","pstatus",1);



//echo $user['success_date'];

$now = time(); // or your date as well
$your_date = strtotime($user['success_date']);
$datediff = $now - $your_date;
$da=round($datediff / (60 * 60 * 24));
$da;

if($da=='0')
{
   $da1= $da+3;
}
else
{
    $da1=$da+3;
}

$oo=$obj->fetchById($da1,"days","days");

$days44=$oo['id'];
$days2=$oo['days'];


                
if($user_id=='')
{
    $response["msg"] = "No Record Found";
    $response["error"] =true;
    $response["success"] =0;
    
    @array_push($response["exam_days"]);
    echo json_encode($response);
}
else
{
    if($user['id']=='')
    {
        $response["msg"] = "No Record Found";
        $response["error"] =true;
        $response["success"] =0;
        
        @array_push($response["exam_days"]);
        echo json_encode($response);
    }
    else
    {

$rs=$obj->fetchAllDetailByDayASC_1("gove_exam");

if($rs)
	{	
			while($row=mysqli_fetch_assoc($rs))
			{																			

			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Days List";
			
if($row["day"]<='8')
            {
$showdays=$obj->fetchById($row["day"],"days","id");                
$info["days"]=$showdays['days'];  
                
                
$info["id"]=$row['id'];
$info["exam_name"] = $row['exam_name'];
$info["subject"] = $row['subject'];
$info["exam_type"] = $row['exam_type'];
$info["time_dur"] = $row['time_dur'];
$info["start_time"] = $row['start_time'];
$info["end_time"] = $row['end_time'];
$info["numbers_of_que"] = $row['numbers_of_que'];
$info["total_marks"] = $row['total_marks'];
$info["q_marks_pluse"] = $row['q_marks_pluse'];
$info["q_mark_min"] = $row['q_mark_min'];
$info["each_set_question"] = $row['each_set_question'];
$info["status"] = $row['status'];


$info["show_status"]='1';
                //$info["add_task"] = $row['add_task'];
            }
            else
            {

if($row["day"]<=$days2)
            {
$showdays=$obj->fetchById($row["day"],"days","id");                
$info["days"]=$showdays['days'];  
                
                
$info["id"]=$row['id'];
$info["exam_name"] = $row['exam_name'];
$info["subject"] = $row['subject'];
$info["exam_type"] = $row['exam_type'];
$info["time_dur"] = $row['time_dur'];
$info["start_time"] = $row['start_time'];
$info["end_time"] = $row['end_time'];
$info["numbers_of_que"] = $row['numbers_of_que'];
$info["total_marks"] = $row['total_marks'];
$info["q_marks_pluse"] = $row['q_marks_pluse'];
$info["q_mark_min"] = $row['q_mark_min'];
$info["each_set_question"] = $row['each_set_question'];
$info["status"] = $row['status'];                
                
$info["show_status"]='1';
                //$info["add_task"] = $row['add_task'];
            }
            else
            {
$showdays=$obj->fetchById($row["day"],"days","id");                
$info["days"]=$showdays['days'];                  
                
                
$info["id"]=$row['id'];
$info["exam_name"] = $row['exam_name'];
$info["subject"] = $row['subject'];
$info["exam_type"] = $row['exam_type'];
$info["time_dur"] = $row['time_dur'];
$info["start_time"] = $row['start_time'];
$info["end_time"] = $row['end_time'];
$info["numbers_of_que"] = $row['numbers_of_que'];
$info["total_marks"] = $row['total_marks'];
$info["q_marks_pluse"] = $row['q_marks_pluse'];
$info["q_mark_min"] = $row['q_mark_min'];
$info["each_set_question"] = $row['each_set_question'];
$info["status"] = $row['status'];

$info["show_status"]='0';
            }
            }

			
		array_push($response["exam_days"], $info);
}
		echo json_encode($response);
}

else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;

array_push($response["exam_days"]);
echo json_encode($response);
}
}
}
}
}
else
{
$user44=$obj->fetchByIdByStatus($user_id,"user_register_goverment","id","pstatus",0);

if($user44)
{

$now1 = time(); // or your date as well
$your_date1 = strtotime($user44['register_date']);
$datediff1 = $now1 - $your_date1;
$da11=round($datediff1 / (60 * 60 * 24));

if($da11=='0')
{
$da110= $da11+1;
}
else
{
$da110=$da11+1;
}



$oo1=$obj->fetchById($da110,"days","days");

//$days414=$oo1['id'];

$days21=$oo1['days'];
    
    
    if($user44['id']=='')
    {
        $response["msg"] = "No Record Found";
        $response["error"] =true;
        $response["success"] =0;
        
        @array_push($response["exam_days"]);
        echo json_encode($response);
    }
    else
    {

$rs11=$obj->fetchAllDetailByDayASC_1("gove_exam");

if($rs11)
	{	
		while($row11=mysqli_fetch_assoc($rs11))
		{																			

			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Days List";

if($row11["day"]<='3')
{
    
$showdays=$obj->fetchById($row11["day"],"days","id");                
$info["days"]=$showdays['days'];      
                
$info["id"]=$row11['id'];
$info["exam_name"] = $row11['exam_name'];
$info["subject"] = $row11['subject'];
$info["exam_type"] = $row11['exam_type'];
$info["time_dur"] = $row11['time_dur'];
$info["start_time"] = $row11['start_time'];
$info["end_time"] = $row11['end_time'];
$info["numbers_of_que"] = $row11['numbers_of_que'];
$info["total_marks"] = $row11['total_marks'];
$info["q_marks_pluse"] = $row11['q_marks_pluse'];
$info["q_mark_min"] = $row11['q_mark_min'];
$info["each_set_question"] = $row11['each_set_question'];
$info["status"] = $row11['status']; 

$info["show_status"]='1';
                
//$info["add_task"] = $row['add_task'];
            }
            else
            {
                
$showdays=$obj->fetchById($row11["day"],"days","id");                
$info["days"]=$showdays['days'];                 
                
                
$info["id"]=$row11['id'];
$info["exam_name"] = $row11['exam_name'];
$info["subject"] = $row11['subject'];
$info["exam_type"] = $row11['exam_type'];
$info["time_dur"] = $row11['time_dur'];
$info["start_time"] = $row11['start_time'];
$info["end_time"] = $row11['end_time'];
$info["numbers_of_que"] = $row11['numbers_of_que'];
$info["total_marks"] = $row11['total_marks'];
$info["q_marks_pluse"] = $row11['q_marks_pluse'];
$info["q_mark_min"] = $row11['q_mark_min'];
$info["each_set_question"] = $row11['each_set_question'];
$info["status"] = $row11['status'];
                

$info["show_status"]='0';

            }

			
		array_push($response["exam_days"], $info);
}
		echo json_encode($response);
}

else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["exam_days"]);
echo json_encode($response);
}
}
}
else
{



$user=$obj->fetchByIdByStatus($user_id,"user_register_goverment","id","pstatus",1);

//echo $user['success_date'];

$now = time(); // or your date as well
$your_date = strtotime($user['success_date']);
$datediff = $now - $your_date;
$da=round($datediff / (60 * 60 * 24));
$da;

if($da=='0')
{
   $da1= $da+3;
}
else
{
    $da1=$da+3;
}



  $oo=$obj->fetchById($da1,"days","days");
   $days44=$oo['id'];
    $days2=$oo['days'];


                
if($user_id=='')
{
    $response["msg"] = "No Record Found";
    $response["error"] =true;
    $response["success"] =0;
    
    @array_push($response["exam_days"]);
    echo json_encode($response);
}
else
{
    if($user['id']=='')
    {
        $response["msg"] = "No Record Found";
        $response["error"] =true;
        $response["success"] =0;
        
        @array_push($response["exam_days"]);
        echo json_encode($response);
    }
    else
    {

$rs=$obj->fetchAllDetailByDayASC_1("gove_exam");

if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{																			

			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Days List";
			
            if($row["day"]<='4')
            {

$showdays=$obj->fetchById($row["day"],"days","id");                
$info["days"]=$showdays['days']; 

$info["id"]=$row['id'];
$info["exam_name"] = $row['exam_name'];
$info["subject"] = $row['subject'];
$info["exam_type"] = $row['exam_type'];
$info["time_dur"] = $row['time_dur'];
$info["start_time"] = $row['start_time'];
$info["end_time"] = $row['end_time'];
$info["numbers_of_que"] = $row['numbers_of_que'];
$info["total_marks"] = $row['total_marks'];
$info["q_marks_pluse"] = $row['q_marks_pluse'];
$info["q_mark_min"] = $row['q_mark_min'];
$info["each_set_question"] = $row['each_set_question'];
$info["status"] = $row['status'];
                
$info["show_status"]='1';
                
            }
            else
            {

if($row["day"]<=$days2)
            {
                
$showdays=$obj->fetchById($row["day"],"days","id");                
$info["days"]=$showdays['days'];                 
                
$info["id"]=$row['id'];
$info["exam_name"] = $row['exam_name'];
$info["subject"] = $row['subject'];
$info["exam_type"] = $row['exam_type'];
$info["time_dur"] = $row['time_dur'];
$info["start_time"] = $row['start_time'];
$info["end_time"] = $row['end_time'];
$info["numbers_of_que"] = $row['numbers_of_que'];
$info["total_marks"] = $row['total_marks'];
$info["q_marks_pluse"] = $row['q_marks_pluse'];
$info["q_mark_min"] = $row['q_mark_min'];
$info["each_set_question"] = $row['each_set_question'];
$info["status"] = $row['status'];
                
$info["show_status"]='1';
                
            }
            else
            {
                
$showdays=$obj->fetchById($row["day"],"days","id");                
$info["days"]=$showdays['days'];                 

$info["id"]=$row['id'];
$info["exam_name"] = $row['exam_name'];
$info["subject"] = $row['subject'];
$info["exam_type"] = $row['exam_type'];
$info["time_dur"] = $row['time_dur'];
$info["start_time"] = $row['start_time'];
$info["end_time"] = $row['end_time'];
$info["numbers_of_que"] = $row['numbers_of_que'];
$info["total_marks"] = $row['total_marks'];
$info["q_marks_pluse"] = $row['q_marks_pluse'];
$info["q_mark_min"] = $row['q_mark_min'];
$info["each_set_question"] = $row['each_set_question'];
$info["status"] = $row['status'];
                
$info["show_status"]='0';
            }
            }

			
		array_push($response["exam_days"], $info);
}
		echo json_encode($response);
}

else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;

array_push($response["exam_days"]);
echo json_encode($response);
}
}
}
}    

}



?>