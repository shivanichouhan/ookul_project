  <option value=""> -- select --</option>
 <?php
include"../include/database.php";
$obj= new database();

   $row=$obj->fetchDetailById($_GET['id'],"gove_class","plan");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option value="<?php echo $rs['id'];?>"><?php echo $rs['level'];?></option>
   <?php }}?>