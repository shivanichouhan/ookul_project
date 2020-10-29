
<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
<form class="form-horizontal" method="post"  action="<?php if(!empty($cat)){ echo site_url('admin/editlive');}else{
        	echo  base_url('admin/addlive');
        } ?>"  enctype="multipart/form-data" >
				<h3 class="text-center">Live Event Details</h3><br>


         <div class="form-group">
          <label class="col-sm-2 control-label">Event Name</label>
          <div class="col-sm-8">
            <input type="text" name="name"  class="form-control"  placeholder=" Event name" 
            value="<?php if(!empty($cat)){ echo $cat['name']; } ?>"
            >
            <p><?php echo form_error('name', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>
         <div class="form-group">
          <label class="col-sm-2 control-label">Event url</label>
          <div class="col-sm-8">
            <input type="text" name="video_url"  class="form-control"  placeholder="Event url" 
            value="<?php if(!empty($cat)){ echo $cat['video_url']; } ?>"
            >
            <p><?php echo form_error('video_url', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>
        
        <div class="col-sm-offset-2">
					<?php if(!empty($cat)){ ?>
  <input type="hidden" name="live_id" value="<?php echo $cat['live_id']; ?>">
                <input type="submit" name="submit" value="Save" class="btn btn-success">
                <?php } else { ?>
                <input type="submit" name="submit" value="Add" class="btn btn-success">
                <?php } ?>
            </div>
       
			</form>
		</div>
	</div>
</div>



