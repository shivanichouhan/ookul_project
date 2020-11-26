
 <?php
include"../include/database.php";
$obj= new database();

//$agent_type=$_GET['id'];
 $agent=$_GET['agent'];
 $type=$_GET['type'];
if($type=='1')
{
?>
<div class="row" style="margin-bottom:35px;">
    <div id="coup1">
        <div class="col-md-12" > 
            <div class="col-md-6" >
                <select class="form-control" onChange="asub(this.value);" name="agent_type">
                        <option value="">Assign Type</option>
                        <option value="1">Block Supervisor</option>
                        <option value="2">PRO</option>	
                </select> 
            </div>
            <div class="col-md-6" > </div>
        </div>
    </div>
</br></br></br></br>
<div class="col-md-12" >
    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th><input type="hidden"  class="form-control" value="<?php echo $agent; ?>" name="agent_id" ></th>
            <th> Name </th>
            <th>Block </th>
            <th>Coupan</th>
            <th>Payment Type</th>
            <th>Class</th>
            <th>User Name</th>
            <!--<th>Pro Assign</th>-->
            <th>Status</th>	
        </tr>
        </thead>
        <tbody>
        <?php
        
        $rs=$obj->fetchDetailByIdByStatusByType($agent,"asign_coupan","agent","status",1,"agent_type",$type);
        if($rs)
        {	$i=0;
        while($row=mysqli_fetch_assoc($rs))
        {	$i++;
        
        ?><?php 
        
        $us="";
        $u=explode(",",$row['coupan']);
        foreach($u as $uu =>$value)
        {
        $code12=$obj->fetchById($u[$uu],"coupan_class","id");
        $user12=$obj->fetchById($code12['code'],"class_order","coupan_code");
        //$use=$obj->fetchById($user12['user_id'],"user_register","id");
        
        if($code12['class']=='0')
        {
        $use=$obj->fetchById($user12['user_id'],"user_register_goverment","id");
        }
        else
        {
        $use=$obj->fetchById($user12['user_id'],"user_register","id");
        }
        
        
        ?>

<tr><?php if($u[$uu]=='on'){

} else { ?>
<td><?php if($user12['status']==1) 
{ }else{ if($code12['pro_asign']==1){ } else{?><input value="<?php echo $code12['id']; ?>" class="checkbox" type="checkbox" name="coupan[]"><?php } } ?></td>	<td>
<?php
$op3=$obj->fetchById($agent,"subagent","id");
echo 	$op3['name'];

?></td>

<td><?php 
$op4=$obj->fetchById($op3['block_id'],"block","id");

echo $op4['block']; ?></td>


<td><?php echo $code12['code'];


?></td>

<td><?php if($code12['ptype']==0){ echo "Full Payment"; }else{ echo "Partial Payment"; } ?></td>



<td><?php
if($code12['class']=='0')
{
echo"Government Exam";
}
else
{
$cls=$obj->fetchById($code12['class'],"class","id");
echo $cls['class']; } ?>  </td>
<td><?php echo $use['name']; ?></td>
<?php  //if($code12['pro_asign']==1){ ?> 
<?php //} ?>
<td><?php if($user12['status']==1) 
{?>
<button type="button" class="btn btn-danger">Used</button>
<?php } else { ?>
<button type="button" class="btn btn-success">Unused</button>

<?php										}?></td>
<?php }  } ?>


</tr>		


<?php 
} 		    
} ?>

</tbody>


</table>
</div>
</div>
<?php }if($type=='2')
{?>
 	<div class="row" style="margin-bottom:35px;">
       <div id="coup1">
		<div class="col-md-12" > 
		<div class="col-md-6" >
	<select class="form-control" onChange="asub(this.value);" name="agent_type">
		<option value="">Assign Type</option>
		<option value="1">Block Supervisor</option>
		<option value="2">PRO</option>	</select>  </div>
		 <div class="col-md-6" > 
         </div>
        </div>
    </div>
	 </br></br></br></br>
		<div class="col-md-12" >

<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
     <thead>
         <tr>
             <th><input type="hidden"  class="form-control" value="<?php echo $agent; ?>" name="agent_id" ></th>
				<th> Name </th>
				<th>PRO Id </th>
                <th>Coupan</th>
                <th>Payment Type</th>
                <th>Class</th>
                <th>User Name</th>
                <th>Status</th>	

            </tr>
     </thead>
    <tbody>
		<?php
			$table='asign_coupan';
			$rs=$obj->fetchDetailByIdByStatusByType($agent,$table,"agent","status",1,"agent_type",$type);
			if($rs)
			{	$i=0;
				while($row=mysqli_fetch_assoc($rs))
				{	$i++;
			
					//$code12=$obj->fetchById($row['code'],"coupan_class","coupan_code");
				//	$user12=$obj->fetchById($row['code'],"class_order","coupan_code");
						
					
					?>
                                                    
														<?php 
														
														  $us="";
				    $u=explode(",",$row['coupan']);
				    foreach($u as $uu =>$value)
				    {
				      $code12=$obj->fetchById($u[$uu],"coupan_class","id");
				        	$user12=$obj->fetchById($code12['code'],"class_order","coupan_code");
				        	if($code12['class']=='0')
				        	{
				        	    $use=$obj->fetchById($user12['user_id'],"user_register_goverment","id");
				        	}
				        	else
				        	{
						    	$use=$obj->fetchById($user12['user_id'],"user_register","id");
				        	}
		
		
		 ?>
			
			<tr><?php if($u[$uu]=='on'){
				
			} else { ?>
												<td><?php if($user12['status']==1) 
										{ }else{ if($code12['pro_asign']==1){ } else{?><input value="<?php echo $code12['id']; ?>" class="checkbox" type="checkbox" name="coupan[]"><?php } } ?></td>	<td>
														<?php
														$op3=$obj->fetchById($agent,"pro_register","id");
														echo 	$op3['name'];
													
													?></td>

													<td><?php 
													//$op4=$obj->fetchById($op3['block_id'],"block","id");

													echo $op3['pro_id']; ?></td>

			
			<td><?php echo $code12['code'];
				
				
			?></td>
			
			<td><?php if($code12['ptype']==0){ echo "Full Payment"; }else{ echo "Partial Payment"; } ?></td>
			
			<td><?php
			if($code12['class']=='0')
			{
			    echo"Government Exam";
			}
			else
			{
				$cls=$obj->fetchById($code12['class'],"class","id");
			echo $cls['class']; } ?> </td>
											<td><?php echo $use['name']; ?></td>
											<?php  //if($code12['pro_asign']==1){ ?> 
					 <?php //} ?>
										<td><?php if($user12['status']==1) 
										{?>
									<button type="button" class="btn btn-danger">Used</button>
										<?php } else { ?>
										<button type="button" class="btn btn-success">Unused</button>
								
<?php										}?></td>
					<?php }  } ?>
					
												
												</tr>		
													
                                                  
															<?php 
														} 		    
													} ?>
													
                                                </tbody>
													
                                               
                                            </table>
                                            </div>
                                            </div>
 
 <?php } ?>                                           