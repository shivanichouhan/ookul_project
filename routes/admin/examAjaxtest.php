<?php
include_once("../include/database.php");
$obj= new database();

$id=$_GET['id'];
if($id=='1')
{
?>


<div class="form-group">
<label for="inputName" class="control-label">Subject Name</label>
<!--<input type="text" class="form-control" id="subject" name="subject" placeholder="subject" required>-->
<select class="form-control" id="exampleSelect1" name="subject[]" multiple >
<option value="">--Subject--</option>
<?php
$table='gov_subject';
$rs=$obj->fetchAllDetail($table);
if($rs)
{	$i=0;
while($row=mysqli_fetch_assoc($rs))
{	$i++;

?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['subject'];  ?></option>
<?php } 
}
?>
</select>
</div>

<div class="form-group">
<label for="inputName" class="control-label">Time duration </label>
<input type="text" class="form-control"  name="time_dur" placeholder="Time duration" required>
</div>
<div class="form-group">
<label for="inputName" class="control-label">Start time</label>
<input type="time" name="start_time" class="form-control" placeholder=" start Time ">
</div>
<div class="form-group">
<label for="inputName" class="control-label">End time</label>
<input type="time" name="end_time" class="form-control" placeholder=" End Time ">
</div>
<div class="form-group">
<label for="inputName" class="control-label">Number Of Question</label>
<input type="text" name="numbers_of_que" class="form-control" placeholder="numbers_of_que">
</div>

<div class="form-group">
<label for="inputName" class="control-label">Total Marks</label>
<input type="text" name="total_marks" class="form-control" placeholder="Total Marks">
</div>
<div class="form-group">
<label for="inputName" class="control-label">Each Question Mark(+)</label>
<input type="text" name="q_marks_pluse" class="form-control" placeholder="Each Question marks">
</div>

<div class="form-group">
<label for="inputName" class="control-label">Each Question Mark(-) </label>
<input type="tetx" name="q_mark_min" class="form-control" placeholder="Each Question (-) marking">
</div>
<div class="form-group">
<label for="inputName" class="control-label">Each Set Question Mark (Comma Separated (,)) </label>
<input type="tetx" name="each_set_question" class="form-control" placeholder="Each Set Question Mark (10,20)">
</div>
<?php } if($id=='2') {  ?>

<div class="form-group">
<label for="inputName" class="control-label">Time duration </label>
<input type="text" class="form-control"  name="time_dur" placeholder="Time duration" required>
</div>
<div class="form-group">
<label for="inputName" class="control-label">Start time</label>
<input type="time" name="start_time" class="form-control" placeholder=" start Time ">
</div>
<div class="form-group">
<label for="inputName" class="control-label">End time</label>
<input type="time" name="end_time" class="form-control" placeholder=" End Time ">
</div>
<div class="form-group">
<label for="inputName" class="control-label">Number Of Question</label>
<input type="text" name="numbers_of_que" class="form-control" placeholder="numbers_of_que">
</div>

<div class="form-group">
<label for="inputName" class="control-label">Total Marks</label>
<input type="text" name="total_marks" class="form-control" placeholder="Total Marks">
</div>
<div class="form-group">
<label for="inputName" class="control-label">Each Question Mark(+)</label>
<input type="text" name="q_marks_pluse" class="form-control" placeholder="Each Question marks">
</div>

<div class="form-group">
<label for="inputName" class="control-label">Each Question Mark(-) </label>
<input type="tetx" name="q_mark_min" class="form-control" placeholder="Each Question (-) marking">
</div>
<?php } ?>