<?php
include_once("../include/database.php");
$obj= new database();
$info=array();

$response["video_class"] = array();
 // $user_id=$_POST['user_id'];
 // $day=$_POST['day'];
  $subject=$_POST['subject'];
  $topic=$_POST['topic'];
  
  $add=0;

      if($subject=='')
      {
           $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["video_class"]);
        echo json_encode($response);
      }
      else
      {
            if($topic=='')
            {
                 $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["video_class"]);
        echo json_encode($response);
            }
            else
            {
                
  
  
  $rs=$obj->fetchDetailByIdByStatus($subject,"fa_video_class","subject","topic",$topic); 
    if($rs)
    {
        while($row=mysqli_fetch_assoc($rs))
        { 
          //  echo "jjjjjjjjjjj";
            $add=$add+1;
        }
        
    }
    if($add==0)
    {
        
        $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["video_class"]);
        echo json_encode($response);
    }
    else
    {
       $rs11=$obj->fetchDetailByIdByStatus($subject,"fa_video_class","subject","topic",$topic);
        //fetchAllDetail("video_class"); 
        if($rs11)
        {
            
                while($row11=mysqli_fetch_assoc($rs11))
                { 
                    
                      $rs115=$obj->fetchById($row11['subject'],"gov_subject","id"); 
                        $rs1145=$obj->fetchById($row11['topic'],"fag_topic","id"); 
                  
                            $response["error"] =false;
                            $response["success"] =1;
                            $response["msg"] = "Video Class";
                            $info['id']=$row11['id'];
                           
                            $info["subject"]=$rs115['subject'];
                            $info["topic"] = $rs1145['topic'];
                            $info["title"]=$row11['title'];
                            $info["thumbnail"] = $row11['thumbnail'];
                            $info["video"] = $row11['video'];
                             @array_push($response["video_class"],$info);
                    
                }
                  echo json_encode($response);
        }
        else
        {
             $response["error"] =true;
        $response["success"] =0;
        $response["msg"] = "No record Found";
        @array_push($response["video_class"]);
        echo json_encode($response); 
        }
    }
    
            }
      }
      
  
  
?>