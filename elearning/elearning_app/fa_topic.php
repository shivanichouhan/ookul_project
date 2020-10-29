<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["fatopic"] = array();
  $subject=$_POST['subject'];
  
if($subject=='')
{

$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;

@array_push($response["fatopic"]);
echo json_encode($response);
}
else
{
    $uu=0;
    $rs=$obj->fetchDetailById($subject,"fag_topic","subject"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
    $uu=$uu+1;
}
}
    if($uu=='0')
    {
        
         $response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
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
@array_push($response["fatopic"]);
echo json_encode($response);
        
    }
    else
    {
    
$rs=$obj->fetchDetailById($subject,"fag_topic","subject"); 
if($rs)
{
while($row=mysqli_fetch_assoc($rs))
{ 
$response["error"] =false;
$response["success"] =1;
$response["msg"] = "block List";
$info["id"]=$row['id'];
$u=$obj->fetchById($row['subject'],"gov_subject","id");
$info["subject"] = $u['subject'];
$info["topic"] = $row['topic'];
$info["status"] = $row['status'];


array_push($response["fatopic"], $info);

}

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
echo json_encode($response);
}
else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
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
@array_push($response["fatopic"]);
echo json_encode($response);
}
}
}
?>