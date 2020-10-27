<?php 
include"../include/database.php";
$obj=new database();

$cdate=$_POST['cdate'];
  
// Function to get all the dates in given range 
function getDatesFromRange($start, $end, $format = 'Y-m-d') { 
      
    // Declare an empty array 
    $array = array(); 
      
    // Variable that store the date interval 
    // of period 1 day 
    $interval = new DateInterval('P1D'); 
  
    $realEnd = new DateTime($end); 
    $realEnd->add($interval); 
  
    $period = new DatePeriod(new DateTime($start), $interval, $realEnd); 
  
    // Use loop to store date into array 
    foreach($period as $date) {                  
        $array[] = $date->format($format);  
    } 
  
    // Return the array elements 
    return $array; 
} 
  
// Function call with passing the start date and end date 

  
  
 

  $rs=$obj->fetchDetailById(1,"gove_exam","status"); 
        if($rs)
        {
        while($rs00=mysqli_fetch_assoc($rs))
        { 
            $response["error"]=false;
            $response["success"] =1;
            $response["msg"] = "online Exam Schedule";

$Date1 = getDatesFromRange($rs00['to_date'], $rs00['from_date']); 
  $Date=explode(" ",$Date1);

foreach ($Date as $uu => $value) {
                  		echo $Date[$uu];
                  		}


 

@array_push($response["examschedule"], $info);

}
echo json_encode($response);
}
else
{
$response["msg"] = "No Recod Found ";
$response["error"] =true;
$response["success"] =0;
@array_push($response["examschedule"]);
echo json_encode($response);

}
?> 