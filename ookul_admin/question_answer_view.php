<?php
include"../include/database.php";
$obj=new database();

    
  if(@$_GET['id']=='1')
  {
   ?>

<div class="form-group">
    <label for="inputName" class="control-label">Question</label>
	<textarea id="summernote1" name="question" required></textarea>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">Answer</label>
    <textarea id="summernote" name="answer" required></textarea>
</div>

				   <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>
		 <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote1').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>

											
		
  <?php } elseif(@$_GET['id']=='2')
  { ?>
	  <div class="form-group">
	  <label for="inputName" class="control-label">PDF Upload</label>
			<input type="file" class="form-control" name="pdf11">
	  </div>
 <?php  } else {  }  ?>
		  