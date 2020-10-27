 <option value=""> -- select --</option>
 <?php
include"../include/database.php";
$obj= new database();

   $row=$obj->fetchAllDetailBYId($_GET['id'],"exam_names","package");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option value="<?php echo $rs['id'];?>"><?php echo $rs['category'];?></option>
   <?php }}?>