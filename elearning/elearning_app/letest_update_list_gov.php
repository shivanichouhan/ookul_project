<?php
include"../include/database.php";
$obj=new database();
 //$date=date("Y-m-d");
$info=array();
$response["letest_update"] = array();

//$student=1;

 $student=$_POST['student'];
 


$tes=$obj->fetchById($student,"user_register_goverment","id");

$tes['pstatus'];

if($tes['pstatus']=='1')
{
$row1;

if($student){
$table='latest_update';
$rs=$obj->fetchDetailByStatus00052(1,$table,"status");
//print_r($rs);
//die();

					if($rs)
					{$i=0;
					while($row=mysqli_fetch_assoc($rs))
					{
					     if($row['user_type']==10)
					     {
    					    $ex=explode(",",$row['member_id']);
        				    foreach($ex as $x => $y)
        				    {
            				    if($ex[$x]==$student) 
            				    {   $i++;
            				        $row1=$row1+$i;
            				        // $row1;
            				        
            				    }
        				        
        				    }
					     }
					    
					}
					    
					}
					if($row1){
                    $rs2=$obj->fetchDetailByStatus00052(1,$table,"status");

					if($rs2)
					{$i2=0;
					while($row2=mysqli_fetch_assoc($rs2))
					{
					    if($row2['user_type']==10)
					     {
        					$ex1=explode(",",$row2['member_id']);
        				    foreach($ex1 as $x1 => $y)
				        {
				            if($ex1[$x1]==$student) 
				        {
				            $i2++;
				
            				   $response["error"] =false;
            			$response["success"] =1;
            			$response["msg"] = "letest update";
            			$info["id"]=$row2['id'];
            			$info["title"]=$row2['title'];
            			$info["discription"]=$row2['discription'];
            			$info["photo"]=$row2['photo'];
            			$info["video"]=$row2['video'];
            			$info["date"]=$row2['date'];
                	}   
					}if($info){
					 array_push($response["letest_update"], $info);
					}else{
					    
					}
					     }
	
					    
					
					}
					
					
					
						echo json_encode($response);
					}
				

else {
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;

echo json_encode($response);
}
}
else{
	$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;

echo json_encode($response);
}
}
else
{
  	$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;

echo json_encode($response);
  
}
}
if($tes['pstatus']=='0')
{
    
//echo "ajay";    
    
$row1;
if($student){
$table='latest_update';
$rs=$obj->fetchDetailByStatus00052(1,$table,"status");
//print_r($rs);
//die();

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
            				        // $row1;
            				        
            				    }
        				        
        				    }
					     }
					    
					}
					    
					}
					if($row1){
                    $rs2=$obj->fetchDetailByStatus00052(1,$table,"status");

					if($rs2)
					{$i2=0;
					while($row2=mysqli_fetch_assoc($rs2))
					{
					    if($row2['user_type']==9)
					     {
        					$ex1=explode(",",$row2['member_id']);
        				    foreach($ex1 as $x1 => $y)
				        {
				            if($ex1[$x1]==$student) 
				        {
				            $i2++;
				
            				   $response["error"] =false;
            			$response["success"] =1;
            			$response["msg"] = "letest update";
            			$info["id"]=$row2['id'];
            			$info["title"]=$row2['title'];
            			$info["discription"]=$row2['discription'];
            			$info["photo"]=$row2['photo'];
            			$info["video"]=$row2['video'];
            			$info["date"]=$row2['date'];
                	}   
					}if($info){
					 array_push($response["letest_update"], $info);
					}else{
					    
					}
					     }
	
					    
					
					}
					
					
					
						echo json_encode($response);
					}
				

else {
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;

echo json_encode($response);
}
}
else{
	$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;

echo json_encode($response);
}
}
else
{
  	$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;

echo json_encode($response);
  
}  
}


?>