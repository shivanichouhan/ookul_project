<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$info1=array();
$response["chapter_wise"] = array();


 
$subject=$_POST['subject'];
 
$topic=$_POST['topics'];


//$chapters=$obj->fetchDetailById($subject,"day_wise_topic","subject");

$chapters=$obj->fetchDetailByIdByStatus($topic,"main_topic_wbsc","id","subject",$subject);

$chapter_rep = array();

while($chapter=mysqli_fetch_assoc($chapters)){
    
	//  $topics=$obj->fetchDetailById_newasc_007($chapter['id'],"gover_topic","topic");
	  
	  $topics=$obj->fetchDetailByIdByStatus($topic,"wbsc_videos","topics","subject",$subject);
	  
	  $topic_rep = array();
	  while($topic=mysqli_fetch_assoc($topics)){
		$topic_rep[] = $topic;
	  }
	  $chapter['topics_paid']=$topic_rep;
	  $chapter_rep[]= $chapter;
  }
  if(!empty($chapter_rep)){
	  echo json_encode(array("msg"=>"","error"=>false,"success"=>1,"data_paid"=>$chapter_rep));
  }else{
	  echo json_encode(array("msg"=>"There is no records","error"=>true,"success"=>0,"topic_image"=>$topic_image));
  }

?>