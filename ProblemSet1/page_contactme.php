<?php /* Template Name: contactme*/ ?>
<?php get_header(); ?>

        <!-- Page Header -->



		    <div class="container">
		      <div class="center wow fadeInDown">

				  <?php if (have_posts()) :
		   					while (have_posts()) :
		      	 				 the_post(); ?>
				  <h2><?php the_title(); ?></h2>
		           <h3 class="post-meta"  style="text-align:center;color:#f9eaf9"></h3>
					      <?php endwhile;
						endif; ?>
		</div>
</div>

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

				</div>

	   </div>

    </section>




<?php get_footer(); ?>
