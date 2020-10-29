
<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
<form class="form-horizontal" method="post"  action="<?php if(!empty($obs)){ echo site_url('admin/editobi');}else{
        	echo  base_url('admin/addobi');
        } ?>"  enctype="multipart/form-data" >
				<h3 class="text-center">Obituries Details</h3><br>


         <div class="form-group">
          <label class="col-sm-2 control-label">Name</label>
          <div class="col-sm-8">
            <input type="text" name="name"  class="form-control"  placeholder="name" 
            value="<?php if(!empty($obs)){ echo $obs['name']; } ?>"
            >
            <p><?php echo form_error('name', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>    
        <div class="form-group">
          <label class="col-sm-2 control-label">Select Date and Time</label>
          <div class="col-sm-8">
            <input type="text" name="death_dt" id="datetimepicker" class="form-control"  placeholder="Date and time" 
            value="<?php if(!empty($obs)){ echo $obs['death_dt']; } ?>"
            >
            <p><?php echo form_error('death_dt', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>
        

				<div class="form-group">
					<label for="inputPassword" class="col-sm-2 control-label">Description</label>
					<div class="col-sm-8">
						
						   <textarea rows="6" name="description" class="form-control" placeholder=" Obituries description" ><?php if(!empty($obs)){ echo $obs['description']; } ?> </textarea>
               <p><?php echo form_error('description', '<span class="error_msg">', '</span>'); ?><p>
					</div>
				</div>

        <div class="form-group">
          <label class="col-sm-2 control-label label-input-lg">Image</label>
          <div class="col-sm-8">
            <input type="file" name="image" >


             <?php if(!empty($obs)){ ?>
                     
                    
                    
                    <br/><br/>
                 <img class="img-responsive" src="<?php echo base_url('/assets/userfile/obituries/'.$obs['image']); ?>" height="250px" width="200px">
                    <?php }?>
          </div>
        </div>
        <div class="col-sm-offset-2">
					<?php if(!empty($obs)){ ?>
  <input type="hidden" name="obitury_id" value="<?php echo $obs['obitury_id']; ?>">
                <input type="submit" name="submit" value="Edit" class="btn btn-success">
                <?php } else { ?>
                <input type="submit" name="submit" value="Add" class="btn btn-success">
                <?php } ?>
            </div>
			</form>
		</div>
	</div>
</div>
<link href="<?= base_url('assets/css/jquery.datetimepicker.min.css'); ?>" rel="stylesheet"> 
<script src="<?= base_url('assets/js/jquery.datetimepicker.js'); ?>"></script>
 <script type="text/javascript">
        $(document).ready(function () {      
      
          $('#datetimepicker').datetimepicker({
             format: 'Y-m-d'     
          });
      
    });
    </script>


