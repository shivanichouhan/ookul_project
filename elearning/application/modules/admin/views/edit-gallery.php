<div class="forms">

	<h2 class="title1"><?= $title; ?></h2>

	<?= $this->session->flashdata('msg'); ?>

	<div class="row">		

		<div class="form-three widget-shadow">

			<form class="form-horizontal" method="post" action="<?php echo base_url('admin/updateGallery');?>" enctype="multipart/form-data" autocomplete="off">

				<h3 class="text-center">Gallery</h3><br>			

				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Event Name</label>
					<div class="col-sm-8">
						  <input type="hidden" name="gallery_id" value="<?php echo $title['gallery_id'];?>">
						<input type="text" name="tittle" class="form-control" placeholder="Event Name"  <?php if(!empty($title)) echo 'value="'.$title['tittle'].'"'; ?>>
						<?php echo form_error('tittle', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>
              
				<div class="form-group mb-n">

					<label class="col-sm-2 control-label label-input-lg">Add multiple images</label>

					<div class="col-sm-8">
						<input type="file" name="files[]" multiple>								
					</div>
				</div>

				<div class="form-group mb-n">

					<label class="col-sm-2 control-label label-input-lg">Add multiple video</label>

					<div class="col-sm-8">

						<input type="file" name="video[]" multiple >

					</div>
				</div>
				</div>
				<div class="col-sm-offset-2">
                <input type="submit" name="Edit" value="Edit" class="btn btn-success">

				</div>

			</form>

		




      <?php  
             foreach($image as $value){ 
                 ?>
                     <div class="col-md-4">
                   
                        <?php
                        if(!empty($value['image']))
                            {
                        ?> <div class="img-box" id="imgb_<?php echo $value['id']; ?>">
                            <img class="img-responsive" src="<?php echo base_url('/assets/userfile/gallery/'.$value['image']); ?>" height="250px" width="200px">
                             <a href="javascript:void(0);" class="badge badge-danger" style="margin-left:59px;" onclick="deleteImage('<?php echo $value['id']; ?>')">delete</a>
                        <?php
                        }
                        ?>
                        <br/><br/>
                    </div >
                </div>

                <?php  } ?>
            <?php  
             foreach($video as $value)
             { 
                 ?>
                     <div class="col-md-4">
               
                        <?php
                        if(!empty($value['name']))
                            {
                        ?>
                         <div class="img-box" id="videob_<?php echo $value['video_id']; ?>">
                          <iframe class="embed-responsive-item" src="<?php echo base_url('/assets/userfile/gallery/'.$value['name']); ?>" allowfullscreen></iframe>
                          <a href="javascript:void(0);" class="badge badge-danger" style="margin-left:59px;" onclick="deleteVedio('<?php echo $value['video_id']; ?>')">delete</a>                            
                        <?php
                        }
                        ?>
                        <br/><br/>
                    </div >
                </div>

                <?php  } ?>
 </div>
 
   </div>   
</div>	

<script>
function deleteImage(id)
{	
	
    var result = confirm("Are you sure to delete?");
    if(result){

    	$.ajax({
           url: '<?php echo base_url('admin/deleteImage'); ?>',
           type: 'POST',
           data: {id:id},
           error: function() {
              alert('Something is wrong');
           },
           success: function(data) {
           	console.log(data);
                $('#imgb_'+id).remove();
                alert('The image has been removed from the gallery');  
           }
        });
      
    }
}

function deleteVedio(id){
	
    var result = confirm("Are you sure to delete?");
    if(result){

    	$.ajax({
           url: '<?php echo base_url('admin/deletevideo'); ?>',
           type: 'POST',
           data: {id:id},
           error: function() {
              alert('Something is wrong');
           },
           success: function(data) {
                $('#videob_'+id).remove();
                alert('The video has been removed from the gallery');  
           }
        });
      
    }
}
</script>






