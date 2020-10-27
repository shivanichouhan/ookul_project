<?php include"header.php";
include"menu.php"; ?>

<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex, nofollow">
<!--<script src="https://cdn.ckeditor.com/4.14.0/standard-all/ckeditor.js"></script>-->
<script src="http://app.bongosikha.com/admin/assets/plugins/ckeditor/ckeditor/ckeditor.js"></script>
  
 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
</head>

          
          
            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                               <i class="ti-layout-width-default"></i> 
                            </div>
                            <div class="header-title">
                                <h1> Multipal Question And Answer </h1>
                                <small>Multipal Question <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="mlutipal_question_list.php"> Multipal Question List</a></li>
                                    <li class="active"> Multipal Question</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Multipal Question Answer</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form  action="multipal_question_sub.php" method="post" enctype="multipart/form-data">
											
											<div class="form-group">
                                                <label for="exampleSelect1">Class</label>
												
                                                <select class="form-control" id="exampleSelect1" name="class_id"  onChange="clas(this.value);">
												 <option value="">--Class--</option>
												<?php
													$table='class';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['class'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
														
                                            </div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Subject</label>
													<select class="form-control" data-placeholder="Choose a subject..." id="subject" name="subject"  onChange="subj(this.value);">
														 <option value=""> -- Subject --</option>
															</select>
                                               
											</div>					
												<div class="form-group">
                                                <label for="inputName" class="control-label">Chapter</label>
                                                <select class="form-control" data-placeholder="Choose a subject..." name="chapter" id="chapter"  onChange="chap(this.value);" >
														 <option value=""> -- Chapter --</option>
															</select>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Topic</label>
                                                <select class="form-control" data-placeholder="Choose a subject..." name="topic" id="topic"   >
														 <option value=""> -- Topic --</option>
															</select>
											</div>
										
										
										<!--	<div class="form-group">
                                                <label for="exampleSelect1">Type</label>
												
                                                <select class="form-control" id="exampleSelect1" name="type"  onChange="qimage(this.value);">
												 <option value="">--Type--</option>
												<option value="1">Text</option>
												<option value="2">Image</option>
                                                </select>
														
                                            </div>-->
                                            
  <div class="form-group">
     <label for="inputName" class="control-label">Question (Image Size 100*150)</label>
        <input type="file" class="form-control" id="inputName" name="question_image" placeholder="question" >
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(1) (Image Size 100*150)</label>
    <input type="file" class="form-control" id="inputName" name="option_img1" placeholder="option 1" >
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(2) (Image Size 100*150)</label>
    <input type="file" class="form-control" id="inputName" name="option_img12" placeholder="option 2" >
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(3) (Image Size 100*150)</label>
    <input type="file" class="form-control" id="inputName" name="option_img3" placeholder="option 3" >
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(4) (Image Size 100*150)</label>
    <input type="file" class="form-control" id="inputName" name="option_img4" placeholder="option 4" >
</div>

<div class="form-group">
     <label for="inputName" class="control-label">Question</label>
        <textarea class="form-control" id="editor1" name="question" rows="10"></textarea>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(1)</label>
    <textarea class="form-control" id="editor2" name="option1" placeholder="option 1" rows="10"></textarea>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(2)</label>
    <textarea class="form-control" id="editor3" name="option2" placeholder="option 2" rows="10"></textarea>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(3)</label>
    <textarea class="form-control" id="editor4" name="option3" placeholder="option 3" rows="10"></textarea>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(4)</label>
    <textarea class="form-control" id="editor5" name="option4" placeholder="option 4" rows="10"></textarea>
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
                                            
                                            
                                            
                                            
                                            
                                            
                                            
											<div id="mcqimage">
											</div> 
                                       
                                       
                                       
                                       
                                            <div class="form-group"> 
                                                <button type="submit" class="btn btn-primary" style="    background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.
			-wrapper -->
            <!-- start footer -->
            <script>
 function qimage(a){
				 //alert(a);
				 $("#mcqimage").load("mcq_image.php?id="+a);
				  }
</script>
		  					 <script>
 function clas(a){
				 //alert(a);
				 $("#subject").load("subjectAjax.php?id="+a);
				  }
				  </script>
				  	 <script>
 function subj(a){
				// alert(a);
				 $("#chapter").load("chapterAjax.php?id="+a);
				  }
				  </script>
				  <script>
 function chap(a){
				// alert(a);
				 $("#topic").load("topicAjax25.php?id="+a);
				  }
				  
				  
				  </script>
				  <!--<script src="https://app.bongosikha.com/admin/assets/plugins/summernote/summernote.min.js" type="text/javascript"></script>-->

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

      CKEDITOR.plugins.addExternal('ckeditor_wiris', 'http://app.bongosikha.com/admin/assets/plugins/ckeditor/ckeditor/plugins/ckeditor_wiris/', 'plugin.js');

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

      CKEDITOR.plugins.addExternal('ckeditor_wiris', 'https://ckeditor.com/docs/ckeditor4/4.14.0/examples/assets/plugins/ckeditor_wiris/', 'plugin.js');

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

      CKEDITOR.plugins.addExternal('ckeditor_wiris', 'https://ckeditor.com/docs/ckeditor4/4.14.0/examples/assets/plugins/ckeditor_wiris/', 'plugin.js');

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

      CKEDITOR.plugins.addExternal('ckeditor_wiris', 'https://ckeditor.com/docs/ckeditor4/4.14.0/examples/assets/plugins/ckeditor_wiris/', 'plugin.js');

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

      CKEDITOR.plugins.addExternal('ckeditor_wiris', 'https://ckeditor.com/docs/ckeditor4/4.14.0/examples/assets/plugins/ckeditor_wiris/', 'plugin.js');

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
       
        

      