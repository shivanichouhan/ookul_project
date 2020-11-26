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
	/*****************************Sheetal Admin Panel *********************************/

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
    $sql = "update  admin set user_name='$user_name',email='$email',phone='$phone',image='$img',address='$address',status=1 where id='$id'"; 
        
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
	function updateStatus($id, $table, $sfield, $status, $field)
    {
	 	 $sql = "update $table set $sfield='$status' where $field='$id'"; 

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
	function updateStatuscoupanuser($id, $table, $field)
    {
	 	$sql = "update $table set payment_type='3',pstatus='1',status='1' where $field='$id'"; 

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
	function insertschool($state_id,$city,$school)
	{
		$sql="insert into school(state_id,city,school,status)values('$state_id','$city','$school',1)";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	
	
	   
    function deleteById($id, $table, $field)
    {
        $sql = "delete from $table where $field='$id'";
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
	function replay_user_ask_q($user_id,$email,$questions,$answer)
	{
		
		$date=date("Y-m-d");
		$sql="insert into replay_ask_question(user_id,email,questions,answer,date)values('$user_id','$email','$questions','$answer','$date')";
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
	function insertsubject($class,$subject)
	{
		$sql="insert into subject(class,subject,status)values('$class','$subject',1)";
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	
	function update_subject($class,$subject,$id)
	{
		$sql="update subject set class='$class',subject='$subject' where id='$id' ";
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
	function insert_topic($class,$subject,$chapter,$topic,$topic_pic,$img,$video_path,$contant)
	{
		 $sql="insert into topic(class,subject,chapter,topic,topic_pic,doucment,video,contant,status)values('$class','$subject','$chapter','$topic','$topic_pic','$img','$video_path','$contant',1)";
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	//---9-07-2018--
	
	function update_topic($class,$subject,$chapter,$topic,$topic_pic,$img,$video_path,$contant,$id)
	{
		 $sql="update topic set class='$class',subject='$subject',chapter='$chapter',topic='$topic',topic_pic='$topic_pic',doucment='$img',video='$video_path',contant='$contant' where id='$id' ";

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
	function updateteakingno($traking_number,$order_id)
	{
		$sql ="update order_book set traking_number='$traking_number' where order_id='$order_id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	//----9-08-2018-------------
	
	function addcoupon($title,$class,$price,$i,$start_date,$end_date,$code)
       {
	$date=date("d-m-Y");
        $sql = "insert into coupan_class(title,class,price,quentitiy,start_date,end_date,code,status)values('$title','$class','$price','$i','$start_date','$end_date','$code','0')"; 
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
		   $sql="insert into answer(class_id,subject,chapter,question,answer,status)values('$class_id','$subject','$chapter','$question','$answer',1)";
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updateanswer($class_id,$subject,$chapter,$question,$answer,$id)
	{
		$sql="update answer set class_id='$class_id',subject='$subject',chapter='$chapter',question='$question',answer='$answer' where id='$id'";
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
	function question($class_id,$subject,$chapter,$question,$option1,$option2,$option3,$option4,$answer)
	{
		  $sql="insert into  multiple_question(class_id,subject,chapter,question,option1,option2,option3,option4,answer)values('$class_id','$subject','$chapter','$question','$option1','$option2','$option3','$option4','$answer')";
	
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	
	function updatequestion($class_id,$subject,$chapter,$question,$option1,$option2,$option3,$option4,$answer,$id)
	//updatequestion($state_id,$city,$school_id,$class_id,$question,$question_1,$question_2,$question_3,$question_4,$answer,$id)
	{
		 $sql ="update multiple_question set class_id='$class_id',subject='$subject',chapter='$chapter',question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',answer='$answer' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function questiontruefalse($class_id,$subject,$chapter,$question,$answer)
	{
		  $sql="insert into  true_false_question(class_id,subject,chapter,question,answer)values('$class_id','$subject','$chapter','$question','$answer')";
	
		
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updatequestiontruefalse($class_id,$subject,$chapter,$question,$answer,$id)
	{
		$sql ="update true_false_question set class_id='$class_id',subject='$subject',chapter='$chapter',question='$question',answer='$answer' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
		
	}
		function fetchAllDetailByorder($table)
    {
        $sql = "SELECT * FROM $table LIMIT 10;";
        $rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if ($rs)
            return $rs;
        else
            return false;
    }
	function insert_search($title,$contant,$imp)
	{
		 echo $sql="insert into wikipedia(title,contant,file_name)values('$title','$contant','$imp')"; die();
	
		
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
	function insertprice($class,$price,$gst)
	{
		 $sql="insert into price_plan (class,price,gst,status)values('$class','$price','$gst',1)";
		
		$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function update_price($class,$price,$gst,$id)
	{
		$sql="update price_plan set class='$class',price='$price',gst='$gst' where id='$id'";
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
	function insertacadmic($name_year,$start_year,$end_date)
	{
		$sql="insert into academic_year(name_year,start_year,end_date)values('$name_year','$start_year','$end_date')";
		$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}

	function updateacadmic($name_year,$start_year,$end_date,$id)
	{
		$sql="update academic_year set name_year='$name_year',start_year='$start_year',end_date='$end_date' where id='$id'";
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

	function insert_registeruser($name,$email,$mobile,$password,$city_id,$block,$address,$gender,$dob,$class,$school,$img,$mac,$fcm_token)
	{
		$register_date=date("d-m-Y");
		 $sql="insert into  user_register (name,email,mobile,password,city_id,block,address,gender,dob,class,school,photo,mac,fcm_token,register_date,status)values('$name','$email','$mobile','$password','$city_id','$block','$address','$gender','$dob','$class','$school','$img','$mac','$fcm_token','$register_date',0)";
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
        $sql="select * from $table where $field='$id'";
		
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return $rs;
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
	function inser_askme($user_id,$email,$phone,$subject,$chapter,$topic,$question)
	//inser_askme($user_id,$email,$phone,$question)
	{ $date=date("d-m-Y");
		$sql="insert into ask_question(user_id,email,phone,subject,chapter,topic,question,date)values('$user_id','$email','$phone','$subject','$chapter','$topic','$question','$date')";
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

	function ifc_update($fcm_token,$mobile)
	{
		 $sql = "update user_register set fcm_token='$fcm_token',status='1' where mobile='$mobile'"; 
	
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	function mac_update($mac,$fcm_token,$mobile)
	{
		 $sql = "update user_register set mac='$mac',fcm_token='$fcm_token',status='1' where mobile='$mobile'"; 
	
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
	function insert_free_access($name,$email,$mobile,$city_id,$block,$address,$class,$school)
	{
		$date=date("d-m-Y");
		 $sql="insert into  free_acess(name,email,mobile,city_id,block,address,class,school,date)values('$name','$email','$mobile','$city_id','$block','$address','$class','$school','$date')";
	
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
	function update_refferal_agent($username,$email,$password,$mobile,$amount,$address,$note,$district,$block,$img1,$id)
	{
		$sql="update referal_agent set username='$username',email='$email',password='$password',mobile='$mobile',amount='$amount',address='$address',note='$note',district='$district',block='$block',document='$img1' where id='$id'";
		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			if (mysqli_affected_rows($this->link) == 1)
				return true;
			return false;
	}
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
		function insert_instruction($contant,$img)
	{
		 $sql="insert into instruction(contant,image)values('$contant','$img')";
	
	
		$rs=mysqli_query($this->link,$sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
	}
	function updateinstraction($contant,$img,$id)
	{
		$sql="update instruction set contant='$contant',image='$img' where id='$id'";
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
	function insert_class_order($user_id,$class_id,$name,$email,$mobile,$price)
		{
			$order_date=date("d-m-Y");
			  $sql="insert into class_order(user_id,class_id,name,email,mobile,price,type,order_date,status)values('$user_id','$class_id','$name','$email','$mobile','$price',1,'$order_date',0)";
			
			$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
		}
	function updateStatusUser1000($id, $table, $field)
    {
	 	$sql = "update $table set payment_type='1',pstatus='1',status='1' where $field='$id'"; 

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
	function insertpapular_video($heading,$timing,$vedio1)
	{
		//$order_date=date("d-m-Y");
			  $sql="insert into papular_video(heading,timing,vedio,status)values('$heading','$timing','$vedio1',1)";
			
			$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($rs)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function updatevideo($heading,$timing,$video1,$id)
    {
	 	 $sql = "update papular_video set heading='$heading',vedio='$video1',timing='$timing',status='1' where id='$id'"; 
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
	
function price_plan_image($img)
	{
		  $sql="insert into price_plan_image(image,status)values('$img',1)";
		
		$result=mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
		if($result)
			return mysqli_insert_id($this->link);
		else
			return false;
		
	}
	function update_price_plan_image($img,$id)
	{
		  $sql ="update price_plan_image set image='$img' where id='$id'"; 

		$rs = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
        if (mysqli_affected_rows($this->link) == 1)
            return true;
        return false;
	}
	
}
?>










