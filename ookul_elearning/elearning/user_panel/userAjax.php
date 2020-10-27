  <option value=""> -- select --</option>
 <?php
include"../include/database.php";
$obj= new database();

   $row=$obj->fetchDetailById($_GET['id'],"user_register","id");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option selected="selected"   value="<?php echo $rs['id'];?>"><?php echo $rs['name'];?></option>
   <?php }}?>