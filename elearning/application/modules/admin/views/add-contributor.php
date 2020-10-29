

<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
			<form class="form-horizontal" method="post" action="<?php if(!empty($contributor)){ echo site_url('admin/editcontributor');}else{
        	echo  base_url('admin/addcontributor');
        } ?>" enctype="multipart/form-data" autocomplete="off" >
				<h3 class="text-center">Contributor detail</h3><br>
			
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-8">
						<input type="text" name="name" class="form-control" placeholder="Name"<?php if(!empty($contributor)) echo 'value="'.$contributor['name'].'"'; ?>>
						<?php echo form_error('name', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>		
				
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Contributor Decription</label>
					<div class="col-sm-8">
						<textarea rows="10" cols="50" name="contributor_desc" class="form-control" placeholder="Contributor Decription"><?php if(!empty($contributor)) echo $contributor['contributor_desc']
						 ?>

                    </textarea>
						
						<?php echo form_error('contributor_desc', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Target Amount</label>
					<div class="col-sm-8">
						<input type="number" name="target_amount" class="form-control" placeholder="Target Amount"<?php if(!empty($contributor)) echo 'value="'.$contributor['target_amount'].'"'; ?>>
						<?php echo form_error('target_amount', '<span class="error_msg">', '</span>'); ?>
					</div>									
				</div>
				<div class="form-group mb-n">
					<label class="col-sm-2 control-label label-input-lg">Image</label>
					<div class="col-sm-8">
						<input type="file" name="image" >


						 <?php if(!empty($contributor)){ ?>
                     
                    
                    
                    <br/><br/>
                 <img class="img-responsive" src="<?php echo base_url('/assets/userfile/contributor/'.$contributor['image']); ?>" height="250px" width="200px">
                    <?php }
                    ?>
					</div>
				</div>
				
				<div class="col-sm-offset-2">

					<?php if(!empty($contributor))
					{ ?>
                <input type="hidden" name="contributor_id" value="<?php echo $contributor['contributor_id']; ?>">
                <input type="submit" name="submit" value="Edit" class="btn btn-success">
                <?php } else { ?>
                <input type="submit" name="submit" value="Add" class="btn btn-success">
                <?php } ?>
				</div>
			</form>
		</div>
	</div>
</div>	



