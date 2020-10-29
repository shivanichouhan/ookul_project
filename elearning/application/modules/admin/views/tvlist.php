<div class="tables">
    <h2 class="title1"><?= $title; ?></h2>
  <?php echo $this->session->userdata('msg'); ?>    
  <div class="bs-example widget-shadow">  

    <div class="row">
      <div class="col-md-4 p-0">
        <button class="btn btn-success btnbutttonadd"><a class="text-white" href="<?= base_url('admin/addtv'); ?>">Add</a></button> 
    </div>
  </div>
    <table class="table table-hover responsive" id="example" width="100%">
      <thead>
        <tr>
          <th>S.No.</th>
          <th>TV Name</th>
          <th>Action</th>      
        </tr>
      </thead>
      <tbody>
        <?php if(!empty($cat))
        {
         
          foreach ($cat as $key => $value) { 
                          

           ?>
            <tr>
              <td><?= $key+1; ?></td>
              <td><?= $value['name'] ?></td>
              <td>    
              <button class="btn btn-warning"><a class="text-white" href="<?= base_url('admin/edittv/'.$value['tv_id']); ?>">Edit</a></button> 
              <button class="btn btn-danger"><a class="text-white"  onclick="deletetv(this,'<?php echo $value['tv_id'];?>')">Delete</a></button> 
            </td>
            </tr>
          <?php }
        } ?>  
      </tbody>
    </table>
  </div>
</div>

<script type="text/javascript">
  function deletetv(t,id){

    if (confirm('Are you sure you want to delete this TV ?')) {
        $.ajax({
            type: "POST",     
            url:"<?php echo base_url('admin/deletetv');?>",
            data:{id:id},
            success: function(data){
          
                if(data){
                    $(t).closest('tr').remove();
                  
                }else{
                    alert('failure');
                }
            }
        });
    }
    else
    { 
        return false;
    }
}
</script>