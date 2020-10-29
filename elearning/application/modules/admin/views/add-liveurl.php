<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
			<form class="form-horizontal" method="post" action="<?php echo  base_url('admin/editlivestream'); ?>" enctype="multipart/form-data">		
				<div class="form-group">
				 <label class="col-sm-2 control-label">Live Event url</label>
					<div class="col-sm-8">
					    <input type="text"  name="page_desc"  class="form-control" value="<?php echo $page[
					    	'page_desc']; ?>">
						<?php echo form_error('page_desc', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>
				<div class="form-group mb-n">
					<label class="col-sm-2 control-label label-input-lg">Image</label>
					<div class="col-sm-8">
						<input type="file" name="page_desc2" >
						 <?php if(!empty($page['page_desc2'])){ ?>
                 
                    <br/><br/>
                 <img class="img-responsive" src="<?php echo base_url('/assets/userfile/classfied/'.$page['page_desc2']); ?>" height="250px" width="200px">
                    <?php }
                    ?>
					</div>
				</div>
				<div class="col-sm-offset-2">					
                <input type="hidden" name="page_id" value="9">
                <input type="submit" name="submit" value="Save" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>
	



