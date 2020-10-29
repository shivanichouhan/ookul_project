<div class="tables">
    <h2 class="title1"><?= $title; ?></h2>
    <?= $this->session->flashdata('msg'); ?>
    <div class="bs-example widget-shadow"> 
        
        <table class="table table-bordered" id="example"> 
            <thead> 
                <tr> 
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>                    
                    <th>Phone number</th> 
                    <th>Action</th> 
                </tr> 
            </thead> 
            <tbody> 
                <?php if (!empty($driver)){                                                
                foreach ($driver as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?= ++$key; ?></th>
                        <td><?= $value['name']; ?></td>
                        <td><?= $value['email']; ?></td>                        
                        <td><?= $value['phone_number'];?></td>
                        <td>
                            <a href="<?= base_url($link.$value['gateway_id']); ?>" class="btn btn-primary" ><i class="fa fa-eye"></i></a> &nbsp;
                            <a href="<?=base_url('admin/editpayment/'.$value['gateway_id']); ?>" class="btn btn-blue btn-sm btn-icon icon-left">Edit</a>                         
                        </td>                        
                    </tr>
                <?php }
            } ?>
            </tbody> 
        </table>
    </div>
</div>


