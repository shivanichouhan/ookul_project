<?php

include_once("../include/database.php");
$obj= new database();
$info=array();

$response["school_exam_lists"] = array();

$rs=$obj->fetchAllDetail("school_exam"); 


if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{
    

    
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "school exam List";

$info["id"]=$row['id'];
$info["exam_name"] = $row['exam_name'];
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

array_push($response["school_exam_lists"], $info);




}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["school_exam_lists"]);
echo json_encode($response);
}
?>