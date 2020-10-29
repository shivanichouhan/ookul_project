

<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
			<form class="form-horizontal" method="post" action="<?php if(!empty($user)){ echo site_url('admin/edituser');}else{
        	echo  base_url('admin/addUser');
        } ?>" enctype="multipart/form-data" autocomplete="off" >
				<h3 class="text-center">User Detail</h3><br>
			
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label"> First Name</label>
					<div class="col-sm-8">
						<input type="text" name="fname" class="form-control" placeholder="Name"<?php if(!empty($user)) echo 'value="'.$user['fname'].'"'; ?>>
						<?php echo form_error('fname', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>

				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label"> Last Name</label>
					<div class="col-sm-8">
						<input type="text" name="lname" class="form-control" placeholder="Name"<?php if(!empty($user)) echo 'value="'.$user['lname'].'"'; ?>>
						<?php echo form_error('lname', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>
				<?php
				  if(empty($user))
				  	{ ?>
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-8">
						<input type="password" name="password" class="form-control" placeholder="Password" value="">
						<?php echo form_error('password', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>
			<?php } ?>
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Phone Number</label>
					
					<div class="col-sm-8">
						<input type="number" name="phone" class="form-control" placeholder="Phone Number"<?php if(!empty($user)) echo 'value="'.$user['phone'].'"'; ?>>
						<?php echo form_error('phone', '<span class="error_msg">', '</span>'); ?>
					</div>				
				</div>
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-8">
						<input type="text" name="email" class="form-control" placeholder="Email"<?php if(!empty($user)) echo 'value="'.$user['email'].'"'; ?>>
						<?php echo form_error('email', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">State name</label>
					<div class="col-sm-8">
						<input type="text" name="state" class="form-control" placeholder="state name"<?php if(!empty($user)) echo 'value="'.$user['state'].'"'; ?>>
						<?php echo form_error('state', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">City name</label>
					<div class="col-sm-8">
						<input type="text" name="city" class="form-control" placeholder="city name"<?php if(!empty($user)) echo 'value="'.$user['city'].'"'; ?>>
						<?php echo form_error('city', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>				
			
				<div class="form-group mb-n">
					<label class="col-sm-2 control-label label-input-lg">Profile Image</label>
					<div class="col-sm-8">
						<input type="file" name="picture" >


						 <?php if(!empty($user)){ ?>
                 
                    <br/><br/>
                 <img class="img-responsive" src="<?php echo base_url('/admin/upload/'.$user['picture']); ?>" height="250px" width="200px">
                    <?php }
                    ?>
					</div>
				</div>
				
				<div class="col-sm-offset-2">

					<?php if(!empty($user)){ ?>
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                <input type="submit" name="submit" value="Edit" class="btn btn-success">
                <?php } else { ?>
                <input type="submit" name="submit" value="Add" class="btn btn-success">
                <?php } ?>


					
				</div>
			</form>
		</div>
	</div>
</div>	



