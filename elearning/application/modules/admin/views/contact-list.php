<div class="tables">
    <h2 class="title1"><?= $title; ?></h2>
    <?= $this->session->flashdata('msg'); ?>
    <div class="bs-example widget-shadow"> 
        
        <table class="table table-bordered" id="example"> 
            <thead> 
                <tr> 
                  
                    <th>address</th>
                    <th>Email</th>                    
                    <th>Phone number</th> 
                    <th>Action</th> 
                </tr> 
            </thead> 
            <tbody><tr>
                      
                        <td><?= $contact['address']; ?></td>
                        <td><?= $contact['email']; ?></td>                        
                        <td><?= $contact['phone_number'];?></td>
                        <td>
                            <a href="<?= base_url($link.$contact['contact_id']); ?>" class="btn btn-primary" ><i class="fa fa-eye"></i></a> &nbsp;
                            <a href="<?=base_url('admin/editcontact/'.$contact['contact_id']); ?>" class="btn btn-blue btn-sm btn-icon icon-left">Edit</a>                         
                        </td>                        
                    </tr>              
            </tbody> 
        </table>
    </div>
</div>


