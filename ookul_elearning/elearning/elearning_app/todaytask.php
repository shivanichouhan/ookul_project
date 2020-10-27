<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["todaytask"] = array();

$user_id=$_POST['user_id'];
  //$day=$_POST['day'];

$user=$obj->fetchByIdByStatus($user_id,"user_register_goverment","id","pstatus",1);

    $user['success_date'];
$days2;

//$now = time(); // or your date as well
//$your_date = strtotime($user['success_date']);
//$datediff = $now - $your_date;
//$da=round($datediff / (60 * 60 * 24));
//if($da=='0')
//{
   //$da1= $da+1;
//}
//else
//{
    //$da1=$da;
//}
$now = date('d-m-Y'); // or your date as well
$your_date = $user['success_date'];
$da = $now - $your_date;
 $da1= $da+1;
 
 
  $oo=$obj->fetchById($da1,"days","days");
  $days44=$oo['id'];
 $days2=$oo['days'];
if($user_id=='')
{
    $response["msg"] = "No Class Available Today";
    $response["error"] =true;
    $response["success"] =0;
    @array_push($response["todaytask"]);
    echo json_encode($response);
}
else
{
    if($user['id']=='')
    {
        $response["msg"] = "No Class Available Today";
        $response["error"] =true;
        $response["success"] =0;
        @array_push($response["todaytask"]);
        echo json_encode($response);
    }
    else
    { $tt=0;
           $ys=$obj->fetchDetailById($days44,"assign_subject","days");
   
        if($ys)
        	{	
        		while($row=mysqli_fetch_assoc($ys))
        		{
        		    $tt=$tt+1;
        		}
        	}
        if($tt=='0')
        {
              $response["msg"] = "No Class Available Today";
            $response["error"] =true;
            $response["success"] =0;
            @array_push($response["todaytask"]);
            echo json_encode($response);
        }
        else
        {
        $ys=$obj->fetchDetailById($days44,"assign_subject","days");
   
        if($ys)
        	{	
        		while($row=mysqli_fetch_assoc($ys))
        		{																			
        
        			$response["error"] =false;
        			$response["success"] =1;
        			$response["msg"] = "Today Class List";
        // 			if($row['days']=='')
        // 			{
        // 			    	$info["days"]=0;
        // 			    	$info["subject"]=0;
        // 			}
        // 			else
        // 			{
            			$info["days"]=$row['days'];
            			$us=$obj->fetchById($row['subject'],"gov_subject","id");
            		 	$info["subject"]=$us['subject'];
        			//}
        		 	
        		 	
        		array_push($response["todaytask"], $info);
                }
                $us11=$obj->fetchById($days44,"routine","day");
                if($us11['description']=='')
                {
                    $response["routine"]="No Record Found";
                }
                else
                {
        		 	$response["routine"]=$us11['description'];
                }
        		 	
        		 	$cda11= date("l");
        		 	//$cda11= substr($cda,0,1);
                   // $response["exam_schadule"]=$cda11;
                    if($cda11=='Monday')
                    {
                        $tes78=$obj->fetchDetailByIdByLimit('m',"gove_exam","monday");
                         if($tes78)
        	{	
        		while($tes=mysqli_fetch_assoc($tes78))
        		{
                        if($tes['exam_name']){
                        	$response["exam_schadule"]=$tes['exam_name'];
                        }else{
                          $response["exam_schadule"]="No Record Found";  
                        }
                        	if($tes['exam_type']=='1')
                        	{
                        	    $response["ExamType"]="Practice Exam";
                        	}
                        		if($tes['exam_type']=='2')
                        	{
                        	    $response["ExamType"]="Ranking Exam";
                        	}
                        		if($tes['exam_type']=='')
                        	{
                        	    $response["ExamType"]="No Record Found";
                        	}
        		}}
                        	
                    }
                    else 
                    {
                        $response["exam_schadule"]="No Exam Available Today";
                        $response["ExamType"]="No Exam Available Today";
                    }
                    if($cda11=='Tuesday')
                    {
                     
                     $tes78=$obj->fetchDetailByIdByLimit('t',"gove_exam","tuesday");
                    if($tes78)
        	{	
        		while($tes=mysqli_fetch_assoc($tes78))
        		{
                     if($tes['exam_name']){
                        	$response["exam_schadule"]=$tes['exam_name'];
                        }else{
                          $response["exam_schadule"]="No Record Found";  
                        }  
                        	if($tes['exam_type']=='1')
                        	{
                        	    $response["ExamType"]="Practice Exam";
                        	}
                        		if($tes['exam_type']=='2')
                        	{
                        	    $response["ExamType"]="Ranking Exam";
                        	}
                        		if($tes['exam_type']=='')
                        	{
                        	    $response["ExamType"]="No Record Found";
                        	}
        		}}
                    }
                    else 
                    {
                        $response["exam_schadule"]="No Exam Available Today";
                        $response["ExamType"]="No Exam Available Today";
                    }
                    if($cda11=='Wednesday')
                    {
                     
                     $tes78=$obj->fetchDetailByIdByLimit('w',"gove_exam","Wednesday");
                             if($tes78)
        	{	
        		while($tes=mysqli_fetch_assoc($tes78))
        		{  
                        if($tes['exam_name']){
                        	$response["exam_schadule"]=$tes['exam_name'];
                        }else{
                          $response["exam_schadule"]="No Record Found";  
                        }  
                        	if($tes['exam_type']=='1')
                        	{
                        	    $response["ExamType"]="Practice Exam";
                        	}
                        		if($tes['exam_type']=='2')
                        	{
                        	    $response["ExamType"]="Ranking Exam";
                        	}
                        		if($tes['exam_type']=='')
                        	{
                        	    $response["ExamType"]="No Record Found";
                        	}
        		}}
                    }
                    else 
                    {
                        $response["exam_schadule"]="No Exam Available Today";
                        $response["ExamType"]="No Exam Available Today";
                    }
                     if($cda11=='Thursday')
                    {
                     
                     $tes78=$obj->fetchDetailByIdByLimit('thu',"gove_exam","thursday");
                              if($tes78)
        	{	
        		while($tes=mysqli_fetch_assoc($tes78))
        		{ 
                        	if($tes['exam_name']){
                        	$response["exam_schadule"]=$tes['exam_name'];
                        }else{
                          $response["exam_schadule"]="No Record Found";  
                        }  
                        	if($tes['exam_type']=='1')
                        	{
                        	    $response["ExamType"]="Practice Exam";
                        	}
                        		if($tes['exam_type']=='2')
                        	{
                        	    $response["ExamType"]="Ranking Exam";
                        	}
                        		if($tes['exam_type']=='')
                        	{
                        	    $response["ExamType"]="No Record Found";
                        	}
        		}}
                    }
                    else 
                    {
                        $response["exam_schadule"]="No Exam Available Today";
                        $response["ExamType"]="No Exam Available Today";
                    }
                       if($cda11=='Friday')
                    {
                     
                     $tes78=$obj->fetchDetailByIdByLimit('f',"gove_exam","friday");
                              if($tes78)
        	{	
        		while($tes=mysqli_fetch_assoc($tes78))
        		{ 
                       if($tes['exam_name']){
                        	$response["exam_schadule"]=$tes['exam_name'];
                        }else{
                          $response["exam_schadule"]="No Record Found";  
                        } 
                        	if($tes['exam_type']=='1')
                        	{
                        	    $response["ExamType"]="Practice Exam";
                        	}
                        		if($tes['exam_type']=='2')
                        	{
                        	    $response["ExamType"]="Ranking Exam";
                        	}
                        		if($tes['exam_type']=='')
                        	{
                        	    $response["ExamType"]="No Record Found";
                        	}
        		}}
                    }
                    else 
                    {
                        $response["exam_schadule"]="No Exam Available Today";
                        $response["ExamType"]="No Exam Available Today";
                    }
                     if($cda11=='Saturday')
                    {
                     
                     $tes78=$obj->fetchDetailByIdByLimit('s',"gove_exam","Saturday");
                               if($tes78)
        	{	
        		while($tes=mysqli_fetch_assoc($tes78))
        		{
                        if($tes['exam_name']){
                        	$response["exam_schadule"]=$tes['exam_name'];
                        }else{
                          $response["exam_schadule"]="No Record Found";  
                        }
                        	if($tes['exam_type']=='1')
                        	{
                        	    $response["ExamType"]="Practice Exam";
                        	}
                        		if($tes['exam_type']=='2')
                        	{
                        	    $response["ExamType"]="Ranking Exam";
                     
                        	}
                        	if($tes['exam_type']=='')
                        	{
                        	    $response["ExamType"]="No Record Found";
                        	}
        		    
        		}
                        	}
                    }
                    else 
                    {
                        $response["exam_schadule"]="No Exam Available Today";
                        $response["ExamType"]="No Exam Available Today";
                    }
                     if($cda11=='Sunday')
                    {
                     
                     $tes78=$obj->fetchDetailByIdByLimit('sun',"gove_exam","Sunday");
                               if($tes78)
        	{	
        		while($tes=mysqli_fetch_assoc($tes78))
        		{
                        if($tes['exam_name'])
                        {
                        	$response["exam_schadule"]=$tes['exam_name'];
                        }
                        else
                        {
                          $response["exam_schadule"]="No Record Found";  
                        }
                        	if($tes['exam_type']=='1')
                        	{
                        	    $response["ExamType"]="Practice Exam";
                        	}
                        		if($tes['exam_type']=='2')
                        	{
                        	    $response["ExamType"]="Ranking Exam";
                        	}
                        		if($tes['exam_type']=='')
                        	{
                        	    $response["ExamType"]="No Record Found";
                        	}
        		}}
                    }
                    else 
                    {
                        $response["exam_schadule"]="No Exam Available Today";
                        $response["ExamType"]="No Exam Available Today";
                    }
                    
                    
                    
                    
                    //wednesday thursday friday saturday sunday
                    
                    
                    
        		 	
        		 	
        		echo json_encode($response);
        }
        
        else
        {
        $response["msg"] = "No Task Available Today";
        $response["error"] =true;
        $response["success"] =0;
        array_push($response["todaytask"]);
        echo json_encode($response);
        }
        }
}
}
?>