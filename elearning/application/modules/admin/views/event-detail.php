<div class="modal" id="book-now">
        <div class="modal-dialog">
          <div class="modal-content">
            
            <div class="modal-header">
              <h4 class="modal-title" data-toggle="modal" data-target="#payment">Book-now</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
           
            <div class="modal-body login-box">
               <div style="margin-bottom: 10px;"id="msg"></div>

               <?php 

                if($event['amount']==0)
                  { ?>

                      <form class="contact_us_form row" id="form" method="post">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email address">
                </div>
                <?php
                 $member= $this->session->userdata('member');
                 if(!empty($member))
                 { ?>

                      <input type="hidden" name="user_id" value="<?php echo $member['user_id'];?>"> 

                <?php }
                ?>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Mobile number">
                </div>
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Street address">
                </div>
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" id="address_line2" name="address_line2" placeholder="Address line 2">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="state_name" name="state_name" placeholder="State/Province">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="city_name" name="city_name" placeholder="City">
                </div>
                <div class="form-group col-md-6 mb-4">
                    <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip/Postal Code">
                    <input type="hidden" name="event_id" value="<?php echo $event['event_id'];?>">
                </div>
                 <div class="form-group col-md-12 mb-10 text-center mt-3 mb-4">
                  <input type="submit" class="btn-rounded" value="Pay with a debit/credit card">
                </div>
              </form>

                <?php    
                  }else{ ?>

                        <form class="contact_us_form row"  method="post" action="<?php echo base_url('home/payevent'); ?>">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email address">
                </div>
                <?php
                 $member= $this->session->userdata('member');
                 if(!empty($member))
                 { ?>
                      <input type="hidden" name="user_id" value="<?php echo $member['user_id'];?>"> 

                <?php }else{ ?>

                      <input type="hidden" name="user_id" value="0"> 
               <?php  }
                ?>
                <input type="hidden" name="amount" value="<?php echo $event['amount']; ?>">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Mobile number">
                </div>
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Street address">
                </div>
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" id="address_line2" name="address_line2" placeholder="Address line 2">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="state_name" name="state_name" placeholder="State/Province">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="city_name" name="city_name" placeholder="City">
                </div>
                <div class="form-group col-md-6 mb-4">
                    <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip/Postal Code">
                    <input type="hidden" name="event_id" value="<?php echo $event['event_id'];?>">
                </div>
                 <div class="form-group col-md-12 mb-10 text-center mt-3 mb-4">
                  <input type="submit" class="btn-rounded" value="Pay with a debit/credit card">
                </div>
              </form>

                  <?php 
                  }
               ?>
            
                
              <div class="contact_us_form">
               
              </div>
            </div>
            
          </div>
        </div>
      </div>      
      <section class="breadcrumb breadcrumb_bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb_iner">
                     <div class="breadcrumb_iner_item text-center wow bounceInDown" data-wow-delay=".25s" data-wow-duration="1.5">
                        <h2>Event Details</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

   
      <section class="blog_area section_padding pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img wow bounceInLeft" data-wow-delay="0s" data-wow-duration="2s">
                                <img class="eventimg card-img rounded-0" src="<?= base_url('/assets/userfile/event/'.$event['image']);?>" alt="">
                                <a href="javascript:void(0)" class="blog_item_date">
                                  <?php 

                                      $t = strtotime($event['edate_time']);
                                      $date = date('d',$t);
                                      $month = date('M',$t);
                                  ?>
                                    <h3><?php echo $date; ?></h3>
                                    <p><?php echo $month; ?></p>
                                </a>
                                <div class="float-right mt-2">
                                  <a href="javascript:void(0)" class="mr-3">
                                    <i class="fa fa-video text-danger mr-1"></i> Live Streaming
                                  </a>
                                  <a href="javascript:void(0)" class="mr-3">
                                    <i class="fa fa-share text-danger mr-1"></i> Share
                                  </a>
                                </div>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="javascript:void(0)">
                                    <h2 class="wow bounceInLeft" data-wow-delay="0.25s" data-wow-duration="2s"><?php echo $event['name'];?></h2>
                                </a>
                                <ul class="blog-info-link mb-2 wow bounceInLeft" data-wow-delay=".5s" data-wow-duration="2s">
                                    <li><a href="javascript:void(0)"><i class="far fa-user"></i> By admin</a></li>
                                    <li><?php echo $event['location']; ?></a></li>
                                </ul>
                                <p class="wow bounceInLeft" data-wow-delay="0.75s" data-wow-duration="2s"><?php echo $event['event_desc']; ?></p>
                                <div class="clearfix wow bounceInLeft" data-wow-delay="1s" data-wow-duration="2s">
                                  <button class="button rounded-0 primary-bg text-white w-50 float-right clearfix btn_1" data-toggle="modal" data-target="#book-now" type="submit">Book</button>
                                </div>
                            </div>
                        </article>
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <script>
$( "#form" ).submit(function( event ) 
  {  
   event.preventDefault();
   $.ajax({   
    url: "<?php echo base_url('home/addbooking');?>",
    type: "POST",
    data: $("#form").serialize(),
    success: function(data)
    {
     $("#msg").addClass( "btn btn-success" );
     $("#msg").text(data);


    }
  });
});
</script>
      
   