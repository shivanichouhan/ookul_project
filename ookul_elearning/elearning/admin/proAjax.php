  <option value=""> -- select --</option>
 <?php
include"../include/database.php";
$obj= new database();
// $_GET['id'];

if($_GET['id']=='1')
{
   $row=$obj->fetchAllDetail("subagent");
  if($row)
  {	  
  while($rs=mysqli_fetch_assoc($row))
	{
	  
	  //$rs0=$obj->fetchById($rs['city_id'],"city","id");
	  ?>
  
    <option value="<?php echo $rs['id'];?>"><?php echo $rs['name'];?></option>
   <?php 
	}
  } 
  }
  if($_GET['id']=='2')
  {
         $row=$obj->fetchAllDetail("pro_register");
  if($row)
  {	  
  while($rs=mysqli_fetch_assoc($row))
	{
	  
	  //$rs0=$obj->fetchById($rs['city_id'],"city","id");
	  ?>
  
    <option value="<?php echo $rs['id'];?>"><?php echo $rs['name'];?></option>
   <?php 
	}
  
  }
      
  }
   if($_GET['id']=='3')
  {
         $row=$obj->fetchAllDetail("pro_register");
  if($row)
  {	  
  while($rs=mysqli_fetch_assoc($row))
	{
	  
	  $rs0=$obj->fetchById($rs['block_id'],"block","id");
	  
	  $rs00=$obj->fetchById($rs0['id'],"subagent","block_id");
	  
	  ?>
  
    <option value="<?php echo $rs00['id'];?>"><?php echo $rs00['name'];?></option>
   <?php 
	}
  
  }
      
  }
  ?>
  
  