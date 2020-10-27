<?php 
include_once("../include/database.php");
$obj= new database();
$info=array();
$response["exam"] = array();
$us=0;
 $rs=$obj->fetchAllDetail("`fa_multiple_question`"); 
            if($rs)
            {
            while($row=mysqli_fetch_assoc($rs))
            { 
                $us=$us+1;
            }
            }
if($us=='0')
{
    $response["msg"] = "No record Found";
            $response["error"] =true;
            $response["success"] =0;
            @array_push($response["exam"]);
            echo json_encode($response);
}
else
{

 $rs=$obj->fetchAllDetail("`fa_multiple_question`"); 
            if($rs)
            {
            while($row=mysqli_fetch_assoc($rs))
            { 
                
             $su=$obj->fetchById($row['subject'],"gov_subject","id");
                
                $response["error"] =false;
                $response["success"] =1;
                $response["msg"] = "Exam Quetion Answer For Practise List";
                $info["id"]=$row['id'];
                $info["type"] = $row['type'];
               // $info["each_set_question"]  =$su['subject'];
                $info["question"] = stripslashes($row['question']);
                $info["option1"] = stripslashes($row['option1']);
                $info["option2"] = stripslashes($row['option2']);
                $info["option3"] = stripslashes($row['option3']);
                $info["option4"] = stripslashes($row['option4']);
                $info["option4"] = stripslashes($row['option4']);
                $info["solution"] = stripslashes($row['solution']);
                $info["question_image"] = $row['question_image'];
                $info["option_img1"] = $row['option_img1'];
                $info["option_img12"] = $row['option_img12'];
                $info["option_img3"] = $row['option_img3'];
                $info["option_img4"] = $row['option_img4'];
                $info["solution1"] = $row['solution1'];
                array_push($response["exam"], $info);
             
            }
           echo json_encode($response);        
           
            }
            else
            {
            $response["msg"] = "No record Found";
            $response["error"] =true;
            $response["success"] =0;
            array_push($response["exam"]);
            echo json_encode($response);
            }

}


?>