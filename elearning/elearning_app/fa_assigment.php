<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

$response["assigment"] = array();
  
  $subject=$_POST['subject'];
  $topic=$_POST['topic'];

  $add=0;

      if($subject=='')
      {
           $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["assigment"]);
        echo json_encode($response);
      }
      else
      {
            if($topic=='')
            {
                 $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
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
        @array_push($response["assigment"]);
        echo json_encode($response);
            }
            else
            {
                
                $u0=0;
                  
$rs11=$obj->fetchDetailByIdByStatus($subject,"fa_assigment","subject","topic",$topic);
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
          $subject10=$_POST['subject'];
           if($subject10=='1')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='mathematics.png'; 
        }
        if($subject10=='2')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='english.png'; 
        }
        if($subject10=='3')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='biology.png'; 
        }
        if($subject10=='4')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_intelligence.png'; 
        }
        if($subject10=='5')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_knowledge.png'; 
        }
        if($subject10=='7')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='chemistry.png'; 
        }
        if($subject10=='8')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='physics.png'; 
        }
        if($subject10=='9')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='history.png'; 
        }
        if($subject10=='10')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='geography.png'; 
        }
         if($subject10=='11')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='economics.png'; 
        }
         if($subject10=='12')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='constitution.png'; 
        }
         if($subject10=='13')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='child_psycology.png'; 
        }
           if($subject10=='16')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='technology.png'; 
        }
          if($subject10=='17')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='current_affairs.png'; 
        }
        echo json_encode($response);
  }
  else
  {
  
$rs11=$obj->fetchDetailByIdByStatus($subject,"fa_assigment","subject","topic",$topic);
//fetchDetailByIdBystatusbysubject($subject,"assigment_gov","subject"); 
if($rs11)
{
    
while($row11=mysqli_fetch_assoc($rs11))
{ 
  // print_r($row11);
   // $rs1145=$obj->fetchById($row11['days'],"days","id"); 
     $subject=$obj->fetchById($row11['subject'],"gov_subject","id");
      $topic=$obj->fetchById($row11['topic'],"fag_topic","id");
     


    
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
         $info["question_image"] = $row11['question_image'];
         $info["option_img1"] = $row11['option_img1'];
         $info["option_img12"] = $row11['option_img12'];
         $info["option_img3"] = $row11['option_img3'];
         $info["option_img4"] = $row11['option_img4'];
         $info["soluction_img"]=$row11['soluction_img'];
        array_push($response["assigment"],$info);
    
 

}
 $subject11=$_POST['subject'];

if($subject11=='1')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='mathematics.png'; 
        }
        if($subject11=='2')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='english.png'; 
        }
        if($subject11=='3')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='biology.png'; 
        }
        if($subject11=='4')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_intelligence.png'; 
        }
        if($subject11=='5')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_knowledge.png'; 
        }
        if($subject11=='7')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='chemistry.png'; 
        }
        if($subject11=='8')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='physics.png'; 
        }
        if($subject11=='9')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='history.png'; 
        }
        if($subject11=='10')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='geography.png'; 
        }
         if($subject11=='11')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='economics.png'; 
        }
         if($subject11=='12')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='constitution.png'; 
        }
         if($subject11=='13')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='child_psycology.png'; 
        }
           if($subject11=='16')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='technology.png'; 
        }
          if($subject11=='17')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='current_affairs.png'; 
        }
echo json_encode($response);
}
else
{
     $subject10=$_POST['subject'];
      $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
         if($subject10=='1')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='mathematics.png'; 
        }
        if($subject10=='2')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='english.png'; 
        }
        if($subject10=='3')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='biology.png'; 
        }
        if($subject10=='4')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_intelligence.png'; 
        }
        if($subject10=='5')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='general_knowledge.png'; 
        }
        if($subject10=='7')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='chemistry.png'; 
        }
        if($subject10=='8')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='physics.png'; 
        }
        if($subject10=='9')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='history.png'; 
        }
        if($subject10=='10')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='geography.png'; 
        }
         if($subject10=='11')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='economics.png'; 
        }
         if($subject10=='12')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='constitution.png'; 
        }
         if($subject10=='13')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='child_psycology.png'; 
        }
           if($subject10=='16')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='technology.png'; 
        }
          if($subject10=='17')
        {
            //$response["subject"]=$subject; 
            $response["topic_image"]='current_affairs.png'; 
        }
        @array_push($response["assigment"]);
       
        echo json_encode($response);

    
}

}

}
}




?>