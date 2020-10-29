<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["days"] = array();

$user_id=$_POST['user_id'];

$user44=$obj->fetchByIdByStatus($user_id,"user_register_goverment","id","pstatus",0);
if($user44)
{
    $now1 = time(); // or your date as well
$your_date1 = strtotime($user44['register_date']);
$datediff1 = $now1 - $your_date1;
$da11=round($datediff1 / (60 * 60 * 24));

 if($da11=='0')
{
   $da110= $da11+1;
}
else
{
 $da110=$da11+1;
}
  $oo1=$obj->fetchById($da110,"days","days");
   //$days414=$oo1['id'];
$days21=$oo1['days'];
    
    
    if($user44['id']=='')
    {
        $response["msg"] = "No Record Found";
        $response["error"] =true;
        $response["success"] =0;
        @array_push($response["days"]);
        echo json_encode($response);
    }
    else
    {

$rs11=$obj->fetchAllDetail("days");
if($rs11)
	{	
		while($row11=mysqli_fetch_assoc($rs11))
		{																			

			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Days List";

            if($row11["days"]<='8')
            {
                $info["id"]=$row11['id'];
                $info["days"]=$row11['days'];
                $info["status"]='1';
            //$info["add_task"] = $row['add_task'];
            }
            else
            {
                
                $info["id"]=$row11['id'];
                $info["days"]=$row11['days'];
                $info["status"]='0';
            }

			
		array_push($response["days"], $info);
}
		echo json_encode($response);
}

else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["days"]);
echo json_encode($response);
}
}
}
else
{
    $user=$obj->fetchByIdByStatus($user_id,"user_register_goverment","id","pstatus",1);

   //echo $user['success_date'];

$now = time(); // or your date as well
$your_date = strtotime($user['success_date']);
$datediff = $now - $your_date;
$da=round($datediff / (60 * 60 * 24));
$da;
 if($da=='0')
{
   $da1= $da+1;
}
else
{
 $da1=$da+1;
}

//$now = date('d-m-Y'); // or your date as well
//$your_date = $user['success_date'];
//$da = $now - $your_date;
//$da1= $da+1;

  $oo=$obj->fetchById($da1,"days","days");
   $days44=$oo['id'];
$days2=$oo['days'];

// if($da >= 181)
//                 {
//                     $test=$obj->updateStatus($user_id,"user_register_goverment","pstatus",0,"id");
                    
//                 }
                
if($user_id=='')
{
    $response["msg"] = "No Record Found";
    $response["error"] =true;
    $response["success"] =0;
    @array_push($response["days"]);
    echo json_encode($response);
}
else
{
    if($user['id']=='')
    {
        $response["msg"] = "No Record Found";
        $response["error"] =true;
        $response["success"] =0;
        @array_push($response["days"]);
        echo json_encode($response);
    }
    else
    {

$rs=$obj->fetchAllDetail("days");
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{																			

			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Days List";
			
            if($row["days"]<='8')
            {
                $info["id"]=$row['id'];
                $info["days"]=$row['days'];
                $info["status"]='1';
            //$info["add_task"] = $row['add_task'];
            }
            else
            {
                   if($row["days"]<=$days2)
            {
                $info["id"]=$row['id'];
                $info["days"]=$row['days'];
                $info["status"]='1';
            //$info["add_task"] = $row['add_task'];
            }
            else
            {
                $info["id"]=$row['id'];
                $info["days"]=$row['days'];
                $info["status"]='0';
            }
            }

			
		array_push($response["days"], $info);
}
		echo json_encode($response);
}

else
{
$response["msg"] = "No Record Found";
$response["error"] =true;
$response["success"] =0;
array_push($response["days"]);
echo json_encode($response);
}
}
}
}

?>