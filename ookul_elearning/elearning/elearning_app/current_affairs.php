<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

$response["current_affairs"] = array();
  $month=$_POST['month'];
$ui=0;
$rs11=$obj->fetchDetailById($month,"current_affairs","months"); 
if($rs11)
{
    
while($row11=mysqli_fetch_assoc($rs11))
{ 
    $ui=$uo=1;
}
    
}
 if($ui=='0')
 {
      $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["current_affairs"]);
        echo json_encode($response);
 }
 else
 {
$rs11=$obj->fetchDetailById($month,"current_affairs","months"); 
if($rs11)
{
    
while($row11=mysqli_fetch_assoc($rs11))
{ 
    // echo $row11['days'];
    // echo $da;
     $response["error"] =false;
        $response["success"] =1;
        $response["msg"] = "Current Affairs";
  
        $info["id"]=$row11['id'];
        if($row11['month']=='1')
        {
        $info["month"]="January";
        }
        if($row11['month']=='2')
        {
        $info["month"]="February";
        }
        if($row11['month']=='3')
        {
        $info["month"]="March";
        }
        if($row11['month']=='4')
        {
        $info["month"]="April";
        }
         if($row11['month']=='5')
        {
        $info["month"]="May";
        }
         if($row11['month']=='6')
        {
        $info["month"]="June";
        }
         if($row11['month']=='7')
        {
        $info["month"]="July";
        }
         if($row11['month']=='8')
        {
        $info["month"]="August";
        }
         if($row11['month']=='9')
        {
        $info["month"]="September";
        }
         if($row11['month']=='10')
        {
        $info["month"]="October";
        }
         if($row11['month']=='11')
        {
        $info["month"]="November";
        }
         if($row11['month']=='12')
        {
        $info["month"]="December";
        }
        $info["title"] = $row11['title'];
        $info["thumbnail"] = $row11['thumbnail'];
        $info["video"] = $row11['video'];
        @array_push($response["current_affairs"],$info);
    
 

}
echo json_encode($response);
}
else
{
      $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["current_affairs"]);
        echo json_encode($response);
}
}

?>