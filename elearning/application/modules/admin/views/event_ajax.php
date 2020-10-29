<?php 
      if(!empty($event))

           {

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

          <?php 
              }
            }
          ?>