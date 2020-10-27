<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

$response["ca_assigment"] = array();
  $subject=$_POST['subject'];
  $topic=$_POST['topic'];
  
  $add=0;

      if($subject=='')
      {
           $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        
        @array_push($response["ca_assigment"]);

     $response['ca_subject_image']=$oo['image'];

        echo json_encode($response);
      }
      else
      {
            if($topic=='')
            {
                 $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        $oo=$obj->fetchById($subject,"current_affairs_subject","id");
 if($ca_subject_image=='')
 {
   $response['ca_subject_image']="current_affairs.png";
     
 }
 else
 {
     $response['ca_subject_image']=$oo['image'];
 }

        @array_push($response["ca_assigment"]);
        echo json_encode($response);
            }
            else
            {
                
                $u0=0;
                  
$rs11=$obj->fetchDetailByIdByStatus($subject,"ca_assigment","subject","topic",$topic);
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
        @array_push($response["ca_assigment"]);
         $oo=$obj->fetchById($subject,"current_affairs_subject","id");
 if($ca_subject_image=='')
 {
   $response['ca_subject_image']="current_affairs.png";
     
 }
 else
 {
     $response['ca_subject_image']=$oo['image'];
 }
        echo json_encode($response);
  }
  else
  {
  
$rs11=$obj->fetchDetailByIdByStatus($subject,"ca_assigment","subject","topic",$topic);
//fetchDetailByIdBystatusbysubject($subject,"assigment_gov","subject"); 
if($rs11)
{
    
while($row11=mysqli_fetch_assoc($rs11))
{ 
    $rs1145=$obj->fetchById($row11['subject'],"current_affairs_subject","id"); 
    $rs1100=$obj->fetchById($row11['topic'],"ca_topic","id"); 



    
         $response["error"] =false;
        $response["success"] =1;
        $response["msg"] = "Assigment day wise";
       $info["id"]=$row11['id'];

        $info["subject"]=$rs1145['subject_name'];
         $info["topic"]=$rs1100['topic'];
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
        @array_push($response["ca_assigment"],$info);
    
 

}
 $oo=$obj->fetchById($subject,"current_affairs_subject","id");
 if($ca_subject_image=='')
 {
   $response['ca_subject_image']="current_affairs.png";
     
 }
 else
 {
     $response['ca_subject_image']=$oo['image'];
 }
echo json_encode($response);

}
else
{
      $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        
        @array_push($response["ca_assigment"]);
         $oo=$obj->fetchById($subject,"current_affairs_subject","id");
 if($ca_subject_image=='')
 {
   $response['ca_subject_image']="current_affairs.png";
     
 }
 else
 {
     $response['ca_subject_image']=$oo['image'];
 }
        echo json_encode($response);

    
}

}

}
}
   



?>