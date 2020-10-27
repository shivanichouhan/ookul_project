<?php include("config.php");
include"session.php";
class database
{
    private $link;
    function __construct()
    {
        $this->link = mysqli_connect( config::host, config::username, config::password , config::database);
        
    }
    function __distruct()
    {
        mysqli_close($this->link);
    }
	/*****************************Sumeet's New Admin Panel *********************************/
	function insert_pdf_user_ebook_1($main_category,$user_id,$title,$tags,$date,$description,$show_type,$payment_type,$img,$u,$doc,$n,$thumb)
	{ 
	    $date=date("d-m-Y");
     	$sql="insert into ebook_pdf(main_category,user_id,title,tags,date,description,show_type,payment_type,images,user_type,doc_type,notes,thumbnail)values('$main_category','$user_id','$title','$tags','$date','$description','$show_type','$payment_type','$img',$u,$doc,'$n','$thumb')";  
     
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
		function insert_user_todolist($user_id,$subject,$task_date,$tags,$notes,$task_time,$status)
	{ 
	    $date=date("d-m-Y");
     	$sql="insert into Todolist(user_id,subject,Tag,notes,task_date,task_time,status,created_dt)values($user_id,'$subject','$tags','$task_date','$notes','$task_time',
     	      '$status','$date')";  
     
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
	
		function insert_user_planlist($user_id,$subject,$task_date,$task_enddate,$status)
	{ 
	    $date=date("d-m-Y");
     	$sql="insert into plan(user_id,subject,task_startdate,task_enddate,status,created_dt)values($user_id,'$subject','$task_date','$task_enddate','$status','$date')";  
     
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
	
	
		function insert_pdf_user_ebook_1_video($main_category,$user_id,$title,$tags,$date,$description,$show_type,$payment_type,$img,$thumb,$pr)
	{ 
	    $date=date("d-m-Y");
     	$sql="insert into ebook_pdf(main_category,user_id,title,tags,date,description,show_type,payment_type,video_file,thumbnail,privacy)values('$main_category','$user_id','$title','$tags','$date','$description','$show_type','$payment_type','$img','$thumb','$pr')";  
     	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
	 function top5_sponser()
    {
      $sql="select *  from register as w 
                ORDER BY id desc limit 5";
    
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if($rs)
            return $rs;
        else
            return false;
    }
	
	 function insert_pdf_wishlist($user_id,$v_id)
    { 
       
        $date=date("d-m-Y");
        $sql="insert into wishlist(video_id,user_id,created_dt)values($v_id,$user_id,'$date')"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
    }
    
    function user_updaterating($id,$rating)
	{
		$sql="update register set rating=$rating where id='$id' ";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		
	}

	function trending_video()
	{
	  $sql="select * ,count(w.id) from welcome_videos as w join `like` as la on  w.id = la.video_id GROUP by w.id
				ORDER BY count(la.video_id) desc";
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	
	  function list($tablenm)
    {
      $sql="select *  from $tablenm";
    
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if($rs)
            return $rs;
        else
            return false;
    }
    
    	  function listdetail($tablenm,$field,$value)
    {
      $sql="select *  from $tablenm where $field = $value";
    
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if($rs)
            return $rs;
        else
            return false;
    }
	function userInsert_new($fname,$lname,$email,$phone,$password,$category,$picture,$dob,$address)
	{ 
	    $date=date("d-m-Y");
     	$sql="insert into register(fname,lname,email,phone,password,category,picture,dateofbirth,address,registrationdate)values('$fname','$lname','$email','$phone','$password','$category','$picture','$dob','$address','$date')"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function add_play_list($user_id,$video_id,$date,$time)
	{ 
	   
     	$sql="insert into `play_list`(`userid`,`video_id`,`date`,`time`)values('$user_id','$video_id','$date','$time')"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
		function add_like($user_id,$video_id,$date,$time)
	{ 
	   
     	$sql="insert into `like`(`uid`,`video_id`,`date`,`time`)values('$user_id','$video_id','$date','$time')"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function login1($email, $password, $table, $uField, $pField, $sField, $status)
    {
       $sql = "select * from $table where $uField='$email' and $pField='$password' and $sField='$status'";  
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	function insert_practice_exam_instruction($exam_type_id,$title,$descrp)
    {
    //$success_date=date("d-m-Y");
    $sql="insert into `exam_instruction`(exam_type,title,description)values('$exam_type_id','$title','$descrp')"; 
    $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
    if($rs)
    return mysqli_insert_id($this->link);
    else
    return false;
    }
	function insert_new_pdf_exam($heading,$pdf)
    {
    //$success_date=date("d-m-Y");
    $sql="insert into `exam_sol_pdf`(examid,exam_pdf)values('$heading','$pdf')"; 
    $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
    if($rs)
    return mysqli_insert_id($this->link);
    else
    return false;
    }
	function insert_order_new($oid,$user_id,$price,$status_new)
    {
    $success_date=date("d-m-Y");
    $sql="insert into `gov_order_history`(order_id,user_id,price,sucess_date,packageid)values('$oid','$user_id','$price','$success_date','$status_new')"; 
    $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
    if($rs)
    return mysqli_insert_id($this->link);
    else
    return false;
    }
	function updatestatus_order_new($oid,$status_new)
	{
	    $sql="update  gov_order set partial_pay_status='$status_new' where id='$oid'"; 
    	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if (mysqli_affected_rows($this->link) == 1)
		return true;
		return false;
	    
	}
	function updatestatus_order($oid)
	{
	    $sql="update  gov_order set status='1' where id='$oid'";
    	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if (mysqli_affected_rows($this->link) == 1)
		return true;
		return false;
	    
	}
	function updatestatus_con($user_id)
	{
	    $success_date=date("d-m-Y");
	    $sql="update user_register_goverment set pstatus='1',success_date='$success_date',payment_type='1' where id='$user_id'";
    	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if (mysqli_affected_rows($this->link) == 1)
		return true;
		return false;
	}
	function update_order_gov($name,$email,$mobile,$price,$select_plan,$user_id,$total_price)
    {
   // $date=date("d-m-Y");
	$sql = "update gov_order set name='$name',email='$email',mobile='$mobile',price='$price',plan_id='$select_plan',total_price='$total_price' where user_id='$user_id'"; 
	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
    if (mysqli_affected_rows($this->link) == 1)
    return true;
    else
    return false;
    }
	function fetchAllDetailByDayASC_1_new($table)
    {
        $sql = "select * from $table where `exam_type`=1 and `pstatus`=1 order by id ASC"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function updateStatusUser1000_new($id, $table, $field,$package_status)
    {
    $date=date("d-m-Y");
 	$sql = "update $table set payment_type='1',pstatus='1',status='1',payment_success_date='$date',package_status='$package_status' where $field='$id'"; 
    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
    if (mysqli_affected_rows($this->link) == 1)
    return true;
    else
    return false;
    }
	function insert_school_instructions($exam_name,$content)
    {
    $sql="insert into `school_exam_instructions_1`(exam_name,contents)values('$exam_name','$content')"; 
    $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
    if($rs)
    return mysqli_insert_id($this->link);
    else
    return false;
    }
	function update_expiry_date_new($expirydate,$userid)
	{
	$sql="update user_register set expriy_date='$expirydate' where id='$userid' ";  
	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
	if (mysqli_affected_rows($this->link) == 1)
	return true;
	return false;
	}
	function bulk_upload_school_exam_007($class_id,$subject_id,$chapter,$topic,$question,$option1,$option2,$option3,$option4,$solution,$answer)
	{
    $sql="insert into `multiple_question`(class_id,subject,chapter,topic,question,option1,option2,option3,option4,solution,answer)values('$class_id','$subject_id','$chapter','$topic','$question','$option1','$option2','$option3','$option4','$solution','$answer')"; 
	$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
	if($rs)
	return mysqli_insert_id($this->link);
	else
	return false;
	}
	function update_registeruser_subject($subject,$user_id)
	{
		$sql="update user_register set subjects='$subject' where id='$user_id' ";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
		function insert_registeruser_007_19_03_2020($name,$email,$mobile,$password,$city_id,$block,$address,$school_address,$gender,$dob,$class,$school,$img,$mac,$fcm_token,$pro_id,$lat,$lng)
	{
		$register_date=date("d-m-Y");
		 $sql="insert into  user_register (name,email,mobile,password,city_id,block,address,school_address,gender,dob,class,school,photo,mac,fcm_token,pro_id,lat,lng,register_date,status,payment_type,pstatus,payment_success_date)values('$name','$email','$mobile','$password','$city_id','$block','$address','$school_address','$gender','$dob','$class','$school','$img','$mac','$fcm_token','$pro_id','$lat','$lng','$register_date',1,1,1,'$register_date')";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function insert_class_order_007_19_03_2020($user_id,$class_id,$name,$email,$mobile,$price,$nstatus)
	{
	$order_date=date("d-m-Y");
	$sql="insert into class_order(user_id,class_id,name,email,mobile,price,type,order_date,status,nstatus)values('$user_id','$class_id','$name','$email','$mobile','$price',1,'$order_date',1,'$nstatus')"; 
	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
	if($rs)
	return mysqli_insert_id($this->link);
	else
	return false;
	}
	function fetchByIdByStatus_007_forget($id, $table,$field,$mobile,$mobile1,$mobile2,$mobile3)
    {
        $sql = "select * from $table where $field='$id' and $mobile='$mobile1' and $mobile2='$mobile3'";   
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	function update_exam_free_video_status($id,$status)
	{
         $sql="UPDATE `school_exam` SET `free_status`='$status' WHERE id='$id'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	function updateStatus_007_new($user_id,$new_class,$pstatus,$payment_type,$payment_sucess_date)
    {
	$sql = "update `user_register` set `class`='$new_class',`pstatus`='$pstatus',`payment_type`='$payment_type',`payment_success_date`='$payment_sucess_date' where `id`='$user_id'";  
    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
	function updateStatuscoupan_007_new($id, $table, $field, $nstatus)
    {
	 	$sql = "update $table set status='1',`nstatus`='$nstatus' where $field='$id'";  //die();

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
	function fetchByIdByStatusByStatus_007_coupon($id, $table,$field,$mobile,$mobile1,$aa,$aa1)
    {
        $sql = "select * from $table where $field='$id' and $mobile='$mobile1' and $aa='$aa1'";   
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	function fetchDetailByIdByStatus_007_007($id, $table, $field,$sfield, $status, $sfield1, $status1)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' and $sfield1='$status1'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function inser_askme($user_id,$email,$phone,$subject,$chapter,$topic,$question,$img)
	{ 
	    $date=date("d-m-Y");
		$sql="insert into ask_question(user_id,email,phone,subject,chapter,topic,question,date,img1)values('$user_id','$email','$phone','$subject','$chapter','$topic','$question','$date','$img')";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function fetchAllDetailByDayASC_1($table)
    {
        $sql = "select * from $table where `exam_type`=1 order by id ASC";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function update_gover_exam_2($days,$exam_name,$time_dur,$numbers_of_que,$total_marks,$q_marks_pluse,$each_set_question,$id)
	{
	$sql = "update 'gove_exam' set `exam_name`='$exam_name',`time_dur`='$time_dur',`numbers_of_que`='$numbers_of_que',`total_marks`='$total_marks',`q_marks_pluse`='$q_marks_pluse',`day`='$days' where id='$id'";  
    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
    if (mysqli_affected_rows($this->link) == 1)
    return true;
    else
    return false;
	}
	function update_gover_exam_1($days,$exam_name,$subject,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday,$sunday,$exam_type,$time_dur,$start_time,$end_time,$numbers_of_que,$total_marks,$q_marks_pluse,$q_mark_min,$each_set_question,$id)
	{
	$sql = "update 'gove_exam' set exam_name='$exam_name',subject='$subject',monday='$monday',tuesday='$tuesday',wednesday='$wednesday',thursday='$thursday',friday='$friday',saturday='$saturday',sunday=$sunday',exam_type='$exam_type',time_dur='$time_dur',start_time='$start_time',end_time='$end_time',numbers_of_que='$numbers_of_que',total_marks='$total_marks',q_marks_pluse='$q_marks_pluse',q_mark_min='$q_mark_min',each_set_question='$each_set_question',day='$days' where id='$id'"; 
    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
    if (mysqli_affected_rows($this->link) == 1)
    return true;
    else
    return false;
	}
	function insert_gover_exam_new_1($days,$exam_name,$subject,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday,$sunday,$exam_type,$time_dur,$start_time,$end_time,$numbers_of_que,$total_marks,$q_marks_pluse,$q_mark_min,$each_set_question,$free)
	{
    $sql="insert into `gove_exam`(`day`,`exam_name`,`subject`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `exam_type`, `time_dur`, `start_time`, `end_time`, `numbers_of_que`, `total_marks`, `q_marks_pluse`, `q_mark_min`, `each_set_question`, `status`,`free_status`) values('$days','$exam_name','$subject','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday','$sunday','$exam_type','$time_dur','$start_time','$end_time','$numbers_of_que','$total_marks','$q_marks_pluse','$q_mark_min','$each_set_question',1,'$free')"; 
    $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
        return false;
	    
	}
	function insert_history_school($user_id,$id,$right_question,$rong_question,$total_obtain,$persentage,$exam_date)
	{
	    $sql="INSERT INTO `exam_history_school`(`user_id`, `ins_id`, `right_question`, `rong_question`, `total_obtain`, `persentage`,`date`,`status`) VALUES ('$user_id','$id','$right_question','$rong_question','$total_obtain','$persentage','$exam_date',1)";
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
    	if($rs)
    		return mysqli_insert_id($this->link);
    	else
    		return false;
	}
	function answer_api_school($user_id,$exam_type_id,$exam_type,$someJSON,$someJSON1,$status)
    {
    $date=date('Y-m-d');
    $time=date('H:i:s');
    $sql="insert into `question_answer_school`(user_id,exam_type_id,exam_type,question,answer,date,time,status)values('$user_id','$exam_type_id','$exam_type','$someJSON','$someJSON1','$date','$time','1')"; 
    $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
    if($rs)
    return mysqli_insert_id($this->link);
    else
    return false;
    }
	function fetchDetailByIdByStatusexampractis55555_new($id, $table, $field,$sfield,$status,$yy,$yy1)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' and $yy='$yy1'";  
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
		function fetchDetailByIdByStatusexampractis55555($id, $table, $field,$sfield, $status,$yy,$yy1,$settotal,$demoset)
    {
        
        $sql = "select * from $table where $sfield='$status' and $yy='$yy1' "; 
        //$sql = "select * from $table where $field='$id' and $sfield='$status' and $yy='$yy1'  LIMIT $settotal OFFSET $demoset";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function update_video_free_video_3($id,$status)
	{
         $sql="UPDATE `topic` SET `free_status`='$status' WHERE id='$id'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	function fetchDetailById_fordemotopic_school($id,$table,$field,$field1,$id1)
	{
    $sql = "select * from $table where $field='$id' and $field1='$id1'"; 
     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function update_video_free_video_1($id,$status)
	{
         $sql="UPDATE `demo_topic` SET `free_status`='$status' WHERE id='$id'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	function update_video_free_video($id,$status)
	{
         $sql="UPDATE `topic_wise_video` SET `free_status`='$status' WHERE id='$id'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	function insert_user_discount_update_1_007($user,$id)
	{
	    $sql="update `school_discount_code` set `user`='$user' where id='$id' "; 
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
	function update_user_discount_update1_1_007($amount,$coupon,$type,$sdate,$edate,$id)
	{
	    $sql="update `school_discount_code` set `random`='$coupon',`flat_id`='$type',`date`='$sdate',`expirydate`='$edate',`amount`='$amount' where id='$id' "; 
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
	function insert_discount_007_007($coupon,$type,$sdate,$edate,$amount)
	{
        $sql="insert into  `school_discount_code`(random,flat_id,date,expirydate,amount)values('$coupon','$type','$sdate','$edate','$amount')"; 
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function update_order_discount_school_new($amount,$dis_price,$code,$price,$order_id)
	{
	    $sql="update `class_order` set `total_price`='$amount',`discount_price`='$dis_price',`discount_code`='$code',`price`='$price' where id='$order_id' "; 
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
	function fetchAllDetailByIdByStatus_subscribtion($id, $table, $field, $sfield, $status)
    {
    $sql = "select * from $table where $sfield='$status' and $field='$id' ORDER BY id DESC LIMIT 1"; 
    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
    function fetchDetailById_newasc_007_1($id,$table,$field)
	{
        $sql="select * from $table where $field='$id' order by id DESC"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	
	 function fetchDetailById_newasc_007_12($id,$table,$field,$user_id)
	{
        $sql="select * from $table where $field='$id' and user_id=$user_id order by id DESC";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	
	 function fetchDetailById_todolist_1($id,$table,$field)
	{
        $sql="select * from $table where $field='$id' order by todo_id DESC"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	
		 function fetchDetailById_planlist_1($id,$table,$field)
	{
        $sql="select * from $table where $field='$id' order by plan_id DESC"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	function fetchDetailById_newasc_007($id,$table,$field)
	{
        $sql="select * from $table where $field='$id' order by id ASC"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	function fetchAllDetailByDayASC($table)
    {
        $sql = "select * from $table order by days  ASC";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function fetchDetailByIdajay_007($id,$table,$field)
	{
	      $sql="select * from $table where $field='$id' order by id  ASC"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	
	function fetchAllDetailByID_allDoc($id, $table, $field, $sfield, $status)
    {
    $sql = "select * from $table where $sfield='$status' and $field='$id' ORDER BY id DESC"; 
    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	function insert_askme_doubt($user_id,$subject,$topic,$descp,$img)
	{
	     $sql="insert into  `doubt_clearance`(user_id,subject,topic,descp,image)values('$user_id','$subject','$topic','$descp','$img')";
	    $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updateanswer_007($reply,$pdf,$id)
	{
	$date=date("d-m-Y");
	$sql="update `doubt_clearance` set `reply_descp`='$reply',`reply_image`='$pdf',`reply_date`='$date' where id='$id' ";  
	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
    if (mysqli_affected_rows($this->link) == 1)
    return true;
    else
    return false;
	}
	function update_goverment_plan_price($famount,$fagst,$pamount,$pgst,$id)
	{
	$sql="update `goverment_plan` set `price`='$famount',`gst`='$fagst',`partial_payment`='$pamount',`partial_gst`='$pgst' where id='$id' "; 
	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
    if (mysqli_affected_rows($this->link) == 1)
    return true;
    else
    return false;
	}
	function update_goverment_plan_price_1($rs)
	{
	    $sql="update `goverment_plan` set `plan_id`='$rs' where id='$rs' "; 
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
	function insert_goverment_plan_price($famount,$fagst,$pamount,$pgst)
	{
	     $sql="insert into  `goverment_plan`(price,gst,partial_payment,partial_gst,status)values('$famount','$fagst','$pamount','$pgst','1')";
	    $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function update_order_discount_new_007($amount,$order_id,$partial_pay_status)
	{
	$sql="update `gov_order` set `total_price`='$amount',`price`='$amount',`partial_pay_status`='$partial_pay_status' where id='$order_id' "; 
	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
    if (mysqli_affected_rows($this->link) == 1)
    return true;
    else
    return false;
	}
	function update_user_discount_update1_1($amount,$coupon,$type,$sdate,$edate,$id)
	{
	    $sql="update `discount_code` set `random`='$coupon',`flat_id`='$type',`date`='$sdate',`expirydate`='$edate',`amount`='$amount' where id='$id' "; 
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
	function insert_user_discount_update_1($user,$id)
	{
	    $sql="update `discount_code` set `user`='$user' where id='$id' "; 
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
	function update_order_discount_school_1($amount,$dis_price,$code,$price,$order_id)
	{
	    $sql="update `school_order` set `total_price`='$amount',`discount_price`='$dis_price',`discount_code`='$code',`price`='$price' where id='$order_id' "; 
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
	function insert_discount_007_1($coupon,$type,$sdate,$edate,$amount)
	{
        $sql="insert into  `discount_code`(random,flat_id,date,expirydate,amount)values('$coupon','$type','$sdate','$edate','$amount')"; 
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function update_user_discount_update1($amount,$coupon,$type,$sdate,$edate,$id)
	{
	    $sql="update `discount_code` set `random`='$coupon',`flat_id`='$type',`date`='$sdate',`expirydate`='$edate',`amount`='$amount' where id='$id' "; 
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
	function insert_user_discount_update($user,$id)
	{
	    $sql="update `discount_code` set `user`='$user' where id='$id' "; 
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
	function update_order_discount_school($amount,$dis_price,$code,$price,$order_id)
	{
	    $sql="update `school_order` set `total_price`='$amount',`discount_price`='$dis_price',`discount_code`='$code',`price`='$price' where id='$order_id' "; 
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
	function insert_discount_007($coupon,$type,$sdate,$edate,$amount)
	{
        $sql="insert into  `discount_code`(random,flat_id,date,expirydate,amount)values('$coupon','$type','$sdate','$edate','$amount')"; 
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function update_video_pstatus_video($id,$status)
	{
         $sql="UPDATE `gover_topic` SET `pstatus`='$status' WHERE id='$id'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	function fetchByIdByStatusBymacbyfcm_token($id, $table,$field,$field1,$id1)
    {
        $sql = "select * from $table where $field='$id' and $field1='$id1'";   
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	function Bulk_upload_examrankk789_school($exam_id,$subject_id,$question,$option1,$option2,$option3,$option4,$solution,$answer)
	{
 $sql="insert into  `school_multiple_question`(exam_type_id,subject,question,option1,option2,option3,option4,solution,answer)values('$exam_id','$subject_id','$question','$option1','$option2','$option3','$option4','$solution','$answer')"; 
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function update_school_question1($exam_type_id,$subject,$type,$question,$option1,$option2,$option3,$option4,$solution,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$solution1,$answer,$id)
	{
	    $sql="update school_multiple_question set exam_type_id='$exam_type_id',subject='$subject',question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',solution='$solution',question_image='$question_image',option_img1='$option_img1',option_img12='$option_img12',option_img3='$option_img3',option_img4='$option_img4',solution1='$solution1',answer='$answer' where id='$id' ";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	function goverment_question_school($exam_type_id,$subject,$question,$option1,$option2,$option3,$option4,$solution,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$solution1,$answer)
	{
  $sql="insert into  `school_multiple_question`(exam_type_id,subject,question,option1,option2,option3,option4,solution,question_image,option_img1,option_img12,option_img3,option_img4,solution1,answer)values('$exam_type_id','$subject','$question','$option1','$option2','$option3','$option4','$solution','$question_image','$option_img1','$option_img12','$option_img3','$option_img4','$solution1','$answer')"; 
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function update_school_gover_exam($exam_name,$subject,$exam_type,$time_dur,$start_time,$end_time,$numbers_of_que,$total_marks,$q_marks_pluse,$q_mark_min,$each_set_question,$start_date,$id)
	{
	    $sql = "update `school_exam` set exam_name='$exam_name',subject='$subject',exam_type='$exam_type',time_dur='$time_dur',start_time='$start_time',end_time='$end_time',numbers_of_que='$numbers_of_que',total_marks='$total_marks',q_marks_pluse='$q_marks_pluse',q_mark_min='$q_mark_min',each_set_question='$each_set_question',start_date='$start_date' where id='$id'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
	function insert_gove_school_exam($exam_name,$subject,$exam_type,$time_dur,$start_time,$end_time,$numbers_of_que,$total_marks,$q_marks_pluse,$q_mark_min,$each_set_question,$start_date)
	{
	 $sql="insert into `school_exam`(`exam_name`,`subject`,`exam_type`, `time_dur`, `start_time`, `end_time`, `numbers_of_que`, `total_marks`, `q_marks_pluse`, `q_mark_min`, `each_set_question`, `status`,`start_date`) values('$exam_name','$subject','$exam_type','$time_dur','$start_time','$end_time','$numbers_of_que','$total_marks','$q_marks_pluse','$q_mark_min','$each_set_question',1,'$start_date')"; 
	     $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
        return false;
	    
	}
	function fetchAllDetail_groupbysubject($table)
    {
        $sql = "select * from $table GROUP BY subject";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	 function feedback2_update($message,$id)
	{
	 $sql ="update feedback set reply='$message' where id='$id'";  

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function update_practis_question1($exam_type_id,$subject,$question,$option1,$option2,$option3,$option4,$solution,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$solution1,$answer,$id)
	{
	    $sql="update user_multiple_questions set exam_id='$exam_type_id',subject_id='$subject',question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',solution='$solution',question_image='$question_image',option_img1='$option_img1',option_img12='$option_img12',option_img3='$option_img3',option_img4='$option_img4',solution1='$solution1',answer='$answer' where id='$id' "; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	function insert_einstructions($exam_title,$exam_name,$content)
	{
		 $sql="insert into instruction_exam(exam_title,exam_name,content)values('$exam_title','$exam_name','$content')";
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function add_video_solution_($package_id,$exam_id,$title,$img,$video)
	{
$sql="insert into video_solutions(package_id,exam_id,title,img1,video1)values('$package_id','$exam_id','$title','$img','$video')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
		return mysqli_insert_id($this->link);
		else
		return false;
	}
	function pdfupload($package_id,$exam_id,$pdf)
	{
	$sql="insert into exampdf(package,exam,pdf)values('$package_id','$exam_id','$pdf')";
	$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
	function updatepdfupload($package_id,$exam_id,$pdf,$id)
	{
	 $sql="update exampdf set package='$package_id',exam='$exam_id',pdf='$pdf' where id='$id'";
	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		
	}
	function update_exam_subject___007($subject,$id)
	{
		$sql ="update add_subject_exam set subject='$subject' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
        return true;
        return false;
	}
	function insert_exam_subject___007($subject)
	{
		$sql="insert into add_subject_exam(subject)values('$subject')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
		return mysqli_insert_id($this->link);
		else
		return false;
	}
	function question_answer_solution($subject_id,$exam_type_id,$exame_type,$question,$option1,$option2,$option3,$option4,$solution,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$solution1,$answer)
		{
  $sql="insert into  `user_multiple_questions`(package_id,exam_id,subject_id,question,option1,option2,option3,option4,solution,question_image,option_img1,option_img12,option_img3,option_img4,solution1,answer)values('$exam_type_id','$exame_type','$subject_id','$question','$option1','$option2','$option3','$option4','$solution','$question_image','$option_img1','$option_img12','$option_img3','$option_img4','$solution1','$answer')";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function insert_exam_007($subject,$category,$duration,$type,$package,$question_no,$total_marks,$marks_per_quest,$negative_marking,$live_duration,$dateofexam,$edate,$stime,$etime,$contant,$img)
	{
		$sql="insert into exam_names(subject,category,duration,type,package,question_no,total_marks,marks_per_quest,negative_marking,live_duration,dateofexam,edate,stime,etime,contant,images,status)values('$subject','$category','$duration','$type','$package','$question_no','$total_marks','$marks_per_quest','$negative_marking','$live_duration','$dateofexam','$edate','$stime','$etime','$contant','$img',1) "; 
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function insertexampackages0007($name,$contant,$img,$amount,$package_type,$package_duration,$date)
	{
	$sql="insert into package(title,descriptions,image,pricing,package_type,package_duration,date)values('$name','$contant','$img','$amount','$package_type','$package_duration','$date')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}

    function login($user_name, $password, $table, $uField, $pField, $sField, $status)
    {
       $sql = "select * from $table where $uField='$user_name' and $pField='$password' and $sField='$status'"; 
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	function changePassword($id, $table, $field, $password, $ufield)
    {
        $sql = "update $table set $ufield='$password' where $field='$id'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return $rs;
        else
            return false;
    }
     function fetchById($id, $table,$field)
    {
        $sql = "select * from $table where $field='$id'";   
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
     function fetchById85210($id, $table,$field)
    {
            $sql = "select * from $table where $field='$id'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
    
	function fetchByIdTable($table)
    {
        $sql = "select * from $table";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	function updateprofile($user_name,$email,$phone,$img,$address,$id)
    {
      $sql = "update  admin set user_name='$user_name',email='$email',phone='$phone',photo='$img',address='$address',status=1 where id='$id'"; 
       
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
    }
    	function updateprofile_front($fname,$lname,$phone,$email,$img,$country,$state,$city,$district,$subject,$address,$id)
    {
      $sql = "update  register set fname='$fname',lname='$lname',phone='$phone',email='$email',picture='$img',country='$country',state='$state',city='$city',district='$district',subject='$subject',address='$address' where id='$id'"; 
       
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
    }
	function insertstate($state)
	{
		 $sql="insert into state(state,status)values('$state',1)";
		
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
	}
	function fetchAllDetail($table)
    {
        $sql = "select * from $table";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function fetchOptChapterDetail(){
         $sql = "select optional_subject.subject,optional_chapter.id as chapter_id,optional_chapter.chapter,optional_chapter.image from optional_chapter inner join optional_subject on optional_subject.id=optional_chapter.opt_sub_id";   
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
         if ($rs)
            return $rs;
        else
            return false;
    }
	function updateStatus($id, $table, $sfield, $status, $field)
    {
	 	  $sql = "update `$table` set `$sfield`='$status' where `$field`='$id'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
    function updateexamupdate($category,$subcategory,$title,$discription,$url,$id)
    {
	 	  $sql = "update exam_update set category='$category',subcategory='$subcategory',title='$title',discription='$discription',url='$url' where id='$id'";

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
	function updateStatuscoupan($id, $table, $field)
    {
	 	$sql = "update $table set status='1' where $field='$id'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
    function updateexamupdarecategory($category,$id)
    {
	 	$sql = "update category_exam_update set category='$category' where id='$id'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
    function updatesubcategoryexamupdate($category,$subcategory,$id)
    {
	 	$sql = "update subcategory_exam_update set category='$category',subcategory='$subcategory' where id='$id'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
	function updateStatuscoupanuser($id, $table, $field,$class,$class1)
    {
        $date=date("d-m-Y");
	 	$sql = "update $table set payment_type='3',pstatus='1',status='1',class='$class1',payment_success_date='$date' where $field='$id'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
	function updatestate($state,$id)
	{
		$sql = "update state set state='$state' where id='$id'"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function fetchAllDetailByStatus($table)
    {
         $sql = "select * from $table where status='1'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	//-------------sheetal-------23-08-2018-----
	function fetchDetailById($id,$table,$field)
	{
        $sql="select * from $table where $field='$id'"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	function fetchDetailByIdajay($id,$table,$field)
	{
	      $sql="select * from $table where $field='$id' order by id  desc"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
		function fetchDetailByIdtesttt($id,$table,$field)
	{
	       $sql="select * from $table where $field='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	
	
	   
    function deleteById($id, $table, $field)
    {
         $sql = "delete from `$table` where $field='$id'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if($rs)
            return $rs;
        else
            return false;
    }
	
	
	function updatecontant($class_id,$contant,$img,$id)
	{
		$sql="update contant set class_id='$class_id',contant='$contant',video='$img' where id='$id' ";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
		
	}
	function replay_user_ask_q($user_id,$email,$questions,$answer,$img)
	{
		
		$date=date("Y-m-d");
		$sql="insert into replay_ask_question(user_id,email,questions,answer,img,date)values('$user_id','$email','$questions','$answer','$img','$date')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
	
	  function website_update001($web_name,$web_title,$about_company,$seo_key,$seo_desc,$phone,$fax,$email,$address,$facebook,$twitter,$google,$ios,$play_store,$img,$img1,$clat,$clong,$id)
    {
         $sql = ("UPDATE `website_details` SET web_name='$web_name',web_title='$web_title',about_company='$about_company',seo_key='$seo_key',seo_desc='$seo_desc',phone='$phone',fax='$fax',email='$email',address='$address',facebook='$facebook',twitter='$twitter',google='$google',ios='$ios',play_store='$play_store',logo='$img',favicon='$img1',clat='$clat',clong='$clong' WHERE detail_id='$id'");

        $rs = mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if ($rs)
            return true;
        else
            return false;
        
    }
	//--------Ruby-----------//
	
	function insertagent_register($name,$email,$mobile,$state_id,$city_id,$address,$gender,$school,$img)
	{
		$register_date=date("d-m-Y");
		 $sql="insert into  agent_register (name,email,mobile,state_id,city_id,address,gender,school,photo,register_date,status)values ('$name','$email','$mobile','$state_id','$city_id','$address','$gender','$school','$img','$register_date',1)";
		
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	//---sheetal---4-9-2018------
	function insertcontant($state_id,$city,$school,$class_id,$contant,$img)
	{
		$date=date("Y-m-d");
		$sql="insert into contant(state_id,city,school,class_id,contant,video,status,date)values('$state_id','$city','$school','$class_id','$contant','$img',1,'$date')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	
	//05-09-2018---sheetal--

	function update_sub_agent($agent_id,$name,$email,$password,$mobile,$amount,$city_id,$block_id,$address,$adhar_no,$img1,$img,$id)
	{
		 $date=date("Y-m-d");
		 $sql = "update subagent set agent_id='$agent_id',name='$name',email='$email',password='$password',mobile='$mobile',amount='$amount',city_id='$city_id',block_id='$block_id',address='$address',adhar_no='$adhar_no',document='$img1',photo='$img',status='1',date='$date' where id='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	//----------9/05/2018--------update--------------
	function insertcity($city)
	{
		$sql="insert into city(city,status)values('$city',1)";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
	}
	function updatecity($city,$id)
	{
		$sql = "update city set city='$city' where id='$id'"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function insertblock($city,$block)
	{
		$sql="insert into block(city,block,status)values('$city','$block',1)";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
	}
	function updateblock($city,$block,$id)
	{
		$sql = "update block set city='$city',block='$block' where id='$id'"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function insertagent($name,$email,$password,$mobile,$amount,$city_id,$address,$adhar_no,$img,$img1)
	{
		$date=date("Y-m-d");
		 $sql="insert into agent (name,email,password,mobile,amount,city_id,address,adhar_no,photo,document,status,date)values('$name','$email','$password','$mobile','$amount','$city_id','$address','$adhar_no','$img','$img1',0,'$date')";
		
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function update_agent($name,$email,$password,$mobile,$amount,$city_id,$address,$adhar_no,$img1,$img,$id)
	{
		$date=date("Y-m-d");
		 $sql = "update agent set name='$name',email='$email',password='$password',mobile='$mobile',amount='$amount',city_id='$city_id',address='$address',adhar_no='$adhar_no',document='$img1',photo='$img',status='1',date='$date' where id='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function insert_subagent($agent_id,$name,$email,$password,$mobile,$amount,$city_id,$block_id,$address,$adhar_no,$img,$img1)
	{
		$date=date("Y-m-d");
		$sql="insert into subagent (agent_id,name,email,password,mobile,amount,city_id,block_id,address,adhar_no,photo,document,status,date)values('$agent_id','$name','$email','$password','$mobile','$amount','$city_id','$block_id','$address','$adhar_no','$img','$img1',0,'$date')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	//----06-05-2018------------
	function insertclass($class,$expiry_date)
	{
		$sql="insert into class(class,expiry_date,status)values('$class','$expiry_date',1)";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function expriy_date_update_status($id)
    {
		$sql = "update class set status='0' where id='$id'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
	
	function edit_class($class,$expiry_date,$id)
	{
		 $sql = "update class set class='$class',expiry_date='$expiry_date',status='1' where id='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function insertsubject($class,$subject,$img,$img1)
	{
		$sql="insert into subject(class,subject,icon1,banner1,status)values('$class','$subject','$img','$img1',1)"; 
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function insertchapteropt($subject,$chapter,$img)
	{
		$sql="insert into optional_chapter(opt_sub_id,chapter,image)values('$subject','$chapter','$img')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function showsubject()
    {
        $sql = "select * from optional_subject ORDER BY id DESC";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        
        if (mysqli_num_rows($rs)>=1){
         $rows = array();
            while($row = $rs->fetch_assoc()) {
            $rows[] = $row;
            }
           
            return $rows;
    
        }else{
             
         return false;
        }
        
       
    }
    
    function showassignment()
    {
        $sql = "select * from assignment ORDER BY id DESC";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        
        if (mysqli_num_rows($rs)>1){
         $rows = array();
            while($row = $rs->fetch_assoc()) {
            $rows[] = $row;
            }
           
            return $rows;
    
        }else{
         return false;
        }
      
    }
    function showOptionalModuleData(){
        $sql = "select * from optional_module ORDER BY id DESC";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        
        if (mysqli_num_rows($rs)>1){
         $rows = array();
            while($row = $rs->fetch_assoc()) {
            $rows[] = $row;
            }
           
            return $rows;
    
        }else{
         return false;
        }
    }
	function update_subject($icon1,$images,$class,$subject,$id)
	{
		$sql="update subject set class='$class',subject='$subject',icon1='$icon1',banner1='$images' where id='$id' ";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
		function update_chapter_opt($subject,$chapter,$img,$id)
	{
		$sql="update optional_chapter set opt_sub_id='$subject',chapter='$chapter',image='$img' where id='$id' ";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function insertchapter($class,$subject,$chapter)
	{
		$sql="insert into chapter(class,subject,chapter,status)values('$class','$subject','$chapter',1)";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function updatechapter($class,$subject,$chapter,$id)
	{
		$sql="update chapter set class='$class',subject='$subject',chapter='$chapter' where id='$id' ";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
//function insert_topic($class,$subject,$chapter,$topic,$topic_pic,$img,$thumbnail1,$video_path,$contant)
    //{
        // $sql="insert into topic(class,subject,chapter,topic,topic_pic,doucment,thumbnail,video,contant,status)values('$class','$subject','$chapter','$topic','$topic_pic','$img','$thumbnail1','$video_path','$contant',1)";
        
       // $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
       // if($rs)
        //    return mysqli_insert_id($this->link);
        //else
           // return false;
        //
    //}
    function insert_topic($class,$subject,$chapter,$topic,$topic_pic,$img,$contant)
    {
         $sql="insert into topic(class,subject,chapter,topic,topic_pic,doucment,contant,status)values('$class','$subject','$chapter','$topic','$topic_pic','$img','$contant',1)";
        
        $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
        
    }
	//---9-07-2018--
	
	function update_topic($class,$subject,$chapter,$topic,$topic_pic,$img,$contant,$id)
	{
		 $sql="update topic set class='$class',subject='$subject',chapter='$chapter',topic='$topic',topic_pic='$topic_pic',doucment='$img',contant='$contant' where id='$id' ";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
		
	}
	
	function insertcategory($category)
	{
		$sql="insert into category_add(category,status)values('$category',1) ";
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
		function insertexamupdarecategory($category)
	{
		$sql="insert into category_exam_update(category,status)values('$category',1) ";
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function insertsubcategoryexamupdate($category,$subcategory)
	{
		$sql="insert into subcategory_exam_update(category,subcategory,status)values('$category','$subcategory',1) ";
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function insertexamupdate($category,$subcategory,$title,$discription,$url)
	{
		$sql="insert into exam_update(category,subcategory,title,discription,url,status)values('$category','$subcategory','$title','$discription','$url',1) ";
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updatecategory($category,$id)
	{
		$sql="update category_add set category='$category' where id='$id' ";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function insertproduct($category,$product,$img,$price,$discount_type,$discount_amount,$contant)
	//insertproduct($category,$product,$img,$price,$discount,$contant)
	{
		 $sql="insert into shopping_product(category,product,image,price,discount_type,discount_amount,contant,status)values('$category','$product','$img','$price','$discount_type','$discount_amount','$contant',1)";
		
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function fetchDetailByIdByDatedes($id, $table, $field,$pfiled,$pstatus, $iid)
    {
         $sql = "select * from $table where $field='$id' and $pfiled='$pstatus' ORDER BY $iid DESC";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function update_product($category,$product,$img,$price,$discount_type,$discount_amount,$contant,$id)
	//update_product($category,$product,$img,$price,$discount,$contant,$id)
	{
		$sql ="update shopping_product set category='$category',product='$product',image='$img',price='$price',discount_type='$discount_type',discount_amount='$discount_amount',contant='$contant' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function insertdelivery_charges($potal_code,$delivery_charges)
	{
		$sql="insert into delivery_charges(potal_code,delivery_charges)values('$potal_code','$delivery_charges') ";
		$result=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function updatedelivery_charges($potal_code,$delivery_charges,$id)
	{
			$sql ="update  delivery_charges set potal_code='$potal_code',delivery_charges='$delivery_charges' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function fetchDetailByIdByStatus($id, $table, $field,$sfield, $status)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status'";    
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function fetchDetailByIdByStatusBYdes($id, $table, $field,$sfield, $status)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' order by id desc";
   
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //----
    function fetchDetailByIdByStatus000did($id, $table, $field,$sfield, $status)
    {
            $sql = "select * from $table where $field='$id' and $sfield='$status'"; 
       
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    
    
	function updateteakingno($traking_number,$order_id)
	{
		$sql ="update order_book set traking_number='$traking_number' where order_id='$order_id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	//----9-08-2018-------------
	
	function addcoupon($title,$class,$price,$i,$start_date,$end_date,$code,$ptype)
       {
	$date=date("d-m-Y");
        $sql = "insert into coupan_class(title,class,price,quentitiy,start_date,end_date,code,status,ptype)values('$title','$class','$price','$i','$start_date','$end_date','$code','0','$ptype')"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
    }
	// function updatecoupon($title,$code,$type,$discount,$minimum_amount,$start_date,$end_date,$img,$id)
  //  {
        // $sql = "update coupon set title='$title',code='$code',type='$type',discount='$discount',minimum_amount='$minimum_amount',start_date='$start_date',end_date='$end_date',image='$img' where id='$id'";
	   
      //  $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
      //  if (mysqli_affected_rows($this->link) == 1)
     //       return true;
     //   return false;
  //  }
	//----------------ruby-----------8-09-2018
	        function agent($email,$password, $table, $uField, $pField, $sField, $status)
    {
         $sql = "select * from $table where $uField='$email' and $pField='$password' and $sField='$status'";
  

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
 
    
	 function updateprofile001($name,$email,$mobile,$img,$address,$id)
		{
		$sql = "update  agent set name='$name',email='$email',mobile='$mobile',photo='$img',address='$address',status=1 where id='$id'"; 
			
	  $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		}
	 function insertsubagent($name,$email,$password,$mobile,$city_id,$block_id,$address,$expriy_date,$adhar_no,$img,$img1)
	 {
	  $date=date("Y-m-d");
	  $sql="insert into subagent (name,email,password,mobile,city_id,block_id,address,expriy_date,adhar_no,photo,document,status,date)values('$name','$email','$password','$mobile','$city_id','$block_id','$address','$expriy_date','$adhar_no','$img','$img1',0,'$date')";
	  $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
	  if($rs)
	   return mysqli_insert_id($this->link);
	  else
	   return false;
	 }
	function insertuser($name,$email,$mobile,$password,$expriy_date,$city,$block,$address,$gender,$dob,$class,$school,$img)
	{
		$register_date=date("d-m-Y");
		$sql="insert into  user_register (name,email,mobile,password,expriy_date,city_id,block,address,gender,dob,class,school,photo,register_date,status)values('$name','$email','$mobile','$password','$expriy_date','$city','$block','$address','$gender','$dob','$class','$school','$img','$register_date',1)";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function user_update1($name,$email,$mobile,$password,$expriy_date,$city,$block,$address,$gender,$dob,$class,$img,$id)
	{
		$sql="update user_register set name='$name',email='$email',mobile='$mobile',password='$password',expriy_date='$expriy_date',city_id='$city',block='$block',address='$address',gender='$gender',dob='$dob',class='$class',photo='$img' where id='$id' ";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		
	}
	
	function insertanswer($class_id,$subject,$chapter,$question,$answer)
	{
		   $sql="insert into `answer`(`class_id`,`subject`,`chapter`,`question`,`answer`,`status`)values('$class_id','$subject','$chapter','$question','$answer',1)";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updateanswer($class_id,$subject,$chapter,$question,$answer,$type,$pdf,$id)
	{
		 $sql="update answer set class_id='$class_id',subject='$subject',chapter='$chapter',question='$question',answer='$answer',type='$type',pdf='$pdf' where id='$id'";
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		
	}
	
	function insertlatest_update($title,$discription,$date,$video,$img,$user_type,$class,$member_id,$m_id,$agent,$subagent,$refferal,$student)
	{
	   $sql="insert into latest_update(title,discription,date,video,photo,user_type,class,member_id,m_id,agent,subagent,refferal_agent,student,status)values('$title','$discription','$date','$video','$img','$user_type','$class','$member_id','$m_id','$agent','$subagent','$refferal','$student',1)"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
        function updatelatest_update($title,$discription,$date,$video,$img,$id)
	{
		  $sql ="update latest_update set title='$title',discription='$discription',date='$date',video='$video',photo='$photo' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	///---
	function question($class_id,$subject,$chapter,$topic,$type,$question,$option1,$option2,$option3,$option4,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$answer)
	//question($class_id,$subject,$chapter,$question,$option1,$option2,$option3,$option4,$answer)
	{
	 $sql="insert into  multiple_question(class_id,subject,chapter,topic,type,question,option1,option2,option3,option4,question_image,option_img1,option_img12,option_img3,option_img4,answer)values('$class_id','$subject','$chapter','$topic','$type','$question','$option1','$option2','$option3','$option4','$question_image','$option_img1','$option_img12','$option_img3','$option_img4','$answer')"; 
			$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
	function updatequestion($class_id,$subject,$topic,$chapter,$question,$option1,$option2,$option3,$option4,$img,$img1,$img2,$img3,$img4,$answer,$id)
	//updatequestion($class_id,$subject,$chapter,$question,$option1,$option2,$option3,$option4,$answer,$id)
	//updatequestion($state_id,$city,$school_id,$class_id,$question,$question_1,$question_2,$question_3,$question_4,$answer,$id)
	{
		 $sql ="update multiple_question set class_id='$class_id',subject='$subject',topic='$topic',chapter='$chapter',question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',answer='$answer', question_image='$img',option_img1='$img1',option_img12='$img2',option_img3='$img3',option_img4='$img4' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function questiontruefalse($class_id,$subject,$chapter,$topic,$question,$answer)
	{
		  $sql="insert into  true_false_question(class_id,subject,chapter,topic,question,answer)values('$class_id','$subject','$chapter','$topic','$question','$answer')";
	
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updatequestiontruefalse($class_id,$subject,$chapter,$topic,$question,$answer,$id)
	{
		   $sql ="update true_false_question set class_id='$class_id',subject='$subject',chapter='$chapter',topic='$topic',question='$question',answer='$answer' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
		
	}
		function fetchAllDetailByorder($table)
    {
        $sql = "SELECT * FROM $table LIMIT 10";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function insert_search($title,$contant,$imp)
	{
		  $sql="insert into wikipedia(title,contant,file_name)values('$title','$contant','$imp')"; 
	
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function insertfrontcontant($heading,$contant,$img)
	{
		$sql="insert into front_page_video(heading,contant,video)values('$heading','$contant','$img')";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updatefrount($heading,$contant,$img,$id)
	{
		$sql="update front_page_video set heading='$heading',contant='$contant',video='$img' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	function insertprice($class,$price,$gst,$nprice,$ngst)
	{
		 $sql="insert into price_plan (class,price,gst,nprice,ngst,status)values('$class','$price','$gst','$nprice','$ngst',1)";
		
		$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function update_price($class,$price,$gst,$nprice,$ngst,$id)
	{
		$sql="update price_plan set class='$class',price='$price',gst='$gst',nprice='$nprice',ngst='$ngst' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	//--------------SubAgent----------12-09-2018---
	function login_subagent($email, $password, $table, $uField, $pField, $sField, $status)
    {
        $sql = "select * from $table where $uField='$email' and $pField='$password' and $sField='$status'";
		  
	
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	function updateprofile_subagent($agent_id,$name,$email,$mobile,$adhar_no,$address,$img,$img1,$id)
    {
		 $sql = "update subagent set agent_id='$agent_id',name='$name',email='$email',mobile='$mobile',adhar_no='$adhar_no',address='$address',photo='$img',document='$img1',status=1 where id='$id'";
        
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
    }
//----------18-09-2018-----------
 function fetchDetailByIdByStatus007($id, $table, $field,$sfield, $status)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' ORDER BY date DESC";

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }

function fetchDetailsByIdByStatusdate001($city_id,$fromDate,$endDate)
//fetchDetailsByIdByStatusdate001($city_id, $table, $field,$sfield, $status)
    {
          $sql = "SELECT id, MIN( register_date ) AS idd, MAX(register_date) AS register_date FROM user_register WHERE register_date LIKE  '$fromDate' GROUP BY '$city_id'";

	
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function fetchDetailByStatusBystatusBysubject($class, $table, $class1 ,$sub,$sub1, $chap,$chap1)
    {
           $sql = "select * from $table where $class1='$class' and $sub='$sub1' and $chap='$chap1'";

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	//--------20-09-2018-------
	function insertacadmic($name_year,$start_year,$end_date,$class)
	{
		$sql="insert into academic_year(name_year,start_year,end_date,class)values('$name_year','$start_year','$end_date','$class')";
		$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}

	function updateacadmic($name_year,$start_year,$end_date,$class,$id)
	{
		$sql="update academic_year set name_year='$name_year',start_year='$start_year',end_date='$end_date',class='$class' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	function fetchDetailsByIdDate($fromDate,$endDate)
//fetchDetailsByIdByStatusdate001($city_id, $table, $field,$sfield, $status)
    {
          $sql = "SELECT id, MIN( register_date ) AS idd, MAX(register_date) AS register_date FROM user_register WHERE register_date LIKE  '$fromDate' GROUP BY '$city_id'";

	
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	//---------api------------24-09-2018--

		function insert_registeruser($name,$email,$mobile,$password,$city_id,$block,$address,$school_address,$gender,$dob,$class,$school,$img,$mac,$fcm_token,$pro_id,$lat,$lng)
	{
		$register_date=date("d-m-Y");
		 $sql="insert into  user_register (name,email,mobile,password,city_id,block,address,school_address,gender,dob,class,school,photo,mac,fcm_token,pro_id,lat,lng,register_date,status)values('$name','$email','$mobile','$password','$city_id','$block','$address','$school_address','$gender','$dob','$class','$school','$img','$mac','$fcm_token','$pro_id','$lat','$lng','$register_date',0)";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	//0---------------25-09-2018------sheetal-----
	function fetchDetailByStatus($status, $table, $sfield)
    {
         $sql = "select * from $table where $sfield='$status'";
		
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	//-----27-09-2018---------
		function insert_copan($user_id,$class_id,$name,$email,$mobile,$price,$code)
		{
			$order_date=date("d-m-Y");
			  $sql="insert into class_order(user_id,class_id,name,email,mobile,price,type,order_date,coupan_code,status)values('$user_id','$class_id','$name','$email','$mobile','$price',3,'$order_date','$code',0)"; 
		
			
			$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
		}
		function fetchDetailByIdByStatus1212($id, $table, $field,$sfield, $status)
    {
         $sql="select * from $table where $field='$id' and $sfield='$status'";
		
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
//--------------28-09-2018----------
function insert_mobile_number($mobile,$otp)
	{	
		$sql="insert into mobile_otp (mobile,otp)values('$mobile','$otp')";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	//---search---0021---
	function fetchDetailByIdBysearch($key_value)
    {
        $sql="select * from wikipedia where title like '$key_value%'";
		
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
    }
	
	
function inser_multipe_qans0052($user_id,$class_id,$subject_id,$chapter_id,$question_id,$answer_id)
	{
		$exam_date=date("d-m-Y");
			 $sql="insert into multiple_que_metch_result (user_id,class_id,subject_id,chapter_id,question_id,answer_id,exam_date,status)values('$user_id','$class_id','$subject_id','$chapter_id','$question_id','$answer_id','$exam_date',1)";
			
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function inser_result_upload($user_id,$class,$subject,$marks,$total,$img)
	{
		$date=date("d-m-Y");
			 $sql="insert into result_upload(user_id,class,subject,marks,total,image,date)values('$user_id','$class','$subject','$marks','$total','$img','$date')";
			
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}

function inser_truefalse_qans058($user_id,$class_id,$subject_id,$chapter_id,$question_id,$answer_id)
	{
		$exam_date=date("d-m-Y");
			 $sql="insert into truefalse_que_metch_result (user_id,class_id,subject_id,chapter_id,question_id,answer_id,exam_date,status)values('$user_id','$class_id','$subject_id','$chapter_id','$question_id','$answer_id','$exam_date',1)";
			
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
    function inser_contact_us($user_id,$email,$mobile,$title,$contant)
	{
		$date=date("d-m-Y");
		$sql="insert into contact_us(user_id,email,mobile,title,contant,date)values('$user_id','$email','$mobile','$title','$contant','$date')";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	
		
	}
	function login_app($user_name, $password, $table, $uField, $pField, $sField, $status,$macfield,$mac,$fcmfield,$fcm)
    {
          $sql = "select * from $table where $uField='$user_name' and $pField='$password' and $sField='$status' and $macfield='$mac' and $fcmfield='$fcm'";
		
	
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	//-----------login api---2-10-2018--
	
	function loginuser($user_name, $password, $table, $uField, $pField,$pmac,$mac,$sField, $status)
    {
       $sql = "select * from $table where $uField='$user_name' and $pField='$password' and $pmac='$mac' and $sField='$status'";
	   $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
function loginuserclass($user_name, $password, $table, $uField, $pField,$pmac,$mac,$sField, $status,$saField, $astatus)
    {
       $sql = "select * from $table where $uField='$user_name' and $pField='$password' and $pmac='$mac' and $sField='$status' and $saField='$astatus'";
	   $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }

	function ifc_update($fcm_token,$mobile)
	{
		 $sql = "update user_register set fcm_token='$fcm_token',status='1' where mobile='$mobile'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function mac_update($mac,$fcm_token,$mobile,$class)
	{
		 $sql = "update user_register set mac='$mac',fcm_token='$fcm_token',status='1' where mobile='$mobile' and class='$class' "; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	//----
	function fetchAllDetailById($id,$table,$field)

    {
        $sql = "select * from $table where $field='$id'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function update_registeruser($name,$email,$address,$gender,$dob,$school,$mac,$fcm_token,$photo,$user_id)
	{
		$sql="update user_register set name='$name',email='$email',address='$address',gender='$gender',dob='$dob',school='$school',mac='$mac',fcm_token='$fcm_token',photo='$photo' where id='$user_id' ";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	//3-10-2018---sheetal--
	function mobile_update($new_mobile,$user_id)
	{
		$sql="update user_register set mobile='$new_mobile' where id='$user_id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		
	}
	function user_passwordupdate($npass,$user_id)
	{
		$sql="update user_register set password='$npass' where id='$user_id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		
	}
	//------------04-10-2018----sheetal---------
	
	function fetchDetailByIdBystatusdes($id, $table, $field,$pfield,$pstatus, $iid)
    {
         $sql = "select * from $table where $field='$id' and $pfield='$pstatus' ORDER BY $iid DESC";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function fetchDetailByIddes($id, $table, $field, $iid)
    {
         $sql = "select * from $table where $field='$id' ORDER BY $iid DESC";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	//----//------------
	function updatemac($mac1,$id)
	{
		$sql ="update user_register set mac='$mac1' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	//-------------- 05-10-2018----------
	
	function inser_order($user_id,$user_name,$email,$phone,$product_id,$quentity,$price,$district,$block,$address,$postal_code)
	{
		$order_date=date("d-m-Y");
		 $sql="insert into order_book(user_id,user_name,email,phone,product_id,quentity,price,district,block,address,postal_code,order_date,status,pstatus)values('$user_id','$user_name','$email','$phone','$product_id','$quentity','$price','$district','$block','$address','$postal_code','$order_date',0,1)";
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	///------------10-06-2018---
	function fetchDetailByIdBystatusdatedes($id, $table, $field,$sdate,$sdatea)
    {
        $sql = "select * from $table where $field='$id' and $sdate='$sdatea'  "; 
		
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	//------updates----09-10-2018--------
	function insert_free_access($name,$email,$mobile,$city_id,$block,$address,$school_address,$class,$school,$fcm_token)
	{
		$date=date("d-m-Y");
		 $sql="insert into  free_acess(name,email,mobile,city_id,block,address,school_address,class,school,fcm_token,date)values('$name','$email','$mobile','$city_id','$block','$address','$school_address','$class','$school','$fcm_token','$date')";
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function referal_add($username,$email,$password,$mobile,$amount,$address,$note,$district,$block,$img1)
	{
		$sql="insert into  referal_agent (username,email,password,mobile,amount,address,note,district,block,document,status)values('$username','$email','$password','$mobile','$amount','$address','$note','$district','$block','$img1',0)";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	//---------10-10-2018---
	function login_referal_agent($email, $password, $table, $uField, $pField, $sField, $status)
    {
         $sql = "select * from $table where $uField='$email' and $pField='$password' and $sField='$status'";
		  

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	//--------11-10-2018--------
	function user_refferal_update($username,$email,$mobile,$img,$id)
	{
		$sql="update referal_agent set username='$username',email='$email',mobile='$mobile',image='$img' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	//-------12-10-2018------
		function insert_instruction($contant,$img,$app_type)
	{
		 $sql="insert into instruction(contant,image,app_type)values('$contant','$img','$app_type')";
	
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updateinstraction($contant,$img,$app_type,$id)
	{
		$sql="update instruction set contant='$contant',image='$img',app_type='$app_type' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	//--
	function fetchDetailByIdBysearch001($name)
    {
         $sql="select * from  agent where name like '$name%'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
    }
//---------13-10-2018---
function fetchAllDetailOrderBydes($table)
    {
        $sql = "select * from $table ORDER BY id DESC";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function sendpdf($agent_type,$agent,$img)
	{
		$date=date("d-m-Y");
		$sql="insert into sendpdf(agent_type,agent,image,date,status)values('$agent_type','$agent','$img','$date',1)";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function fetchAllDetailByStatus0001($table)
    {
        $sql = "select * from $table where status='1' ORDER BY id DESC";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function fetchAllDetailByStatus00185($sid,$table,$id)
	{
		$date=date("d-m-Y");
	
	  $sql="SELECT * FROM `$table` WHERE  $id='$sid' and `register_date` between  DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE()";
	
	 //$sql="select * from $table where  `register_date` >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)";
	  //	$sql="SELECT * from $table register_date('$date') AS Month";
	//$sql="select * from $table where register_date = DateAdd(M,-1,'$date')";
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function insert_class_order($user_id,$class_id,$name,$email,$mobile,$price,$nstatus)
	{
	$order_date=date("d-m-Y");
	$sql="insert into class_order(user_id,class_id,name,email,mobile,price,type,order_date,status,nstatus)values('$user_id','$class_id','$name','$email','$mobile','$price',1,'$order_date',0,'$nstatus')"; 
	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
	if($rs)
	return mysqli_insert_id($this->link);
	else
	return false;
	}
	//-------sheetal----------update---02-07-2019--------
	function updateStatusUser1000($id, $table, $field)
    {
        $date=date("d-m-Y");
	 	$sql = "update $table set payment_type='1',pstatus='1',status='1',payment_success_date='$date' where $field='$id'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
	//----16-10-2018-------------sheetal--
	function coupan_asign($coupan,$agent_type,$agent)
	{
		$asign_date=date("d-m-Y");
			  $sql="insert into asign_coupan(coupan,agent_type,agent,asign_date,status)values('$coupan','$agent_type','$agent','$asign_date',1)";
			
			$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	//----22-10-2018--------sheetal--
	function passwordupdate($npass,$uid)
    {
        $sql = "update referal_agent set password='$npass' where id='$uid'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
    }
	//---------------22-10-2018---
    function fetchDetailByIdByStatususer($id, $table, $field,$sfield, $status,$user,$user_id)
    {
         $sql = "select * from $table where $field='$id' and $sfield='$status' and $user='$user_id'"; 
		
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }	
	//---------

	 function fetchByIdByStatus($id, $table,$field,$mobile,$mobile1)
    {
        $sql = "select * from $table where $field='$id' and $mobile='$mobile1'";   
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
    
    function fetchChapterBySubjectId($subject_id)
    {
        
        $sql = "select optional_subject.id as subject_id,optional_subject.image as subject_image,optional_chapter.id as chapter_id,optional_chapter.chapter from optional_subject inner join optional_chapter on optional_chapter.opt_sub_id=optional_subject.id where optional_subject.id='$subject_id' and optional_subject.status='1'";   
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs)>=1){
         $rows = array();
            while($row = $rs->fetch_assoc()) {
            $rows[] = $row;
            }
                
            return $rows;
    
        }else{
             
         return false;
        }
    }
    
    function fetchOptionalModuleBySubjectIdChapterId($subject_id,$chapter_id){
       
          $sql = "select topic_name,topic_image,video_name,thumbnail,video,status from optional_module where subject_id='$subject_id' and chapter_id='$chapter_id'";   
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs)>=1){
         $rows = array();
            while($row = $rs->fetch_assoc()) {
            $rows[] = $row;
            }
                
            return $rows;
    
        }else{
             
         return false;
        }
    }
	function insertpapular_video($heading,$thumbnail1,$vedio1)
	{
		//$order_date=date("d-m-Y");
			  $sql="insert into papular_video(heading,thumbnai,vedio,status)values('$heading','$thumbnail1','$vedio1',1)";
			
			$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function updatevideo($heading,$thumbnail1,$video1,$id)
    {
	 	 $sql = "update papular_video set heading='$heading',vedio='$video1',thumbnai='$thumbnail1',status='1' where id='$id'"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
    }
	function fetchDetailByIdByStatus0089($id, $table, $field,$sfield, $status)
    {
          $sql = "select * from $table where $field='$id' and $sfield='$status'"; 	
		
       $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	function insert_class_subscribe($user_id,$class_id,$price,$total_price,$session_id)
	{
		$payment_date=date("d-m-Y");
			   $sql="insert into  year_wise_payment_list(user_id,class_id,price,total_price,session_id,payment_date,payment_status,status)values('$user_id','$class_id','$price','$total_price','$session_id','$payment_date',0,0)";
		
			$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updateStatus_class($id, $table, $sfield, $status, $field)
    {
	 	 $sql = "update $table set $sfield='$status',payment_status='1' where $field='$id'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
	//--free access ---- demo -- update---27-10-2018-----------
	function insert_demo_subject($class,$subject)
	{
		$sql="insert into  demo_subject(class,subject,status)values('$class','$subject',1)";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function insert_demo_chapter($class,$subject,$chapter)
	{
		$sql="insert into  demo_chapter(class,subject,chapter,status)values('$class','$subject','$chapter',1)";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function demo_insert_topic($class,$subject,$chapter,$topic,$topic_pic,$img,$video_path,$contant)
	{
		  $sql="insert into  demo_topic(class,subject,chapter,topic,topic_pic,doucment,video,contant,status)values('$class','$subject','$chapter','$topic','$topic_pic','$img','$video_path','$contant',1)";
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function demo_insertanswer($class_id,$subject,$chapter,$question,$answer)
	{
		    $sql="insert into  demo_qa(class_id,subject,chapter,question,answer,status)values('$class_id','$subject','$chapter','$question','$answer',1)";
		  
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
//------------10-28-2018----------
		function demoquestion($class_id,$subject,$chapter,$question,$option1,$option2,$option3,$option4,$answer)
	{
		  $sql="insert into  demo_mutiple(class_id,subject,chapter,question,option1,option2,option3,option4,answer)values('$class_id','$subject','$chapter','$question','$option1','$option2','$option3','$option4','$answer')";
	
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function demoquestiontruefalse($class_id,$subject,$chapter,$question,$answer)
	{
		  $sql="insert into  demo_true_false(class_id,subject,chapter,question,answer)values('$class_id','$subject','$chapter','$question','$answer')";
	
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	//----------6-11-2018-------
		function demo_update_subject($class,$subject,$id)
	{
		$sql="update demo_subject set class='$class',subject='$subject' where id='$id' ";
		
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}	
	function demo_updatechapter($class,$subject,$chapter,$id)
	{
		$sql="update demo_chapter set class='$class',subject='$subject',chapter='$chapter' where id='$id' ";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function demo_update_topic($class,$subject,$chapter,$topic,$topic_pic,$img,$video_path,$contant,$id)
	{
		 $sql="update demo_topic set class='$class',subject='$subject',chapter='$chapter',topic='$topic',topic_pic='$topic_pic',doucment='$img',video='$video_path',contant='$contant' where id='$id' ";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
		
	}
	///-----12-12-2018----
	function insert_unit_test($class_id,$subject,$question)
	{
		   $sql="insert into unit_test_question(class_id,subject,question,status)values('$class_id','$subject','$question',1)";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updateunit_test($class_id,$subject,$question,$id)
	{
		 $sql="update unit_test_question set class_id='$class_id',subject='$subject',question='$question' where id='$id'";
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		
	}
	function insert_unit_test_answer($class_id,$subject,$answer)
	{
		   $sql="insert into unit_test_answer(class_id,subject,answer,status)values('$class_id','$subject','$answer',1)";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updateunit_test_answer($class_id,$subject,$answer,$id)
	{
		$sql="update unit_test_answer set class_id='$class_id',subject='$subject',answer='$answer' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		
	}
	function demo_insert_unit_test($class_id,$subject,$question)
	{
		   $sql="insert into demo_unit_test_question(class_id,subject,question,status)values('$class_id','$subject','$question',1)";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updateunit_test_demo($class_id,$subject,$chapter,$question,$id)
	{
		$sql="update demo_unit_test_question set class_id='$class_id',subject='$subject',chapter='$chapter',question='$question' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		
	}
	function insert_unit_test_answer_demo($class_id,$subject,$chapter,$answer)
	{
		$sql="insert into  demo_unit_answer(class_id,subject,chapter,answer,status)values('$class_id','$subject','$chapter','$answer',1)";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}

	function updateanswer_demo($class_id,$subject,$chapter,$answer,$id)
	{
		$sql="update demo_unit_answer set class_id='$class_id',subject='$subject',chapter='$chapter',answer='$answer' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		
	}
		function fetchDetailByStatusBystatusBysubject_Bystatus($class, $table, $class1 ,$sub,$sub1, $chap,$chap1,$status,$status1)
    {
         $sql = "select * from $table where $class1='$class' and $sub='$sub1' and $chap='$chap1' and $status='$status1'";

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function coupan_asign12($coupan,$agent,$agent_type)
	{
		$asign_date=date("d-m-Y");
			  $sql="insert into asign_coupan(coupan,agent,agent_type,asign_date,status)values('$coupan','$agent','$agent_type','$asign_date',0
			)";
			
			$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
function login_insert($member_type,$member_id,$date)
	 {
	
        $sql = "insert into login_insert(member_type,member_id,login_date)values('$member_type','$member_id','$date')"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
	   }
	function fetchcontactByorder($table)
    {
        $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT 5;";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
//--------------
  function insert_chemistry($class_id,$subject,$item1,$quentity1,$item2,$quentity2,$unit,$output)
    //insert_contactbulk($user_id,$contat_name,$email,$phone,$address,$user_type)
	{
	   $sql="insert into chemistry(class_id,subject,item1,quentity1,item2,quentity2,unit,output)values('$class_id','$subject','$item1','$quentity1','$item2','$quentity2','$unit','$output')";

		$result = mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if ($result)
            return mysqli_insert_id($this->link);
        else
            return false;
	}
	//----------------ajay---12-13-2018----------
	function insertsuperadmin($name,$email,$phone,$digination,$password,$class,$subject,$image)
  {
            $date=date("d-m-Y");
         $sql = "insert into super_admin(name,email,phone,designation,password,class,subject,image,date)values('$name','$email','$phone','$digination','$password','$class','$subject','$image','$date',)";  
     
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
    }
    
    function update_super_admin($name,$email,$phone,$password,$digination,$class,$subject,$img,$id)
 {
   $sql="update super_admin set name='$name',email='$email',phone='$phone',password='$password',designation='$digination',class='$class',subject='$subject',image='$img' where id='$id'";
  $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
   if (mysqli_affected_rows($this->link) == 1)
    return true;
   return false;
  
 }
 //-----------------------------17-12-2018---------------------
	function insert_topicwise_video($class,$subject,$chapter,$topic,$video_name,$thaminal1,$vedio1)
	{
	 	$sql="insert into  topic_wise_video(class,subject,chapter,topic,video_name,thaminal1,vedio1)values('$class','$subject','$chapter','$topic','$video_name','$thaminal1','$vedio1')";
	
	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
	}
 
 function fetchDetailByStatusBystatusBysubject_topic($class, $table, $class1 ,$sub,$sub1, $chap,$chap1,$topic,$topic1)
    {
         $sql = "select * from $table where $class1='$class' and $sub='$sub1' and $chap='$chap1' and topic='$topic1'";

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
  function update_topicwise_video($class,$subject,$chapter,$topic,$video_name,$thaminal1,$vedio1,$id)
	{
	 
	
	  $sql = "update topic_wise_video set class='$class',subject='$subject',chapter='$chapter',topic='$topic',video_name='$video_name',thaminal1='$thaminal1',vedio1='$vedio1' where id='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	
	function insert_opt_video($subject_id,$chapter_id,$video_name,$thumbnail,$video)
	{

	 	$sql="insert into optional_module(subject_id,chapter_id,video_name,thumbnail,video)values('$subject_id','$chapter_id','$video_name','$thumbnail','$video')";
	
	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
	}
	function update_opt_video($subject_id,$chapter_id,$video_name,$thumbnail,$video,$id)
	{
	 
	
	  $sql = "update optional_module set subject_id='$subject_id',chapter_id='$chapter_id',video_name='$video_name',thumbnail='$thumbnail',video='$video' where id='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
    //--------21--22--2018------
	function insert_subagent0021($name,$email,$password,$mobile,$amount,$city_id,$block_id,$address,$adhar_no,$account_holder_name,$account_number,$ifc_code,$branch_name,$img,$img1)
	//insert_subagent0021($name,$email,$password,$mobile,$amount,$city_id,$block_id,$address,$adhar_no,$img,$img1)
	{
		$date=date("Y-m-d");
	 	$sql="insert into subagent(name,email,password,mobile,amount,city_id,block_id,address,adhar_no,account_holder_name,account_number,ifc_code,branch_name,photo,document,status,register_date)
	values('$name','$email','$password','$mobile','$amount','$city_id','$block_id','$address','$adhar_no','$account_holder_name','$account_number','$ifc_code','$branch_name','$img','$img1',1,'$date')";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}	
	function update_sub_agent0021($name,$email,$password,$mobile,$amount,$city_id,$block_id,$address,$adhar_no,$account_holder_name,$account_number,$ifc_code,$branch_name,$img1,$img,$id)
	{
		 $date=date("Y-m-d");
		  $sql = "update subagent set name='$name',email='$email',password='$password',mobile='$mobile',amount='$amount',city_id='$city_id',block_id='$block_id',address='$address',adhar_no='$adhar_no',account_holder_name='$account_holder_name',account_number='$account_number',ifc_code='$ifc_code',branch_name='$branch_name',document='$img1',photo='$img',status='1',register_date='$date' where id='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function insertagent0021($name,$email,$password,$mobile,$amount,$block_supervisor_id,$address,$adhar_no,$account_holder_name,$account_number,$ifc_code,$branch_name,$img,$img1)
	//insertagent0021($name,$email,$password,$mobile,$amount,$block_supervisor_id,$address,$adhar_no,$img,$img1)
	{
		$date=date("Y-m-d");
		 $sql="insert into agent(name,email,password,mobile,amount,block_supervisor_id,address,adhar_no,account_holder_name,account_number,ifc_code,branch_name,photo,document,status,register_date)values('$name','$email','$password','$mobile','$amount','$block_supervisor_id','$address','$adhar_no','$account_holder_name','$account_number','$ifc_code','$branch_name','$img','$img1',1,'$date')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	//----27-12-2018-----sheetal------------
	function update_agent0024($name,$email,$password,$mobile,$amount,$block_supervisor_id,$address,$adhar_no,$account_holder_name,$account_number,$ifc_code,$branch_name,$img1,$img,$id)
	{
		$date=date("Y-m-d");
		 $sql = "update agent set name='$name',email='$email',password='$password',mobile='$mobile',amount='$amount',block_supervisor_id='$block_supervisor_id',address='$address',adhar_no='$adhar_no',account_holder_name='$account_holder_name',account_number='$account_number',ifc_code='$ifc_code',branch_name='$branch_name',document='$img1',photo='$img',status='1',register_date='$date' where id='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function updateblocksuperviser($rs,$r)
	{
		 $sql = "update subagent set agent_id='$rs',asign_status='1' where id='$r'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function asignblock($block_id)
	{
		 $sql = "update block set asign_status='1' where id='$block_id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function fetchAllDetailByStatus0004($table)
    {
        $sql = "select * from $table where status='1' and asign_status='0'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function fetchAllDetailByStatus_distric($table)
    {
        $sql = "select * from $table where status='1' ";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function updateasignblock($block_id1)
	{
		  $sql = "update block set asign_status='0' where id='$block_id1'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
 	//---------------24-----
	function referal_add0024($username,$email,$password,$mobile,$amount,$address,$note,$executive_id,$account_holder_name,$account_number,$ifc_code,$branch_name,$img2,$img1)
	//referal_add0024($username,$email,$password,$mobile,$amount,$address,$note,$executive_id,$img2,$img1)
	{
		$date=date("Y-m-d");
		  $sql="insert into  referal_agent (username,email,password,mobile,amount,address,note,executive_id,account_holder_name,account_number,ifc_code,branch_name,image,document,date,status)values('$username','$email','$password','$mobile','$amount','$address','$note','$executive_id','$account_holder_name','$account_number','$ifc_code','$branch_name','$img2','$img1','$date',1)";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
		function updateexequitysuperviser($rs,$r)
		{
			 $sql = "update agent set rel_manager='$rs',asign_status='1' where id='$r'"; 
		
			$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		}
		function updat22222($rs,$r)
		{
			 $sql = "update agent set rel_manager='$rs',asign_status='0' where id='$r'"; 
		
			$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		}
    		function update_refferal_agent($username,$email,$password,$mobile,$amount,$address,$note,$executive_id,$img,$img1,$id)
    	{
    		 $sql="update referal_agent set username='$username',email='$email',password='$password',mobile='$mobile',amount='$amount',address='$address',note='$note',executive_id='$executive_id',image='$img',document='$img1' where id='$id'";
    	
    	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
    			if (mysqli_affected_rows($this->link) == 1)
    				return true;
    			return false;
    	}
    	//****ruby****//
    	function demo_insertanswer_update($class_id,$subject,$chapter,$question,$answer,$id)
	{
		 $sql="update demo_qa set class_id='$class_id',subject='$subject',chapter='$chapter',question='$question',answer='$answer' where id='$id' ";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
		
	}
	function fetchresultchemistry($item1,$quentity1,$item2,$quentity2,$unit,$class,$subject,$item_type)
	{
         $sql = "select * from chemistry where item1='$item1' and quentity1='$quentity1' and item2='$item2' and quentity2='$quentity2' and unit='$unit' and class_id='$class' and subject='$subject' and item_type='$item_type'";

         $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	function fetchDetailByIdByStatusByType($id, $table, $field,$sfield, $status,$pfield, $pstatus)
    {
           $sql = "select * from $table where $field='$id' and $sfield='$status' and $pfield='$pstatus'"; 	

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    
    function fetchDetailByIdByStatusByTypedate($id, $table, $field,$sfield, $status,$pfield, $pstatus,$date,$date1)
    {
           $sql = "select * from $table where $field='$id' and $sfield='$status' and $pfield='$pstatus' and $date='$date1'"; 	

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //---4-1----2019----
	function fetchDetailByIdByStatus001($id, $table, $field,$sfield, $status)
    {
           $sql = "select * from $table where $field='$id' and $sfield='$status'"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	
	function fetchDetailByIdByStatus0011($id, $table, $field,$sfield, $status)
    {
            $sql = "select * from $table where $field='$id' and $sfield='$status'"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	
	function fetchDetailByIdByStatus00111($id, $table, $field,$sfield, $status)
    {
            $sql = "select * from $table where $field='$id' and $sfield='$status'"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	function fetchDetailByIdByStatus000($id, $table, $field,$sfield, $status)
    {
            $sql = "select * from $table where $field='$id' and $sfield='$status'"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	//-------------05-2019-------
	function fetchDetailByIdByStatusByBlockuser($id, $table, $field,$sfield, $status,$pfield,$ptatus)
    {
           $sql = "select * from $table where $field='$id' and $sfield='$status' and $pfield='$ptatus' "; 	
		
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	//------------parent---app-------------
	function insert_parent($name,$email,$phone,$gender,$student_mobile,$password)
	{
	    $date=date("Y-m-d");
		  $sql="insert into parent(name,email,phone,gender,student_mobile,password,date)values('$name','$email','$phone','$gender','$student_mobile','$password','$date')";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function in_otp($otp,$student_id,$parent_id)
	{
		   $sql="insert into parent_otp(otp,student_id,parent_id)values('$otp','$student_id','$parent_id')"; 
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updateparent_sta($parent_id)
	{
		$sql="update parent set status='1' where id='$parent_id'";
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	function fetchAllDetailById00limit($student_id)
    {
        $sql ="SELECT * FROM `parent_otp` ORDER BY `student_id`='$student_id' DESC LIMIT 1";
		  //$sql = "SELECT id FROM `$table` ORDER BY $field='$id' DESC LIMIT 1;"; 
      //  echo $sql = "select * from $table ORDER BY where $field='$id' DESC LIMIT 1"; die();
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //-------------------07-01-2019------------
    function fetchDetailByIdByStatusByblock($id, $table, $field,$sfield, $status,$s1field,$status1)
    {
            $sql = "select * from $table where $field='$id' and $sfield='$status' and $s1field='$status1'"; 	
		
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //-------------10-jan-2019-----------
    function updatequestion_demo($class_id,$subject,$chapter,$question,$option1,$option2,$option3,$option4,$answer,$id)
	//updatequestion($state_id,$city,$school_id,$class_id,$question,$question_1,$question_2,$question_3,$question_4,$answer,$id)
	{
		 $sql ="update  demo_mutiple set class_id='$class_id',subject='$subject',chapter='$chapter',question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',answer='$answer' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	//-------------
	function updatequestiontruefalse000($class_id,$subject,$chapter,$question,$answer,$id)
	{
		    $sql ="update demo_true_false set class_id='$class_id',subject='$subject',chapter='$chapter',question='$question',answer='$answer' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
		
	}
		///---------------01-10-2019-------------
	
	function inser_intimetopic($user_id,$class,$subject,$chapter,$topic,$in_time,$out_time)
	{
		$sql="insert into topic_time(user_id,class,subject,chapter,topic,in_time,out_time)values('$user_id','$class','$subject','$chapter','$topic','$in_time','$out_time')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	 function subject_topic_userid00010($user1,$table,$user, $class1,$class,$sub,$sub1, $chap,$chap1,$topic,$topic1)
    {
          $sql = "select * from $table where $user='$user1' and $class1='$class' and $sub='$sub1' and $chap='$chap1' and $topic='$topic1'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function coupanotp($admin_id,$rs,$otp)
    {
    	$sql="insert into coupan_otp(admin_id,coupan,otp)values('$admin_id','$rs','$otp')";

    	$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;

    }
    //---------11-01-2019------------
	function fetchAllDetailByStatusByStatus001($status,$table,$status1,$dddd,$dddd1)
    {
          $sql = "select * from $table where $status1='$status' and $dddd='$dddd1'";
		
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //--------------
    function fetchDetailByIdByStatus55555($id, $table, $field,$sfield, $status)
    	{
	        $sql = "select * from $table where $field='$id' and $sfield='$status'"; 	
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	//----------------
	 function updateStatus0000002($id, $table, $sfield, $status, $field)
    {
	  	  $sql = "update $table set $sfield='$status' where $field='$id'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
    	///------------19-01-2019----------
	function fetchAllDetailByIdByStatus($id, $table, $sfield, $status, $field)
    {
      $sql = "select * from $table where $sfield='$status' and $field='$id' "; 
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    	function manager_passwordupdate($npass,$uid)
    {
        $sql = "update subagent set password='$npass' where id='$uid'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
    }
    	function fetchDetailByIdByStatusByDate($id, $table, $field,$sfield, $status,$afield,$astatus)
    {
          $sql = "select * from $table where $field='$id' and $sfield='$status' and $afield='$astatus'"; 	 
		
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //------------21-01-2019-----------
	function parent_papular_video($heading,$thumbnail,$vedio1)
	{
		//$order_date=date("d-m-Y");
		$sql="insert into parent_papular_video(heading,thumbnail,video,status)values('$heading','$thumbnail','$vedio1',1)";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function edit_updatevideo($heading,$thumbnail,$video,$id)
	{
		$sql = "update parent_papular_video set heading='$heading',video='$video',thumbnail='$thumbnail',status='1' where id='$id'"; 
		
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	function updatesubject_sta($subject,$rs)
	{
		$sql="update subject set asign_status='1',teacher_id='$rs' where id='$subject'";
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	//----ruby-24/1-2019--
		function virtualsubject($user_id,$class_id,$subject_id,$chapter_id,$topic_id,$in_time,$out_time)
	{
        $date=date("d-m-Y");

		$sql="insert into virtual_subject(user_id,class_id,subject_id,chapter_id,topic_id,in_time,out_time,date)values('$user_id','$class_id','$subject_id','$chapter_id','$topic_id','$in_time','$out_time','$date')";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	
		function unit_api($user_id,$class_id,$subject_id,$unit,$question,$in_time,$out_time)
	{
        $date=date("d-m-Y");

		$sql="insert into unit_api(user_id,class_id,subject_id,unit,question,in_time,out_time,date)values('$user_id','$class_id','$subject_id','$unit','$question','$in_time','$out_time','$date')";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function unit_api_ans($user_id,$class_id,$subject_id,$chapter_id,$topic_id,$answer,$in_time,$out_time)
	{
        $date=date("d-m-Y");

		$sql="insert into unit_ans_api(user_id,class_id,subject_id,chapter_id,topic_id,answer,in_time,out_time,date)values('$user_id','$class_id','$subject_id','$chapter_id','$topic_id','$answer','$in_time','$out_time','$date')";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	
	function question_api($user_id,$class_id,$subject_id,$chapter_id,$topic_id,$question,$in_time,$out_time)
	{
        $date=date("d-m-Y");

		$sql="insert into question_api(user_id,class_id,subject_id,chapter_id,topic_id,question,in_time,out_time,date)values('$user_id','$class_id','$subject_id','$chapter_id','$topic_id','$question','$in_time','$out_time','$date')";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function question_ans_api($user_id,$class_id,$subject_id,$chapter_id,$topic_id,$answer,$in_time,$out_time)
	{
        $date=date("d-m-Y");

		$sql="insert into question_ans_api(user_id,class_id,subject_id,chapter_id,topic_id,answer,in_time,out_time,date)values('$user_id','$class_id','$subject_id','$chapter_id','$topic_id','$answer','$in_time','$out_time','$date')";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function true_false($user_id,$class_id,$subject_id,$chapter_id,$question,$true,$in_time,$out_time)
	{
        $date=date("d-m-Y");

		$sql="insert into `true_false`(`user_id`,`class_id`,`subject_id`,`chapter_id`,`question`,`true`,`in_time`,`out_time`,`date`)values('$user_id','$class_id','$subject_id','$chapter_id','$question','$true','$in_time','$out_time','$date')";
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	
	//--ruby---employee-25/1--2019--
	function insert_unit_test11($class_id,$subject,$chapter,$question)
	{
		    $sql="insert into unit_test_question(class_id,subject,chapter,question,status)values('$class_id','$subject','$chapter','$question',1)";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
   function updateunit_test11($class_id,$subject,$chapter,$question,$id)
	{
		$sql="update unit_test_question set class_id='$class_id',subject='$subject',chapter='$chapter',question='$question' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		
	}
	
	function insert_unit_test_answer11($class_id,$subject,$chapter,$answer)
	{
		   $sql="insert into unit_test_answer(class_id,subject,chapter,answer,status)values('$class_id','$subject','$chapter','$answer',1)";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updateunit_test_answer11($class_id,$subject,$chapter,$answer,$id)
	{
		$sql="update unit_test_answer set class_id='$class_id',subject='$subject',chapter='$chapter',answer='$answer' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	 }
	function demo_insert_unit_test11($class_id,$subject,$chapter,$question)
	{
		   $sql="insert into demo_unit_test_question(class_id,subject,chapter,question,status)values('$class_id','$subject','$chapter','$question',1)";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
	function replay_user_ask_q11($user_id,$email,$questions,$answer)
	{
		
		$date=date("Y-m-d");
		$sql="insert into replay_ask_question(user_id,email,questions,answer,date)values('$user_id','$email','$questions','$answer','$date')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	//-----26/1/-2019--
	function agent_passwordupdate($npass,$uid)
    {
        $sql = "update agent set password='$npass' where id='$uid'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
    }
    //-----------
    function inser_virtual($user_id,$class_id,$in_time,$out_time)
    {
        $date=date("d-m-Y");
      	$sql="insert into  virtual_time(user_id,class_id,date,in_time,out_time)values('$user_id','$class_id','$date','$in_time','$out_time')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;  
    }
    function inser_askme004($user_id,$class_id,$in_time,$out_time)
    {
        $date=date("d-m-Y");
        	$sql="insert into  ask_meintime(user_id,class_id,date,in_time,out_time)values('$user_id','$class_id','$date','$in_time','$out_time')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;  
    }
    //-----------
    function fetchAllDetailByStatus_rrr($table)
    {
        $sql = "select * from $table where status='1'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function fetchDetailByIdByStatus00rr($id, $table, $field,$sfield, $status)
    {
         $sql = "select * from $table where $field='$id' and $sfield='$status'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function fetchDetailByIdByStatuscoupan0($id, $table, $field,$sfield, $status,$scou,$cou)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' and $scou='$cou'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //---------29-01-2019--------
	function fetchDetailByIdfordatelast($date, $table)
    {
		 $sql="SELECT  id FROM $table WHERE register_date LIKE '$date%';";
 // echo $sql = "SELECT id,MIN(register_date) as intime, MAX(register_date) as outtime FROM $table WHERE register_date LIKE '$date%' GROUP BY id"; 
			;
	   $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function fetchDetailByIdByStatusDate00($id, $table, $field,$sfield, $status,$sdate,$date1)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' and $sdate='$date1'"; 
	  
	   $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	
	function distinct_dub($id2)
	{
		 $sql="SELECT block_id='$id2' FROM subagent;";
		
		 //$sql = "select * from $table where $field='$id' and $sfield='$status' and $sdate='$date1'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchDetailByIdByStatusDatecou($id, $table, $field,$sfield, $status,$sdate,$date1,$scou,$cou)
    {
         $sql = "select * from $table where $field='$id' and $sfield='$status' and $sdate='$date1' and $scou='$cou'";     
	 
	   $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function fetchtodate005($table,$sdate,$edate,$block1)
	{
		
		 $sql="SELECT * FROM $table WHERE  payment_success_date BETWEEN  '$sdate' AND  '$edate' AND block='$block1' AND status='1'";
	
	//	$sql="SELECT * FROM $table WHERE  register_date BETWEEN  '$sdate' AND  '$edate' AND block='$block1' AND status='1'";
	
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchtodatecoupan($table,$sdate,$edate,$block1)
	{
		  $sql="SELECT id FROM $table WHERE  payment_success_date BETWEEN  '$sdate' AND  '$edate' AND block='$block1' AND status='1' AND payment_type='3'";
	
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchtodateonline($table,$sdate,$edate,$block1)
	{
		  $sql="SELECT id FROM $table WHERE  payment_success_date BETWEEN  '$sdate' AND  '$edate' AND block='$block1' AND status='1' AND payment_type='1'";
		
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;


        else
            return false;
	}
	function fetchtodateclass10($table,$sdate,$edate,$block1)
	{
		  $sql="SELECT id FROM $table WHERE  payment_success_date BETWEEN  '$sdate' AND  '$edate' AND block='$block1' AND status='1' AND class='2'";
		
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchtodateclass9($table,$sdate,$edate,$block1)
	{
		  $sql="SELECT id FROM $table WHERE  payment_success_date BETWEEN  '$sdate' AND  '$edate' AND block='$block1' AND status='1' AND class='1'";
		
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	///-------
	
	function fetchDetailByIdByStatus1110($id, $table, $field,$sfield, $status,$pfield,$pstatus)
	{
		 $sql = "select * from $table where $field='$id' and $sfield='$status' and $pfield='$pstatus'"; 
      
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchDetailByIdByStatusByDate0029($id, $table, $field,$sfield, $status,$sdate,$date)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' and $sdate='$date'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function fetchDetailByIdByStatusByDatecoupan($id, $table, $field,$sfield, $status,$sdate,$date,$pfield,$pstatus)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' and $sdate='$date' and $pfield='$pstatus'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function fetchtodateblock($table,$sdate1,$edate1,$bloc)
	{
	 	$sql="SELECT id FROM $table WHERE  payment_success_date BETWEEN  '$sdate1' AND  '$edate1' AND block='$bloc' AND status='1'";
	
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchtodatecuopan2009($table,$sdate1,$edate1,$bloc,$type)
	{
		$sql="SELECT id FROM $table WHERE  payment_success_date BETWEEN  '$sdate1' AND  '$edate1' AND block='$bloc' AND status='1' AND payment_type='$type' ";
		
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchtodateclass2009($table,$sdate1,$edate1,$bloc,$class)
	{
		$sql="SELECT id FROM $table WHERE  payment_success_date BETWEEN  '$sdate1' AND  '$edate1' AND block='$bloc' AND status='1' AND class='$class' ";
		
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	//------------30-01-2019--------
	function fetchDetailByIdByStatusBycouser($id, $table, $field,$sfield, $status,$pfield,$ptatus)
    {
         $sql = "select * from $table where $field='$id' and $sfield='$status' and $pfield='$ptatus'";  
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function fetchtodatetopic($table,$sdate,$edate,$block1)
	{
		 $sql="SELECT * FROM $table WHERE  date BETWEEN  '$sdate' AND  '$edate' AND user_id='$block1'";
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchdate_30daydefore($table,$sdate,$edate,$user_id)
	{
      $sql="SELECT * FROM $table WHERE  date BETWEEN  '$sdate' AND  '$edate' AND user_id='$user_id' group by id ";

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchDetailById88888888($id,$table,$field)
	{
	     $sql="select * from $table where $field='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	function fetchDetailByIdByStatusBycouser_type($id, $table, $field,$sfield, $status,$pfield,$ptatus,$date1,$date)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' and $pfield='$ptatus' and $date1='$date'";  
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	//----31-01-2019----
	function fetchdate_31daydefore($table,$sdate,$edate,$user_id)
	{
		 $sql="SELECT * FROM $table WHERE  date BETWEEN  '$sdate' AND  '$edate' AND user_id='$user_id' group by subject_id ";
	
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchtodateexe($table,$sdate,$edate,$block1)
	{
		  $sql="SELECT id FROM $table WHERE  payment_success_date BETWEEN  '$sdate' AND  '$edate' AND block='$block1' AND status='1'";
		
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function push_notification0002($id, $table, $field,$sfield, $status)
    {
       $sql = "select * from $table where $field='$id' and $sfield='$status' ORDER BY id DESC LIMIT 1"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    	function fetchDetailByStatus00052($status, $table, $sfield)
    {
           $sql = "select * from $table where $sfield='$status'"; 
		
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //-------------
    function fetchDetailByIdByStatusByblock02($id, $table, $field,$sfield, $status,$pfield,$pstatus)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' and $pfield='$pstatus'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
      function fetchDetailByIdByStatusByblock03($id, $table, $field,$sfield, $status,$pfield,$pstatus,$class1,$class)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' and $pfield='$pstatus' and $class1='$class'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //---------------02-02--------------
    	function fetchDetailByIdByStatusByblockfeb02($id, $table, $field,$sfield, $status,$pfield,$pstatus,$date2,$date1)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' and $pfield='$pstatus' and $date2='$date1'"; 
	   
	
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //------------------04-02------------
    function fetchdate_30daydefore00004($table,$sdate,$edate,$user_id)
	{
		   $sql="SELECT * FROM $table WHERE date BETWEEN '$edate' AND '$sdate' AND user_id='$user_id' group by date ";

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchdate_31daydefore00004($table,$sdate,$edate,$user_id)
	{
		 $sql="SELECT * FROM $table WHERE  date BETWEEN  '$edate' AND  '$sdate' AND user_id='$user_id' group by subject_id ";
	
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchdate_30daydefore0555($table,$sdate,$edate,$user_id)
	{
        $sql="SELECT *,MIN($sdate) as intime, MAX($edate) as outtime FROM $table WHERE date GROUP BY date";

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchdate_30daydefore0505($table,$sdate,$edate,$user_id)
	{
       $sql="SELECT *,MIN($sdate) as intime, MAX($edate) as outtime FROM $table WHERE date GROUP BY subject_id";

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	///////---------------06-02-2019-------------
	function fetchdate_30daydefore_subject($table,$sdate,$edate,$user_id,$class_id,$subject_id)
	{
	    //SELECT *,MIN(07-01-2019) as intime, MAX(06-02-2019) as outtime FROM virtual_subject where user_id='124' and class_id='2' and subject_id='10' group by id
         $sql="SELECT *,MIN($sdate) as intime, MAX($edate) as outtime FROM $table  where user_id='$user_id' and   class_id='$class_id' and subject_id='$subject_id'  group by id"; 

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
		function fetchDetailByIdByStatus0009($id, $table, $field,$sfield, $status)
    {
          $sql = "select * from $table where $field='$id' and $sfield='$status'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function fetchDetailByIdByStatusByDatefilte000r($table,$sdate,$edate,$user_id,$class_id)
	{
	    //SELECT *,MIN(07-01-2019) as intime, MAX(06-02-2019) as outtime FROM virtual_subject where user_id='124' and class_id='2' and subject_id='10' group by id
       $sql="SELECT *,MIN($sdate) as intime, MAX($edate) as outtime FROM $table  where user_id='$user_id' and   class_id='$class_id' GROUP by subject_id "; 

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	//---------------07-02-2019--------------
	function fetchtodate007($table,$sdate,$edate,$user_id)
	{
		$sql="SELECT * FROM $table WHERE  order_date BETWEEN  '$sdate' AND  '$edate' AND user_id='$user_id' AND status='1'";
	
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
		function fetchdate_30daydefore0577($table,$sdate,$edate,$user_id)
	{
        $sql="SELECT *,MIN($sdate) as intime, MAX($edate) as outtime FROM $table WHERE user_id='$user_id'  and date GROUP by date ";

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchdate_30daydeforcount($table,$sdate,$edate,$user_id)
	{
        $sql="SELECT count(*),MIN($sdate) as intime, MAX($edate) as outtime FROM $table WHERE user_id='$user_id'  and date GROUP by date ";

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	
		function fetchDetailById_todolist_count($value,$table,$field)
	{
        $sql="SELECT count(*) as total_task from $table WHERE $field= $value";

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	
		function fetchDetailById_todolist_completed($value,$table,$field)
	{
        $sql="SELECT count(*) as Completed from $table WHERE $field= $value and status = 1";

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	
		function fetchDetailById_todolist_incompleted($value,$table,$field)
	{
        $sql="SELECT count(*) as InCompleted from $table WHERE $field= $value and status != 1";

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchdate_virtualresult($table,$sdate,$edate,$user_id)
	{
        $sql="SELECT count(*),MIN($sdate) as intime, MAX($edate) as outtime FROM $table WHERE user_id='$user_id'  and date GROUP by date ";

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function add_virtual_chemisrty($user_id,$in_time,$out_time,$date)
	{
	    $sql="insert into `chemistry_lab_time`(user_id,in_time,out_time,date)values('$user_id','$in_time','$out_time','$date')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;  
	}
	//up_camistry($rs007)
	function up_camistry($rs007)
    {
	 	 $sql = "update chemistry_lab_time set status='1' where id='$rs007'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
    function fetchdate_30daydefore0577All1($table,$sdate,$edate,$user_id)
	{
         $sql="SELECT *,MIN($sdate) as intime, MAX($edate) as outtime FROM $table WHERE user_id='$user_id' and status='1'  and date GROUP by date ";

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	function fetchdate_30daydefore0577All0($table,$sdate,$edate,$user_id)
	{
        $sql="SELECT *,MIN($sdate) as intime, MAX($edate) as outtime FROM $table WHERE user_id='$user_id' and status='0'  and date GROUP by date ";

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
		//-------------today---09-02-2019-----------
	function insertanswer008($class_id,$subject,$chapter,$question,$answer,$type,$pdf)
	{
		    $sql="insert into answer(class_id,subject,chapter,question,answer,type,pdf,status)values('$class_id','$subject','$chapter','$question','$answer','$type','$pdf',1)";

		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	//--------------11-02-2019-------------
	function fetchDetailByIdByStatusByDatefilte0011($table,$sdate,$edate,$user_id,$class_id,$subject_id)
	{
	    //SELECT *,MIN(07-01-2019) as intime, MAX(06-02-2019) as outtime FROM virtual_subject where user_id='124' and class_id='2' and subject_id='10' group by id
        $sql="SELECT *,MIN($sdate) as intime, MAX($edate) as outtime FROM $table  where user_id='$user_id' and   class_id='$class_id' and subject_id='$subject_id' "; 

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
		function fetchDetailByDatefilte0011($table,$sdate,$edate,$user_id,$class_id,$subject_id)
	{
	     $sql = "SELECT * FROM $table WHERE date BETWEEN '$sdate' AND '$edate' and user_id='$user_id' and class_id='$class_id' and subject_id='$subject_id'";
	        
	        //echo $sql="SELECT *,MIN($sdate) as intime, MAX($edate) as outtime FROM $table  where user_id='$user_id' and   class_id='$class_id' and subject_id='$subject_id' "; 

		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	//------------20-02-2019----------
	function fetchtodate0020($table,$sdate,$edate)
	{
	   	 $sql = "SELECT * FROM $table WHERE register_date BETWEEN '$sdate' AND '$edate'  ";
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	//-----------25-02-2019----
	function freeaccessoffer($select_type,$discription,$img)
	{
	 $sql="insert into  free_offer(select_type,discription,image)values('$select_type','$discription','$img') ";
	 	$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;   
	}
	function Update_freeaccessoffer($select_type,$discription,$img,$id)
	{
	    $sql="update free_offer set select_type='$select_type',discription='$discription',image='$img' where id='$id'";
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
			
	}
	//----------
		function insertanswer0025($class_id,$subject,$chapter,$topic,$question,$answer,$type,$pdf)
	{
		  $sql="insert into answer(class_id,subject,chapter,topic,question,answer,type,pdf,status)values('$class_id','$subject','$chapter','$topic','$question','$answer','$type','$pdf',1)";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
		function updateanswer00025($class_id,$subject,$chapter,$topic,$question,$answer,$type,$pdf,$id)
	{
		 $sql="update answer set class_id='$class_id',subject='$subject',chapter='$chapter',topic='$topic',question='$question',answer='$answer',type='$type',pdf='$pdf' where id='$id'";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		
	}
	//--------------
    function fetchtodateblock858585858($table,$bloc)
    	{
    	 	 $sql="SELECT * FROM $table WHERE block='$bloc' AND pstatus='1'"; 
    	
    		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
            if ($rs)
                return $rs;
            else
                return false;
    	}
    function fetchtodateblockclass($table,$bloc,$class,$class1)
    	{
    	 	 $sql="SELECT * FROM $table WHERE block='$bloc' AND pstatus='1' and $class1='$class'"; 

    		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
            if ($rs)
                return $rs;
            else
                return false;
    	}
    function fetchtodate005000($table,$sdate,$edate,$block1)
	{
		
		 $sql="SELECT * FROM $table WHERE  payment_success_date BETWEEN  '$sdate' AND  '$edate' AND block='$block1' AND status='1'";
	
	//	$sql="SELECT * FROM $table WHERE  register_date BETWEEN  '$sdate' AND  '$edate' AND block='$block1' AND status='1'";
	
		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
	}
	
	//-----------11-03-219-------//
	function pro_register($name,$email,$password,$mobile,$address,$adhar_no,$account_holder_name,$account_number,$ifc_code,$branch_name,$pro_id,$img,$img1,$referby,$refer_ex,$refferal_agent_id)
	{
	    	$date=date("Y-m-d");
	    	   $sql="insert into `pro_register`(`name`,`email`,`password`,`mobile`,`address`,`adhar_no`,`account_holder_name`,`account_number`,`ifc_code`,`branch_name`,`pro_id`,`photo`,`document`,`status`,`payment_status`,`referby`,`refer_ex`,`refferal_agent_id`,`date`)
	values('$name','$email','$password','$mobile','$address','$adhar_no','$account_holder_name','$account_number','$ifc_code','$branch_name','$pro_id','$img','$img1',1,0,'$referby','$refer_ex','$refferal_agent_id','$date')";

	    	$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	    
	}
	
	

	function login_pro_register($email, $password, $table, $uField, $pField, $sField, $status)
    {
        $sql = "select * from $table where $uField='$email' and $pField='$password' and $sField='$status'";
		  
	
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	function updateprofile_pro_register($pro_id,$name,$email,$mobile,$adhar_no,$address,$img,$img1,$id)
    {
		 $sql = "update pro_register set pro_id='$pro_id',name='$name',email='$email',mobile='$mobile',adhar_no='$adhar_no',address='$address',photo='$img',document='$img1',status=1 where id='$id'";
        
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
    }
	
	function pro_passwordupdate($npass,$uid)
    {
        $sql = "update pro_register set password='$npass' where id='$uid'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
    }
    //13-3-2019--///////////
    function update_sub_agent0022($name,$email,$password,$mobile,$amount,$city_id,$block_id,$address,$adhar_no,$account_holder_name,$account_number,$ifc_code,$branch_name,$img1,$img,$id)
	{
		 $date=date("Y-m-d");
		  $sql = "update pro_register set name='$name',email='$email',password='$password',mobile='$mobile',amount='$amount',city_id='$city_id',block_id='$block_id',address='$address',adhar_no='$adhar_no',account_holder_name='$account_holder_name',account_number='$account_number',ifc_code='$ifc_code',branch_name='$branch_name',document='$img1',photo='$img',status='1',register_date='$date' where id='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function update_sub_agent00220($name,$email,$password,$mobile,$amount,$city_id,$block_id,$address,$adhar_no,$account_holder_name,$account_number,$ifc_code,$branch_name,$img1,$img,$id)
	{
		 $date=date("Y-m-d");
		  $sql = "update pro_register set name='$name',email='$email',password='$password',mobile='$mobile',amount='$amount',city_id='$city_id',block_id='$block_id',address='$address',adhar_no='$adhar_no',account_holder_name='$account_holder_name',account_number='$account_number',ifc_code='$ifc_code',branch_name='$branch_name',document='$img1',photo='$img',status='1',register_date='$date' where id='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function  pro_order($id,$name,$email,$mobile,$price)
	{
			$date=date("d-m-Y");

		     $sql="insert into `pro_payment`(pro_id,name,email,mobile,price)values('$id','$name','$email','$mobile','$price')";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		}
	
	function insertprice_pro($type_user,$price,$class)
	{
		 $sql="insert into `markting_price` (`type_user`,`price`,`class`,`status`)values('$type_user','$price','$class',1)";
		
		$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	
	function updateStatuspro($oid)
	{
		 
		$sql = "update `pro_payment` set `status`='1' where `id`='$oid'"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function updateStatuspro55($pay_statusid)
	{
	      $sql = "update  pro_register set payment_status='1' where id='$pay_statusid'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	//----------------------16-03-2019-------------
    function request_withdrawal($user_id,$total_amount,$withdrawal_amount,$final_amount)
    {
        $date=date("Y-m-d H:i:s");
        //$date=date("d M,Y h:ia");
        $sql="insert into  withdrawal (user_id,total_amount,withdrawal_amount,final_amount,date_time) values ('$user_id','$total_amount','$withdrawal_amount','$final_amount','$date')";
        	$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
    }
    function update_amount($rs,$final_amount)
    {
        $sql = "update  withdrawal set final_amount='$final_amount' where id='$rs'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
    }
        	function fetchAllDetailByIdByStatus0000000000000($id, $table, $sfield, $status, $field)
    {
          $sql = "select * from $table where $sfield='$status' and $field='$id' ";
		
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
   function insert_wallet($rs)
    {
        
         $sql="insert into  pro_wallet (user_id) values ('$rs')";

        	$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
    }
	function update_amount_wallet($user_id,$amount)
	{
	   $sql = "update  pro_wallet set amount='$amount' where user_id='$user_id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function update_with($id,$transaction_id)
	{
	    $date=date("Y-m-d H:i:s");
	    //$date=date("d M,Y h:ia");
	       $sql = "update  withdrawal set status='1',success_date='$date',transaction_id='$transaction_id' where id='$id'"; 
	    

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	 function add_pro_coupan($pro_id,$agent_id,$coupan)
    {
        
         $sql="insert into  `pro_coupan` (pro_id,agent_id,coupan) values ('$pro_id','$agent_id','$coupan')";

        	$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
    }
    	function update_coupan_pro($coupan_id)
	{
	   $sql = "update  `coupan_class` set `pro_asign`='1' where `id`='$coupan_id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	
	function update_pppp($pro_id)
	{
	     $sql = "update  `pro_register` set `coupan_status`='1' where `id`='$pro_id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	//30-3-2019---ruby--////
	function insertschool($school,$city,$block)
	{
		$sql="insert into school(school,city,block,status)values('$school','$city','$block',1)";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	
		function fetchDetailByIdBysearch002($school)
    {
        $sql="select * from school where school like '$school%'";
		
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
    }
	
	function update_school($school,$city,$block,$id)
	{
	   $sql = "update  `school` set `school`='$school',`city`='$city',`block`='$block' where `id`='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	
	 function insert_school($city,$block,$school)
	{
	   $sql="insert into school(city,block,school)values('$city','$block','$school')";

		$result = mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if ($result)
            return mysqli_insert_id($this->link);
        else
            return false;
	}
//---------------pro-------
  function fetchAllDetailByStatus_pro($table)
    {
        $sql = "select * from $table where payment_status='1'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //---------------
    	function fetchDetailByIdByStatusDate00787($id, $table, $field,$sfield, $status,$sdate,$date1)
    {
         $sql = "select * from $table where $field='$id' and $sfield='$status' and $sdate='$date1'"; 
	  
	   $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //---------------
     function fetchtodateblock8800000($table,$pro_id1)
    	{
    	 	 $sql="SELECT * FROM $table WHERE pro_id='$pro_id1' AND pstatus='1'"; 
    	
    		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
            if ($rs)
                return $rs;
            else
                return false;
    	}
	function fetchtodateblockclass04($table,$pro_id1,$class,$class1)
    	{
    	 	 $sql="SELECT * FROM $table WHERE pro_id='$pro_id1' AND pstatus='1' and $class1='$class'"; 

    		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
            if ($rs)
                return $rs;
            else
                return false;
    	}
    ///8-4-2019-/--goverment///
		
		
	
	function mac_update001($mac,$fcm_token,$mobile)
	{
		 $sql = "update user_register_goverment set mac='$mac',fcm_token='$fcm_token',status='1' where mobile='$mobile'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	
	function inser_add_language($user_id,$select_language)
	{
				$date=date("d-m-Y");

		$sql="insert into `add_language`(user_id,select_language,date)values('$user_id','$select_language','$date')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
    function updatemac001($mac1,$id)
	{
		$sql ="update user_register_goverment set mac='$mac1' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	
     function insert_add_task($add_task)
	{
	$date=date("d-m-Y");

		 $sql="insert into `add_task` (add_task,date,status)values('$add_task','$date',1)";
		
		$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}	
	function update_add_task($add_task,$id)
	{
	    $date=date('d-m-Y');
		$sql ="update add_task set add_task='$add_task',date='$date' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	
	function goverment_popular_video($heading,$thumbnail,$vedio1,$app_type)
	{
		  $sql="insert into `goverment_popular_video`(`heading`,`thumbnail`,`video`,`app_type`,`status`)values('$heading','$thumbnail','$vedio1','$app_type',1)"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function edit_goverment_popular_video($heading,$thumbnail,$video,$app_type,$id)
	{
		$sql = "update goverment_popular_video set heading='$heading',video='$video',thumbnail='$thumbnail',app_type='$app_type',status='1' where id='$id'"; 
		
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	
	 function insert_add_language($language)
	{
	$date=date("d-m-Y");

		 $sql="insert into `add_language` (language,date)values('$language','$date')";
		
		$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}	
	function update_add_language($language,$id)
	{
		$sql ="update add_language set language='$language' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	 	function ifc_update001($fcm_token,$mobile)
	{
		 $sql = "update user_register_goverment set fcm_token='$fcm_token',status='1' where mobile='$mobile'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
		function loginuser0010($user_name, $password, $table, $uField, $pField,$pmac,$mac,$sField, $status)
    {
           $sql = "select * from $table where $uField='$user_name' and $pField='$password' and $pmac='$mac' and $sField='$status'";

	
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
    
    
     function fetchDetailbylimit($table)
             {
                $sql = "select * from `$table`  ORDER BY id DESC LIMIT 4"; 
          $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    } 
	
	
	 function insert_days($days)
	{

		 $sql="insert into `days` (days)values('$days')";
		
		$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}	
	
	function update_days($days,$id)
	{
		$sql ="update days set days='$days' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	
	
	 function insert_gov_class($plan,$days,$level)
	{

		$sql="insert into `gove_class`(`plan`,`day`,`level`,`status`)values('$plan','$days','$level','1')";
	
		$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}	
	
	function update_gov_class($plan,$days,$level,$id)
	{
		$sql ="update gove_class set plan='$plan',days='$days',level='$level' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function insert_gover_assig($class,$days,$topic,$topic_pic,$img,$contant)
    {
     $sql="insert into `gover_assign`(class,days,topic,topic_pic,doucment,contant,status)values('$class','$days','$topic','$topic_pic','$img','$contant',1)"; 
        
        $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
        
    }
	function update_gover_assig($class,$days,$topic,$topic_pic,$img,$contant,$id)
	{
		 $sql="update gover_assign set class='$class',days='$days',topic='$topic',topic_pic='$topic_pic',doucment='$img',contant='$contant' where id='$id' ";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
		function goverment_question($exam_type_id,$exame_type,$subject,$type,$question,$option1,$option2,$option3,$option4,$solution,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$solution1,$answer)
		//goverment_question($exam_type_id,$type,$question,$option1,$option2,$option3,$option4,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$answer)
	{
		  $sql="insert into  `gover_multiple_question`(exam_type_id,exam_type,subject,type,question,option1,option2,option3,option4,solution,question_image,option_img1,option_img12,option_img3,option_img4,solution1,answer)values('$exam_type_id','$exame_type','$subject','$type','$question','$option1','$option2','$option3','$option4','$solution','$question_image','$option_img1','$option_img12','$option_img3','$option_img4','$solution1','$answer')";
	
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function update_practis_question($exam_type_id,$exame_type,$subject,$type,$question,$option1,$option2,$option3,$option4,$solution,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$solution1,$answer,$id)
	{
	    $sql="update gover_multiple_question set exam_type_id='$exam_type_id',exam_type='$exame_type',subject='$subject',type='$type',question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',solution='$solution',question_image='$question_image',option_img1='$option_img1',option_img12='$option_img12',option_img3='$option_img3',option_img4='$option_img4',solution1='$solution1',answer='$answer' where id='$id' ";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	
	
	//10-4-2019--//
	function insert_mobile_number001($mobile,$otp)
	{	
	 	$sql="insert into `mobile_otp_goverment`(mobile,otp)values('$mobile','$otp')"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	
	function mobile_update001($new_mobile,$user_id)
	{
		$sql="update user_register_goverment set mobile='$new_mobile' where id='$user_id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
		
	}
	
	function inser_contact_us001($user_id,$email,$mobile,$title,$contant)
	{
		$date=date("d-m-Y");
		$sql="insert into `gover_contact_us`(user_id,email,mobile,title,contant,date)values('$user_id','$email','$mobile','$title','$contant','$date')";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	
		
	}
	
	
	function fetchDetailByStatusBystatusByassigment($class, $table, $class1 ,$sub,$sub1, $chap,$chap1)
    {
           $sql = "select * from $table where $class1='$class' and $sub='$sub1' and $chap='$chap1'";

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    
    function update_goverment_question($exam_type_id,$class_id,$days_id,$type,$question,$option1,$option2,$option3,$option4,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$answer,$id)

	{
		 $sql ="update  gover_multiple_question set exam_type_id='$exam_type_id',class_id='$class_id',days_id='$days_id',type='$type',question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',question_image='$question_image',option_img1='$option_img1',option_img12='$option_img12',option_img3='$option_img3',option_img4='$option_img4',answer='$answer' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}

// 	function insert_gover_exam($class_id,$days_id,$exam_date,$time_dur,$mark,$start_time,$end_time,$min_mark)
//     {
//      $sql="insert into `gove_exam`(class_id,days_id,exam_date,time_dur,mark,start_time,end_time,min_mark,status)values('$class_id','$days_id','$exam_date','$time_dur','$mark','$start_time','$end_time','$min_mark',1)"; 
        
//         $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
//         if($rs)
//             return mysqli_insert_id($this->link);
//         else
//             return false;
        
//     }
	
	 function insert_exam_type($exam_type)
	{

		 $sql="insert into `exam_type` (exam_type,status)values('$exam_type',1)";
		
		$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}	
	function update_exam_type($exam_type,$id)
	{
		$sql ="update exam_type set exam_type='$exam_type' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function insert_pay_add($id,$instaid,$payid,$status)
    {
     $sql="insert into `instamojo`(id,instaid,payid,status)values('$id','$instaid','$payid','$status')"; 
        
        $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
        
    }
    function update_gov_registeruser($name,$email,$dob,$address,$img,$user_id)
	{
	 	  $sql ="update user_register_goverment set name='$name',email='$email',dob='$dob',address='$address',img='$img' where id='$user_id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function update_register11($name,$password,$email,$address,$district,$block,$referal_id,$date_of_birth,$language,$pro_plan,$id)
	{
	   $sql = "update  `register` set `name`='$name',`password`='$password',`email`='$email',address='$address',district='$district',block='$block',referal_id='$referal_id',date_of_birth='$date_of_birth',language='$language',pro_plan='$pro_plan' where `id`='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function online_exam1100($exam_type_id,$class_id,$days_id,$type)
	{
	$sql="SELECT * FROM `gover_multiple_question` WHERE `exam_type_id`='$exam_type_id' and `class_id`='$class_id' and `days_id`='$days_id' and `type`='$type'";
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
		}
		 function fetchByIdByStatus88888($id, $table,$field,$mobile,$mobile1)
    {
         $sql = "select * from $table where $field='$id' and $mobile='$mobile1'";   
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
    //-----------------ruby-------------------
    	function ins_level($level,$price)
	{
		
			 $sql="insert into `royal_level` (level,price)values('$level','$price')";

		$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
	function update_level($level,$price,$id)
	{
		$sql ="update royal_level set level='$level',price='$price' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
		function update_royality($name,$level,$start_date,$end_date,$t_student,$user_name,$id)
	{
		$sql ="update royality_user set name='$name',level_id='$level_id',start_date='$start_date',end_date='$end_date',t_student='$t_student',user_name='$user_name' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	//------------------
	
	//------------------30-04-2019
	function insert_gover_topic($subject,$days,$topic,$thumbnail,$video,$title)
    {
        $sql="insert into `gover_topic`(subject,days,topic,thumbnail,video,title,status)values('$subject','$days','$topic','$thumbnail','$video','$title',1)"; 
      
        $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
        
    }
    ///------
    	function updats_gover_topic($subject,$days,$topic,$thumbnail,$video,$title,$id)
	{
		$sql ="update gover_topic set subject='$subject',days='$days',topic='$topic',thumbnail='$thumbnail',video='$video',title='$title' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
    function answer_api_gov($user_id,$exam_type_id,$exam_type,$someJSON,$someJSON1,$status)
    {
        $date=date('Y-m-d');
        $time=date('H:i:s');
         $sql="insert into `question_answer_gov`(user_id,exam_type_id,exam_type,question,answer,date,time,status)values('$user_id','$exam_type_id','$exam_type','$someJSON','$someJSON1','$date','$time','1')"; 
        
        $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
        
    }
    function ebook_ins($days,$subject,$title,$document,$topic)
    {
        $sql="insert into `ebook`(`days`,`subject`,`title`,`document`,`status`,`topics`)values('$days','$subject','$title','$document','1',',$topic')"; 
        $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
    }
    function updateebook_ins($days,$subject,$title,$document,$id)
    //ebook_ins($title,$document)
    {
        $sql = "update ebook set days='$days',subject='$subject',title='$title',document='$document' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
    }
    	function insertdistricholder($name,$email,$password,$mobile,$amount,$distric_id,$address,$adhar_no,$account_holder_name,$account_number,$ifc_code,$branch_name,$img,$img1)
	//insertagent0021($name,$email,$password,$mobile,$amount,$block_supervisor_id,$address,$adhar_no,$img,$img1)
	{
		$date=date("Y-m-d");
		 $sql="insert into distric_holder(name,email,password,mobile,amount,distric_id,address,adhar_no,account_holder_name,account_number,ifc_code,branch_name,photo,document,status,register_date)values('$name','$email','$password','$mobile','$amount','$distric_id','$address','$adhar_no','$account_holder_name','$account_number','$ifc_code','$branch_name','$img','$img1',1,'$date')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updatedistric($rs,$distric_id)
	{
		  $sql = "update city set distric_holder_id='$rs',asign_status='1' where id='$distric_id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	//-------------------
	function updatedistricholder($id,$name,$email,$password,$mobile,$amount,$distric_id,$address,$adhar_no,$account_holder_name,$account_number,$ifc_code,$branch_name,$img,$img1)
	{
	     $sql="UPDATE `distric_holder` SET `name`='$name',`email`='$email',`password`='$password',`mobile`='$mobile',`amount`='$amount',`distric_id`='$distric_id',`address`='$address',`photo`='$img',`status`='1',`register_date`='$date',`adhar_no`='$adhar_no',`account_holder_name`='$account_holder_name',`account_number`='$account_number',`ifc_code`='$ifc_code',`branch_name`='$branch_name',`document`='$img1',`asign_status`='0',`rel_manager`='0' WHERE id='$id'";
	  
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	//-----------
	function insert_govplan($plan_name,$id)
	{
	    //$sql="insert into `gov_plan` (`plan_name`,`status`)value('$plan_name','1')";
	    $sql="UPDATE `gov_plan` SET `plan_name`='$plan_name' where id='$id' ";
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function insertgovprice($plan_id,$price,$gst)
	{
	    $sql="insert into `goverment_plan`(`plan_id`,`price`,`gst`,`status`)values('$plan_id','$price','$gst',1)";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function update_price_plan($plan_id,$price,$gst,$id)
	{
		$sql="update goverment_plan set plan_id='$plan_id',price='$price',gst='$gst' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
    function insert_routing($day,$description,$app_type)
	{
	    $sql="INSERT INTO `routine`(`day`, `description`,`app_type`, `status`) VALUES ('$day','$description','$app_type',1)";
	  
	    $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
		function fetchallexecutive_supervisor($table)
    {
        $sql="select * from `$table` ";
		
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
    }
    
    function fetchById_proregistercount($id,$table,$field)
    {
        $sql="SELECT * FROM `$table` WHERE $field='$id'";
		
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
    }
    
    	function fetchAllDetailByIdByStatus000($table,$id)
    {
          $sql = "SELECT * FROM `pro_register` WHERE `referby`='distric_holder' and `refer_ex`='$id' "; 
	
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //---------------27-05-2019----------------
    function fetchById_proregistercountdate($id,$table,$field)
    {
         $sql="SELECT * FROM `$table` WHERE $field='$id'";
		
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
    }
    	function fetchDetailByIdByStatussheetal($id, $table, $field,$sfield, $status)
    {
          $sql = "select * from $table where $field='$id' and $sfield='$status'"; 
       
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
     function fetchByIdByStatusjkljkl($id, $table,$field,$mobile,$mobile1)
    {
         $sql = "select * from $table where $field='$id' and $mobile='$mobile1'"; 
      $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
     function fetchByIdByStatus12121($id, $table,$field,$mobile,$mobile1)
    {
         $sql = "select * from $table where $field='$id' and $mobile='$mobile1'";   
       
       $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function insert_user_register($mobile,$password,$name,$pro_id,$school,$city_id,$block_id,$email,$gender,$class,$img1)
{
    
    $date=date("d-m-Y");
      $sql="insert into `user_register` (mobile,password,name,pro_id,school,city_id,block,email,gender,class,photo,register_date,status,pstatus)values('$mobile','$password','$name','$pro_id','$school','$city_id','$block_id','$email','$gender','$class','$img1','$date',1,0)"; 
  
    $result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
    if($result)
    return mysqli_insert_id($this->link);
    else
    return false;

}
	function fetchDetailByIdBysearch0006($key_value)
    {
       $sql="SELECT * FROM `school` WHERE `school` LIKE '%$key_value%'" ;

       // $sql="select * from wikipedia where title like '$key_value%'";
		
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
    }
    //-----------
    	function insert_class_ordercoupan($user_id,$class_id,$name,$email,$mobile,$price)
		{
			$order_date=date("d-m-Y");
			  $sql="insert into class_order(user_id,class_id,name,email,mobile,price,type,order_date,status)values('$user_id','$class_id','$name','$email','$mobile','$price',1,'$order_date',0)"; 
		
			$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
		}
		function updateStatuscoupanuser445($id, $table, $field,$class,$class1)
    {
        $date=date("d-m-Y");
	 	$sql = "update $table set payment_type='1',pstatus='1',status='1',class='$class1',payment_success_date='$date' where $field='$id'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
	//-----------
	
	
// 	function updateStatuscoupanuser00($user_id)
// 	{
// 	    $date=date("d-m-Y");
// 	 	$sql = "update user_register_goverment set payment_type='3',pstatus='1',success_date='$date' where id='$user_id'"; 

//         $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
//         if (mysqli_affected_rows($this->link) == 1)
//             return true;
//         else
//             return false;
// 	}
    //-------------
      function fetchByIdByStatusjkljkl555($id, $table,$field,$mobile,$mobile1)
    {
         $sql = "select * from $table where $field='$id' and $mobile='$mobile1'"; 
      $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //-----------------
     function fetchtodateblockpro858585858($table,$pro_id)
    	{
    	   $sql="SELECT * FROM $table WHERE pro_id='$pro_id' AND pstatus='1'"; 
    	
    		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
            if ($rs)
                return $rs;
            else
                return false;
    	}
    //---------------
    function insert_register_goverment($name,$email,$mobile,$password,$city_id,$block,$refferel_id,$select_plan,$mac,$fcm_token,$gender,$institute_name,$img)
	{
		$register_date=date("d-m-Y");
		   $sql="insert into  `user_register_goverment` (name,email,mobile,password,city_id,block,refferel_id,select_plan,mac,fcm_token,gender,institute_name,img,register_date,status)values('$name','$email','$mobile','$password','$city_id','$block','$refferel_id','$select_plan','$mac','$fcm_token','$gender','$institute_name','$img','$register_date',1)";

	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function insert_order_gov($name,$email,$mobile,$price,$select_plan,$user_id,$total_price)
	{
	    $order_date=date("d-m-Y");
	    $sql="INSERT INTO `gov_order`(`name`, `email`, `mobile`, `price`, `plan_id`, `user_id`,`total_price`, `type`, `order_date`, `status`) VALUES ('$name','$email','$mobile','$price','$select_plan','$user_id','$total_price',1,'$order_date','0')";  
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function insert_video_class($days,$topic,$description,$thumbnail,$video)
	{
	    $sql="INSERT INTO `video_class`(`days`, `topic`, `description`, `thumbnail`, `video`) VALUES ('$days','$topic','$description','$thumbnail','$video')";
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updatedaysss($days,$assign)
	{
	    $sql="update `days` set `assign`='$assign' and id='days' ";
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
	function update_order_discount($amount,$dis_price,$code,$price,$order_id)
	{
	    $sql="update `gov_order` set `total_price`='$amount',`discount_price`='$dis_price',`discount_code`='$code',`price`='$price' where id='$order_id' "; 
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
	 function fetchByIdjhjhjh($id, $table,$field)
    {
          $sql = "select * from $table where $field='$id'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
    	function fetchDetailById000121($id,$table,$field)
	{
	        $sql="select * from $table where $field='$id'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
    function fetchByIdByStatus88884448($id, $table,$field,$mobile,$mobile1,$uu,$uu1)
    {
         $sql = "select * from $table where $field='$id' and $mobile='$mobile1' and $uu='$uu1'";   
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	//-------------sheetal gov 13-07-2019------------
		function insert_gover_exam($exam_name,$subject,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday,$sunday,$exam_type,$time_dur,$start_time,$end_time,$numbers_of_que,$total_marks,$q_marks_pluse,$q_mark_min,$each_set_question)
		//insert_gover_exam($exam_type_id,$to_date,$from_date,$exam_type,$time_dur,$mark,$start_time,$numbers_of_que,$total_marks,$pluse_marks,$min_mark)
	{
	   
	     $sql="insert into `gove_exam`(`exam_name`,`subject`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `exam_type`, `time_dur`, `start_time`, `end_time`, `numbers_of_que`, `total_marks`, `q_marks_pluse`, `q_mark_min`, `each_set_question`, `status`) values('$exam_name','$subject','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday','$sunday','$exam_type','$time_dur','$start_time','$end_time','$numbers_of_que','$total_marks','$q_marks_pluse','$q_mark_min','$each_set_question',1)"; 

	     $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
        return false;
	    
	}
	function update_gover_exam($exam_name,$subject,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday,$sunday,$exam_type,$time_dur,$start_time,$end_time,$numbers_of_que,$total_marks,$q_marks_pluse,$q_mark_min,$each_set_question,$id)
	{
	    $sql = "update 'gove_exam' set exam_name='$exam_name',subject='$subject',monday='$monday',tuesday='$tuesday',wednesday='$wednesday',thursday='$thursday',friday='$friday',saturday='$saturday',sunday=$sunday',exam_type='$exam_type',time_dur='$time_dur',start_time='$start_time',end_time='$end_time',numbers_of_que='$numbers_of_que',total_marks='$total_marks',q_marks_pluse='$q_marks_pluse',q_mark_min='$q_mark_min',each_set_question='$each_set_question' where id='$id'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
	}
		function fetchDetailByIdByStatus00000($id, $table, $field,$sfield, $status)
    {
            $sql = "select * from $table where $field='$id' and $sfield='$status'"; 
       
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    
    	function insert_current_affairs($months,$title,$description,$thumbnail,$video)
	{
	     $sql="INSERT INTO `current_affairs`(`months`, `title`, `description`, `thumbnail`, `video`) VALUES ('$months','$topic','$description','$thumbnail','$video')";
	    
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
		function update_current_affairs($months,$title,$description,$thumbnail,$video,$id)
	{
		$sql="update current_affairs set months='$months',title='$title',description='$description',thumbnail='$thumbnail',video='$video' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	function fetchDetailByIdByLimit($id,$table,$field)
	{
	       $sql="select * from $table where $field='$id' order By id  limit 2"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	function fetchDetailByIdByLimit852369($id,$table,$field)
	{
	       $sql="select * from $table where $field='$id' order By id  limit 3"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	function insert_subject_optional($subject,$img)
	{
	     $sql="INSERT INTO `optional_subject`(`subject`, `image`,`status`) VALUES ('$subject','$img',1)";
	
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;   
	}
	function insert_subject_gov($subject,$img,$banner_image)
	{
	     $sql="INSERT INTO `gov_subject`(`subject`, `image`, `banner_image`,`status`) VALUES ('$subject','$img','$banner_image',1)";
	
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;   
	}
	function insert_subject_daywise($days,$subject)
	{
	      $sql="INSERT INTO `assign_subject`(`days`, `subject`, `status`) VALUES ('$days','$subject',1)";

	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;  
	
	    
	}
	
	function Update_subject_daywise0000($days,$subject,$id)
	{
		  $sql="update assign_subject set days='$days',subject='$subject' where id='$id'";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	
	function insert_subjectwisetopic($days,$subject,$topic,$mainsubject,$img,$frees_status)
	{
	    $sql="INSERT INTO `day_wise_topic`(`days`, `subject`, `topic`, `status`,`mainsubject`,`thumbnail`,`fress_status`) VALUES ('$days','$subject','$topic',1,'$mainsubject','$img','$frees_status')";
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;  
	
	    
	}
	//-----
		function Update_topic_daywise0000($days,$subject,$topic,$id,$mainsubject)
	{
	$sql="update day_wise_topic set days='$days',subject='$subject',topic='$topic',mainsubject='$mainsubject' where id='$id'";
	$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	
	
	function update_subject_gov($subject,$img,$banner_image,$id)
	{
		 $sql="update gov_subject set subject='$subject',image='$img',banner_image='$banner_image' where id='$id'";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	function update_subject_opt($subject,$img,$id)
	{
		 $sql="update optional_subject set subject='$subject',image='$img' where id='$id'";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	function ca_update_subject_gov($subject_name,$img,$id)
	{
	 $sql="update current_affairs_subject set subject_name='$subject_name',image='$img' where id='$id'";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	
	function fetchDetailByIdBystatusbysubject($days,$subject,$topic)
    {
        $sql = "SELECT * FROM `gover_topic` WHERE `days`='$days' and `subject`='$subject' and `topic`='$topic' "; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //----------------
    function goverment_assigment($days,$subject,$topic,$question,$option1,$option2,$option3,$option4,$soluction,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$soluction_img,$answer)
    //($days,$subject,$type,$question,$option1,$option2,$option3,$option4,$soluction,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$soluction_img,$answer)
	{
	   $sql="insert into  `assigment_gov`(`days`,`subject`,`topic`,`question`,`option1`,`option2`,`option3`,`option4`,`soluction`,`question_image`,`option_img1`,`option_img12`,`option_img3`,`option_img4`,`soluction_img`,`answer`)values('$days','$subject','$topic','$question','$option1','$option2','$option3','$option4','$soluction','$question_image','$option_img1','$option_img12','$option_img3','$option_img4','$soluction_img','$answer')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
function updategoverment_assigment($days,$subject,$topic,$question,$option1,$option2,$option3,$option4,$soluction,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$soluction_img,$answer,$id)
	{
	    $sql="update assigment_gov set days='$days',subject='$subject',topic='$topic',question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',soluction='$soluction',question_image='$question_image',option_img1='$option_img1',option_img12='$option_img12',option_img3='$option_img3',option_img4='$option_img4',soluction_img='$soluction_img',answer='$answer' where id='$id'";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	
	function fetchDetailByIdBystatusbyasss($days,$subject,$topic)
    {
        $sql = "SELECT * FROM `assigment_gov` WHERE `days`='$days' and `subject`='$subject' and `topic`='$topic' "; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function fetchDetailByIdBystatusbysubje($subject,$topic)
    {
        $sql = "SELECT * FROM `assigment_gov` WHERE  `subject`='$subject' and `topic`='$topic' ";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //----------------
    function current_affairs_subj($subject,$img)
	{
	     $sql="INSERT INTO `current_affairs_subject`(`subject_name`,`image`,`status`) VALUES ('$subject','$img',1)";
	    
	     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function update_current_affairs_subj($subject_name,$image,$id)
	{
		$sql="update current_affairs_subject set subject_name='$subject_name',image='$image' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	function current_affairs_topic($subject,$topic)
	{
	   $sql="INSERT INTO `ca_topic`(`subject`, `topic`, `status`) VALUES ('$subject','$topic',1)";
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false; 
	}
	function update_current_affairs_topic($subject,$topic,$id)
	{
	    		$sql="update ca_topic set subject='$subject',topic='$topic' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	
	function ca_video_class($subject,$topic,$img,$video,$title)
	{
	     $sql="INSERT INTO `ca_video_class`(`subject`, `topic`, `image`, `video`,`title`, `status`) VALUES ('$subject','$topic','$img','$video','$title',1)";
	    
	   
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false; 
			
	}
	
	function updateca_video_class($subject,$topic,$img,$video,$title,$id)
	{
	    $sql="update ca_video_class set subject='$subject',topic='$topic',image='$img',video='$video',title='$title' where id='$id'";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
	//------------------
	 function ca_assigment($subject,$topic,$type,$question,$option1,$option2,$option3,$option4,$soluction,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$soluction_img,$answer)
    //($days,$subject,$type,$question,$option1,$option2,$option3,$option4,$soluction,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$soluction_img,$answer)
	{
	    $sql="insert into  `ca_assigment`(`subject`,`topic`,`type`,`question`,`option1`,`option2`,`option3`,`option4`,`soluction`,`question_image`,`option_img1`,`option_img12`,`option_img3`,`option_img4`,`soluction_img`,`answer`)values('$subject','$topic','$type','$question','$option1','$option2','$option3','$option4','$soluction','$question_image','$option_img1','$option_img12','$option_img3','$option_img4','$soluction_img','$answer')";

		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
		function fetchDetailByIdByStatusexampractis($id, $table, $field,$sfield, $status,$yy,$yy1,$each_set_question)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' and $yy='$yy1'  LIMIT $each_set_question "; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function update_subject_daywise($days,$subject,$id)
    {
     $sql="update assign_subject set days='$days',subject='$subject' where id='$id'";
     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;   
    }
    function fetchByIdByStatus000($id, $table,$field,$mobile,$mobile1)
    {
         $sql = "select * from $table where $field='$id' and $mobile='$mobile1'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
    function fetchByIdByStatus000789($id, $table,$field,$mobile,$mobile1)
    {
         $sql = "select * from $table where $field='$id' and $mobile='$mobile1' ORDER BY `id` DESC LIMIT 1 "; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
    function fetchByIdByStatus00078952($id, $table,$field,$mobile,$mobile1,$mobile22,$mobile23)
    {
         $sql = "select * from $table where $field='$id' and $mobile='$mobile1' and $mobile22='$mobile23' ORDER BY `id` DESC LIMIT 1 "; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
    function update_routing($day,$description,$id)
    {
        $sql="UPDATE `routine` SET `day`='$day',`description`='$description',`status`='1' WHERE `id`='$id'";
         $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;   
    }
    //----------------
	function insert_copan000($user_id,$name,$email,$mobile,$price,$code)
	{
		$order_date=date("d-m-Y");
		  $sql="insert into gov_order(user_id,name,email,mobile,price,type,order_date,coupan_code,plan_id,status)values('$user_id','$name','$email','$mobile','$price',3,'$order_date','$code',1,0)"; 
		
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
	if($rs)
		return mysqli_insert_id($this->link);
	else
		return false;
	
	}
 	function fa_subjectwisetopic($subject,$topic)
 	{
 	    $sql="INSERT INTO `fag_topic`(`subject`, `topic`, `status`) VALUES ('$subject','$topic',1)";
 		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
    	if($rs)
    		return mysqli_insert_id($this->link);
    	else
    		return false;   
 	}
 	//--------------
 	function mac_update00000($mac,$fcm_token,$mobile)
	{
		  $sql = "update user_register_goverment set mac='$mac',fcm_token='$fcm_token',status='1' where mobile='$mobile'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
    
    	function ifc_update000($fcm_token,$mobile)
	{
		 $sql = "update user_register_goverment set fcm_token='$fcm_token',status='1' where mobile='$mobile'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function insert_history($user_id,$id,$right_question,$rong_question,$total_obtain,$persentage,$exam_date)
	{
	    $sql="INSERT INTO `exam_history`(`user_id`, `ins_id`, `right_question`, `rong_question`, `total_obtain`, `persentage`,`date`,`status`) VALUES ('$user_id','$id','$right_question','$rong_question','$total_obtain','$persentage','$exam_date',1)";
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
    	if($rs)
    		return mysqli_insert_id($this->link);
    	else
    		return false;
	}
	
	function top5($table)
	{
	    $sql="SELECT * FROM $table  ORDER BY `total_obtain` DESC LIMIT 5 ";
	
	    $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	    
	}
	//----------------------
	 function fetchByIdByStatusByTest($id, $table,$field,$mobile,$mobile1,$aa,$aa1)
    {
        $sql = "select * from $table where $field='$id' and $mobile='$mobile1' and $aa='$aa1'";  
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
	//-----------
	
	function answer_api_fa($user_id,$someJSON,$someJSON1,$status)
    {
        $date=date('Y-m-d');
        $time=date('H:i:s');
         $sql="insert into `fa_p_answer`(user_id,question,answer,date,time,status)values('$user_id','$someJSON','$someJSON1','$date','$time','1')"; 
        
        $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
        
    }
    function insertexam($exam_type,$title,$description)
    {
        $sql="INSERT INTO `exam_instruction`(`exam_type`, `title`, `description`) VALUES ('$exam_type','$title','$description')";
        $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
    }
    function updateexam($exam_type,$title,$description,$id)
    {
     $sql="UPDATE `exam_instruction` SET `exam_type`='$exam_type',`title`='$title',`description`='$description' WHERE id='$id'";
     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;   
    }
    //---------------
    	function updateStatusUsergove($id, $table, $field,$odate)
    {
        $date=date("d-m-Y");
	 	$sql = "update $table set payment_type='1',pstatus='1',status='1',success_date='$odate',success_date1='$date' where $field='$id'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
    
     	function updateStatusUsergove000000($user_id)
    {
         $date789585=date("d-m-Y");
     
	  	 $sql = "update `user_register_goverment` set `payment_type`='3',`pstatus`='1',`status`='1',`success_date`='$date789585' where `id`='$user_id'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        else
            return false;
    }
    //------------------------
    function Bulk_upload_exam($exam_type_id,$subject,$question,$option1,$option2,$option3,$option4,$solution,$answer)
	{
		   $sql="insert into  `gover_multiple_question`(exam_type_id,subject,question,option1,option2,option3,option4,solution,answer,exam_type,type)values('$exam_type_id','$subject','$question','$option1','$option2','$option3','$option4','$solution','$answer',1,1)";

		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
	 function Bulk_upload_examran($exam_type_id,$subject,$question,$option1,$option2,$option3,$option4,$solution,$answer)
	{
		   $sql="insert into  `gover_multiple_question`(exam_type_id,subject,question,option1,option2,option3,option4,solution,answer,exam_type,type)values('$exam_type_id','$subject','$question','$option1','$option2','$option3','$option4','$solution','$answer',2,1)";

		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function Bulk_upload_examprac($question,$option1,$option2,$option3,$option4,$solution,$answer)
	{
	     $sql="insert into  `fa_multiple_question`(question,option1,option2,option3,option4,solution,answer,type)values('$question','$option1','$option2','$option3','$option4','$solution','$answer',1)";

		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	 function goverment_assigment000($days,$subject,$topic,$question,$option1,$option2,$option3,$option4,$soluction,$answer)
    
	{
	    $sql="insert into  `assigment_gov`(`days`,`subject`,`topic`,`type`,`question`,`option1`,`option2`,`option3`,`option4`,`soluction`,`answer`,`status`)values('$days','$subject','$topic','1','$question','$option1','$option2','$option3','$option4','$soluction','$answer','1')";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function fa_ebook_ins($subject,$title,$document)
    //ebook_ins($title,$document)
    {
        $sql="insert into `fa_ebook`(`subject`,`title`,`document`,`status`)values('$subject','$title','$document','1')"; 
        
        $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
    }
    function edit_fa_ebook_ins($subject,$title,$document,$id)
    {
        $sql="UPDATE `fa_ebook` SET `subject`='$subject',`title`='$title',`document`='$document' WHERE id='$id'";
     $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
    }
    function insert_gover_topicfa($title,$subject,$topic,$thumbnail,$video)
    {
     $sql="insert into `fa_video_class`(title,subject,topic,thumbnail,video,status)values('$title','$subject','$topic','$thumbnail','$video',1)"; 
        
        $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
    }
    function update_gover_topicfa($subject,$topic,$thumbnail,$video,$id)
    {
         $sql="UPDATE `fa_video_class` SET `subject`='$subject',`topic`='$topic',`thumbnail`='$thumbnail',video='$video' WHERE id='$id'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
    }
    function goverment_assigmentbulk($subject,$topic,$question,$option1,$option2,$option3,$option4,$soluction,$answer)
    //($days,$subject,$type,$question,$option1,$option2,$option3,$option4,$soluction,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$soluction_img,$answer)
	{
	   $sql="insert into  `ca_assigment`(`subject`,`topic`,`type`,`question`,`option1`,`option2`,`option3`,`option4`,`soluction`,`answer`)values('$subject','$topic','1','$question','$option1','$option2','$option3','$option4','$soluction','$answer')";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	///---------------
	function updateca_assigment($subject,$topic,$type,$question,$option1,$option2,$option3,$option4,$soluction,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$soluction_img,$answer,$id)
	{
	    $sql="UPDATE `ca_assigment` SET `subject`='$subject',`topic`='$topic',`type`='$type',question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',soluction='$soluction',question_image='$question_image',option_img1='$option_img1',option_img12='$option_img12',option_img3='$option_img3',option_img4='$option_img4',soluction_img='$soluction_img',answer='$answer' WHERE id='$id'";
   
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	
	 function goverment_assigmentfree($subject,$topic,$question,$option1,$option2,$option3,$option4,$soluction,$answer)
    //($days,$subject,$type,$question,$option1,$option2,$option3,$option4,$soluction,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$soluction_img,$answer)
	{
	   $sql="insert into  `fa_assigment`(`subject`,`topic`,`type`,`question`,`option1`,`option2`,`option3`,`option4`,`soluction`,`answer`)values('$subject','$topic','1','$question','$option1','$option2','$option3','$option4','$soluction','$answer')";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
    	function fetchAllDetailByLimit($table)
	{
	       $sql="select * from $table  order By id  limit 2"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	function update_exa($id,$status)
	{
         $sql="UPDATE `exam_update` SET `notification`='$status' WHERE id='$id'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	function update_current_affair_video($id,$status)
	{
         $sql="UPDATE `ca_video_class` SET `free_status`='$status' WHERE id='$id'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
		function fetchDetailByIdByLimit852361119($id,$table,$field,$yy,$yy1)
	{
	    $sql="select * from $table where $field='$id' and $yy='$yy1' order By id  limit 10"; 
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
		else
			return false;
	}
	function insert_notification($user_id,$date)
	{
	 $sql="insert into  `notification_send`(`user_id`,`date`,`status`)values('$user_id','$date',1)";
	 	$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;   
	}
	
	
    	function fetchDetailByIdByStatus00($id, $table, $field,$sfield, $status)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status'";

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    	function fetchDetailByIdByStadfsdftus00($id, $table, $field,$sfield, $status)
    {
       $sql = "select * from $table where $field='$id' and $sfield='$status'"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
   function fetchtodateblock858585858class($table,$bloc,$class)
    	{
    	 	 $sql="SELECT * FROM $table WHERE block='$bloc' AND pstatus='1' and class='$class'"; 
    	
    		 $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
            if ($rs)
                return $rs;
            else
                return false;
    	} 
    function fa_image_assigment($subject,$topic,$type,$question,$option1,$option2,$option3,$option4,$soluction,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$soluction_img,$answer)
    {
        $sql="insert into  `fa_assigment`(`subject`,`topic`,`type`,`question`,`option1`,`option2`,`option3`,`option4`,`soluction`,`question_image`,`option_img1`,`option_img12`,`option_img3`,`option_img4`,`soluction_img`,`answer`)values('$subject','$topic','$type','$question','$option1','$option2','$option3','$option4','$soluction','$question_image','$option_img1','$option_img12','$option_img3','$option_img4','$soluction_img','$answer')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
    }
    function update_fa_image_assigment($subject,$topic,$type,$question,$option1,$option2,$option3,$option4,$soluction,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$soluction_img,$answer,$id)
    {
         $sql="UPDATE `fa_assigment` SET subject='$subject',topic='$topic',type='$type',question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',soluction='$soluction',question_image='$question_image',option_img1='$option_img1',option_img12='$option_img12',option_img3='$option_img3',option_img4='$option_img4',soluction_img='$soluction_img',answer='$answer', WHERE id='$id'";
        
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
    }
    
    function fa_exam($type,$question,$option1,$option2,$option3,$option4,$solution,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$solution1,$answer)
		//goverment_question($exam_type_id,$type,$question,$option1,$option2,$option3,$option4,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$answer)


	{
		  $sql="insert into  `fa_multiple_question`(type,question,option1,option2,option3,option4,solution,question_image,option_img1,option_img12,option_img3,option_img4,solution1,answer)values('$type','$question','$option1','$option2','$option3','$option4','$solution','$question_image','$option_img1','$option_img12','$option_img3','$option_img4','$solution1','$answer')";
	
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
	function update_fa_exam($type,$question,$option1,$option2,$option3,$option4,$solution,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$solution1,$answer,$id)
	{
	     $sql="UPDATE `fa_multiple_question` SET type='$type',question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',solution='$solution',question_image='$question_image',option_img1='$option_img1',option_img12='$option_img12',option_img3='$option_img3',option_img4='$option_img4',solution1='$solution1',answer='$answer' WHERE id='$id'";
        
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	//-----------------
		function fetchDetailByIdByStatusexampractis55555354545454($id, $table, $field,$sfield, $status,$yy,$yy1,$settotal)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' and $yy='$yy1'  ORDER BY id DESC LIMIT $settotal "; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function test($desc_str){
    //  $str = "Is your name O’reilly?";
    // $desc_str = addslashes($str);
    $sql = "INSERT INTO testtb (test) VALUES ( '$desc_str')";
    $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
    }
    //---------------
    	function fetchDetailByIdByStatusid0fdsrfsdf0($id, $table, $field,$sfield, $status)
    {
        $sql = "select * from $table where $field='$id' and $sfield='$status' ORDER BY id DESC";

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    	function fetchDetailByIdByStatus00test($id, $table, $field,$sfield, $status)
    {
          $sql = "select * from $table where $field='$id' and $sfield='$status' ORDER BY RAND()"; 

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    	 function Bulk_upload_examrankk($exam_type_id,$question,$option1,$option2,$option3,$option4,$solution,$answer)
	{
		   $sql="insert into  `gover_multiple_question`(exam_type_id,question,option1,option2,option3,option4,solution,answer,exam_type,type)values('$exam_type_id','$question','$option1','$option2','$option3','$option4','$solution','$answer',2,1)";

		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	 function Bulk_upload_examrankk789($package_id,$exam_id,$subject_id,$question,$option1,$option2,$option3,$option4,$solution,$answer)
	{
		   $sql="insert into  `user_multiple_questions`(package_id,exam_id,subject_id,question,option1,option2,option3,option4,solution,answer,exam_type,type)values('$package_id','$exam_id','$subject_id','$question','$option1','$option2','$option3','$option4','$solution','$answer',2,1)";

		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	//
			function goverment_question_rank($exam_type_id,$exame_type,$question,$option1,$option2,$option3,$option4,$solution,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$solution1,$answer)
		//goverment_question($exam_type_id,$type,$question,$option1,$option2,$option3,$option4,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$answer)
	{
		  $sql="insert into  `gover_multiple_question`(exam_type_id,exam_type,question,option1,option2,option3,option4,solution,question_image,option_img1,option_img12,option_img3,option_img4,solution1,answer)values('$exam_type_id','$exame_type','$question','$option1','$option2','$option3','$option4','$solution','$question_image','$option_img1','$option_img12','$option_img3','$option_img4','$solution1','$answer')";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	//--------------
	function update_practis_question_rankk($exam_type_id,$exame_type,$question,$option1,$option2,$option3,$option4,$solution,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$solution1,$answer,$id)
	{
	    $sql="update gover_multiple_question set exam_type_id='$exam_type_id',exam_type='$exame_type',question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',solution='$solution',question_image='$question_image',option_img1='$option_img1',option_img12='$option_img12',option_img3='$option_img3',option_img4='$option_img4',solution1='$solution1',answer='$answer' where id='$id' ";

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	function fetchAllDetailByStatus123($table)
    {
         $sql = "select * from $table where package_type='0'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }

     function fetchAllDetailByStatus456($table)
    {
         $sql = "select * from $table where package_type='1'"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }

    function fetchAllDetail45($table)
    {
        $sql = "select * from $table WHERE MONTH(date) = MONTH(CURRENT_DATE())
AND YEAR(date) = YEAR(CURRENT_DATE())" ;
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }

     function fetchAllDetailByStatus12($table)
    {
         $sql = "select * from $table where package_type='0' and  MONTH(start_date) = MONTH(CURRENT_DATE())
AND YEAR(date) = YEAR(CURRENT_DATE())"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }

     function fetchAllDetailByStatus14($table)
    {
         $sql = "select * from $table where package_type='1' and  MONTH(start_date) = MONTH(CURRENT_DATE())
AND YEAR(start_date) = YEAR(CURRENT_DATE())"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	
	function fetchAllDetail54($table)
    {
        $sql = "select * from $table WHERE MONTH(dateofexam) = MONTH(CURRENT_DATE())
AND YEAR(dateofexam) = YEAR(CURRENT_DATE())" ;
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }

    function fetchAllDetail001($table)
    {
        $sql = "select * from $table WHERE YEAR(date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)
AND MONTH(date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)" ;
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }

     function fetchAllDetailByStatus1212($table)
    {
         $sql = "select * from $table where package_type='0' and  YEAR(start_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)
AND MONTH(start_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }

     function fetchAllDetailByStatus1414($table)
    {
         $sql = "select * from $table where package_type='1' and YEAR(start_date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)
AND MONTH(start_date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)"; 
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }

    function fetchAllDetail546($table)
    {
        $sql = "select * from $table WHERE YEAR(dateofexam) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)
AND MONTH(dateofexam) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)" ;
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }

    function fetchAllDetail200($table)
    {
        $sql = "select * from $table WHERE MONTH(date_of_exam) = MONTH(CURRENT_DATE())
AND YEAR(date_of_exam) = YEAR(CURRENT_DATE())" ;
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }

    function fetchAllDetail300($table)
    {
        $sql = "select * from $table WHERE YEAR(date_of_exam) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)
AND MONTH(date_of_exam) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)" ;
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    function update_user_notice($title,$description,$date,$id)

{
	    $sql="UPDATE `notice` SET title='$title',description='$description', date='$date' WHERE id='$id'";
        
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	function insert_notice($title,$description,$date,$user)
	{
		
	       $sql="insert into notice(title,description,date,user)values('$title','$description','$date','$user')";


		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function insert_teacher($name,$email,$phone,$digination,$password,$class,$subject,$image)
  {
            $date=date("d-m-Y");
        $sql = "insert into teacher(name,email,phone,designation,password,class,subject,image,date)values('$name','$email','$phone','$digination','$password','$class','$subject','$image','$date')";  
     
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
    }
    function reply_doubt_clearance_update($user_id,$descp,$image,$reply_descp,$reply_image,$subject,$topic,$id)
{
	    $sql="UPDATE `doubt_clearance` SET user_id='$user_id',descp='$descp',image='$image',reply_descp='$reply_descp',reply_image='$reply_image',subject='$subject',topic='$topic' WHERE id='$id'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	//---------------16-04-2020----------------
	function virtual_lab_subject($class,$subject,$img)
	{
		$sql="insert into virtual_lab_subject(class_id,subject,image,status)values('$class','$subject','$img',1)";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function virtual_lab_subject_update($class,$subject,$image,$id)
	{
		$sql="update virtual_lab_subject set class_id='$class',subject='$subject',image='$image' where id='$id' ";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function insert_Virtual_lab_01($class,$subject,$title,$type,$file_name,$thumbnail)
	{
	    $sql="insert into virtual_lab_topic(class,subject,title,type,file_name,thumbnail)values('$class','$subject','$title','$type','$file_name','$thumbnail')";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function update_Virtual_lab_01($class,$subject,$title,$type,$file_name,$thumbnail,$id)
	{
	    $sql="update virtual_lab_topic set class='$class',subject='$subject',title='$title',type='$type',file_name='$file_name',thumbnail='$thumbnail' where id='$id' ";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	//--------------
	function ebook_ins_opt($subject,$topic,$document)
    {
        $sql="insert into `ebook_option`(`subject`,`topic`,`document`,`status`)values('$subject','$topic','$document','1')"; 
        
        $rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
        if($rs)
            return mysqli_insert_id($this->link);
        else
            return false;
    }
    function updateebook_ins_opt($subject,$topic,$document,$id)
    {
        $sql = "update ebook_option set topic='$topic',subject='$subject',document='$document' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
    }
     function fetchDetailByStatusBystatus0020($subject,$topic)
    {
         $sql = "SELECT * FROM `optional_module` WHERE `subject_id`='$subject' and `chapter_id`='$topic'";

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
    //------------
     function fetchByIdacademic_year($id, $table,$field,$year,$year1)
    {
        $sql = "select * from $table where $field='$id' and $year='$year1'";  
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) == 1)
            return mysqli_fetch_assoc($rs);
        else
            return false;
    }
    
    function fetchDetailByebbok($subject,$topic)
    {
         $sql = "SELECT * FROM `ebook_option` WHERE `subject`='$subject' and `topic`='$topic'";

        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function insert_user_optional($user_id,$subject_id,$date)
	{
		 $sql="INSERT INTO `optional_user`(`user_id`, `subject_id`, `date`) VALUES ('$user_id','$subject_id','$date')";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
	function update_topic_status($id,$status)
	{
         $sql="UPDATE `virtual_lab_topic` SET `status`='$status' WHERE id='$id'";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false; 
	}
	
	function insertschoollive($title,$thumbnail,$video,$fstatus)
	{
		//$order_date=date("d-m-Y");
			  $sql="insert into schoollive(title,thumbnail,video,fstatus,status)values('$title','$thumbnail','$video','$fstatus',1)";
			
			$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	
	function fetchByIdcount($id, $table,$field)
    {
        $sql = "select * from $table where $field='$id'";   
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_num_rows($rs) >=1)
            return mysqli_num_rows($rs);
        else
            return 0;
    }
}

?>