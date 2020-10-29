
<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
<form class="form-horizontal" method="post"  action="<?php if(!empty($cat)){ echo site_url('admin/editradio');}else{
        	echo  base_url('admin/addradio');
        } ?>"  enctype="multipart/form-data" >
				<h3 class="text-center">Radio Details</h3><br>


         <div class="form-group">
          <label class="col-sm-2 control-label">Name</label>
          <div class="col-sm-8">
            <input type="text" name="radio_nm"  class="form-control"  placeholder="Radio name" 
            value="<?php if(!empty($cat)){ echo $cat['radio_nm']; } ?>"
            >
            <p><?php echo form_error('radio_nm', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>
         <div class="form-group">
          <label class="col-sm-2 control-label">Radio url</label>
          <div class="col-sm-8">
            <input type="text" name="radio_url"  class="form-control"  placeholder="Radio url" 
            value="<?php if(!empty($cat)){ echo $cat['radio_url']; } ?>"
            >
            <p><?php echo form_error('radio_url', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>
        	<div class="form-group mb-n">
					<label class="col-sm-2 control-label label-input-lg">Image</label>
					<div class="col-sm-8">
						<input type="file" name="radio_image" >


						 <?php if(!empty($cat)){ ?>
                 
                    <br/><br/>
                 <img class="img-responsive" src="<?php echo base_url('/assets/userfile/classfied/'.$user['radio_image']); ?>" height="250px" width="200px">
                    <?php }
                    ?>
					</div>
				</div>
         
        
        <div class="col-sm-offset-2">
					<?php if(!empty($cat)){ ?>
  <input type="hidden" name="radio_id" value="<?php echo $cat['radio_id']; ?>">
                <input type="submit" name="submit" value="Edit" class="btn btn-success">
                <?php } else { ?>
                <input type="submit" name="submit" value="Add" class="btn btn-success">
                <?php } ?>
            </div>
       
			</form>
		</div>
	</div>
</div>



