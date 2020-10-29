<?php
include"../include/database.php";
$obj=new database();
$date=date("Y-m-d");
$info=array();
$response["letest_update"] = array();
//$student=$student;

@$student=$_POST['student'];
$tes=$obj->fetchById($student,"user_register_goverment","id");

$tes['pstatus'];

if($tes['pstatus']=='1')
{
    if($student)
{
$row1=0;
$table='latest_update';
$rs=$obj->fetchDetailByIdBystatusdatedes(1,$table,"status","date",$date);
$ex=0;

					if($rs)
					{$i=0;
    					while($row=mysqli_fetch_assoc($rs))
    					{
    					    if($row['user_type']==9)
    					    {
            					$ex=explode(",",$row['member_id']);
            				   
            				    foreach($ex as $x => $y)
            				    {
                				    if($ex[$x]==$student) 
            				         {   $i++;
            				             $row1=$row1+$i;
    				                 }
    				        
    				            }
    					    }
    
    					    
    					}
					    
					}
					if($row1=='0')
					{
					    $response["msg"] = "No Record Found";
                        $response["error"] =true;
                        $response["success"] =01;
                        
                        echo json_encode($response);   
					}
					else
					{
                        $rs7=$obj->fetchDetailByIdBystatusdatedes(1,$table,"status","date",$date);
                        $ex1=0;
					if($rs7)
					{$i=0;
					while($row7=mysqli_fetch_assoc($rs7))
					{
					  if($row7['user_type']==9)
					  { 
					   $row7['member_id'];
					 
					      $ex1=explode(",",$row7['member_id']);
        				    foreach($ex1 as $x1 => $y1)
        				    {
        				    if($ex1[$x1]==$student) 
        				    {$i++;
        				 
        				   $response["error"] =false;
                			$response["success"] =1;
                			$response["msg"] = "letest update";
                			$info["id"]=$row7['id'];
                			$info["title"]=$row7['title'];
                			$info["discription"]=$row7['discription'];
                			$info["photo"]=$row7['photo'];
            			    $info["video"]=$row7['video'];
            			    $info["date"]=$row7['date'];

					        }
					    }
					  }

					 	array_push($response["letest_update"], $info);
				
					}
					
					echo json_encode($response);
					}
				
					else{
					    $response["msg"] = "No record Found";
                        $response["error"] =true;
                        $response["success"] =01;

                        echo json_encode($response);
					}
					}
				
}else{
         $response["msg"] = "No record Found";
        $response["error"] =true;
        $response["success"] =01;
        
        echo json_encode($response);   
}
}
if($tes['pstatus']=='0')
{
    if($student)
{
$row1=0;
$table='latest_update';
$rs=$obj->fetchDetailByIdBystatusdatedes(1,$table,"status","date",$date);
$ex=0;

					if($rs)
					{$i=0;
    					while($row=mysqli_fetch_assoc($rs))
    					{
    					    if($row['user_type']==9)
    					    {
            					$ex=explode(",",$row['member_id']);
            				    foreach($ex as $x => $y)
            				    {
                				    if($ex[$x]==$student) 
            				         {   $i++;
            				             $row1=$row1+$i;
    				                 }
    				        
    				            }
    					    }
    
    					    
    					}
					    
					}
					if($row1=='0')
					{
					    $response["msg"] = "No record Found";
                        $response["error"] =true;
                        $response["success"] =01;
                        
                        echo json_encode($response);   
					}
					else
					{
                        $rs7=$obj->fetchDetailByIdBystatusdatedes(1,$table,"status","date",$date);
                        $ex1=0;
					if($rs7)
					{$i=0;
					while($row7=mysqli_fetch_assoc($rs7))
					{
					  if($row7['user_type']==9)
					  { 
					   $row7['member_id'];
					 
					      $ex1=explode(",",$row7['member_id']);
        				    foreach($ex1 as $x1 => $y1)
        				    {
        				    if($ex1[$x1]==$student) 
        				    {$i++;
        				 
        				   $response["error"] =false;
                			$response["success"] =1;
                			$response["msg"] = "letest update";
                			$info["id"]=$row7['id'];
                			$info["title"]=$row7['title'];
                			$info["discription"]=$row7['discription'];
                			$info["photo"]=$row7['photo'];
            			    $info["video"]=$row7['video'];
            			    $info["date"]=$row7['date'];

					        }
					    }
					  }

					 	array_push($response["letest_update"], $info);
				
					}
					
					echo json_encode($response);
					}
				
					else{
					    $response["msg"] = "No record Found";
                        $response["error"] =true;
                        $response["success"] =01;

                        echo json_encode($response);
					}
					}
				
}else{
         $response["msg"] = "No record Found";
        $response["error"] =true;
        $response["success"] =01;
        
        echo json_encode($response);   
}
}


?>