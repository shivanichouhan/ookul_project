



<div class="tables">

    <h2 class="title1"><?= $title; ?></h2>

    <?= $this->session->flashdata('msg'); ?>

    <div class="bs-example widget-shadow"> 

        

        <table class="table table-bordered" id="example"> 

            <thead> 

                <tr> 

                    <th>#</th>                  
                      <th>Name</th>
                       <th>Position</th>
                      <th>Desgination</th>
                    <th>Image</th> 

                    <th>Action</th> 

                </tr> 

            </thead> 

            <tbody> 

                <?php if (!empty($member)){                                                

                foreach ($member as $key => $value) { ?>

                    <tr>
                        <th scope="row"><?= ++$key; ?></th>
                        <th scope="row"><?= $value['name']; ?></th>
                        <th scope="row"><?= $value['position']; ?></th>
                         <th scope="row"><?= $value['designation']; ?></th>
                        <td><img class="img-responsive" src="<?php echo base_url('/assets/userfile/member/'.$value['image']); ?>" height="250px" width="200px"></td>

                        <td>  
                            <a href="<?= base_url('admin/editBmember/'.$value['member_id']); ?>" class="btn btn-success" ><i class="fa fa-edit"></i></a> &nbsp;
                            <a href="<?= base_url('admin/deletemember/'.$value['member_id']); ?>" class="btn btn-danger" ><i class="fa fa-trash"></i></a> &nbsp;

                        </td>                        

                    </tr>

                <?php }

            } ?>

            </tbody> 

        </table>

    </div>

</div>





