<div class="tables">

    <h2 class="title1"><?= $title; ?></h2>

    <?= $this->session->flashdata('msg'); ?>

    <div class="bs-example widget-shadow"> 

        

        <table class="table table-bordered" id="example"> 

            <thead> 

                <tr> 
                    <th>#</th>
                    <th>Name</th> 
                    <th>image</th> 
                    <th>Action</th> 
                </tr> 

            </thead> 

            <tbody> 

                <?php if (!empty($contact)){                                                

                foreach ($contact as $key => $value) {
                     $i=1;
                ?>
                       
                    <tr>

                        <td><?= $i++; ?></td>
                        <td><?php echo $value['tittle']; ?>
                        
                        <td><img src="<?php echo base_url('/assets/userfile/gallery/'.$value["image"]); ?>"  width="500px;" height="300px;">
                        
                        <td>  
                            <a href="<?= base_url('admin/deleteads/'.$value['id']); ?>" class="btn btn-danger" ><i class="fa fa-trash"></i></a> &nbsp;
                            <a href="<?= base_url('admin/editadds/'.$value['id']); ?>" class="btn btn-success" ><i class="fa fa-edit"></i></a> &nbsp;

                        </td>                        

                    </tr>

                <?php }

            } ?>

            </tbody> 

        </table>

    </div>

</div>





