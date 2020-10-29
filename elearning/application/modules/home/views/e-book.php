<style>

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

.mainsidebar {
width: 80%;
float: left;

}
.pdf_form{
width: 100%;
display: inline-block;
text-align: center;
padding: 60px 0px;
border: 1px solid;
margin-top: 40px;
margin-bottom: 40px;

}
.pdf_form1{
width:50%;
display:inline-block;
margin:0 auto;
}
.pdfinput{
width:100%;
padding:8px;
}
.pdf_paid_dropmenu{

width:50%;
display:inline-block;
margin:0 auto; 
text-align:right;
}
.text_a{
text-align:left;
}
.box_ab{
width:100%;
display:inline-block;
padding:20px 0px;
}
.sbtn{
text-align:left; 
margin-top: 20px;
}
.sbtn1{
padding: 8px 16px;
color: #fff;
background: #90ee90;
}
.pdfdrop_a{
top: 0%;
position: absolute;
left: 364px;
z-index: 1000;
display: none;
float: left;
min-width: 160px;
padding: 5px 0;
margin: 2px 0 0;
font-size: 14px;
text-align: left;
list-style: none;
background-color: #fff;
background-clip: padding-box;
border: 1px solid rgba(0, 0, 0, .15);
border-radius: 4px;
box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
} 
.btnleft{
float:left;
margin-right: 10px;

}
.paid_amount{
font-size: 20px;
padding: 20px;
}
.self_notes{
width: 100%;
display: inline-block;
text-align: center;
padding: 60px 0px;
border: 1px solid;
margin-top: 40px;
margin-bottom: 40px;
}
.self_notes1{
width:50%;
display:inline-block;
margin:0 auto;  
}
.veiwbtn{
width: 100%;
float: left;
text-align: right;
margin: 35px 0px;
}
.veiwbtn a {
background: #90ee90;
color: #fff;
padding: 8px 9px;   
}

@media screen and (max-height: 450px) {
.sidebar {padding-top: 15px;}
.sidebar a {font-size: 18px;}
}

</style>
<script type="text/javascript">



	function adddoc(doc) 
	{
       $("#doc_type").val(doc);
    }

    function payment(p) 
	{
        if(p==1)
        {
        	$("#paditype").css("display", "block");

        }else{
        	$("#paditype").css("display", "none");
        }
    }



      
</script>
<div class="mainsidebar">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="prs_upcome_tabs_wrapper">
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="#best" aria-controls="best" role="tab" data-toggle="tab" onclick="adddoc(1)">PDF</a>
</li>
<li role="presentation"><a href="#hot" aria-controls="hot" role="tab" data-toggle="tab" onclick="adddoc(2)">Audio Book</a>
</li>

<!-- <li role="presentation"><a href="#trand" aria-controls="trand" role="tab" data-toggle="tab" onclick="adddoc(4)">Topper Copy</a>
</li>
<li role="presentation"><a href="#trand" aria-controls="trand" role="tab" data-toggle="tab" onclick="adddoc(5)">Syllabus</a>

</li> -->
</ul>
</div>

<!-- sidebar pdf_form -->

<div class="veiwbtn">
     <a  href="<?php  echo base_url('home/alldocumentlist');?>">Veiw all</a>
</div>

   <div class="pdf_form">
       
     <form  method="post" action="<?php echo base_url('home/adddocument') ?>" enctype="multipart/form-data">
         
        <div class="pdf_paid_dropmenu">
            
         <div class="dropdown">
          <button class="btn  dropdown-toggle dp_btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-caret-down dp_btn_i" aria-hidden="true"></i>

          </button>
          
        </div>
            
            
         </div>
         
         
      <div class="pdf_form1" >
                   
        <div class="row">
          <div class="box_ab">
          <div class="col-md-4 col-sm-4 col-xs-12 text_a">
            <label for="fname">Title</label>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <input type="text" required name="title" placeholder="title" class="pdfinput">
            <input type="hidden" value="1" id="doc_type" name="doc_type">
          </div>
          </div>
          <div class="box_ab">
          <div class="col-md-4 col-sm-4 col-xs-12 text_a">
            <label for="fname">Choose File</label>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <input type="file" id="images" name="images" class="pdfinput">
          </div>
          </div>
          <div class="box_ab">
          <div class="col-md-4 col-sm-4 col-xs-12 text_a">
            <label for="fname">Date</label>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
              <input type="date" id="date" required name="date" class="pdfinput">
          </div>
          </div>
          <div class="box_ab">
          <div class="col-md-4 col-sm-4 col-xs-12 text_a">
            <label for="payment_type">Payment</label>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12" style="text-align:left">
              <input type="radio" name="payment_type" value="1" onclick="payment(1)">
              <label for="vehicle1"> Paid</label><br>
              <input type="radio" name="payment_type" value="0" onclick="payment(0)">
              <label for="vehicle2"> Unpaid</label><br>

          </div>
          </div>

          <div class="box_ab" id="paditype" style="display:none">
          <div class="col-md-4 col-sm-4 col-xs-12 text_a">
            <label for="fname">Amout</label>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <input type="text" id="fname" name="Amout" placeholder="Amout" class="pdfinput">
 
          </div>
          </div>
          
          <div class="box_ab">
          <div class="col-md-4 col-sm-4 col-xs-12 text_a">
            <label for="fname">Tag</label>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12">


          	  <textarea id="w3review" name="tags" rows="4" cols="50" placeholder="enter the tag">
 
			</textarea> 
              

          </div>
          </div>
          <!-- <div class="box_ab">
          <div class="col-md-4 col-sm-4 col-xs-12 text_a">
            <label for="fname">Select</label>
          </div>
           <div class="col-md-8 col-sm-8 col-xs-12">
                <select name="cars" id="share" class="pdfinput" >
                  <option value="volvo">Private</option>
                  <option value="saab">public</option>
                </select>
          </div>
          </div> -->
          <div class="col-md-3 col-sm-3 col-xs-3 sbtn">
            
            <input type="submit" value="Submit" class="sbtn1">
          </div>
        </div>
      </div>
      </form>
   </div>
   
<!-- sidebar  pdf_form  close --> 

<!-- sidebar  selfnotes_form  --> 
 
      
<!-- sidebar  selfnotes_form close --> 
  
</div>
</div>
</div>

<!-- sidebar with tab close -->





