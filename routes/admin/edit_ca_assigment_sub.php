<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];
$subject=$_POST['subject'];
$topic=$_POST['topic'];
$type=$_POST['type'];


  $question=addslashes($_POST['question']); 

  $option1=addslashes($_POST['option1']);

 $option2=addslashes($_POST['option2']);
 
  $option3=addslashes($_POST['option3']);

 $option4=addslashes($_POST['option4']);
 
 $answer=$_POST['answer'];
 
 $soluction=addslashes($_POST['soluction']);
 
 $path1="gov_upload/";
$question_image=$_FILES['question_image']['name']; move_uploaded_file($_FILES['question_image']['tmp_name'],$path1.$question_image);

$path2="gov_upload/";
$option_img1=$_FILES['option_img1']['name']; move_uploaded_file($_FILES['option_img1']['tmp_name'],$path2.$option_img1);

$path3="gov_upload/";
$option_img12=$_FILES['option_img12']['name']; move_uploaded_file($_FILES['option_img12']['tmp_name'],$path3.$option_img12);

$path4="gov_upload/";
$option_img3=$_FILES['option_img3']['name']; move_uploaded_file($_FILES['option_img3']['tmp_name'],$path4.$option_img3);

$path5="gov_upload/";
$option_img4=$_FILES['option_img4']['name']; move_uploaded_file($_FILES['option_img4']['tmp_name'],$path5.$option_img4);

$path6="gov_upload/";
$soluction_img=$_FILES['soluction_img']['name']; move_uploaded_file($_FILES['soluction_img']['tmp_name'],$path6.$soluction_img);


$rs=$obj->updateca_assigment($subject,$topic,$type,$question,$option1,$option2,$option3,$option4,$soluction,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$soluction_img,$answer,$id);
if($rs)
{
	
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('Insert Success Full');
          window.location.href='ca_assigement';
       </script>");
}
else
{
	
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Not Insert');
          window.location.href='ca_assigement';
       </script>");
}

?>