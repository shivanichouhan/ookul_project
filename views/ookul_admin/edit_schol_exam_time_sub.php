<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");

$id=$_POST['id'];
 $exam_name=$_POST['exam_name'];
  $subject1=$_POST['subject'];
 $subject=implode(",",$subject1);

 $exam_type=$_POST['exam_type'];
 $time_dur=$_POST['time_dur'];
 $start_time=$_POST['start_time'];
 $end_time=$_POST['end_time'];
 $numbers_of_que=$_POST['numbers_of_que'];
 $total_marks=$_POST['total_marks'];
 $q_marks_pluse=$_POST['q_marks_pluse'];
 $q_mark_min=$_POST['q_mark_min'];
 $each_set_question=$_POST['each_set_question'];




$rs=$obj->update_school_gover_exam($exam_name,$subject,$exam_type,$time_dur,$start_time,$end_time,$numbers_of_que,$total_marks,$q_marks_pluse,$q_mark_min,$each_set_question,$id);

if($rs)
{
	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Insert success');
          window.location.href='school_exam_schedule_list';
       </script>");
}
else
{
	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Not insert');
          window.location.href='school_exam_schedule_list';
       </script>");
}



?>