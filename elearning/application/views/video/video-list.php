<div class="tables">
    <h2 class="title1">Video List</h2>
    <?= $this->session->flashdata('msg'); ?>
    <div class="bs-example widget-shadow"> 
        
        <table class="table table-bordered" id="example"> 
            <thead> 
                <tr> 
                    <th>#</th>
                    <th>Title</th>                                       
                    <th>category</th>
                    <th>Action</th> 
                </tr> 
            </thead> 
            <tbody> 
                <?php if (!empty($user)){                                                
                foreach ($user as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?= ++$key; ?></th>
                        <td><?= $value['title']?></td>                          
                        <td><?= $value['category']; ?></td>                                              
                       
                        <td>
                            <a href="<?= base_url($link.$value['id']); ?>" class="btn btn-primary" ><i class="fa fa-eye"></i></a> &nbsp;
                           <!--  <a href="<?=base_url('admin/edituser/'.$value['id']); ?>" class="btn btn-success"><i class="fa fa-edit"></i></a> -->
                            <a href="<?= base_url('admin/deletevideo/'.$value['id']); ?>" class="btn btn-danger" ><i class="fa fa-trash"></i></a> &nbsp; 
                           <?php if($value['status']=='1')
                             { ?>
                                 <a href="<?= base_url('admin/addintrendingvideo/'.$value['id']); ?>" class="btn btn-info" >Add in trending list</i></a> &nbsp; 
                             <?php }  ?>
                              <?php if($value['status']=='2')
                             { ?>
                                 <a href="<?= base_url('admin/removeintrendingvideo/'.$value['id']); ?>" class="btn btn-warning" >Remove from Trending list</i></a> &nbsp; 
                             <?php }  ?>                          
                        </td>                        
                    </tr>
                <?php }
            } ?>
            </tbody> 
        </table>
    </div>
</div>


