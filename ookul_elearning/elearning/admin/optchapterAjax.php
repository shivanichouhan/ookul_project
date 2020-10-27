  <option value=""> -- select --</option>
 <?php
include"../include/database.php";
$obj= new database();

   $row=$obj->fetchDetailById($_GET['id'],"optional_chapter","opt_sub_id");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option value="<?php echo $rs['id'];?>"><?php echo $rs['chapter'];?></option>
   <?php }}?>