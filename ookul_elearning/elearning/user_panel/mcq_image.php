<?php
include"../include/database.php";
$obj=new database();

    
  if(@$_GET['id']=='1')
  {
   ?>
<div class="form-group">
     <label for="inputName" class="control-label">Question</label>
        <input type="text" class="form-control" id="inputName" name="question" placeholder="question" required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(1)</label>
    <input type="text" class="form-control" id="inputName" name="option1" placeholder="option 1" required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(2)</label>
    <input type="text" class="form-control" id="inputName" name="option2" placeholder="option 2" required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(3)</label>
    <input type="text" class="form-control" id="inputName" name="option3" placeholder="option 3" required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(4)</label>
    <input type="text" class="form-control" id="inputName" name="option4" placeholder="option 4" required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">Answer</label>
		<select class="form-control" id="exampleSelect1" name="answer" >
		<option value="">Answer</option>
		<option value="1">Question1 </option>
		<option value="2">Question2</option>
		<option value="3">Question3</option>
		<option value="4">Question4</option>
    </select>
</div>
      <?php }elseif(@$_GET['id']=='2')
	  { ?>
	  
		  
<div class="form-group">
     <label for="inputName" class="control-label">Question (Image Size 100*150)</label>
        <input type="file" class="form-control" id="inputName" name="question_image" placeholder="question" required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(1) (Image Size 100*150)</label>
    <input type="file" class="form-control" id="inputName" name="option_img1" placeholder="option 1" required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(2) (Image Size 100*150)</label>
    <input type="file" class="form-control" id="inputName" name="option_img12" placeholder="option 2" required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(3) (Image Size 100*150)</label>
    <input type="file" class="form-control" id="inputName" name="option_img3" placeholder="option 3" required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(4) (Image Size 100*150)</label>
    <input type="file" class="form-control" id="inputName" name="option_img4" placeholder="option 4" required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">Answer</label>
		<select class="form-control" id="exampleSelect1" name="answer" >
		<option value="">Answer</option>
		<option value="1">Question1 </option>
		<option value="2">Question2</option>
		<option value="3">Question3</option>
		<option value="4">Question4</option>
    </select>
</div>
	  <?php }	else {
		  
	  }  ?>
	  