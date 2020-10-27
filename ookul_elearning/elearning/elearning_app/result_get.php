<?php
include"../include/database.php";
$obj=new database();
$info=array();

$response["result"] = array();

$id=$_POST['exam_id']; 
 
$ans=$obj->fetchByIdByStatus($id,"question_answer_gov","id","status",1);


if($ans)

{
    	$response["error"] =false;
		$response["success"] =1;
		$response["msg"] = "Result";
		
		
		//$usa=$obj->fetchById($ans,"question_answer_gov","id");
		
		$info["id"]=$ans['id'];
		$info["exam_type_id"]=$ans['exam_type_id'];
		//$info["question"]=$ans['question'];
		
		$exm=$obj->fetchById($ans['exam_type_id'],"gove_exam","id");
		$info["total_marks"]=$exm["total_marks"];
		$info["min_mark"]=$exm["min_mark"];
		$info["time_dur"]=$exm["time_dur"];
		$decodequs = json_decode($ans['question'], true);
		
        foreach($decodequs as $uu =>$value)
				    {
				        
				      //$info["question"][]= $decodequs[$uu];
				      
				            $ans4=$obj->fetchById($decodequs[$uu]['question'],"gover_multiple_question","id");
				      
				            $ans4['answer'];
				            $qu=0;
				            $qu1=0;
				     		$decodeans = json_decode($ans['answer'], true);
                             foreach($decodeans as $uu2 =>$value)
                             {
                            	//print_r( $decodeans[$uu2]);
                                //	$info["answer"][]=$decodeans[$uu2];
                            	// $decodequs[$uu]['answer'];
                            	//  $ans4['answer'];
                            	
                            	if($decodequs[$uu]['answer'] == $ans4['answer'])
                            	{
                            	   
                            	    $qu=$qu+$exm['mark'];
                            	   $info["question_pluse"] =$qu;
                            	}
                            	else
                            	{
                            	    $qu1=$qu1+$exm['min_mark'];
                            	    $info["question_minus"] = $qu1;
                            	}
                             }
				    }
		  array_push($response["result"], $info);
             echo json_encode($response);
}
else
{
    $response["msg"] = "No record Found";
    $response["error"] =true;
    $response["success"] =0;
    array_push($response["result"]);
    echo json_encode($response);
}


?>