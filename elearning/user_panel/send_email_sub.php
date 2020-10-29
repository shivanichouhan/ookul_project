<?php
include"../include/database.php";
$obj=new database();
$web_info=$obj->fetchByIdTable("website_details");
$mail=$web_info['email'];
$phone=$web_info['phone'];
$email=$_POST['email'];
$user_id=$_SESSION['user_id'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$rs=$obj->send_email($email,$subject,$message,$user_id);

if($rs)
{
	$url='http://localhost/water_new';
	
	$to=$email;
	$subject=$subject;
	$msg= '<html>
<head>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color:lightgray;">

<section>
<div class="container">
<div class="row">

<div class="col-md-2">

</div>
<div class="col-md-8">
<div class="head" style="background-color:white; height:40px;">
<p style="display:inline; margin-left: 26pc"><b>Email:</b>
<a href="mailto:'.$mail.'" target="_blank">'.$mail.'</a></p>
<p style="display:inline; margin-left:38pc"><b>Phone:</b>'.$phone.'</p>


</div>

<div class="head2" style="background-color:#00254b; height:110px;">
<img src="'.$url.'/images/sveltose.png"style="
    margin-left: 18pc;
    margin-top: 10px;">
</div>
</div></div>
</div>
</section>
<section>
<div class="container">
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8"> 
<div class="head3" style="background-color:white; height:400px; position:static;" >
<div class="email">

<p style="padding:20px;">'.$subject.'</p>
<div class="not" style="background-color: #80808045;
    margin-left: 25px;
    margin-right: 25px;
    border: 1px solid #80808045;">
	
	
	 <P style="margin-left:21px; padding:18px;">'.$message.'</P>
  
   
   
   
  
	</div>
	
</div>
</div>
</div>
<div class="col-md-2">

</div>
</div>
</div>

</section>






<section>
<div class="container">
<div class="row" style="margin-top:10px;">
<div class="col-md-2">


</div>



</div>
</div>
</section>
s
<section>
<div class="container">
<div class="row">
<div class="col-md-2">

</div>
<div class="col-md-8" style="">
<p class="copyright-footer" style="text-align:center; margin-top:20px;color:black;">
                        © 2018 All rights reserved. | Sveltose Technologies <a href="https://sveltosetech.com" target="_blank"></a>
                    </p>
</div>
<div class="col-md-2">

</div>
</div>
</div>
</section>
</body>
</html>';

 $subject = "KengenWater"; 
      $from = "noreply@KengenWater.com";
	$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .="From:".$from;
	$a=mail($email,$subject,$msg,$headers);

	 $_SESSION['msg']="Send  successfully";
	header("location:contact_emailer.php");
}
else
{ 
 $_SESSION['msg']="Failed...";
	header("location:contact_emailer.php");
}
?>