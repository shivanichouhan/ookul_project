<?php
include"../include/database.php";
$obj=new database();

    
  if(@$_GET['id']=='1')
  {
   ?>
           <link href="https://app.bongosikha.com/admin/assets/plugins/summernote/summernote.css" rel="stylesheet" type="text/css"/>

<div class="form-group">
     <label for="inputName" class="control-label">Question</label>
     <textarea id="summernote" name="question"></textarea>
        <!--<input type="text" class="form-control" id="inputName" name="question" placeholder="question" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(1)</label>
         <textarea id="summernote1" name="option1"></textarea>

    <!--<input type="text" class="form-control" id="inputName" name="option1" placeholder="option 1" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(2)</label>
    <textarea id="summernote2" name="option2"></textarea>
    <!--<input type="text" class="form-control" id="inputName" name="option2" placeholder="option 2" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(3)</label>
        <textarea id="summernote3" name="option3"></textarea>

    <!--<input type="text" class="form-control" id="inputName" name="option3" placeholder="option 3" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(4)</label>
       <textarea id="summernote4" name="option4"></textarea>
    <!--<input type="text" class="form-control" id="inputName" name="option4" placeholder="option 4" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">Solution</label>
           <textarea id="summernote5" name="soluction"></textarea>

    <!--<input type="text" class="form-control" id="inputName" name="soluction" placeholder="soluction" required>-->
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
	          