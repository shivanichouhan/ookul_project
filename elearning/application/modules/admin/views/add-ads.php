<div class="forms">

	<h2 class="title1"><?= $title; ?></h2>

	<?= $this->session->flashdata('msg'); ?>

	<div class="row">		

		<div class="form-three widget-shadow">

			<form class="form-horizontal" method="post" action="<?php if(empty($gallery)){ echo site_url('admin/addads');}else{
        	echo  base_url('admin/editadds');
        } ?>" enctype="multipart/form-data" autocomplete="off">

				<h3 class="text-center">Advertisment</h3><br>			

				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Ads Name</label>
					<div class="col-sm-8">
						<input type="text" name="tittle" class="form-control" placeholder="Ads Name"  <?php if(!empty($gallery)) echo 'value="'.$gallery['tittle'].'"'; ?>>
						<?php echo form_error('tittle', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>

				<div class="form-group mb-n">

					<label class="col-sm-2 control-label label-input-lg">Add image</label>

					<div class="col-sm-8">

						<input type="file" name="image">
						  <span style="color:red">Max 2MB size</span>
						 <?php if(!empty($gallery)){ ?>
                
                    <br/><br/>
                   
                 <img class="img-responsive" src="<?php echo base_url('/assets/userfile/gallery/'.$gallery['image']); ?>" height="250px" width="200px">
                    <?php }
                    ?>

					</div>
				</div>
				<div class="col-sm-offset-2">
              	<?php if(!empty($gallery)){ ?>
            <input type="hidden" name="id" value="<?php echo $gallery['id']; ?>">
                <input type="submit" name="submit" value="Edit" class="btn btn-success">
                <?php } else { ?>
                <input type="submit" name="submit" value="Add" class="btn btn-success">
                <?php } ?>
				</div>
				</div>
					

			</form>

		</div>

	</div>

</div>	







