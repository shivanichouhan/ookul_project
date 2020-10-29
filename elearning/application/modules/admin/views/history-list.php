<div class="tables">
    <h2 class="title1"><?= $title; ?></h2>
    <?= $this->session->flashdata('msg'); ?>
    <div class="bs-example widget-shadow"> 
        
        <table class="table table-bordered" id="example"> 
            <thead> 
                <tr> 
                    <th>#</th>
                    <th>Member Name</th>
                    <th>Phone no</th>
                    <th>email</th>
                    <th>type</th> 
                    <th>Name</th>                      
                    <th>Amount</th>
                    <th>Date</th>
                </tr> 
            </thead> 
            <tbody> 
                <?php if (!empty($result)){ 
                    $i=1;                                               
                foreach ($result as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?=$i++;?></th>
                        <td><?= $value['fname']; ?></td>
                        <td><?= $value['phone_number'];?></td>
                         <td><?= $value['email'];?></td>
                        <?php 

                              if($value['contributor_id']==0)
                              { ?>
                                   <td><?php  echo "Donation";?></td>
                                   <td><?php  echo "Northwest Kenyan Community Association";?></td>
                             <?php  }else{ ?>

                                   <td><?php  echo "Contributor";?></td>
                                    <td><?= $value['cname'];?></td>
                            <?php   }
                        ?>                       
                       
                     
                        <td><?= $value['amount'];?></td>
                        <td><?= date("m-d-Y", strtotime($value['payment_date']));
                        ?></td>                        
                    </tr>
                <?php }
            } ?>
            </tbody> 
        </table>
    </div>
</div>


