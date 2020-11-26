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





     $title=$_POST['title']; 
   
    @$discription=$_POST['discription'];

   @$date=$_POST['date'];
    @$user_type=$_POST['user_type'];

   @$class=$_POST['class'];
  
  

  @$path="upload/";
    @$img=$_FILES['photo']['name']; move_uploaded_file($_FILES['photo']['tmp_name'],$path.$img);
  
  
  @$path1="upload/";
  @$video=$_FILES['video']['name']; move_uploaded_file($_FILES['video']['tmp_name'],$path1.$video);

if(@$user_type=='1')
{
	if(@$class==$class)
	{
	    $student=$_POST['student'];
		  $member_id=implode(",",$student);
		   
	}
}
elseif($user_type=='2')
{
    $agent1=@$_POST['agent'];
    $member_id=implode(",",$agent1);
		
}
elseif($user_type=='4')
{
    $refferalagent1=$_POST['refferalagent'];
	 $member_id=implode(",",$refferalagent1);
		
}

elseif($user_type=='5')
{
    $blocksupervioser1=@$_POST['blocksupervioser'];
	$member_id=implode(",",$blocksupervioser1);
		
}
elseif($user_type=='7')
{
        @$unpaid1=$_POST['unpaid'];
	 $member_id=implode(",",$unpaid1); 
		
}
elseif($user_type=='6')
{
        @$free_access1=$_POST['free_access'];
	 $member_id=implode(",",$free_access1); 
		
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
elseif($user_type=='8')
{
        @$pro1=$_POST['pro'];
	 $member_id=implode(",",$pro1); 
		
}
elseif($user_type=='9')
{
        @$egov=$_POST['egov'];
	 $member_id=implode(",",$egov); 
		
}
elseif($user_type=='10')
{
        @$egov=$_POST['egov'];
	 $member_id=implode(",",$egov); 
		
}
else{

//$member_id=implode(",",$member_id1);
 }


$m_id=$_SESSION['admin_id'];
  
 $rs=$obj->insertlatest_update($title,$discription,$date,$video,$img,$user_type,$class,@$member_id,$m_id,$agent,$subagent,$refferal,$student,$pro); 
if($rs)
{
    $use=$obj->fetchById($rs,"latest_update","id");
    $member_id= $use['member_id'];
     if($use['user_type']=='7')
	{
	       $use['user_type'];
	   
        $ex=explode(",",$member_id);
         foreach($ex as $x => $y)
        	{
        				//print_r($ex[$x]);
        			
        				$student=$obj->fetchById($ex[$x],"user_register","id");
        		 	$fcm_token=	$student['fcm_token'];
        		 	$id=$student['id'];
        	
                 #API access key from Google API's Console
            define( 'API_ACCESS_KEY', 'AAAA18hcJbg:APA91bEQ_2wSCDKCXTSDgphHqsBbZqkmauM8JajtfwJvYEWkf-_cWDRHlbmJYNnhTcqDeJFrmAPRtxoI47roGsU7qBegjZCGKe2v_gAk0nDWFWj1BzfXzAIvcX3jQHlff105WtUHAGQ5' );
            $registrationIds = $fcm_token;
        #prep the bundle
             $msg = array
                  (
        		'body' 	=> $discription,
        		'title'	=> $title,
                     	'icon'	=> 'https://app.bongosikha.com/admin/upload/'.$img,/*Default Icon*/
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
       //echo"dgfdggggggggggg";
        echo $result;

        					    
            }
            
  } 
   if($use['user_type']=='6')
	{
	      $use['user_type'];
	   
        $ex=explode(",",$member_id);
         foreach($ex as $x => $y)
        	{
        	    //print_r($ex[$x]);
        	    
        				// $ex[$x];
        				$studff=$obj->fetchById($ex[$x],"user_register","id");
        			 $fcm_token=	$studff['fcm_token'];
        			 $id=$studff['id'];
        		
                 #API access key from Google API's Console
            define( 'API_ACCESS_KEY', 'AAAA18hcJbg:APA91bEQ_2wSCDKCXTSDgphHqsBbZqkmauM8JajtfwJvYEWkf-_cWDRHlbmJYNnhTcqDeJFrmAPRtxoI47roGsU7qBegjZCGKe2v_gAk0nDWFWj1BzfXzAIvcX3jQHlff105WtUHAGQ5' );
            $registrationIds = $fcm_token;
        #prep the bundle
             $msg = array
                  (
        		'body' 	=> $discription,
        		'title'	=> $title,
                     	'icon'	=> 'https://app.bongosikha.com/admin/upload/'.$img,/*Default Icon*/
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
    if($use['user_type']=='1')
	{
        $ex=explode(",",$member_id);
         foreach($ex as $x => $y)
        	{
        				// $ex[$x];
        				$student=$obj->fetchById($ex[$x],"user_register","id");
        			$fcm_token=	$student['fcm_token'];
        		
                 #API access key from Google API's Console
            define( 'API_ACCESS_KEY', 'AAAA18hcJbg:APA91bEQ_2wSCDKCXTSDgphHqsBbZqkmauM8JajtfwJvYEWkf-_cWDRHlbmJYNnhTcqDeJFrmAPRtxoI47roGsU7qBegjZCGKe2v_gAk0nDWFWj1BzfXzAIvcX3jQHlff105WtUHAGQ5' );
            $registrationIds = $fcm_token;
        #prep the bundle
             $msg = array
                  (
        		'body' 	=> $discription,
        		'title'	=> $title,
                     	'icon'	=> 'https://app.bongosikha.com/admin/upload/'.$img,/*Default Icon*/
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
     if($use['user_type']=='9')
	{
	 $ex=explode(",",$member_id);
         foreach($ex as $x => $y)
        	{
        	    
        	    
        	    
        				// $ex[$x];
            $student=$obj->fetchById($ex[$x],"user_register_goverment","id");
        				
        			$fcm_token=	$student['fcm_token'];
        		
                 #API access key from Google API's Console
            define( 'API_ACCESS_KEY', 'AAAA18hcJbg:APA91bEQ_2wSCDKCXTSDgphHqsBbZqkmauM8JajtfwJvYEWkf-_cWDRHlbmJYNnhTcqDeJFrmAPRtxoI47roGsU7qBegjZCGKe2v_gAk0nDWFWj1BzfXzAIvcX3jQHlff105WtUHAGQ5' );
            $registrationIds = $fcm_token;
        #prep the bundle
             $msg = array
                  (
        		'body' 	=> $discription,
        		'title'	=> $title,
                     	'icon'	=> 'https://app.bongosikha.com/admin/upload/'.$img,/*Default Icon*/
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
    if($use['user_type']=='10')
	{
        $ex=explode(",",$member_id);
         foreach($ex as $x => $y)
        	{
        				// $ex[$x];
        				$student=$obj->fetchById($ex[$x],"user_register_goverment","id");
        			$fcm_token=	$student['fcm_token'];
        		
                 #API access key from Google API's Console
            define( 'API_ACCESS_KEY', 'AAAA18hcJbg:APA91bEQ_2wSCDKCXTSDgphHqsBbZqkmauM8JajtfwJvYEWkf-_cWDRHlbmJYNnhTcqDeJFrmAPRtxoI47roGsU7qBegjZCGKe2v_gAk0nDWFWj1BzfXzAIvcX3jQHlff105WtUHAGQ5' );
            $registrationIds = $fcm_token;
        #prep the bundle
             $msg = array
                  (
        		'body' 	=> $discription,
        		'title'	=> $title,
                     	'icon'	=> 'https://app.bongosikha.com/admin/upload/'.$img,/*Default Icon*/
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
            		
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='latest_update_list';
       </script>");
     
  
}
else
{ 
    	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='latest_update_list';
       </script>");
    
}
	
?>