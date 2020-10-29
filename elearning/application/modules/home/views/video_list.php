<style type="text/css">
.todo_section{
width:100%;
display:inline-block;
padding:30px 0px;
}
.todo_section h3{
font-size: 35px;
padding:25px 0px;
}

.todo_row{
width:100%;
display:inline-block;
text-align:center;
}
.todo_row h4{
background: #90ee90;
padding: 11px;
color: #fff;
font-size: 24px;
font-weight: 800;
}
.todo_row h1{
background: #CCC;
font-size: 35px;
color: #fff;
font-weight: 800;
padding: 28px;

}
.list_a{
padding-left: 0px;
padding-right: 0px;
margin-left: -1px;
width: 100%!important; 
margin-top: 20px;
}
.table-responsive{
display: block;
width: 100%;
overflow-x: auto;
}
.wek_99 {
overflow-y: auto;
height: 100% !important;
}
.goslatable11 {
background-color: #0074ae;
color: #ffffff;
font-family: 'Roboto', sans-serif;
font-size: 16px;
font-weight: 400;
padding: 15px 2px;
}
.table_t{
padding:20px;

}
.goslatable1_2 {
text-align: center;
padding: 33px;
background: #ccc;
border: 3px solid#fff;
}
.widthset
{
  width: 70%;
  padding: 92px;

}
.goslatable1_2 a i{
font-size:30px;
font-weight:400;
}
.container_1{
width: 970px;
}
.pdfinput{
width:100%;
padding:8px;
}
.box_ab {
width: 100%;
float: left;
padding: 15px 0;
}
.modal_width{
width:500px;
}
.modal_text{
font-size: 18px !important;
color: #332f2f!important; 
}
.modalbtn{
color: #fff;
background-color: #5cb85c;
border-color: #4cae4c;
padding: 13px 16px;
border: navajowhite;
font-size: 14px;
margin-top: 15px;
} 
.modal_mid{
left: -134px;
}


.goal_section{

width:100%;
display:inline-block;
padding:30px 0px;
}
.goal_section h3 {
font-size: 35px;
padding: 25px 0px;
}
.text_mt{
color: #3ad23a;
font-size: 22px;
font-variant: 400 !important;
}
.veiwbtn{
width: 100%;
float: left;
text-align: right;
margin: 35px 0px;
}
.veiwbtn button {
background: #90ee90;
color: #fff;
padding: 8px 9px;   
}
-
@media screen and (max-height: 450px) {
.sidebar {padding-top: 15px;}
.sidebar a {font-size: 18px;}
}

.tabledata
{
    border: solid 1px;
    padding: 16px;
    text-align: center;
}
.sidebar {
height: 100%;
width:20%;
float: left;
z-index: 1;
top: 0;
left: 0;
background-color: #202020;
overflow-x: hidden;
padding-top: 16px;
}

.sidebar a {
padding: 25px 8px 25px 16px;
text-decoration: none;
font-size: 20px;
color: #949494;
display: block;
}

.sidebar a:hover {
color: #f1f1f1;
padding: 12px;

}


</style>




<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 widthset">
<div class="list_a">
<div class="table-responsive">
<div class="tbl_container wek_99">
 <?= $this->session->flashdata('msg'); ?>
    <table style="width:100%;">
<tbody>
<tr class="goslatable11">
<th class="table_t tabledata">#</th>
<th class="table_t tabledata">Title</th>
<th class="table_t tabledata">video View</th>
<th class="table_t tabledata">Thumbnail</th>
<th class="table_t tabledata">Action</th>
</tr>

   <?php if (!empty($user))
         {                                                
                $i=1;
                foreach ($user as $key => $value) {
                 
                     
                ?>
                <tr>

                <td class="tabledata"><?= $i++; ?></td>
                <td class="tabledata"><?= $value['title']; ?></td>
                <td  style="color: blue !important;text-decoration: underline;"  class="tabledata"><a  target="_blank" href="<?php echo base_url('admin/upload/'.$value['videos']); ?>">View</a></td>
                <td class="tabledata"><img src="<?php echo base_url('admin/upload/'.$value["thumbnail"]); ?>"  width="300px;" height="200px;"></td>
                <td class="tabledata"><a  href="<?= base_url('home/deletevideo/'.$value['id']); ?>" class="btn btn-danger" ><i class="fa fa-trash"></i></a></td>
                </tr>


                <?php  }

            } ?>









</tbody>
</table>

</div>
</div> 
</div> 

</div>


</div>




<!-- todolistclose-->
