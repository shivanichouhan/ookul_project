<?php
include"../include/database.php";
$obj=new database();
$info=array();
$response["papular_video"] = array();
$table='goverment_popular_video';

$user_id=$_POST['user_id'];

$vid=$obj->fetchById($user_id,"user_register_goverment","id");

$pstatus=$vid['pstatus'];

// $select_language=$vid['select_language'];
//$lan=$obj->fetchById($select_language,"add_language","id");
//echo $lna1=$lan['language'];
//die();

if($pstatus=='1')
{

$ro=0;
$rs1=$obj->fetchDetailByIdByStatusid0fdsrfsdf0(1,$table,"status","app_type",1);

if($rs1)
	{	
		while($row2=mysqli_fetch_assoc($rs1))
		{	
		    $ro=$ro+1;
		}
	}
    if($ro=='0')
    {

$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["papular_video"]);
echo json_encode($response);
    }
    else
    {
$rs=$obj->fetchDetailByIdByStatusid0fdsrfsdf0(1,$table,"status","app_type",1);
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{																			
//	$ss=$obj->fetchById($row['language'],"add_language","id");

			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Papular Videos";
			$info["id"]=$row['id'];
			
			if($row['heading']=="")
{
    $info["heading"]="";
}
else
{
    $info["heading"]=$row['heading'];
}


if($row['video']=="")
{
    $info["video"]="";
}
else
{
    $info["video"]=$row['video'];
}
if($row['thumbnail']=="")
{
    $info["thumbnail"]="";
}
else
{
    $info["thumbnail"]=$row['thumbnail'];
}


		//	$info["heading"] = $row['heading'];
		//	$info["language"] = $ss['language'];

		//	$info["video"] = $row['video'];
		//	$info["thumbnail"]=$row['thumbnail'];
			
		array_push($response["papular_video"], $info);
}
		echo json_encode($response);
}

else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["papular_video"]);
echo json_encode($response);
}

}
}
else
{
     $ro=0;
    $rs1=$obj->fetchDetailByIdByStatusid0fdsrfsdf0(1,$table,"status","app_type",2);
if($rs1)
	{	
		while($row2=mysqli_fetch_assoc($rs1))
		{	
		    $ro=$ro+1;
		}
	}
    if($ro=='0')
    {
        $response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["papular_video"]);
echo json_encode($response);
    }
    else
    {
$rs=$obj->fetchDetailByIdByStatusid0fdsrfsdf0(1,$table,"status","app_type",2);
if($rs)
	{	
		while($row=mysqli_fetch_assoc($rs))
		{																			
//	$ss=$obj->fetchById($row['language'],"add_language","id");

			$response["error"] =false;
			$response["success"] =1;
			$response["msg"] = "Papular Videos";
			$info["id"]=$row['id'];
			
			if($row['heading']=="")
{
    $info["heading"]="";
}
else
{
    $info["heading"]=$row['heading'];
}


if($row['video']=="")
{
    $info["video"]="";
}
else
{
    $info["video"]=$row['video'];
}
if($row['thumbnail']=="")
{
    $info["thumbnail"]="";
}
else
{
    $info["thumbnail"]=$row['thumbnail'];
}


		//	$info["heading"] = $row['heading'];
		//	$info["language"] = $ss['language'];
		//	$info["video"] = $row['video'];
		//	$info["thumbnail"]=$row['thumbnail'];
			
		array_push($response["papular_video"], $info);
}
		echo json_encode($response);
}

else
{
$response["msg"] = "No record Found";
$response["error"] =true;
$response["success"] =0;
@array_push($response["papular_video"]);
echo json_encode($response);
}

}
}
?>