<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
			<form class="form-horizontal" method="post" action="<?php echo site_url('admin/editcontact');?>">
				<h3 class="text-center">contact Detail</h3><br>
			
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Addres</label>
					<div class="col-sm-8">
						<input type="text" name="address" class="form-control" placeholder="address"<?php if(!empty($contact)) echo 'value="'.$contact['address'].'"'; ?>>
						<?php echo form_error('address', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>				
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-8">
						<input type="text" name="email" class="form-control" placeholder="Email"<?php if(!empty($contact)) echo 'value="'.$contact['email'].'"'; ?>>
						<?php echo form_error('email', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>				
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Phone Number</label>
					<div class="col-sm-2">
						    	<input type="text" name="country_code" class="form-control" placeholder="country code"<?php if(!empty($contact)) echo 'value="'.$contact['country_code'].'"'; ?>>
						   </div>
					<div class="col-sm-6">
						<input type="text" name="phone_number" class="form-control" placeholder="Email"<?php if(!empty($contact)) echo 'value="'.$contact['phone_number'].'"'; ?>>
					
						<?php echo form_error('phone_number', '<span class="error_msg">', '</span>'); ?>
					</div>	
						
				</div>							
				<div class="col-sm-offset-2">				
                <input type="hidden" name="contact_id" value="<?php echo $contact['contact_id']; ?>">
                <input type="submit" name="submit" value="Done" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>
</div>	



