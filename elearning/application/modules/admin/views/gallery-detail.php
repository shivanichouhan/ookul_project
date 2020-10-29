<style type="text/css">
.iii img {
    width: 100%; max-height:300px;
 }
</style>
<div class="forms">
    <h2 class="title1"><?= $title; ?></h2>

    <div class="alert alert-dismissible fade" role="alert"><span id="msg"></span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="row">
        <div class="form-three widget-shadow">                                  
            <div class="row">
                <div class="col-md-12">
                    <h3>Gallery</h3><br>
                </div>



                 <div class="col-md-12">                    
                    <dl class="dl-horizontal">
                        <dt>Event Name</dt> <dd><?= $gallery['tittle']; ?></dd>
                      
                      
                     
                      
                    </dl>
                </div>
                <div class="row" style="margin-left:15px;">
                     <dt>Gallery image</dt>
               </div>
                <?php  
             foreach($image as $value){ 
                 ?>
                     <div class="col-md-4">
                    <div>
                        <?php
                        if(!empty($value['image']))
                            {
                        ?>
                            <img class="img-responsive" src="<?php echo base_url('/assets/userfile/gallery/'.$value['image']); ?>" height="250px" width="200px">
                        <?php
                        }
                        ?>
                        <br/><br/>
                    </div >
                </div>

                <?php  } ?>


                   <div class="col-md-12" style="margin-left:15px;">
                     <dt>Gallery Video</dt><br><br>
               </div>
                <?php  
             foreach($video as $value){ 
                 ?>
                     <div class="col-md-4">
                    <div>
                        <?php
                        if(!empty($value['name']))
                            {
                        ?>
                          <iframe class="embed-responsive-item" src="<?php echo base_url('/assets/userfile/gallery/'.$value['name']); ?>" allowfullscreen></iframe>                            
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
</div>






