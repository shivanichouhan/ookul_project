<div class="tables">
    <h2 class="title1"><?= $title; ?></h2>
  <?php echo $this->session->userdata('msg'); ?>    
  <div class="bs-example widget-shadow">  

    <div class="row">
      <div class="col-md-4 p-0">
        <button class="btn btn-success btnbutttonadd"><a class="text-white" href="<?= base_url('admin/addsubcategory'); ?>">Add</a></button> 
    </div>
  </div>
    <table class="table table-hover responsive" id="example" width="100%">
      <thead>
        <tr>
          <th>S.No.</th>
         <th>Category Name</th>
          <th>SubCategory Name</th>
          <th>Action</th>      
        </tr>
      </thead>
      <tbody>
        <?php if(!empty($cat))
        {
         
          foreach ($cat as $key => $value) { 
                          
            $cname =   $this->common->getData('classfied_category',array('category_id' =>$value['category_id']),array('single'));
           ?>
            <tr>
              <td><?= $key+1; ?></td>
                <td><?= $cname['cat_name']?></td>
              <td><?= $value['subcategory_name'] ?></td>
              <td>    
              <button class="btn btn-warning"><a class="text-white" href="<?= base_url('admin/editsubcategory/'.$value['subcatogory_id']); ?>">Edit</a></button> 
              <button class="btn btn-danger"><a class="text-white"  onclick="deletesubcategory(this,'<?php echo $value['subcatogory_id'];?>')">Delete</a></button> 
            </td>
            </tr>
          <?php }
        } ?>  
      </tbody>
    </table>
  </div>
</div>

<script type="text/javascript">
  function deletesubcategory(t,id){

    if (confirm('Are you sure you want to delete this SubCategory ?')) {
        $.ajax({
            type: "POST",     
            url:"<?php echo base_url('admin/deletesubcategory');?>",
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