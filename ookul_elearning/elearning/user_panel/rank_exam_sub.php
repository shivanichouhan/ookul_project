<?php
include"../include/database.php";
$obj=new database();



$exam_type_id=$_POST['exam_type_id'];


$examsinfo=$obj->fetchById($exam_type_id,"gove_exam","id");



$exame_type=$examsinfo['exam_type'];


 $question=addslashes($_POST['question']);
 $option1=addslashes($_POST['option1']);
 $option2=addslashes($_POST['option2']);
 $option3=addslashes($_POST['option3']);
 $option4=addslashes($_POST['option4']);
  $solution=addslashes($_POST['solution']);

 $answer=$_POST['answer'];
 
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
$solution1=$_FILES['solution1']['name']; move_uploaded_file($_FILES['solution1']['tmp_name'],$path6.$solution1);


$rs=$obj->goverment_question_rank($exam_type_id,$exame_type,$question,$option1,$option2,$option3,$option4,$solution,$question_image,$option_img1,$option_img12,$option_img3,$option_img4,$solution1,$answer);
if($rs)
{
	
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('Insert Success Full');
          window.location.href='rank_exam_list.php';
       </script>");
}
else
{
	
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Not Insert');
          window.location.href='rank_exam_list.php';
       </script>");
}
?>