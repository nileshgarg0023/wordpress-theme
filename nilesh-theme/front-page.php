
<?php get_header()?>
      
        <!-- Start Slider  -->
        <section id="home" class="home">
<?php echo do_shortcode( '[smartslider3 slider="4]' ) ?>
        </section>
          <!-- End Slider  -->


  <!--Start Features-->
  <section  id="about" class="section">
       <div class="container">
           <div class="row">
              
              <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                      <i class="fa fa-leaf"></i>
                      </div>
                      <!-- Required custom post field plugin in wordpress -->
                      <div class="features-info">
                         <h4><?php the_field('home_about_title');?></h4>
                         <p><?php the_field('home_about_des');?></p>
                      </div>
                      <!-- Required custom post field plugin in wordpress -->
                  </div>
              </div>
 
               <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                      <i class="fa fa-paper-plane"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Illustration</h4>
                         <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                      </div>
                  </div>
              </div>

               <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                     <i class="fa fa-life-saver"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>App Development</h4>
                         <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                      </div>
                  </div>
              </div>
 
               <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                      <i class="fa fa-paint-brush"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Web Development</h4>
                         <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                      </div>
                  </div>
              </div>

              <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                     <i class="fa fa-line-chart"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Digital Design</h4>
                         <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                      </div>
                  </div>
              </div>

              <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                      <i class="fa fa-gift"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Fully Responsive</h4>
                         <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                      </div>
                  </div>
              </div>

              
           </div> <!-- /.row-->
       </div> <!-- /.container-->
  </section> 
  <!--End Features-->

 <?php if(get_field('$counter-sec-bg')); ?>
  <!-- Start Facts-->
  <!-- custom post field for background img -->
  <section id="facts" class="section parallax" style="background-image:url(<?php the_field('counter_bg_img');?>)">
    <!-- custom post field for background img -->
    <div class="overlay"></div>
       <div class="container">
           <div class="row">
                  
                <!-- Start Item-->
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                    <span><i class="icon-happy"></i></span>
                    <h3>841</h3>
                    <span>Happy Clients</span>
                </div>
                <!-- End Item-->
 
                 <!-- Start Item-->
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                 <span><i class="icon-presentation"></i></span>
                    <h3>800</h3>
                    <span>Projects</span>
                </div>
                <!-- End Item-->

                 <!-- Start Item-->
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                 <span><i class="icon-target"></i></span>
                    <h3>1232</h3>
                    <span>Lines of Code</span>
                </div>
                <!-- End Item-->

                 <!-- Start Item-->
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                 <span><i class="icon-trophy"></i></span>
                    <h3>300</h3>
                    <span>Awards Won</span>
                </div>
                <!-- End Item-->

             </div> <!-- /.row -->
       </div> <!-- /.container -->
  </section>
  <!--End Facts-->

  <section id="works" class="section">
      <div class="container">
          <div class="row">
              <div class="title-box text-center">
                  <h2 class="title">Latest Portfolio</h2>
              </div>

              <?php
                $query = new WP_Query(array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 1
                ));

                query_posts($query);
                while($query->have_posts()) : $query->the_post();
            endwhile;

                ?>

              <div class="col-md-4">
                   <div class="blog-post">
                         <div class="post-media">
                             <a href="<?php the_permalink() ?>">
							 <?php the_post_thumbnail();?>
                             </a>
                         </div>
                       <div class="post-desc">
                           <h4><?php the_title() ?></h4>
                           <h5><?php the_date() ?>/ <?php echo get_comments_number() ?></h5>
                           <p><?php the_excerpt() ?></p>
                            <a href="<?php the_permalink() ?>" class="btn btn-gray-border">Read More</a>
                       </div>
                   </div>
               </div>
               <?php wp_reset_query() ?>
          </div>
      </div>
  </section>


 
  <!--Start Services-->
   <section id="services" class="section">
        <div class="container">
            <div class="row">
            
                 <div class="title-box text-center">
                    <h2 class="title">Services</h2>
                 </div>
              
               <!--Services Item-->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-basket"></i> </div> 
                       <div class="services-desc">
                          <h4>Development</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
                <!--End services Item-->
                
                <!--Services Item-->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-shield"></i> </div> 
                       <div class="services-desc">
                          <h4>Web Design</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
               <!--End services Item-->
               
               <!--Services Item-->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-hotairballoon"></i> </div> 
                       <div class="services-desc">
                          <h4>SEO</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
                <!--End services Item-->
                
               <!--Services Item -->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-global"></i> </div> 
                       <div class="services-desc">
                          <h4>Graphic Design</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
               <!--End services Item-->
               
               <!--Services Item-->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-target"></i> </div> 
                       <div class="services-desc">
                          <h4>Content Writing</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
              <!--End services Item-->
              
               <!--Services Item -->
               <div class="col-md-4">
                   <div class="services-box">
                       <div class="services-icon"> <i class="icon-aperture"></i> </div> 
                       <div class="services-desc">
                          <h4>HTML Basic</h4>
                          <p>Lorem ipsum dolor consectetur dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore adipisicing. </p>
                       </div>
                   </div>
               </div>
               <!--End services Item-->
              
            </div> <!--/.row-->
        </div> <!--/.container-->
   </section> 
  <!--End Services-->


 
    <!--Start video-->
  <section id="video" class="section parallax">
        <div class="overlay"></div>
       <div class="container">
           <div class="row">
           
                 <div class="title-box text-center white">
                    <h2 class="title">Video</h2>
                 </div>
             
             <div class="col-md-6">
                 <div class="video-caption-main">
                      <!--Video caption #1-->
                      <div class="video-caption">
                          <div class="video-icon">
                              <i class="fa fa-briefcase"></i>
                          </div>
                          <div class="video-caption-info">
                              <h4>Take a look at  this video to see how we work.</h4>
                              <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                          </div>
                      </div>
                      
                       <!--Video caption #2-->
                      <div class="video-caption">
                          <div class="video-icon">
                              <i class="fa fa-glass"></i>
                          </div>
                          <div class="video-caption-info">
                              <h4>The programming language of ios apps</h4>
                              <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                          </div>
                      </div>

                      <!--Video caption #3-->
                      <div class="video-caption">
                          <div class="video-icon">
                              <i class="fa fa-rocket "></i>
                          </div>
                          <div class="video-caption-info">
                              <h4>Take a look at  this video to see how we work.</h4>
                              <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                          </div>
                      </div>
                      
                 </div>
             </div>
            <!-- End Video caption-->
             
            <div class="col-md-6">
                <div class="play-video">
                  <iframe src="http://player.vimeo.com/video/115919099?title=0&amp;byline=0&amp;portrait=0&amp;color=fff" allowfullscreen></iframe>
                </div>
            </div> 
               
           </div> <!-- /.row-->
       </div> <!-- /.container-->
  </section>
  <!--End video-->


   <!-- Start blog-->
   <section id="blog" class="section">
       <div class="container">
           <div class="row">
           
                 <div class="title-box text-center">
                    <h2 class="title">Latest Blog</h2>
                 </div>

                 <?php
                 $blogs_args = array(
                     'post_type' => 'post',
                     'posts_per_page' => 3
                 );

                 $blog_posts = new WP_Query($blogs_args);
                    while($blog_posts->have_posts()){
                        $blog_posts->the_post();   
                ?>
                
               <!-- Start Blog item #1-->
               <div class="col-md-4">
                   <div class="blog-post">
                         <div class="post-media">
                             <a href="<?php the_permalink() ?>">
							 <?php the_post_thumbnail();?>
                             </a>
                         </div>
                       <div class="post-desc">
                           <h4><?php the_title() ?></h4>
                           <h5><?php the_date() ?>/ <?php echo get_comments_number() ?></h5>
                           <p><?php the_excerpt() ?></p>
                            <a href="<?php the_permalink() ?>" class="btn btn-gray-border">Read More</a>
                       </div>
                   </div>
               </div>

                   <?php } ?>

           </div> <!--/.row-->
       </div> <!--/.container-->
   </section>
   <!-- End blog-->
   
 

   
   
   <!--Start Contact-->
   <section id="contact" class="section parallax">
      <div class="overlay"></div>
       <div class="container">
           <div class="row">
           
                 <div class="title-box text-center white">
                    <h2 class="title">Contact</h2>
                 </div>
             </div>

               <!--Start contact form-->
               <div class="col-md-8 col-md-offset-2 contact-form">
               
                    <div class="contact-info text-center">
                       <p>123 4567 890</p>
                       <p>123 lorem ipsum, 4th floor, lorem, ipsum </p>
                       <p>mail@demo.com </p>
                    </div>
                     
                     <form method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <input class="form-control" id="name" placeholder="Full Name" type="text">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" id="email" placeholder="Your Email" type="email">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" id="subject" placeholder="Subject" type="text">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" id="message" rows="7" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-green">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
               </div>
              <!--End contact form-->
              
       </div> <!-- /.container-->
   </section>
   <!--End Contact-->
   
   <?php get_footer( )?>
 