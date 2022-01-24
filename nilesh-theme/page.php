   <?php get_header() ?>
   
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
                     <!-- Add your own contact form 7 plugin and add your short code in string area -->
                    <?php echo do_shortcode('[contact-form-7 id="38"] title="Contact form 1"')?>
               </div>
              <!--End contact form-->
              
       </div> <!-- /.container-->
   </section>
   <!--End Contact-->

   <?php get_footer() ?>