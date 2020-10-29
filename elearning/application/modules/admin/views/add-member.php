<div class="forms">

	<h2 class="title1"><?= $title; ?></h2>

	<?= $this->session->flashdata('msg'); ?>

	<div class="row">		

		<div class="form-three widget-shadow">

			<form class="form-horizontal" method="post" action="<?php if(!empty($user)){ echo site_url('admin/editBmember');}else{
        	echo  base_url('admin/addBmember');
        } ?>" enctype="multipart/form-data" autocomplete="off" >

				<h3 class="text-center" style="font-weight: bold;">Board Member</h3><br>			

				

					
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-8">
						<input type="text" name="name" class="form-control" placeholder="Name" <?php if(!empty($user)) echo 'value="'.$user['name'].'"'; ?>>
						<?php echo form_error('name', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Desingation</label>
					<div class="col-sm-8">
						<input type="text" name="designation" class="form-control" placeholder="Designation" <?php if(!empty($user)) echo 'value="'.$user['designation'].'"'; ?>>
						<?php echo form_error('designation', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">position</label>
					<div class="col-sm-8">
						<input type="text" name="position" class="form-control" placeholder="enter digit" <?php if(!empty($user)) echo 'value="'.$user['position'].'"'; ?>>
						<?php echo form_error('position', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>	
				<div class="form-group mb-n">

					<label class="col-sm-2 control-label label-input-lg">Image</label>

					<div class="col-sm-8">

						<input type="file" name="image" >

					</div>
									 <?php if(!empty($user)){ ?>
                 
                    <br/><br/>
                 <img class="img-responsive"  style="margin-left: 208px;" src="<?php echo base_url('/assets/userfile/member/'.$user['image']); ?>" height="250px" width="200px">
                    <?php }
                    ?>

				</div>	

				<div class="col-sm-offset-2">
              	<?php if(!empty($user)){ ?>
            <input type="hidden" name="member_id" value="<?php echo $user['member_id']; ?>">
                <input type="submit" name="submit" value="Edit" class="btn btn-success">
                <?php } else { ?>
                <input type="submit" name="submit" value="Add" class="btn btn-success">
                <?php } ?>
				</div>

			</form>

		</div>

	</div>

</div>	







