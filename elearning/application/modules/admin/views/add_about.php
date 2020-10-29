<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
			<form class="form-horizontal" method="post" action="<?php echo  base_url('admin/about'); ?>" enctype="multipart/form-data" autocomplete="off" >		
				<div class="form-group">
				
					<div class="col-sm-8">
					    <textarea id="description" name="description"  rows="10" cols="80"><?php echo $page[
					    	'description']; ?></textarea> 
						<?php echo form_error('description', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>					
				<div class="col-sm-offset-2">					
                <input type="hidden" name="id" value="3">
                <input type="submit" name="submit" value="Edit" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>

<script src="<?= base_url('assets/js/ckeditor/ckeditor.js'); ?>"></script>
<script>
CKEDITOR.editorConfig = function( config ) {
	config.language = 'es';
	config.uiColor = '#F7B42C';
	config.height = 300;
	config.toolbarCanCollapse = true;
};
CKEDITOR.replace('description',{
	width: "700px",
        height: "400px"
     }
);
</script>	



