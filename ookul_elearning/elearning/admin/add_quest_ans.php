<?php include"header.php";
include"menu.php";
 ?>
<!--<script src="https://cdn.ckeditor.com/4.14.0/standard-all/ckeditor.js"></script>-->
<script src="https://app.bongosikha.com/admin/assets/plugins/ckeditor/ckeditor/ckeditor.js"></script>
  <script src="https://app.bongosikha.com/admin/assets/plugins/summernote/summernote.min.js" type="text/javascript"></script>
 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="header-title">
                                <h1> Add Question And Answer </h1>
                                <small>Online Question & Answer<a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="<?php echo $base1; ?>user_multiple_question_list"> Question & Answer List</a></li>
                                    <li class="active"> Online Practise Question</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Online Practise Question Answer</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                    <form data-toggle="validator" action="exam_questandans_sub.php"  enctype="multipart/form-data" method="post">
											
											
											
									<div class="form-group">
									<label for="inputName" class="control-label">Package Name</label>
									
									<select class="form-control" id="exampleSelect1" name="exam_type_id" onChange="msubject(this.value)" >
												 <option value="">--Package Type--</option>
												<?php
													$table='package';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['title'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
										</div>
										
											<div class="form-group">
									<label for="inputName" class="control-label">Exam</label>
									
									<select class="form-control" id="sub" name="subject" >
												 <option value="">Exam Name</option>
										
                                                </select>
										</div>	
										
										
										<div class="form-group">
									<label for="inputName" class="control-label">Subject Name</label>
									
									<select class="form-control" id="exampleSelect1" name="subject_id" >
												 <option value="">--Subject Name--</option>
												<?php
													$table='add_subject_exam';
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
     <label for="inputName" class="control-label">Question</label>
     <textarea id="editor1" name="question"></textarea>
        <!--<input type="text" class="form-control" id="inputName" name="question" placeholder="question" required>-->
</div>
<div class="form-group">
     <label for="inputName" class="control-label">Question Image</label>
        <input type="file" class="form-control" id="inputName" name="question_image" placeholder="question" >
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(1)</label>
         <textarea id="editor2" name="option1"></textarea>

    <!--<input type="text" class="form-control" id="inputName" name="option1" placeholder="option 1" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(1) Image</label>
    <input type="file" class="form-control" id="inputName" name="option_img1" placeholder="option 1" >
</div>

<div class="form-group">
    <label for="inputName" class="control-label">option(2)</label>
    <textarea id="editor3" name="option2"></textarea>
    <!--<input type="text" class="form-control" id="inputName" name="option2" placeholder="option 2" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(2) Image</label>
    <input type="file" class="form-control" id="inputName" name="option_img12" placeholder="option 2" >
</div>

<div class="form-group">
    <label for="inputName" class="control-label">option(3)</label>
        <textarea id="editor4" name="option3"></textarea>

    <!--<input type="text" class="form-control" id="inputName" name="option3" placeholder="option 3" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(3) Image</label>
    <input type="file" class="form-control" id="inputName" name="option_img3" placeholder="option 3" >
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(4)</label>
       <textarea id="editor5" name="option4"></textarea>
    <!--<input type="text" class="form-control" id="inputName" name="option4" placeholder="option 4" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(4) Image</label>
    <input type="file" class="form-control" id="inputName" name="option_img4" placeholder="option 4" >
</div>
<div class="form-group">
    <label for="inputName" class="control-label">Solution</label>
           <textarea id="editor6" name="solution"></textarea>

    <!--<input type="text" class="form-control" id="inputName" name="soluction" placeholder="soluction" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">Solution Image</label>
    <input type="file" class="form-control" id="inputName" name="solution1" placeholder="soluction_img" >
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

											 
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 
				</div> 
<script>
 function qimage(a){
				 //alert(a);
				 $("#mcqimage").load("gove_mcq_image_new.php?id="+a);
				  }
</script>
		  	<script>

				 function msubject(a)
				 {
				          var http=new XMLHttpRequest();
						http.onreadystatechange=function()
						{	
						if(http.readyState==4 && http.status==200)
						{
					 	document.getElementById("sub").innerHTML=http.responseText;
						}
						//alert(http.responseText);
						}
						
						http.open("GET","questandansubajax.php?id="+a,true);
						http.send();
				 }
				  </script>
				  



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
        <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote2').summernote({
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
                $('#summernote3').summernote({
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
                $('#summernote4').summernote({
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
                $('#summernote5').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>
        
        
<!--new text editor-->

	  <script>
    (function() {
      var mathElements = [
        'math',
        'maction',
        'maligngroup',
        'malignmark',
        'menclose',
        'merror',
        'mfenced',
        'mfrac',
        'mglyph',
        'mi',
        'mlabeledtr',
        'mlongdiv',
        'mmultiscripts',
        'mn',
        'mo',
        'mover',
        'mpadded',
        'mphantom',
        'mroot',
        'mrow',
        'ms',
        'mscarries',
        'mscarry',
        'msgroup',
        'msline',
        'mspace',
        'msqrt',
        'msrow',
        'mstack',
        'mstyle',
        'msub',
        'msup',
        'msubsup',
        'mtable',
        'mtd',
        'mtext',
        'mtr',
        'munder',
        'munderover',
        'semantics',
        'annotation',
        'annotation-xml'
      ];

      CKEDITOR.plugins.addExternal('ckeditor_wiris', 'https://app.bongosikha.com/admin/assets/plugins/ckeditor/ckeditor/plugins/ckeditor_wiris/', 'plugin.js');
      CKEDITOR.replace('editor1', {
        extraPlugins: 'ckeditor_wiris',
        // For now, MathType is incompatible with CKEditor file upload plugins.
        removePlugins: 'uploadimage,uploadwidget,uploadfile,filetools,filebrowser',
        height: 320,
        // Update the ACF configuration with MathML syntax.
        extraAllowedContent: mathElements.join(' ') + '(*)[*]{*};img[data-mathml,data-custom-editor,role](Wirisformula)'
      });
    }());
  </script>
  	  <script>
    (function() {
      var mathElements = [
        'math',
        'maction',
        'maligngroup',
        'malignmark',
        'menclose',
        'merror',
        'mfenced',
        'mfrac',
        'mglyph',
        'mi',
        'mlabeledtr',
        'mlongdiv',
        'mmultiscripts',
        'mn',
        'mo',
        'mover',
        'mpadded',
        'mphantom',
        'mroot',
        'mrow',
        'ms',
        'mscarries',
        'mscarry',
        'msgroup',
        'msline',
        'mspace',
        'msqrt',
        'msrow',
        'mstack',
        'mstyle',
        'msub',
        'msup',
        'msubsup',
        'mtable',
        'mtd',
        'mtext',
        'mtr',
        'munder',
        'munderover',
        'semantics',
        'annotation',
        'annotation-xml'
      ];

      CKEDITOR.plugins.addExternal('ckeditor_wiris', 'https://app.bongosikha.com/admin/assets/plugins/ckeditor/ckeditor/plugins/ckeditor_wiris/', 'plugin.js');

      CKEDITOR.replace('editor2', {
        extraPlugins: 'ckeditor_wiris',
        // For now, MathType is incompatible with CKEditor file upload plugins.
        removePlugins: 'uploadimage,uploadwidget,uploadfile,filetools,filebrowser',
        height: 320,
        // Update the ACF configuration with MathML syntax.
        extraAllowedContent: mathElements.join(' ') + '(*)[*]{*};img[data-mathml,data-custom-editor,role](Wirisformula)'
      });
    }());
  </script>
  
  	  <script>
    (function() {
      var mathElements = [
        'math',
        'maction',
        'maligngroup',
        'malignmark',
        'menclose',
        'merror',
        'mfenced',
        'mfrac',
        'mglyph',
        'mi',
        'mlabeledtr',
        'mlongdiv',
        'mmultiscripts',
        'mn',
        'mo',
        'mover',
        'mpadded',
        'mphantom',
        'mroot',
        'mrow',
        'ms',
        'mscarries',
        'mscarry',
        'msgroup',
        'msline',
        'mspace',
        'msqrt',
        'msrow',
        'mstack',
        'mstyle',
        'msub',
        'msup',
        'msubsup',
        'mtable',
        'mtd',
        'mtext',
        'mtr',
        'munder',
        'munderover',
        'semantics',
        'annotation',
        'annotation-xml'
      ];

      CKEDITOR.plugins.addExternal('ckeditor_wiris', 'https://app.bongosikha.com/admin/assets/plugins/ckeditor/ckeditor/plugins/ckeditor_wiris/', 'plugin.js');

      CKEDITOR.replace('editor3', {
        extraPlugins: 'ckeditor_wiris',
        // For now, MathType is incompatible with CKEditor file upload plugins.
        removePlugins: 'uploadimage,uploadwidget,uploadfile,filetools,filebrowser',
        height: 320,
        // Update the ACF configuration with MathML syntax.
        extraAllowedContent: mathElements.join(' ') + '(*)[*]{*};img[data-mathml,data-custom-editor,role](Wirisformula)'
      });
    }());
  </script>
  	  <script>
    (function() {
      var mathElements = [
        'math',
        'maction',
        'maligngroup',
        'malignmark',
        'menclose',
        'merror',
        'mfenced',
        'mfrac',
        'mglyph',
        'mi',
        'mlabeledtr',
        'mlongdiv',
        'mmultiscripts',
        'mn',
        'mo',
        'mover',
        'mpadded',
        'mphantom',
        'mroot',
        'mrow',
        'ms',
        'mscarries',
        'mscarry',
        'msgroup',
        'msline',
        'mspace',
        'msqrt',
        'msrow',
        'mstack',
        'mstyle',
        'msub',
        'msup',
        'msubsup',
        'mtable',
        'mtd',
        'mtext',
        'mtr',
        'munder',
        'munderover',
        'semantics',
        'annotation',
        'annotation-xml'
      ];

      CKEDITOR.plugins.addExternal('ckeditor_wiris', 'https://app.bongosikha.com/admin/assets/plugins/ckeditor/ckeditor/plugins/ckeditor_wiris/', 'plugin.js');

      CKEDITOR.replace('editor4', {
        extraPlugins: 'ckeditor_wiris',
        // For now, MathType is incompatible with CKEditor file upload plugins.
        removePlugins: 'uploadimage,uploadwidget,uploadfile,filetools,filebrowser',
        height: 320,
        // Update the ACF configuration with MathML syntax.
        extraAllowedContent: mathElements.join(' ') + '(*)[*]{*};img[data-mathml,data-custom-editor,role](Wirisformula)'
      });
    }());
  </script>
  	  <script>
    (function() {
      var mathElements = [
        'math',
        'maction',
        'maligngroup',
        'malignmark',
        'menclose',
        'merror',
        'mfenced',
        'mfrac',
        'mglyph',
        'mi',
        'mlabeledtr',
        'mlongdiv',
        'mmultiscripts',
        'mn',
        'mo',
        'mover',
        'mpadded',
        'mphantom',
        'mroot',
        'mrow',
        'ms',
        'mscarries',
        'mscarry',
        'msgroup',
        'msline',
        'mspace',
        'msqrt',
        'msrow',
        'mstack',
        'mstyle',
        'msub',
        'msup',
        'msubsup',
        'mtable',
        'mtd',
        'mtext',
        'mtr',
        'munder',
        'munderover',
        'semantics',
        'annotation',
        'annotation-xml'
      ];

      CKEDITOR.plugins.addExternal('ckeditor_wiris', 'https://app.bongosikha.com/admin/assets/plugins/ckeditor/ckeditor/plugins/ckeditor_wiris/', 'plugin.js');

      CKEDITOR.replace('editor5', {
        extraPlugins: 'ckeditor_wiris',
        // For now, MathType is incompatible with CKEditor file upload plugins.
        removePlugins: 'uploadimage,uploadwidget,uploadfile,filetools,filebrowser',
        height: 320,
        // Update the ACF configuration with MathML syntax.
        extraAllowedContent: mathElements.join(' ') + '(*)[*]{*};img[data-mathml,data-custom-editor,role](Wirisformula)'
      });
    }());
  </script>
  	  <script>
    (function() {
      var mathElements = [
        'math',
        'maction',
        'maligngroup',
        'malignmark',
        'menclose',
        'merror',
        'mfenced',
        'mfrac',
        'mglyph',
        'mi',
        'mlabeledtr',
        'mlongdiv',
        'mmultiscripts',
        'mn',
        'mo',
        'mover',
        'mpadded',
        'mphantom',
        'mroot',
        'mrow',
        'ms',
        'mscarries',
        'mscarry',
        'msgroup',
        'msline',
        'mspace',
        'msqrt',
        'msrow',
        'mstack',
        'mstyle',
        'msub',
        'msup',
        'msubsup',
        'mtable',
        'mtd',
        'mtext',
        'mtr',
        'munder',
        'munderover',
        'semantics',
        'annotation',
        'annotation-xml'
      ];

      CKEDITOR.plugins.addExternal('ckeditor_wiris', 'https://app.bongosikha.com/admin/assets/plugins/ckeditor/ckeditor/plugins/ckeditor_wiris/', 'plugin.js');

      CKEDITOR.replace('editor6', {
        extraPlugins: 'ckeditor_wiris',
        // For now, MathType is incompatible with CKEditor file upload plugins.
        removePlugins: 'uploadimage,uploadwidget,uploadfile,filetools,filebrowser',
        height: 320,
        // Update the ACF configuration with MathML syntax.
        extraAllowedContent: mathElements.join(' ') + '(*)[*]{*};img[data-mathml,data-custom-editor,role](Wirisformula)'
      });
    }());
  </script>
       <?php include"footer.php"; ?>