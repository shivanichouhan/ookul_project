<div class="forms">
  <h2 class="title1"><?= $title; ?></h2>
  <?= $this->session->flashdata('msg'); ?>
  <div class="row">   
    <div class="form-three widget-shadow">
      <form class="form-horizontal" method="post" action="<?php echo  base_url('admin/add_message'); ?>" enctype="multipart/form-data" autocomplete="off" >   
        <div class="form-group">
        
          <div class="col-sm-8">
               <textarea class="form-control ckeditor" name="editor" required></textarea>  
            <?php echo form_error('editor', '<span class="error_msg">', '</span>'); ?>
          </div>          
        </div>          
        <div class="col-sm-offset-2">         
              
                <input type="submit" name="submit" value="Send" class="btn btn-success">
        </div>
      </form>
    </div>
  </div>
</div>
<script src="<?= base_url('assets/js/ckeditor/ckeditor.js'); ?>"></script>
<script>
CKEDITOR.editorConfig = function( config ) {
  config.language = 'es';
  config.uiColor = '#F7B42C';
  config.height = 300;
  config.toolbarCanCollapse = true;
};
CKEDITOR.replace('editor',{
  width: "700px",
        height: "300px"
     }
);
</script> 


