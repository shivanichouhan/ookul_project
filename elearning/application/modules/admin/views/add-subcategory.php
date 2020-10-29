
<div class="forms">
	<h2 class="title1"><?= $title; ?></h2>
	<?= $this->session->flashdata('msg'); ?>
	<div class="row">		
		<div class="form-three widget-shadow">
<form class="form-horizontal" method="post"  action="<?php if(!empty($subcat)){ echo site_url('admin/editsubcategory');}else{
        	echo  base_url('admin/addsubcategory');
        } ?>"  enctype="multipart/form-data" >
				<h3 class="text-center">SubCategory Details</h3><br>


         <div class="form-group">
          <label class="col-sm-2 control-label"> Category Name</label>
          <div class="col-sm-8">
            
            <select name="category_id" class="form-control">
              <option value="">select category</option>
              <?php
                  foreach($cat as $value){ ?>
                  <option value="<?php echo $value['category_id'] ?>" <?php if ($subcat['category_id']==$value['category_id']) echo "selected" ?>><?php echo $value['cat_name'];?></option>
                 <?php  } ?>
              ?>
            </select>
            <p><?php echo form_error('category_id', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">SubCategory Name</label>
          <div class="col-sm-8">
            <input type="text" name="subcategory_name"  class="form-control"  placeholder="subcategory name" 
            value="<?php if(!empty($subcat)){ echo $subcat['subcategory_name']; } ?>"
            >
            <p><?php echo form_error('subcategory_name', '<span class="error_msg">', '</span>'); ?></p>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label"> SubCategory Image</label>
          <div class="col-sm-8">
            <input type="file" name="subcat_image">
             <?php if(!empty($subcat)){ ?>
                    
                    <br/><br/>
                 <img class="img-responsive" src="<?php echo base_url('/assets/userfile/classfied/'.$subcat['subcat_image']); ?>" height="250px" width="200px">
                    <?php }?>
          </div>
        </div>
        <div class="col-sm-offset-2">
					<?php if(!empty($subcat)){ ?>
                <input type="hidden" name="subcatogory_id" value="<?php echo $subcat['subcatogory_id']; ?>">
                <input type="submit" name="submit" value="Edit" class="btn btn-success">
                <?php } else { ?>
                <input type="submit" name="submit" value="Add" class="btn btn-success">
                <?php } ?>
            </div>
       
			</form>
		</div>
	</div>
</div>



