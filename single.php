<?php get_header() ?>

<section class="section">
    <div class="containor">
        <div class="row">

    <?php 
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>
                

            <!-- Blog post -->
            <div class="col-md-8 col-sm-8">
				<div class="post-content">	
							<!-- Post Image -->
						<div class="post-img">
								<?php the_post_thumbnail('single-img') ?>
						 </div>
							<!-- /Post Image-->
							
							<!-- Post Meta-->
							<div class="post-meta">
                                <ul class="list-inline">
                                  <li><a href="#"><i class="fa fa-calendar"></i><?php the_date() ?></a> </li>
                                  <li><a href="#"><i class="fa fa-user"></i><?php the_author() ?></a></li>
                                  <li><a href="#"><i class="fa fa-comments"></i><?php echo get_comments_number() ?></a> </li>
                                </ul>
							</div>
							<!-- /Post Meta-->
							
							<!-- Post Description -->
							<div class="post-description">							
								<h3><?php the_title() ?></h3>
								<p>
								<?php the_content() ?> 
								</p>
                                
                                <blockquote><?php the_content() ?></blockquote>
						    </div>
                        
                </div>	<!-- /Post Description -->

            </div>
            <?php }} ?>
            <!-- /Blog post -->
            <?php get_sidebar() ?>
        </div>  <!-- /row -->
    </div>
</section>





<?php get_footer() ?>