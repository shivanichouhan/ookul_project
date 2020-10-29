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
                    <h3>Basic Details</h3><br>
                </div>
                <div class="col-md-4">
                    <div>
                        <?php
                        if(!empty($user['thumbnail']))
                            {
                        ?>
                            <img class="img-responsive" src="<?php echo base_url('/admin/upload/'.$user['thumbnail']); ?>" height="250px" width="200px">
                        <?php
                        }
                        ?>
                        <br/><br/>
                    </div >
                </div>
                <div class="col-md-8">                    
                    <dl class="dl-horizontal">
                        <dt>Title</dt> <dd><?= $user['title']; ?></dd>
                        <dt>Description</dt> <dd><?= $user['descrp']?></dd>
                        <dt>category</dt> <dd><?= $user['category']; ?></dd>
                        <dt>Tags</dt><dd> <?= $user['tag']; ?></dd>
                    </dl>
                </div>
                <div class="col-md-12">
                    <h3>Video</h3><br>
                </div>
                 <div class="col-md-8">                    
                    <video width="320" height="240" controls>
                      <source src="<?php echo base_url('/admin/upload/'.$user[' videos']); ?>" type="video/mp4">                     
                      Your browser does not support the video tag.
                    </video>
                </div>
                </div>
          
        </div>        
    </div>
</div>






