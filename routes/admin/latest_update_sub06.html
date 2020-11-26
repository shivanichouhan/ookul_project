<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");
$address1=$web['address'];
$sphone=$web['phone'];
$semail=$web['email'];
$logo=$web['logo'];
$facebook=$web['facebook'];
$google=$web['google'];
$twitter=$web['twitter'];
$web_name=$web['web_name'];
$email_admin=$web['email'];

     @$title=$_POST['title'];
   
    @$discription=$_POST['discription'];

   @$date=$_POST['date'];
    @$user_type=$_POST['user_type'];

   @$class=$_POST['class'];
  
  

  $path="upload/";
    $img=$_FILES['photo']['name']; move_uploaded_file($_FILES['photo']['tmp_name'],$path.$img);
  
  
  $path1="upload/";
  $video=$_FILES['video']['name']; move_uploaded_file($_FILES['video']['tmp_name'],$path1.$video);

if($user_type=='1')
{
	if($class==$class)
	{
		 $ma=$obj->fetchDetailById($class,"user_register","class");
		
		 if($ma)
		 {
			 while($maa=mysqli_fetch_assoc($ma))
			 {
				 @$member23[]=$maa['id'];
		 }}
		 
		  $member_id=implode(",",$member23);
		   
	}
}
elseif($user_type=='2')
{
	$mo=$obj->fetchAllDetail("agent");
		
		 if($mo)
		 {
			 while($moo=mysqli_fetch_assoc($mo))
			 {
				 @$member24[]=$moo['id'];
		 }}
		 
		  $member_id=implode(",",$member24);
		
}

elseif($user_type=='4')
{
	$mo1=$obj->fetchAllDetail("referal_agent");
		
		 if($mo1)
		 {
			 while($moo1=mysqli_fetch_assoc($mo1))
			 {
				 @$member25[]=$moo1['id'];
		 }}
		 
		  $member_id=implode(",",$member25);
		
}
elseif($user_type=='3')
{
	@$agent1=$_POST['agent'];
	  @$agent=implode(",",$agent1);
    @$subagent1=$_POST['subagent'];
	 @$subagent=implode(",",$subagent1);
	 @$refferal1=$_POST['refferal'];
	 @$refferal=implode(",",$refferal1);
	 @$student1=$_POST['student'];
	  @$student=implode(",",$student1);

		 
		  
	
}
  
else {

$member_id=implode(",",$member_id1);
 }


$m_id=$_SESSION['admin_id'];
  
$rs=$obj->insertlatest_update($title,$discription,$date,$video,$img,$user_type,$class,@$member_id,$m_id,$agent,$subagent,$refferal,$student);
if($rs)
{
	$a=explode(",",@$member_id);
foreach($a as $b => $vava)
{
	if($user_type==1){
	$web11=$obj->fetchById($a[$b],"user_register","id");
	}
	if($user_type==2){
	$web11=$obj->fetchById($a[$b],"agent","id");
	}
	
	if($user_type==3){
	$web11=$obj->fetchById($a[$b],"subagent","id");
	}
		if($user_type==4){
	$web111=$obj->fetchById($a[$b],"referal_agent","id");
	}
}
	$axb=explode(",",$student);
foreach($axb as $bxb => $vaassva)
{
	$web11r1=$obj->fetchById(@$axa[$bxb],"user_register","id");
}
$azb=explode(",",$agent);
foreach($abz as $bbz => $vaazva)
{
	$web11z1=$obj->fetchById($aza[$bbz],"agent","id");
$user_name=$web11z1["name"];

$email=$web11z1["email"];
	

}
	//$_SESSION['msg']=" Insert Success Full";
//	header("location:latest_update_list.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='latest_update_list';
       </script>");
       
       $date=date("Y-m-d");
 $fcm_token=0; 
 $title=0;
$discription=0;
$info=array();
$response["notification"] = array();

$fcm=$obj->fetchAllDetail("user_register");
	if($fcm)
	{   $i=0;
	    while($row02=mysqli_fetch_assoc($fcm))
		{
		      $fcm_token =$row02['fcm_token'];
		      $student=$row02['id'];
$rs=$obj->fetchAllDetailById00limit(1,"latest_update","status");
	if($rs)
	{   $i=0;
	    while($row=mysqli_fetch_assoc($rs))
		{
		  // $row['user_type'];
		 
		   if($row['user_type']==1)
					    {
        					$ex=explode(",",$row['member_id']);
        				    foreach($ex as $x => $y)
        				    {
            				    if($ex[$x]==$student) 
        				         {   $i++;
        				          $ex[$x];
        				         $title=$row['title'];
        				         $discription=$row['discription'];
        				            // $row1=$row1+$i;
				                 }
				        
				            }
					    }
					    else
					    {
					        $ex=explode(",",$row['student']);
				            foreach($ex as $x => $y)
				                {
				                     if($ex[$x]==$student) 
				                     { $i++;
				                      $ex[$x];
				                        // $row1=$row1+$i;
				                        $title=$row['title'];
        				                $discription=$row['discription'];
				                     }
				        
				                }
					        
					    }
		}
	}
 $title;
 $discription;
  $fcm_token;
  $student;
 
 if($fcm_token=='')
 {
      $response["msg"] = "No record Found";
      $response["error"] =true;
      $response["success"] =03;
      echo json_encode($response);
 }
 else
 {
        #API access key from Google API's Console
            define( 'API_ACCESS_KEY', 'AAAA18hcJbg:APA91bEQ_2wSCDKCXTSDgphHqsBbZqkmauM8JajtfwJvYEWkf-_cWDRHlbmJYNnhTcqDeJFrmAPRtxoI47roGsU7qBegjZCGKe2v_gAk0nDWFWj1BzfXzAIvcX3jQHlff105WtUHAGQ5' );
            $registrationIds = $fcm_token;
        #prep the bundle
             $msg = array
                  (
        		'body' 	=> $title,
        		'title'	=> $discription,
                     	'icon'	=> 'myicon',/*Default Icon*/
                      	'sound' => 'mySound'/*Default sound*/
                  );
        	$fields = array
        			(
        				'to'		=> $registrationIds,
        				'notification'	=> $msg
        			);
        	
        	$headers = array
        			(
        				'Authorization: key=' . API_ACCESS_KEY,
        				'Content-Type: application/json'
        			);
        #Send Reponse To FireBase Server	
        		$ch = curl_init();
        		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        		curl_setopt( $ch,CURLOPT_POST, true );
        		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        		$result = curl_exec($ch );
        		curl_close( $ch );
        #Echo Result Of FireBase Server
        
        echo $result;

    }
		}
	}

  

}
else
{
//	$_SESSION['msg']=" Not Insert";
//	header("location:latest_update_list.php");
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='latest_update_list';
       </script>");
}
?>