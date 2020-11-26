<?php
include"../include/database.php";
$obj=new database();


 $package_id=$_POST['package_id'];
 $exam_id=$_POST['exam_id'];
 
$path="upload/";
$pdf = date ( "Y-m-d" ) . "_" . time () . $_FILES['pdf11']['name'];
move_uploaded_file($_FILES['pdf11']['tmp_name'],$path.$pdf);
	 
        
	           $check=$obj->fetchById($exam_id, "exampdf", "exam");  
	             if($check['exam'])
            {
	                   $_SESSION['msg']="This exam id's pdf already exist";
                 	header("location:pdfupload.php");
	         
            }
	         

else
	  {
	       $aa=$obj->pdfupload($package_id,$exam_id,$pdf);
	       if($aa)  
       {
	        $_SESSION['msg']=" Insert Success Full";
           	header("location:pdfupload.php");
        }
else
{
	$_SESSION['msg']=" Not Insert";
	header("location:pdfupload.php");
}
}

?>

