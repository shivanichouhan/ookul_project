<?php 
include"../include/database.php";
$obj=new database();

$info=array();
$date=date("Y-m-d");

 $response["check_schadule"] = array();
 $exam_id=$_POST['exam_id']; 
 $user_id=$_POST['user_id'];
 
 
$exam=$obj->fetchById($exam_id,"gove_exam","id");

if($user_id){
$days;
$exam_days;
if($exam_id==5){
$day= date('l');
if($user_id){

$s=date('H:i:s');
              
            $start_time=$exam['start_time'];
          
           
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
}
else
{
   $response["msg"] = "Exam Already Given";
                $response["error"] =true;
                $response["success"] =0;
                @array_push($response["check_schadule"]);
                echo json_encode($response);
}
}else{
    
$day= date('l');
if($day=='Monday')
{
   $days='m';
    $exam_days=$exam['monday'];
      $tes=$obj->fetchByIdByStatus00078952($exam_id,"question_answer_gov","exam_type_id","user_id",$user_id,"date",$date);
        if($tes)
        {
              $gdate= $tes['date'];
         
            $cdate=date('Y-m-d');
            //date('Y-m-d');
            if($gdate == $cdate )
            {
              $response["msg"] = "Exam Already Given";
                $response["error"] =true;
                $response["success"] =0;
                @array_push($response["check_schadule"]);
                echo json_encode($response);
             }
             else
             {
                 $s=date('H:i:s');
              
                     
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
                        
            
            }
         
        }
        else
        {
              $s=date('H:i:s');
          
             $start_time=$exam['start_time'];
            
           
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
            
               
            
            
        }
    
 
}
if($day=='Tuesday')
{
    $days='t';
    $exam_days=$exam['tuesday'];
   $tes=$obj->fetchByIdByStatus00078952($exam_id,"question_answer_gov","exam_type_id","user_id",$user_id,"date",$date);
        if($tes)
        {
            $gdate= $tes['date'];
         
            $cdate=date('Y-m-d');
            //date('Y-m-d');
            if($gdate == $cdate )
            {
                $response["msg"] = "Exam Already Given";
                $response["error"] =true;
                $response["success"] =0;
                @array_push($response["check_schadule"]);
                echo json_encode($response);
             }
             else
             {
                 $s=date('H:i:s');
              
            $start_time=$exam['start_time'];
          
           
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
             
          }     
            }
            else
            {
              $s=date('H:i:s');
          
             $start_time=$exam['start_time'];
            
           
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
            
            
        }
    
}
if($day=='Wednesday')
{
  $days='w';
    $exam_days=$exam['wednesday'];
   $tes=$obj->fetchByIdByStatus00078952($exam_id,"question_answer_gov","exam_type_id","user_id",$user_id,"date",$date);
        if($tes)
        {
              $gdate= $tes['date'];
         
            $cdate=date('Y-m-d');
            //date('Y-m-d');
            if($gdate == $cdate )
            {
              $response["msg"] = "Exam Already Given";
                $response["error"] =true;
                $response["success"] =0;
                @array_push($response["check_schadule"]);
                echo json_encode($response);
             }
             else
             {
                 $s=date('H:i:s');
              
            $start_time=$exam['start_time'];
          
           
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
            
            }
         
        }
        else
        {
              $s=date('H:i:s');
          
             $start_time=$exam['start_time'];
            
            
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
             
            
        }
    
}
if($day=='Thursday')
{
    $days='thu';
    $exam_days=$exam['thursday'];
    $tes=$obj->fetchByIdByStatus00078952($exam_id,"question_answer_gov","exam_type_id","user_id",$user_id,"date",$date);
        if($tes)
        {
              $gdate= $tes['date'];
         
            $cdate=date('Y-m-d');
            //date('Y-m-d');
            if($gdate == $cdate )
            {
              $response["msg"] = "Exam Already Given";
                $response["error"] =true;
                $response["success"] =0;
                @array_push($response["check_schadule"]);
                echo json_encode($response);
             }
             else
             {
                 $s=date('H:i:s');
              
            $start_time=$exam['start_time'];
          
            
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
            
            }
         
        }
        else
        {
              $s=date('H:i:s');
          
             $start_time=$exam['start_time'];
            
           
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
            
            
        }
    
}
if($day=='Friday')
{
   $days='f';
   $exam_days=$exam['friday'];
 $tes=$obj->fetchByIdByStatus00078952($exam_id,"question_answer_gov","exam_type_id","user_id",$user_id,"date",$date);
        if($tes)
        {
             
            //date('Y-m-d');
            if($gdate == $cdate )
            {
              $response["msg"] = "Exam Already Given";
                $response["error"] =true;
                $response["success"] =0;
                @array_push($response["check_schadule"]);
                echo json_encode($response);
             }
             else
             {
                 $s=date('H:i:s');
              
            $start_time=$exam['start_time'];
          
            
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
             
            }
         
        }
        else
        {
              $s=date('H:i:s');
          
             $start_time=$exam['start_time'];
            
            
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
            
            
        }
    

}
if($day=='Saturday')
{
   $days='s';
   $exam_days=$exam['saturday'];
  $tes=$obj->fetchByIdByStatus00078952($exam_id,"question_answer_gov","exam_type_id","user_id",$user_id,"date",$date);
        if($tes)
        {
              $gdate= $tes['date'];
         
            $cdate=date('Y-m-d');
            //date('Y-m-d');
            if($gdate == $cdate )
            {
              $response["msg"] = "Exam Already Given";
                $response["error"] =true;
                $response["success"] =0;
                @array_push($response["check_schadule"]);
                echo json_encode($response);
             }
             else
             {
                 $s=date('H:i:s');
              
            $start_time=$exam['start_time'];
          
            
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
            
            }
         
        }
        else
        {
              $s=date('H:i:s');
          
             $start_time=$exam['start_time'];
          
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
            
            
        }
    
}
if($day=='Sunday')
{
    $days='sun';

    $exam_days=$exam['sunday'];
 $tes=$obj->fetchByIdByStatus00078952($exam_id,"question_answer_gov","exam_type_id","user_id",$user_id,"date",$date);
        if($tes)
        {
              $gdate= $tes['date'];
         
            $cdate=date('Y-m-d');
            //date('Y-m-d');
            if($gdate == $cdate )
            {
              $response["msg"] = "Exam Already Given";
                $response["error"] =true;
                $response["success"] =0;
                @array_push($response["check_schadule"]);
                echo json_encode($response);
             }
             else
             {
                 $s=date('H:i:s');
              
            $start_time=$exam['start_time'];
          
          
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
             
            }
         
        }
        else
        {
              $s=date('H:i:s');
          
             $start_time=$exam['start_time'];
            
                 $response["error"] =false;
    			$response["success"] =1;
    			$response["msg"] = "Verify";
    			$info["exam_id"]=$exam['id'];
    			 @array_push($response["check_schadule"], $info);
                 echo json_encode($response);
            
            
        }
    
}
else
{
  
}
}
}else{
   $response["msg"] = "Please add user id";
                $response["error"] =true;
                $response["success"] =0;
                @array_push($response["check_schadule"]);
                echo json_encode($response); 
}









?>