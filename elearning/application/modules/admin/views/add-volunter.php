<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
			<form class="form-horizontal" method="post" action="<?php echo  base_url('admin/editvolunteer'); ?>">		
				<div class="form-group">
				
					<div class="col-sm-8">
					    <textarea id="page_desc" name="page_desc"  rows="10" cols="80"><?php echo $page[
					    	'page_desc']; ?></textarea> 
						<?php echo form_error('page_desc', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>					
				<div class="col-sm-offset-2">					
                <input type="hidden" name="page_id" value="6">
                <input type="submit" name="submit" value="Edit" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>
	



