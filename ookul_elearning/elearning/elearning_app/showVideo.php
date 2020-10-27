<?php
include_once("../include/database.php");
$obj= new database();
$info=array();
$info1=array();
$response["subject_wise"] = array();
$subject_id=$_GET['subject'];

$rows=$obj->fetchChapterBySubjectId($subject_id);

//continue
if($rows){
 /*  Array
(
    [0] => Array
        (
            [subject_id] => 1
            [subject_image] => 
            [chapter_id] => 1
            [chapter] => Algebra
        )

)*/
    for($i=0;$i<count($rows);$i++){
        $subject_id=$rows[$i]['subject_id'];
        $subject_image=$rows[$i]['subject_image'];
        $chapter_id=$rows[$i]['chapter_id'];
       // $info["chapter"]=$rows[$i]['chapter'];
          //  array_push($response["subject_wise"], $info);
        $optional_module=$obj->fetchOptionalModuleBySubjectIdChapterId($subject_id,$chapter_id);
            for($j=0;$j<count($optional_module);$j++){
               
                $res=array("chapter"=>$rows[$i]['chapter'],"topic_name"=>$optional_module[$j]['topic_name'],"topic_image"=>$optional_module[$j]['topic_image'],"video_name"=>$optional_module[$j]['video_name'],"thumbnail"=>$optional_module[$j]['thumbnail'],"video"=>$optional_module[$j]['video'],"status"=>$optional_module[$j]['status']);
                  array_push($response["subject_wise"], $res);
            }
         
       
    }
}

  if(!empty($response)){
	  echo json_encode(array("msg"=>"","error"=>false,"success"=>1,"subject_image"=>$subject_image,"data"=>$response["subject_wise"]));
  }else{
	  echo json_encode(array("msg"=>"There is no records","error"=>true,"success"=>0,"subject_image"=>$subject_image));
  }

?>