  <option value=""> -- select --</option>
 <?php
include"../include/database.php";
$obj=new database();

   $row=$obj->fetchDetailByIdByStatus($_GET['id'],"block","city","asign_status",0);
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option value="<?php echo $rs['id'];?>"><?php echo $rs['block'];?></option>
   <?php }}?>