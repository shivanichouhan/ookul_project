<?php 
include"../include/database.php";
$obj=new database();

$info=array();
$response["examschedule"] = array();

$date4=date('Y-m-d');

  $cdate=$_POST['cdate'];
  $type=$_POST['type'];
  
if($cdate==$date4)
{
    

   
$rs00=$obj->fetchByIdByStatus88884448($cdate,"gove_exam","to_date","status",1,"exam_type",$type);

if($rs00)
{
    
    
  
$response["error"]=false;
$response["success"] =1;
$response["msg"] = "Online Exam Schedule";
 $info["id"] = $rs00['id'];
 $info["exam_type_id"] = $rs00['exam_type_id'];
 $info["to_date"] = $rs00['to_date'];
 $info["from_date"] = $rs00['from_date'];
 if($rs00['exam_type']=='1')
 {
 $info["exam_type"] = "Practise";
 }
 if($rs00['exam_type']=='2')
{
     $info["exam_type"] = "Rank";
}

$info["time_dur"] = $rs00['time_dur'];
 $info["start_time"] = $rs00['start_time'];
 $info["numbers_of_que"]=$rs00['numbers_of_que'];
 $info["total_marks"] = $rs00['total_marks'];

 $info["pluse_marks"]=$rs00['pluse_marks'];
  $info["min_mark"] = $rs00['min_mark'];
 $info["status"] = $rs00['status'];

@array_push($response["examschedule"], $info);
echo json_encode($response);
}
else
{
$response["msg"] = "No Exam Details Found ";
$response["error"] =true;
$response["success"] =0;
@array_push($response["examschedule"]);
echo json_encode($response);

}
}
else
{
$info["msg"] = "Not Recod Found ";
$info["error"] =true;
$info["success"] =0;
@array_push($response["ExamSchedule"],$info);
echo json_encode($info);

}
?>