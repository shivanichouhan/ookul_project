
<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
<form class="form-horizontal" method="post"  action="<?php if(!empty($cat)){ echo site_url('admin/edittv');}else{
        	echo  base_url('admin/addtv');
        } ?>"  enctype="multipart/form-data" >
				<h3 class="text-center">TV Details</h3><br>


         <div class="form-group">
          <label class="col-sm-2 control-label">TV Name</label>
          <div class="col-sm-8">
            <input type="text" name="name"  class="form-control"  placeholder=" TV name" 
            value="<?php if(!empty($cat)){ echo $cat['name']; } ?>"
            >
            <p><?php echo form_error('name', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>
         <div class="form-group">
          <label class="col-sm-2 control-label">TV url</label>
          <div class="col-sm-8">
            <input type="text" name="tv_url"  class="form-control"  placeholder="tv url" 
            value="<?php if(!empty($cat)){ echo $cat['tv_url']; } ?>"
            >
            <p><?php echo form_error('tv_url', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>
        	<div class="form-group mb-n">
					<label class="col-sm-2 control-label label-input-lg">Image</label>
					<div class="col-sm-8">
						<input type="file" name="tv_image" >


						 <?php if(!empty($cat)){ ?>
                 
                    <br/><br/>
                 <img class="img-responsive" src="<?php echo base_url('/assets/userfile/classfied/'.$user['tv_image']); ?>" height="250px" width="200px">
                    <?php }
                    ?>
					</div>
				</div>
         
        
        <div class="col-sm-offset-2">
					<?php if(!empty($cat)){ ?>
  <input type="hidden" name="tv_id" value="<?php echo $cat['tv_id']; ?>">
                <input type="submit" name="submit" value="Edit" class="btn btn-success">
                <?php } else { ?>
                <input type="submit" name="submit" value="Add" class="btn btn-success">
                <?php } ?>
            </div>
       
			</form>
		</div>
	</div>
</div>



