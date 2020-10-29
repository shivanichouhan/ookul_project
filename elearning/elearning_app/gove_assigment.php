<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

  $response["assigment"] = array();
  //$day=$_POST['day'];
  $subject=$_POST['subject'];
  $topic=$_POST['topic'];
  
  $add=0;

      if($subject=='')
      {
        $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found1";
        @array_push($response["assigment"]);
        echo json_encode($response);
      }
      else
      {
            if($topic=='')
            {
        $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found1";
        @array_push($response["assigment"]);
        $sub12=$obj->fetchByIdByStatus($subject52,"assign_subject","id","days",$day);
        $sub112=$obj->fetchById($subject,"gov_subject","id");
  $subject15=$sub112['id'];

 if($subject15=='1')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='mathematics.png'; 
        }
        if($subject15=='2')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='english.png'; 
        }
        if($subject15=='3')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='biology.png'; 
        }
        if($subject15=='4')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_intelligence.png'; 
        }
        if($subject15=='5')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_knowledge.png'; 
        }
        if($subject15=='7')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='chemistry.png'; 
        }
        if($subject15=='8')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='physics.png'; 
        }
        if($subject15=='9')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='history.png'; 
        }
        if($subject15=='10')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='geography.png'; 
        }
         if($subject15=='11')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='economics.png'; 
        }
         if($subject15=='12')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='constitution.png'; 
        }
        if($subject15=='13')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='child_psycology.png'; 
        }
           if($subject15=='16')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='technology.png'; 
        }
          if($subject15=='17')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='current_affairs.png'; 
        }
        echo json_encode($response);
            }
            else
            {
                
                $u0=0;
                  
$rs11=$obj->fetchDetailByIdBystatusbysubje($subject,$topic);
//fetchDetailByIdBystatusbysubject($subject,"assigment_gov","subject"); 
if($rs11)
{
    
while($row11=mysqli_fetch_assoc($rs11))
{
    $u0=$u0+1;
}

}
  if($u0=='0')
  {
      $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["assigment"]);
        $subject52=$_POST['subject'];

$sub12=$obj->fetchByIdByStatus($subject52,"assign_subject","id","days",$day);
$sub112=$obj->fetchById($subject52,"gov_subject","id");
  $subject15=$sub112['id'];

 if($subject15=='1')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='mathematics.png'; 
        }
        if($subject15=='2')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='english.png'; 
        }
        if($subject15=='3')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='biology.png'; 
        }
        if($subject15=='4')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_intelligence.png'; 
        }
        if($subject15=='5')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_knowledge.png'; 
        }
        if($subject15=='7')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='chemistry.png'; 
        }
        if($subject15=='8')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='physics.png'; 
        }
        if($subject15=='9')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='history.png'; 
        }
        if($subject15=='10')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='geography.png'; 
        }
         if($subject15=='11')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='economics.png'; 
        }
         if($subject15=='12')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='constitution.png'; 
        }
        if($subject15=='13')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='child_psycology.png'; 
        }
           if($subject15=='16')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='technology.png'; 
        }
          if($subject15=='17')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='current_affairs.png'; 
        }
        echo json_encode($response);
  }
  else
  {
  
$rs11=$obj->fetchDetailByIdBystatusbysubje($subject,$topic);
//fetchDetailByIdBystatusbysubject($subject,"assigment_gov","subject"); 
if($rs11)
{
    
while($row11=mysqli_fetch_assoc($rs11))
{ 
    $rs1145=$obj->fetchById($row11['days'],"days","id"); 
    //  $subject=$obj->fetchById($row11['subject'],"gov_subject","id");
     
     
    
$subject=$obj->fetchById($subject,"gov_subject","id");

      $topic=$obj->fetchById($topic,"day_wise_topic","id");
        $response["error"] =false;
        $response["success"] =1;
        $response["msg"] = "Assigment day wise";
       $info["id"]=$row11['id'];
    
           $info["subject"]=$subject['subject'];
 
           $info["topic"]=$topic['topic'];

       
        $info["type"] = $row11['type'];
       
        $info["question"] = stripslashes($row11['question']);
        $info["option1"] = stripslashes($row11['option1']);
        $info["option2"] = stripslashes($row11['option2']);
        $info["option3"] = stripslashes($row11['option3']);
        $info["option4"] = stripslashes($row11['option4']);
        $info["soluction"]=stripslashes($row11['soluction']);
        $info["answer"] = $row11['answer'];
        if($row11['question_image']=='0')
        {
            $info["question_image"] = "";
        }
        else
        {
            $info["question_image"] = $row11['question_image'];
        }
        if($row11['option_img1']=='0')
        {
            $info["option_img1"] ="";
        }
        else
        {
            $info["option_img1"] = $row11['option_img1'];
        }
        if($row11['option_img12']=='0')
        {
            $info["option_img12"] ="";
        }
        else
        {
        $info["option_img12"] = $row11['option_img12'];
        }
        if($row11['option_img3']=='0')
        {
            $info["option_img3"] = "";
        }
        else
        {
         $info["option_img3"] = $row11['option_img3'];
        }
        if($row11['option_img4']=='0')
        {
            $info["option_img4"] ="";
        }
        else
        {
        $info["option_img4"] = $row11['option_img4'];
        }
        if($row11['soluction_img']=='0')
        {
            $info["soluction_img"]="";
        }
        else
        {
        $info["soluction_img"]=$row11['soluction_img'];
        }
        @array_push($response["assigment"],$info);
    
 

}
  $subject5=$_POST['subject'];

  $sub1=$obj->fetchByIdByStatus($subject5,"assign_subject","id","days",$day);
  $sub11=$obj->fetchById($subject5,"gov_subject","id");
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
echo json_encode($response);
}
else
{
      $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["assigment"]);
        $subject51=$_POST['subject'];

$sub11=$obj->fetchByIdByStatus($subject,"assign_subject","id","days",$day);
$sub110=$obj->fetchById($subject,"gov_subject","id");
  $subject14=$sub110['id'];

 if($subject14=='1')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='mathematics.png'; 
        }
        if($subject14=='2')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='english.png'; 
        }
        if($subject14=='3')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='biology.png'; 
        }
        if($subject14=='4')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_intelligence.png'; 
        }
        if($subject14=='5')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_knowledge.png'; 
        }
        if($subject14=='7')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='chemistry.png'; 
        }
        if($subject14=='8')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='physics.png'; 
        }
        if($subject14=='9')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='history.png'; 
        }
        if($subject14=='10')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='geography.png'; 
        }
         if($subject14=='11')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='economics.png'; 
        }
         if($subject14=='12')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='constitution.png'; 
        }
        if($subject14=='13')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='child_psycology.png'; 
        }
           if($subject14=='16')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='technology.png'; 
        }
          if($subject14=='17')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='current_affairs.png'; 
        }
        echo json_encode($response);

    
}

}

}
}
   



?>