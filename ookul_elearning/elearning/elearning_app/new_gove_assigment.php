<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

  $response["assigment"] = array();
  
  
  $subject=$_POST['subject'];
  $topic=$_POST['topic'];
  



$rs11=$obj->fetchDetailByIdBystatusbysubje($subject,$topic);

if($rs11)
{
    
while($row11=mysqli_fetch_assoc($rs11))
{ 
    
      
        $response["error"] =false;
        $response["success"] =1;
        $response["msg"] = "Assigment Topic Wise";
        
        $info["id"]=$row11['id'];
    
        $info["subject"]=$row11['subject'];
 
        $info["topic"]=$row11['topic'];

       
        $info["type"] = $row11['type'];
       
        $info["question"] = stripslashes($row11['question']);
        $info["option1"] = stripslashes($row11['option1']);
        $info["option2"] = stripslashes($row11['option2']);
        $info["option3"] = stripslashes($row11['option3']);
        $info["option4"] = stripslashes($row11['option4']);
        $info["soluction"]=stripslashes($row11['soluction']);
        $info["answer"] = $row11['answer'];
        
        if($row11['question_image']=='0')
        {
            $info["question_image"] = "";
        }
        else
        {
            $info["question_image"] = $row11['question_image'];
        }
        if($row11['option_img1']=='0')
        {
            $info["option_img1"] ="";
        }
        else
        {
            $info["option_img1"] = $row11['option_img1'];
        }
        if($row11['option_img12']=='0')
        {
            $info["option_img12"] ="";
        }
        else
        {
        $info["option_img12"] = $row11['option_img12'];
        }
        if($row11['option_img3']=='0')
        {
            $info["option_img3"] = "";
        }
        else
        {
         $info["option_img3"] = $row11['option_img3'];
        }
        if($row11['option_img4']=='0')
        {
            $info["option_img4"] ="";
        }
        else
        {
        $info["option_img4"] = $row11['option_img4'];
        }
        if($row11['soluction_img']=='0')
        {
            $info["soluction_img"]="";
        }
        else
        {
        $info["soluction_img"]=$row11['soluction_img'];
        }
        @array_push($response["assigment"],$info);
        }
echo json_encode($response);
}
else
{
        $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["assigment"]);
        echo json_encode($response);

    
}


   



?>