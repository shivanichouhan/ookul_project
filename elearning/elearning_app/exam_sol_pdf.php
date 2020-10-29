<?php

include_once("../include/database.php");
$obj= new database();
$info=array();
$response["solution_pdf"] = array();

   $examid=$_POST['exam_type_id'];
   
  // $exam_type=$_POST['exam_type'];

if($examid=='')
{
    
    $response["msg"] = "No record Found";
    $response["error"] =true;
    $response["success"] =0;
    @array_push($response["solution_pdf"]);
    echo json_encode($response);
    
}
else
{
   
            $rs=$obj->fetchById($examid,"exam_sol_pdf","examid");
            
            $response["error"] =false;
            $response["success"] =1;
            $response["msg"] = "Solution Pdf";
            
            $info["id"] = $rs['id'];
            $info["examid"] = $rs['examid'];
            $info["exam_pdf"]  = $rs['exam_pdf'];
            $info["status"]  = $rs['status'];
           
            array_push($response["solution_pdf"], $info);
            echo json_encode($response);        
    }

?>