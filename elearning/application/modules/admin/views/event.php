<section class="breadcrumb breadcrumb_bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="breadcrumb_iner">
                     <div class="breadcrumb_iner_item text-center wow bounceInDown" data-wow-delay=".25s" data-wow-duration="1.5">
                        <h2>Events</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

   
      <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar" id="event_list">
                      <?php 
                           foreach($event as $value)
                           { 
                            $t = strtotime($value['edate_time']);
                            $date = date('d',$t);
                            $month = date('M',$t);
                            ?>

                              <article class="blog_item">
                            <div class="blog_item_img wow bounceInLeft" data-wow-delay="0s" data-wow-duration="2s">
                                <img class="card-img rounded-0" src="<?= base_url('/assets/userfile/event/'.$value['image']);?>" alt="">
                                <a href="javascript:void(0)" class="blog_item_date">
                                    <h3><?php echo $date; ?></h3>
                                    <p><?php echo $month; ?></p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="javascript:void(0)">
                                    <h2 class="wow bounceInLeft" data-wow-delay="0.25s" data-wow-duration="2s"><?php echo $value['name'] ?></h2>
                                </a>
                                <div class="clearfix wow bounceInLeft" data-wow-delay="1s" data-wow-duration="2s">
                                  <a href="<?php echo base_url('home/eventdetail/').$value['event_id']?>" class="button rounded-0 w-50 float-right clearfix btn_1 text-center" style="color:#fff!important;">Read more</a>
                                </div>
                            </div>
                        </article> 






                           <?php }
                      ?>
                                       
                    </div>
                    <nav class="blog-pagination justify-content-center d-flex">
                      <ul class="pagination">
                          <?php if($total_page>1){ ?>
            <div class="row" id="event_pagination">
                <script>
                 
                    $(document).ready(function(){
                      

//                        var form = $("#without_login_search").serialize();
                        $('#event_pagination').bootpag({
                            total: <?php echo $total_page; ?>,
                           

                        }).on("page", function(event, num){  
                            $.ajax({
                                type: 'post',
                                url:  '<?php echo base_url('home/next_page_event');?>',
                                data: {
                                    page_no:num,
                                },
                                success: function (responseData) {
                                    $("#event_list").html(responseData);
                                    jQuery('ul.pagination li').addClass('page-item');
                                    jQuery('ul.pagination a').addClass('page-link');
                                },
                                error: function (responseData) {
                                    console.log('Ajax request not recieved!');
                                }
                            });
                        });

                         jQuery('ul.bootpag li').addClass('page-item');
                   jQuery('ul.bootpag a').addClass('page-link');
                    });
                </script>
            </div>
        <?php } ?>

                            


                      </ul>
                  </nav>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="http://botmonster.com/jquery-bootpag/jquery.bootpag.js"></script>


