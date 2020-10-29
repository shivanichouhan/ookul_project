<div class="tables">

    <h2 class="title1"><?= $title; ?></h2>

    <?= $this->session->flashdata('msg'); ?>

    <div class="bs-example widget-shadow"> 

        

        <table class="table table-bordered" id="example"> 

            <thead> 

                <tr> 

                    <th>#</th>                                    
                    <th>Name</th> 
                    <th>Action</th> 
                </tr> 

            </thead> 

            <tbody> 

                <?php if (!empty($gallery)){                                                

                foreach ($gallery as $key => $value) { ?>

                    <tr>

                        <th scope="row"><?= ++$key; ?></th>
                        <td><?php echo $value['tittle']; ?>
                        <td> 
                            <a href="<?= base_url('admin/deletegalary/'.$value['gallery_id']); ?>" class="btn btn-danger" ><i class="fa fa-trash"></i></a> &nbsp;
                            <a href="<?= base_url('admin/editgallery/'.$value['gallery_id']); ?>" class="btn btn-success" ><i class="fa fa-edit"></i></a> &nbsp;


                        </td>                        

                    </tr>

                <?php }

            } ?>

            </tbody> 

        </table>

    </div>

</div>





