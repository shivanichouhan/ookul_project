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
                    <h3>Contact Detail</h3><br>
                </div>               
                <div class="col-md-8">                    
                    <dl class="dl-horizontal">                      
                        <dt>address</dt> <dd><?= $contact['address']; ?></dd>
                        <dt>Email</dt> <dd><?= $contact['email']; ?></dd>                      
                        <dt>Phone no</dt><dd> <?= $contact['phone_number']; ?></dd>
                    </dl>
                </div>
                </div>
          
        </div>        
    </div>
</div>






