<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$info1=array();
$response["chapter_wise"] = array();

$subject=$_POST['subject'];

 if($subject=='1')
        {
            //$response["subject"]=$subject; 
            $topic_image='mathematics.png'; 
        }
        if($subject=='2')
        {
            //$response["subject"]=$subject; 
            $topic_image='english.png'; 
        }
        if($subject=='3')
        {
            //$response["subject"]=$subject; 
            $topic_image='biology.png'; 
        }
        if($subject=='4')
        {
            //$response["subject"]=$subject; 
            $topic_image='general_intelligence.png'; 
        }
        if($subject=='5')
        {
            //$response["subject"]=$subject; 
            $topic_image='general_knowledge.png'; 
        }
        if($subject=='7')
        {
            //$response["subject"]=$subject; 
           $topic_image='chemistry.png'; 
        }
        if($subject=='8')
        {
            //$response["subject"]=$subject; 
            $topic_image='physics.png'; 
        }
        if($subject=='9')
        {
            //$response["subject"]=$subject; 
            $topic_image='history.png'; 
        }
        if($subject=='10')
        {
            //$response["subject"]=$subject; 
            $topic_image='geography.png'; 
        }
         if($subject=='11')
        {
            //$response["subject"]=$subject; 
           $topic_image='economics.png'; 
        }
         if($subject=='12')
        {
            //$response["subject"]=$subject; 
           $topic_image='constitution.png'; 
        }
         if($subject=='13')
        {
            //$response["subject"]=$subject; 
           $topic_image='child_psycology.png'; 
        }
           if($subject=='16')
        {
            //$response["subject"]=$subject; 
            $topic_image='technology.png'; 
        }
          if($subject=='17')
        {
            //$response["subject"]=$subject; 
           $topic_image='current_affairs.png'; 
        }
$chapters=$obj->fetchDetailById($subject,"fag_topic","subject");
$chapter_rep = array();
while($chapter=mysqli_fetch_assoc($chapters)){
	  $topics=$obj->fetchDetailById($chapter['id'],"fa_video_class","topic");
	  $topic_rep = array();
	  while($topic=mysqli_fetch_assoc($topics)){
		$topic_rep[] = $topic;
	  }
	  $chapter['topics']=$topic_rep;
	  $chapter_rep[]= $chapter;
  }
  if(!empty($chapter_rep)){
	  echo json_encode(array("msg"=>"","error"=>false,"success"=>1,"topic_image"=>$topic_image,"data"=>$chapter_rep));
  }else{
	  echo json_encode(array("msg"=>"There is no Records","error"=>true,"success"=>0,"topic_image"=>$topic_image));
  }

?>