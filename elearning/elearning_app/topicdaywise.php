<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["daywise"] = array();
$day=$_POST['day'];
$subject=$_POST['subject'];

if($day=='')
{

$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;

$sub110=$obj->fetchByIdByStatus($subject,"assign_subject","id","days",$day);

$sub11=$obj->fetchById($sub110['subject'],"gov_subject","id");

$subject=$sub11['id'];

if($subject=='1')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='mathematics.png'; 
        }
        if($subject=='2')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='english.png'; 
        }
        if($subject=='3')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='biology.png'; 
        }
        if($subject=='4')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_intelligence.png'; 
        }
        if($subject=='5')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_knowledge.png'; 
        }
        if($subject=='7')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='chemistry.png'; 
        }
        if($subject=='8')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='physics.png'; 
        }
        if($subject=='9')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='history.png'; 
        }
        if($subject=='10')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='geography.png'; 
        }
         if($subject=='11')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='economics.png'; 
        }
         if($subject=='12')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='constitution.png'; 
        }
        if($subject=='13')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='child_psycology.png'; 
        }
           if($subject=='16')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='technology.png'; 
        }
          if($subject=='17')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='current_affairs.png'; 
        }
@array_push($response["daywise"]);
echo json_encode($response);
    
}
else
{
    $uuuu=0;
    $rs=$obj->fetchDetailByIdByStatus($day,"day_wise_topic","days","subject",$subject);
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{
		    $uuuu=$uuuu+1;
		}
	}
 if($uuuu==0)
 {
     $response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
$sub110=$obj->fetchByIdByStatus($subject,"assign_subject","id","days",$day);

$sub11=$obj->fetchById($sub110['subject'],"gov_subject","id");

$subject1=$sub11['id'];
 if($subject1=='1')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='mathematics.png'; 
        }
        if($subject1=='2')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='english.png'; 
        }
        if($subject1=='3')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='biology.png'; 
        }
        if($subject1=='4')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_intelligence.png'; 
        }
        if($subject1=='5')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_knowledge.png'; 
        }
        if($subject1=='7')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='chemistry.png'; 
        }
        if($subject1=='8')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='physics.png'; 
        }
        if($subject1=='9')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='history.png'; 
        }
        if($subject1=='10')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='geography.png'; 
        }
         if($subject1=='11')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='economics.png'; 
        }
         if($subject1=='12')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='constitution.png'; 
        }
        if($subject1=='13')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='child_psycology.png'; 
        }
           if($subject1=='16')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='technology.png'; 
        }
          if($subject1=='17')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='current_affairs.png'; 
        }
@array_push($response["daywise"]);
echo json_encode($response);
 }
 else
 {
    
$rs=$obj->fetchDetailByIdByStatus($day,"day_wise_topic","days","subject",$subject);
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{	
			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Topic";
			$info["id"]=$row['id'];
			$day1=$obj->fetchById($row['days'],"days","id");
			$info["day"] = $day1['days'];
			$sub1=$obj->fetchById($row['subject'],"gov_subject","id");
			$info["subject"] = $sub1['subject'];
			$info["topic"] = $row['topic'];
			

			
		array_push($response["daywise"], $info);
}
$sub110=$obj->fetchByIdByStatus($subject,"assign_subject","id","days",$day);
$sub11=$obj->fetchById($sub110['subject'],"gov_subject","id");
$subject12=$sub11['id'];
        if($subject12=='1')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='mathematics.png'; 
        }
        if($subject12=='2')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='english.png'; 
        }
        if($subject12=='3')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='biology.png'; 
        }
        if($subject12=='4')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_intelligence.png'; 
        }
        if($subject12=='5')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_knowledge.png'; 
        }
        if($subject12=='7')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='chemistry.png'; 
        }
        if($subject12=='8')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='physics.png'; 
        }
        if($subject12=='9')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='history.png'; 
        }
        if($subject12=='10')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='geography.png'; 
        }
         if($subject12=='11')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='economics.png'; 
        }
         if($subject12=='12')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='constitution.png'; 
        }
        if($subject12=='13')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='child_psycology.png'; 
        }
           if($subject12=='16')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='technology.png'; 
        }
          if($subject12=='17')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='current_affairs.png'; 
        }
		echo json_encode($response);
}

else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
$sub110=$obj->fetchByIdByStatus($subject,"assign_subject","id","days",$day);
$sub11=$obj->fetchById($sub110['subject'],"gov_subject","id");
$subject13=$sub11['id'];
 if($subject13=='1')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='mathematics.png'; 
        }
        if($subject13=='2')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='english.png'; 
        }
        if($subject13=='3')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='biology.png'; 
        }
        if($subject13=='4')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_intelligence.png'; 
        }
        if($subject13=='5')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_knowledge.png'; 
        }
        if($subject13=='7')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='chemistry.png'; 
        }
        if($subject13=='8')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='physics.png'; 
        }
        if($subject13=='9')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='history.png'; 
        }
        if($subject13=='10')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='geography.png'; 
        }
         if($subject13=='11')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='economics.png'; 
        }
         if($subject13=='12')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='constitution.png'; 
        }
        if($subject13=='13')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='child_psycology.png'; 
        }
           if($subject13=='16')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='technology.png'; 
        }
          if($subject13=='17')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='current_affairs.png'; 
        }

array_push($response["daywise"]);
echo json_encode($response);
}
}
}
?>