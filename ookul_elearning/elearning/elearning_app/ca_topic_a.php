<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$info1=array();
$response["chapter_wise"] = array();

$subject=$_POST['subject'];
$oo=$obj->fetchById($subject,"current_affairs_subject","id");
 if($ca_subject_image=='')
 {
    $ca_subject_image="current_affairs.png";
     
 }
 else
 {
     $ca_subject_image=$oo['image'];
 }

$chapters=$obj->fetchDetailByIdajay($subject,"ca_topic","subject");
$chapter_rep = array();
while($chapter=mysqli_fetch_assoc($chapters)){
	  $topics=$obj->fetchDetailByIdajay($chapter['id'],"ca_video_class","topic");
	  $topic_rep = array();
	  while($topic=mysqli_fetch_assoc($topics)){
		$topic_rep[] = $topic;
	  }
	  $chapter['topics']=$topic_rep;
	  $chapter_rep[]= $chapter;
  }
  if(!empty($chapter_rep)){
	  echo json_encode(array("msg"=>"","error"=>false,"success"=>1,"subject_image"=>$ca_subject_image,"data"=>$chapter_rep));
  }else{
	  echo json_encode(array("msg"=>"There is no records","error"=>true,"success"=>0,"subject_image"=>$ca_subject_image));
  }

?>