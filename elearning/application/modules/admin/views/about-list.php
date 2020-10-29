



<div class="tables">

    <h2 class="title1"><?= $title; ?></h2>

    <?= $this->session->flashdata('msg'); ?>

    <div class="bs-example widget-shadow">        
    <div class="row">
      <div class="col-md-4 p-0">
        <button class="btn btn-success btnbutttonadd"><a class="text-white" href="<?= base_url('admin/addaboutimg'); ?>">Add</a></button> 
    </div>
  </div>
        <table class="table table-bordered" id="example"> 

            <thead> 

                <tr> 

                    <th>#</th>                  

                    <th>Image</th> 

                    <th>Action</th> 

                </tr> 

            </thead> 

            <tbody> 

                <?php if (!empty($about)){                                                

                foreach ($about as $key => $value) { ?>

                    <tr>

                        <th scope="row"><?= ++$key; ?></th>
                        <td><img class="img-responsive" src="<?php echo base_url('/assets/userfile/gallery/'.$value['image']); ?>" height="250px" width="200px"></td>

                        <td>  
                            <a href="<?= base_url('admin/deleteaboutimg/'.$value['id']); ?>" class="btn btn-danger" ><i class="fa fa-trash"></i></a> &nbsp;

                        </td>                        

                    </tr>

                <?php }

            } ?>

            </tbody> 

        </table>

    </div>

</div>





