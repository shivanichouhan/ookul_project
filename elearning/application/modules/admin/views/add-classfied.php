<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
			<form class="form-horizontal" method="post" action="<?php if(!empty($classfied)){ echo site_url('admin/editclassfied');}else{
        	echo  base_url('admin/addClassified');
        } ?>" enctype="multipart/form-data" autocomplete="off" >
				<h3 class="text-center">classfied Detail</h3><br>
			
				
			<div class="form-group">
          <label class="col-sm-2 control-label"> Category Name</label>
          <div class="col-sm-8">
            
            <select name="category_id" class="form-control" id="categorydata">
              <option value="">select category</option>
              <?php
                  foreach($cat as $value){ ?>
                  <option value="<?php echo $value['category_id'] ?>" <?php if ($classfied['category_id']==$value['category_id']) echo "selected" ?>><?php echo $value['cat_name'];?></option>
                 <?php  } ?>
              ?>
            </select>
            <p><?php echo form_error('category_id', '<span class="error_msg">', '</span>'); ?></p>
          </div>
          </div>
          
         <div class="form-group">
        <label class="col-lg-2 control-label">SubCategory</label>
        

         <div class="col-lg-8">
        <?php if(!empty($subcat)){ 

                                        ?>
            <select class="form-control" name="subcatogory_id" id="subcategory_id" >
                <?php
                if(!empty($subcat))
                {
                    foreach ($subcat as $k=>$v)
                    {
                        if($v['subcatogory_id'] == $classfied['subcatogory_id'])
                            $sel = 'selected="selected"';
                        else
                            $sel='';
                        echo '<option '.$sel.' value="'.$v['subcatogory_id'].'">'.$v['subcategory_name'].'</option>';
                    }
                }

                ?>
             </select>
              <?php } else{ ?>

                   <select class="form-control" name="subcatogory_id" id="subcategory_id">
                      <option value="">Select subcategory</option>
                  </select>
              <?php }?>
               <?php echo form_error('subcatogory_id', '<span class="error_msg">', '</span>'); ?>   

        </div>

    </div>
        
        <div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-8">
						<input type="text" name="name" class="form-control" placeholder="name"<?php if(!empty($classfied)) echo 'value="'.$classfied['name'].'"'; ?>>
						<?php echo form_error('name', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>
        
			<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Decription</label>
					<div class="col-sm-8">
					<textarea rows="10" cols="50" name="classfied_desc" class="form-control" placeholder="description"><?php if(!empty($classfied)) echo $classfied['classfied_desc']?></textarea>
						
						<?php echo form_error('classfied_desc', '<span class="error_msg">', '</span>'); ?>
					</div>					
				</div>
				
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Image</label>
					<div class="col-sm-8">
						<input type="file" name="image">
					</div>
					<div class="col-md-4">
                    <div>
                        <?php
                        if(!empty($classfied['image']))
                            {
                        ?>
                            <img class="img-responsive" src="<?php echo base_url('/assets/userfile/classfied/'.$classfied['image']); ?>" height="250px" width="200px">
                        <?php
                        }
                        ?>
                        <br/><br/>
                    </div >
                </div>
				</div>
				
				<div class="form-group">
					<label for="focusedinput" class="col-sm-2 control-label">Video</label>
					<div class="col-sm-8">
						<input type="file" name="video">
					</div>
					<div class="col-md-4">
                    <div>
                        <?php
                        if(!empty($classfied['video']))
                            {
                        ?>
                        <iframe class="embed-responsive-item" src="<?php echo base_url('/assets/userfile/classfied/'.$classfied['video']); ?>" allowfullscreen></iframe>
                        <?php
                        }
                        ?>
                        <br/><br/>
                    </div >
                </div>
				</div>
				
				<div class="col-sm-offset-2">

					<?php if(!empty($classfied)){ ?>
                <input type="hidden" name="classified_id" value="<?php echo $classfied['classified_id']; ?>">
                <input type="submit" name="submit" value="Edit" class="btn btn-success">
                <?php } else { ?>
                <input type="submit" name="submit" value="Add" class="btn btn-success">
                <?php } ?>


					
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
      
        $('#categorydata').on('change', function(){
              var catID = $(this).val();
                if(catID)
                {
                    
                     $.ajax({
                type:'POST',
                url:"<?php echo base_url('admin/subcategorybycatid');?>",
                data:{cat_id:catID},
                success:function(html)
                {
                    $('#subcategory_id').html(html);
                    
                }
            }); 
                    
                    
                }
            
        });
      
  });
</script>



