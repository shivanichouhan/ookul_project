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
                        if(!empty($user['picture']))
                            {
                        ?>
                            <img class="img-responsive" src="<?php echo base_url('/admin/upload/'.$user['picture']); ?>" height="250px" width="200px">
                        <?php
                        }
                        ?>
                        <br/><br/>
                    </div >
                </div>
                <div class="col-md-8">                    
                    <dl class="dl-horizontal">
                        <dt>User ID </dt> <dd><?= $user['user_id']; ?></dd>
                        <dt>Name</dt> <dd><?= $user['fname']. ' '.$user['lname']; ?></dd>
                        <dt>Email</dt> <dd><?= $user['email']; ?></dd>
                        <dt>Phone number</dt><dd> <?= $user['phone']; ?></dd>
                        <dt>state</dt><dd> <?= $user['state']; ?></dd>
                        <dt>City</dt><dd> <?= $user['city']; ?></dd>
                        <dt>Phone number</dt><dd> <?= $user['phone']; ?></dd>
                    </dl>
                </div>
                </div>
          
        </div>        
    </div>
</div>






