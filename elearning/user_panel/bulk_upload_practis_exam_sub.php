<?php
include"../include/database.php";
$obj=new database();


 $exam_type_id=$_POST['exam_type_id'];
 $subject=$_POST['subject'];

		 $filename=$_FILES["file"]["tmp_name"];	


		 if($_FILES["file"]["size"] > 0)
		 {
	
		  	$file = fopen($filename, "r");
	        while (($data = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
                		 {  
                $aa=$obj->Bulk_upload_exam($exam_type_id,$subject,addslashes($data[0]),addslashes($data[1]),addslashes($data[2]),addslashes($data[3]),addslashes($data[4]),addslashes($data[5]),$data[6]);
                
                }
	         }
	         
	         //$us=$obj->updateexamsub($aa,$exam_type_id,$subject);
	          echo ("<script LANGUAGE='JavaScript'>
          window.alert('Uploaded');
          window.location.href='bulk_upload_practis_exam';
       </script>");
		 }
		 else {
		     
		     	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Not Upload');
          window.location.href='bulk_upload_practis_exam';
       </script>");

		 }

