
<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
<form class="form-horizontal" method="post"  action="<?php if(!empty($event)){ echo site_url('admin/editEvent');}else{
        	echo  base_url('admin/addEvent');
        } ?>"  enctype="multipart/form-data" >
				<h3 class="text-center">Event Details</h3><br>


         <div class="form-group">
          <label class="col-sm-2 control-label">Name</label>
          <div class="col-sm-8">
            <input type="text" name="name"  class="form-control"  placeholder="event name" 
            value="<?php if(!empty($event)){ echo $event['name']; } ?>"
            >
            <p><?php echo form_error('name', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Address</label>
          <div class="col-sm-8">
            <input type="text" name="location"  class="form-control"  placeholder="Address" 
            value="<?php if(!empty($event)){ echo $event['location']; } ?>"
            >
            <p><?php echo form_error('location', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-sm-2 control-label">Amount</label>
          <div class="col-sm-8">
            <input type="text" name="amount"  class="form-control"  placeholder="amount" 
            value="<?php if(!empty($event)){ echo $event['amount']; }else { echo "0" ;}?>"
            >
            <p><?php echo form_error('amount', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>



        <div class="form-group">
          <label class="col-sm-2 control-label">Select Date and Time</label>
          <div class="col-sm-8">
            <input type="text" name="edate_time" id="datetimepicker" class="form-control"  placeholder="Date and time" 
            value="<?php if(!empty($event)){ echo $event['edate_time']; } ?>"
            >
            <p><?php echo form_error('edate_time', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>
        

				<div class="form-group">
					<label for="inputPassword" class="col-sm-2 control-label">Description</label>
					<div class="col-sm-8">
						
						   <textarea rows="6" name="event_desc" class="form-control" placeholder=" event description" ><?php if(!empty($event)){ echo $event['event_desc']; } ?> </textarea>
               <p><?php echo form_error('event_desc', '<span class="error_msg">', '</span>'); ?><p>
					</div>
				</div>

        <div class="form-group">
          <label class="col-sm-2 control-label label-input-lg">Event Image</label>
          <div class="col-sm-8">
            <input type="file" name="image" >


             <?php if(!empty($event)){ ?>
                     
                    
                    
                    <br/><br/>
                 <img class="img-responsive" src="<?php echo base_url('/assets/userfile/event/'.$event['image']); ?>" height="250px" width="200px">
                    <?php }?>
          </div>
        </div>
        <div class="col-sm-offset-2">
					<?php if(!empty($event)){ ?>
  <input type="hidden" name="event_id" value="<?php echo $event['event_id']; ?>">
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
            format:'Y-m-d H:i'       
          });
      
    });
    </script>


