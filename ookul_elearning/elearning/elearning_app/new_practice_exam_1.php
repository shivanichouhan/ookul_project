<?php
include"../include/database.php";
$obj=new database();
$info=array();


$response["exam_days"] = array();

$user_id=$_POST['user_id'];

$rs=$obj->fetchAllDetailByIdByStatus_subscribtion($user_id, "gov_order","user_id","status","1");
 
 

$rs11=$obj->fetchAllDetailByDayASC_1("gove_exam");

if($rs11)
{	
		while($row11=mysqli_fetch_assoc($rs11))
		{																			

			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Exam List";

      
                
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
$info["free_status"] = $row11['free_status'];                
            
       
			
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





?>