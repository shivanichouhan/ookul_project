<div class="tables">
    <h2 class="title1">Users List</h2>
    <?= $this->session->flashdata('msg'); ?>
    <div class="bs-example widget-shadow"> 
        
        <table class="table table-bordered" id="example"> 
            <thead> 
                <tr> 
                    <th>#</th>
                    <th>Name</th>                                       
                    <th>Phone number</th> 
                    <th>Email</th> 
                    <th>Action</th> 
                </tr> 
            </thead> 
            <tbody> 
                <?php if (!empty($user)){                                                
                foreach ($user as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?= ++$key; ?></th>
                        <td><?= $value['fname'].''.$value['lname']; ?></td>                                              
                        <td><?= $value['phone']; ?></td>                                              
                        <td><?= $value['email'];?></td>
                        <td>
                            <a href="<?= base_url($link.$value['id']); ?>" class="btn btn-primary" ><i class="fa fa-eye"></i></a> &nbsp;
                            <a href="<?=base_url('admin/edituser/'.$value['id']); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="<?= base_url('admin/deleteuser/'.$value['id']); ?>" class="btn btn-danger" ><i class="fa fa-trash"></i></a> &nbsp;                           
                        </td>                        
                    </tr>
                <?php }
            } ?>
            </tbody> 
        </table>
    </div>
</div>


