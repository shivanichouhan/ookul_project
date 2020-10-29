<?php 
//session_start();
include"../include/database.php";
$obj=new database();
$info=array();
$response["User_Info"] = array();

$user_id=$_POST['user_id'];
$subject_id=$_POST['subject_id'];

    if($user_id=='')
    {
    $response["msg"] = "Enter User Id";
    $response["error"] =true;
    $response["success"] =0;
    array_push($response);
    echo json_encode($response);
    }
    else
    {
        $date=date("Y-m-d H:i:s");
        $row11=$obj->fetchById($user_id,"optional_user","user_id");
        if(empty($row11))
        {
            $rs12=$obj->insert_user_optional($user_id,$subject_id,$date); 
            
            if($rs12)
            {
                $_SESSION['id']=$rs12;
                $response["error"]=false;
                $response["success"] =1;
                $response["msg"] = "Successfull Registration";
                if($_SESSION['id'])
                {
                        $info["id"] = $_SESSION['id'];
                        $row=$obj->fetchById($_SESSION['id'],"optional_user","id");
                        $info["user_id"] = $row['user_id'];
                        $info["subject_id"] = $row['subject_id'];
                        $info["date"] = $row['date'];
                        array_push($response["User_Info"], $info);
                        echo json_encode($response);
                }
            }
            else
            {
                $response["msg"] = "Not Submitted Sucssesfully";
                $response["error"] =true;
                $response["success"] =0;
                array_push($response);
                echo json_encode($response);
            }
        }
        else
        {
            $response["error"]=false;
            $response["success"] =1;
            $response["msg"] = "User Subject";
            if($row11['id'])
            {
                    $info["id"] = $row11['id'];
                    $row=$obj->fetchById($row11['id'],"optional_user","id");
                    $info["user_id"] = $row['user_id'];
                    $info["subject_id"] = $row['subject_id'];
                    $info["date"] = $row['date'];
                    array_push($response["User_Info"], $info);
                    echo json_encode($response);
            }
        }
    
    } 
?>