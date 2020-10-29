<div class="forms">

	<h2 class="title1"><?= $title; ?></h2>

	<?= $this->session->flashdata('msg'); ?>

	<div class="row">		

		<div class="form-three widget-shadow">

			<form class="form-horizontal" method="post" action="<?php echo base_url('admin/changepass');?>">

				<h3 class="text-center" style="font-weight: bold;">Change Password</h3><br>			

				

					
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-8">
						<input type="password" name="password" class="form-control" placeholder="password" value="" id="password">
						<div class="error_msg"></div>
						<?php echo form_error('password', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Confirm Password</label>
					<div class="col-sm-8">
						<input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" id="cpassword">
						<div class="error_msg"></div>
						<?php echo form_error('designation', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>	
				<div class="col-sm-offset-2">
                <input type="submit" name="submit" value="Change Password" class="btn btn-success">
				</div>
			</form>

		</div>

	</div>

</div>	
<script type="text/javascript">

    $('#password, #cpassword').on('keyup', function () {
     if ($('#password').val() == $('#cpassword').val()) {
      $('.error_msg').html('Matching').css('color', 'green');
      } else 
     $('.error_msg').html('Not Matching').css('color', 'red');
     });
    
</script>







