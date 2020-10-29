

<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
			<form class="form-horizontal" method="post" action="<?php if(!empty($faq)){ echo site_url('admin/editfaq');}else{
        	echo  base_url('admin/addfaq');
        } ?>" enctype="multipart/form-data" autocomplete="off" >
				<h3 class="text-center">FAQ detail</h3><br>
			
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Question</label>
					<div class="col-sm-8">
						<input type="text" name="question" class="form-control" placeholder="Question"<?php if(!empty($faq)) echo 'value="'.$faq['question'].'"'; ?>>
						<?php echo form_error('question', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>		
				
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Answer</label>
					<div class="col-sm-8">
						<textarea rows="10" cols="50" name="answer" class="form-control" placeholder="Answer"><?php if(!empty($faq)) echo $faq['answer']
						 ?></textarea>
						
						<?php echo form_error('answer', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>	
				<div class="col-sm-offset-2">

					<?php if(!empty($faq))
					{ ?>
                <input type="hidden" name="faq_id" value="<?php echo $faq['faq_id']; ?>">
                <input type="submit" name="submit" value="Edit" class="btn btn-success">
                <?php } else { ?>
                <input type="submit" name="submit" value="Add" class="btn btn-success">
                <?php } ?>
				</div>
			</form>
		</div>
	</div>
</div>	



