 <?php
include"../include/database.php";
$obj= new database();

$id=$_GET['id'];
if($id==1)
{
    ?>
    <div class="col-md-12" > 
										    <div class="col-md-6" >
										 <select class="form-control" onChange="asub(this.value);" name="agent_type">
										<option value="">Assign Type</option>
										<option <?php if($id=='1') {  ?> selected='selected' <?php } ?>  value="1">Block Supervisor</option>
										<option value="2">PRO</option>	</select>  </div>
										    <div class="col-md-6" > 
                                                <select class="form-control" onChange="view(this.value,'1');" name="agent">
										<option value="0">Name | Block Supervisor</option>
										
                                        <?php
                                                    $table='subagent';
                                                    $rs=$obj->fetchAllDetail($table);
                                                    if($rs)
                                                    {   $i=0;
                                                        while($row=mysqli_fetch_assoc($rs))
                                                        {   $i++;
                                                                $ip=$obj->fetchById($row['block_id'],"block","id");
                                                            ?>
                                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> | <?php echo $ip['block']; ?></option>
                                                        <?php }} ?>
                                                    </select>
                                           </div>
                                        </div>
    <?php } 
if($id==2)
{
    ?>
        <div class="col-md-12" > 
										    <div class="col-md-6" >
										 <select class="form-control" onChange="asub(this.value);" name="agent_type">
										<option value="">Assign Type</option>
										<option value="1">Block Supervisor</option>
										<option <?php if($id=='2') {  ?> selected='selected' <?php } ?> value="2">PRO</option>	</select>  </div>
										    <div class="col-md-6" > 
                                                <select class="form-control" onChange="view(this.value,'2');" name="agent">
										<option value="0">PRO ID | Name</option>
										
                                        <?php
                                                    $table='pro_register';
                                                    $rs=$obj->fetchAllDetail($table);
                                                    if($rs)
                                                    {   $i=0;
                                                        while($row=mysqli_fetch_assoc($rs))
                                                        {   $i++;
                                                              //  $ip=$obj->fetchById($row['block_id'],"block","id");
                                                            ?>
                                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['pro_id']; ?> | <?php echo $row['name']; ?> </option>
                                                        <?php }} ?>
                                                    </select>
                                           </div>
                                        </div>

    <?php } ?>