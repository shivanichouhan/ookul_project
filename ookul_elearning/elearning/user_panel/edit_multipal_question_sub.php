<?php
include"../include/database.php";
$obj=new database();



$id=$_POST['id'];
$class_id=$_POST['class_id'];
$subject=$_POST['subject'];
$chapter=$_POST['chapter'];
$topic=$_POST['topic'];
 $question=$_POST['question'];

  $option1=$_POST['option1'];
 $option2=$_POST['option2'];
 $option3=$_POST['option3'];
 $option4=$_POST['option4'];
 $answer=$_POST['answer'];

$path="upload/";
 if($_FILES['question_image']['name']=="") { $img=$_POST['limg']; } else { $img=$_FILES['question_image']['name']; move_uploaded_file($_FILES['question_image']['tmp_name'],$path.$img); }
$path1="upload/";
 if($_FILES['option_img1']['name']=="") { $img1=$_POST['limg1']; } else { $img1=$_FILES['option_img1']['name']; move_uploaded_file($_FILES['option_img1']['tmp_name'],$path1.$img1); }
$path2="upload/";
 if($_FILES['option_img12']['name']=="") { $img2=$_POST['limg2']; } else { $img2=$_FILES['option_img12']['name']; move_uploaded_file($_FILES['option_img12']['tmp_name'],$path2.$img2); }
$path3="upload/";
 if($_FILES['option_img3']['name']=="") { $img3=$_POST['limg3']; } else { $img3=$_FILES['option_img3']['name']; move_uploaded_file($_FILES['option_img3']['tmp_name'],$path3.$img3); }
$path4="upload/";
 if($_FILES['option_img4']['name']=="") { $img4=$_POST['limg4']; } else { $img4=$_FILES['option_img4']['name']; move_uploaded_file($_FILES['option_img4']['tmp_name'],$path4.$img4); }


$rs=$obj->updatequestion($class_id,$subject,$topic,$chapter,$question,$option1,$option2,$option3,$option4,$img,$img1,$img2,$img3,$img4,$answer,$id);
if($rs)
{
//	$_SESSION['msg']=" Update Success Full";
	//header("location:mlutipal_question_list.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='mlutipal_question_list.php';
       </script>");
}
else
{
//	$_SESSION['msg']=" Not Update";
	//header("location:mlutipal_question_list.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('');
          window.location.href='mlutipal_question_list.php';
       </script>");
}
?>