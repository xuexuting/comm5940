<?php get_header(); ?>

    <!-- Page Header -->

    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
     if ( has_post_thumbnail() ) {
    $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
    echo '<section id="services" class="service-item" style="background-image:url('.$feat_image_url.');">';
         }
    	  endwhile;
             endif;
             ?>
             
    <div class="container">
      <div class="center wow fadeInDown">

		  <?php if (have_posts()) :
   					while (have_posts()) :
      	 				 the_post(); ?>
		  <h2><?php the_title(); ?></h2>
           <h3 class="post-meta"  style="text-align:center;color:#f9eaf9">Posted by
									   <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> on <?php the_date(); ?>	</h3>

			      <?php endwhile;
				endif; ?>
</div>


            </div>

</section>

    <!-- Main Content -->
   <section id="feature" class="transparent-bg">
    <div class="container" >
      <div class="get-started  wow fadeInDown">
		    <div class="col-lg-8 col-md-10 mx-auto" style=" margin-left:18%;
    margin-right: 0px;" >
				<?php if (have_posts()) :
   					while (have_posts()) :
      	 				 the_post(); ?>
			        <div class="post-preview">
							<h3 class="post-subtitle" >
                           		<?php the_content(); ?>
                        	</h3>

			      <?php endwhile;
				endif; ?>
		  </div>
				</div>
					<br>
		    <div class="clearfix" >         
          </div>
		      <a class="btn btn-primary float-right" href="#" style=" margin-left:45%;
    margin-right: 0px;">返回</a>
				</div>

	   </div>

    </section>

		    <!-- Pager -->

    <hr>

 <div class="container" >

<?php if (have_posts()) :
   					while (have_posts()) :
      	 				 the_post(); ?>
     <?php if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; ?>
    <?php endwhile;
				endif; ?>
</div>
    <?php get_footer(); ?>
