<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["rank_exam_list"] = array();

$user_id=$_POST['user_id'];

if($user_id){

$gvar=0;

$rs=$obj->fetchAllDetailById(2,"gove_exam","exam_type"); 


if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$gvar= $gvar + 1;
}
}

if($gvar==0){
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["rank_exam_list"]);
echo json_encode($response);


}else{
    
$rs=$obj->fetchAllDetailById(2,"gove_exam","exam_type"); 

if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "Rank Exam List";






 $date=date("d/m/Y");
 $dat1=$row['start_time'];
 $dat2=$row['end_time']; 

$dats1 = str_replace('/', '-', $dat1);
$dats12 = date('Y-m-d', strtotime($dats1)); 
$dats11= strtotime($dats12); 

$dats21 = str_replace('/', '-', $dat2);
$dats212 = date('Y-m-d', strtotime($dats21));
 $dats211= strtotime($dats212); 

$datesas = str_replace('/', '-', $date);
$dateasas = date('Y-m-d', strtotime($datesas));
 $dateasas1= strtotime($dateasas); 



if($dateasas1>=$dats11 and $dateasas1<=$dats211){
                                    
                                   $showstatus=1;
                                    
                                    
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
                                     
                                     
                                     $info["show_status"]=$showstatus;
                                     
                                     
                                     
                                     array_push($response["rank_exam_list"], $info);

}elseif($dats11 < $dateasas1){



$showstatus=0;
                                    
                                    
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
                                     
                                     
                                     $info["show_status"]=$showstatus;
                                     
                                    
                                    
                                    array_push($response["rank_exam_list"], $info);
                                     
}else{
    

$showstatus=0;
                                    
                                    
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
                                     
                                     
                                     $info["show_status"]=$showstatus;
                                     
                                     
                                     
                                     array_push($response["rank_exam_list"], $info);
                                     
                                   //  array_push($response["rank_exam_list"], $info);    
}                                     




}
echo json_encode($response);
}
else
{
$response["msg"] = "No Record Found";
$response["error"] = true;
$response["success"] = 0;
array_push($response["rank_exam_list"]);
echo json_encode($response);
}

}

}else{
 
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["rank_exam_list"]);
echo json_encode($response);  
}
?>