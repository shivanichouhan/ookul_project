<div class="forms">

	<h2 class="title1"><?= $title; ?></h2>

	<?= $this->session->flashdata('msg'); ?>

	<div class="row">		

		<div class="form-three widget-shadow">

			<form class="form-horizontal" method="post" action="<?php echo base_url('admin/addgallery');?>" enctype="multipart/form-data" autocomplete="off">

				<h3 class="text-center">Gallery</h3><br>			

				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Event Name</label>
					<div class="col-sm-8">
						<input type="text" name="tittle" class="form-control" placeholder="Event Name" value="" >
						<?php echo form_error('tittle', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>

				<div class="form-group mb-n">

					<label class="col-sm-2 control-label label-input-lg">Add multiple images</label>

					<div class="col-sm-8">

						<input type="file" name="files[]" multiple >
					</div>
				</div>

				<div class="form-group mb-n">

					<label class="col-sm-2 control-label label-input-lg">Add multiple video</label>

					<div class="col-sm-8">

						<input type="file" name="video[]" multiple >					 

					</div>
				</div>
				</div>
				<div class="col-sm-offset-2">
                <input type="submit" name="submit" value="Add" class="btn btn-success">

				</div>

			</form>

		</div>

	</div>

</div>	







