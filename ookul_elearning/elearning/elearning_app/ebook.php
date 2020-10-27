<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["ebook"] = array();

$day=$_POST['day'];

$subject=$_POST['subject'];

if($day=='')
{
    

$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["ebook"]);
echo json_encode($response);
}
else
{
    
    
    if($subject=='')
    {
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["ebook"]);
echo json_encode($response);
    }
    else
    {
    
    $uuuu=0;
    $rs=$obj->fetchDetailByIdByStatus($day,"ebook","days","subject",$subject);
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

$uu11=$obj->fetchByIdByStatus($day,"assign_subject","days","id",$subject);

$uu10=$obj->fetchById($uu11['subject'],"gov_subject","id");

  $subjecttest1=$uu10['id'];
  
if($subjecttest1=='1')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='mathematics.png'; 
        }
        if($subjecttest1=='2')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='english.png'; 
        }
        if($subjecttest1=='3')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='biology.png'; 
        }
        if($subjecttest1=='4')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_intelligence.png'; 
        }
        if($subjecttest1=='5')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_knowledge.png'; 
        }
        if($subjecttest1=='7')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='chemistry.png'; 
        }
        if($subjecttest1=='8')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='physics.png'; 
        }
        if($subjecttest1=='9')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='history.png'; 
        }
        if($subjecttest1=='10')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='geography.png'; 
        }
         if($subjecttest1=='11')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='economics.png'; 
        }
         if($subjecttest1=='12')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='constitution.png'; 
        }
        if($subjecttest1=='13')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='child_psycology.png'; 
        }
           if($subjecttest1=='16')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='technology.png'; 
        }
          if($subjecttest1=='17')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='current_affairs.png'; 
        }

@array_push($response["ebook"]);
echo json_encode($response);
 }
 else
 {
    
$rs=$obj->fetchDetailByIdByStatus($day,"ebook","days","subject",$subject);

if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{	
			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "E-Book";
			$info["id"]=$row['id'];
			$info["title"] = $row['title'];
			$info["document"] = $row['document'];
			
		array_push($response["ebook"], $info);
}
$uu101=$obj->fetchByIdByStatus($day,"assign_subject","days","id",$subject);

$uu100=$obj->fetchById($uu101['subject'],"gov_subject","id");

$subjecttest10=$uu100['id'];
  
if($subjecttest10=='1')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='mathematics.png'; 
        }
        if($subjecttest10=='2')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='english.png'; 
        }
        if($subjecttest10=='3')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='biology.png'; 
        }
        if($subjecttest10=='4')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_intelligence.png'; 
        }
        if($subjecttest10=='5')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_knowledge.png'; 
        }
        if($subjecttest10=='7')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='chemistry.png'; 
        }
        if($subjecttest10=='8')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='physics.png'; 
        }
        if($subjecttest10=='9')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='history.png'; 
        }
        if($subjecttest10=='10')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='geography.png'; 
        }
         if($subjecttest10=='11')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='economics.png'; 
        }
         if($subjecttest10=='12')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='constitution.png'; 
        }
        if($subjecttest10=='13')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='child_psycology.png'; 
        }
           if($subjecttest10=='16')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='technology.png'; 
        }
          if($subjecttest10=='17')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='current_affairs.png'; 
        }

		echo json_encode($response);
}

else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
$uu1001=$obj->fetchByIdByStatus($day,"assign_subject","days","id",$subject);

$uu1000=$obj->fetchById($uu1001['subject'],"gov_subject","id");

$subjecttest100=$uu1000['id'];

if($subjecttest100=='1')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='mathematics.png'; 
        }
        if($subjecttest100=='2')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='english.png'; 
        }
        if($subjecttest100=='3')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='biology.png'; 
        }
        if($subjecttest100=='4')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_intelligence.png'; 
        }
        if($subjecttest100=='5')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_knowledge.png'; 
        }
        if($subjecttest100=='7')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='chemistry.png'; 
        }
        if($subjecttest100=='8')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='physics.png'; 
        }
        if($subjecttest100=='9')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='history.png'; 
        }
        if($subjecttest100=='10')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='geography.png'; 
        }
         if($subjecttest100=='11')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='economics.png'; 
        }
         if($subjecttest100=='12')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='constitution.png'; 
        }
        if($subjecttest100=='13')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='child_psycology.png'; 
        }
           if($subjecttest100=='16')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='technology.png'; 
        }
          if($subjecttest100=='17')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='current_affairs.png'; 
        }

array_push($response["ebook"]);
echo json_encode($response);
}
}
}
}
?>