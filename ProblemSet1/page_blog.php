<?php /* Template Name: blog */ ?>
<?php get_header(); ?>

  <section id="blog" class="container">
    <div class="center">
      <h2>特别专题</h2>
      <p class="lead">这里列出了一些较为特殊的植物种类，或许并不常见，但是知道有这么多神奇的生物存在，也是件非常幸运的事。</br>
	  如果你想购买一些热门绿植装点居室，可以点击<a href="http://dev-xuexuting.pantheonsite.io/gallery/" style="color:#c6b2c8">“常见品种”</a>查看。</p>
    </div>



      <div class="blog">
        <div class="col-md-8">
        <div class="blog-item">
          <div class="row">
            <div class="col-sm-2 text-center">
            </div>
            <div class="col-sm-11 blog-content">

			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
  					'post_type' => array('blogarticle'),
 					 'post_status' => 'publish',
 					 'order' => 'DESC',
 					 'orderby' => 'date',
 					 'posts_per_page' => 6,
 					 'paged' => $paged,
											);

						// WP_Query
			$eq_query = new WP_Query( $args );
			if ($eq_query->have_posts()) : // The Loop
					?>
			<div class="wp-easy-query">
			<div class="wp-easy-query-posts">
			<div class="">
			<?php
			while ($eq_query->have_posts()): $eq_query->the_post();
			?>

   			<h2 style="text-align:center;color:#6D8188"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   			<p class="entry-meta" style="text-align:center;color:#9a769d"><?php the_time("F d, Y"); ?></p>
				<h3  style="color:#4e585b"><?php the_excerpt(); ?></h3>
			<?php endwhile; wp_reset_query(); ?>
			</div>
			</div>
			<?php include(EQ_PAGING); ?>
			</div>
			<?php endif; ?>

                   <!-- Pager -->
                      <ul class="pager">
                          <li class="next">
                              <a href="#">Older Posts →</a>
                          </li>
                      </ul>
                  </div>
              </div>
             </div>
     	</div>
              </div>




          <!--/.blog-item-->


        </div>
        <!--/.col-md-8-->

        <aside class="col-md-4">
          <div class="widget search">
            <form role="form">
              <input type="text" class="form-control search_box" autocomplete="off" placeholder="搜索内容">
            </form>
          </div>
          <!--/.search-->



          <div class="widget blog_gallery">
            <h3 style="color:#6D8188">多肉之色</h3>

              <div class="col-xs-12 col-sm-6 "  style="padding: 10px">
                  <h3><a href="https://baike.baidu.com/item/%E8%8B%AF%E5%B7%B4%E8%92%82%E6%96%AF"  target="_blank"  style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 苯巴蒂斯</a></h3>
                <div class="recent-work-wrap">
                  <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/benba.jpg" alt="">
                  <div class="overlay">
                    <div class="recent-work-inner">
                      <h3><a href="https://baike.baidu.com/item/%E8%8B%AF%E5%B7%B4%E8%92%82%E6%96%AF"  target="_blank">苯巴蒂斯</a></h3>

                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 " style="padding: 10px">
                  <h3><a href="https://baike.baidu.com/item/%E6%99%9A%E9%9C%9E/22105132"  target="_blank" style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 晚霞</a></h3>
                <div class="recent-work-wrap">
                  <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/wanxia.jpg" alt="">
                  <div class="overlay">
                    <div class="recent-work-inner">
                      <h3><a href="https://baike.baidu.com/item/%E6%99%9A%E9%9C%9E/22105132"  target="_blank">晚霞</a></h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 "  style="padding: 10px">
                  <h3><a href="https://baike.baidu.com/item/%E4%B9%8C%E6%9C%A8/17157813"  target="_blank" style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 乌木</a></h3>
                <div class="recent-work-wrap">
                  <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/wumu2.jpg" alt="">
                  <div class="overlay">
                    <div class="recent-work-inner">
                      <h3><a href="https://baike.baidu.com/item/%E4%B9%8C%E6%9C%A8/17157813"  target="_blank">乌木</a></h3>
                    </div>
                  </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 "  style="padding: 10px">
                <h3><a href="https://baike.baidu.com/item/%E5%A2%A8%E8%A5%BF%E5%93%A5%E5%B7%A8%E4%BA%BA"  target="_blank" style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 墨西哥巨人</a></h3>
              <div class="recent-work-wrap">
                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/juren.jpg" alt="">
                <div class="overlay">
                  <div class="recent-work-inner">
                    <h3><a href="https://baike.baidu.com/item/%E5%A2%A8%E8%A5%BF%E5%93%A5%E5%B7%A8%E4%BA%BA"  target="_blank">墨西哥巨人</a></h3>
                  </div>
                </div>
              </div>
          </div>

          <div class="col-xs-12 col-sm-6 "  style="padding: 10px">
            <h3><a href="https://baike.baidu.com/item/%E7%BA%A2%E8%9C%A1%E4%B8%9C%E4%BA%91"  target="_blank" style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 红冬云</a></h3>
            <div class="recent-work-wrap">
              <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/dongyun.jpg" alt="">
              <div class="overlay">
                <div class="recent-work-inner">
                  <h3><a href="https://baike.baidu.com/item/%E7%BA%A2%E8%9C%A1%E4%B8%9C%E4%BA%91"  target="_blank">红冬云</a></h3>
                </div>
              </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 "  style="padding: 10px">
            <h3><a href="https://baike.baidu.com/item/%E5%90%89%E5%A8%83%E5%A8%83/17699586#viewPageContent"  target="_blank" style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 吉娃娃</a></h3>
          <div class="recent-work-wrap">
            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/jiwawa.jpg" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="https://baike.baidu.com/item/%E5%90%89%E5%A8%83%E5%A8%83/17699586#viewPageContent"  target="_blank">吉娃娃</a></h3>
              </div>
            </div>
          </div>
      </div>

      <div class="col-xs-12 col-sm-6 "  style="padding: 10px">
          <h3><a href="https://baike.baidu.com/item/%E7%B4%AB%E7%BD%97%E5%85%B0%E5%A5%B3%E7%8E%8B"  target="_blank" style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 紫罗兰女王</a></h3>
        <div class="recent-work-wrap">
          <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/ziluolan2.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="https://baike.baidu.com/item/%E7%B4%AB%E7%BD%97%E5%85%B0%E5%A5%B3%E7%8E%8B"  target="_blank">紫罗兰女王</a></h3>
            </div>
          </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 "  style="padding: 10px">
        <h3><a href="https://baike.baidu.com/item/%E7%9A%AE%E6%B0%8F%E7%9F%B3%E8%8E%B2?fromtitle=%E8%93%9D%E7%9F%B3%E8%8E%B2&fromid=6617821"  target="_blank"  style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 蓝石莲</a></h3>
      <div class="recent-work-wrap">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/lanshilian4.jpg" alt="">
        <div class="overlay">
          <div class="recent-work-inner">
            <h3><a href="https://baike.baidu.com/item/%E7%9A%AE%E6%B0%8F%E7%9F%B3%E8%8E%B2?fromtitle=%E8%93%9D%E7%9F%B3%E8%8E%B2&fromid=6617821"  target="_blank">蓝石莲</a></h3>
          </div>
        </div>
      </div>
  </div>
  <div class="col-xs-12 col-sm-6 "  style="padding: 10px">
    <h3><a href="https://baike.baidu.com/item/%E9%BB%9B%E6%AF%94/16913244#viewPageContent"  target="_blank" style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 黛比</a></h3>
    <div class="recent-work-wrap">
      <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/daibi.jpg" alt="">
      <div class="overlay">
        <div class="recent-work-inner">
          <h3><a href="https://baike.baidu.com/item/%E9%BB%9B%E6%AF%94/16913244#viewPageContent"  target="_blank">黛比</a></h3>
        </div>
      </div>
    </div>
</div>
<div class="col-xs-12 col-sm-6 "  style="padding: 10px">
    <h3><a href="https://baike.baidu.com/item/%E8%8D%89%E7%8E%89%E9%9C%B2"  target="_blank" style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 草玉露</a></h3>
  <div class="recent-work-wrap">
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/caoyulu.jpg" alt="">
    <div class="overlay">
      <div class="recent-work-inner">
        <h3><a href="https://baike.baidu.com/item/%E8%8D%89%E7%8E%89%E9%9C%B2"  target="_blank">草玉露</a></h3>
      </div>
    </div>
  </div>
</div>
<div class="col-xs-12 col-sm-6 "  style="padding: 10px">
    <h3><a href="https://www.drlmeng.com/fiona.html"  target="_blank"  style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 菲欧娜</a></h3>
  <div class="recent-work-wrap">
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/feiouna.jpg" alt="">
    <div class="overlay">
      <div class="recent-work-inner">
        <h3><a href="https://www.drlmeng.com/fiona.html"  target="_blank">菲欧娜</a></h3>
      </div>
    </div>
  </div>
</div>

<div class="col-xs-12 col-sm-6 "  style="padding: 10px">
    <h3><a href="https://baike.baidu.com/item/%E9%9B%A8%E7%87%95%E5%BA%A7"  target="_blank"  style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 雨燕座</a></h3>
  <div class="recent-work-wrap">
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/yuyanzuo.jpg" alt="">
    <div class="overlay">
      <div class="recent-work-inner">
        <h3><a href="https://baike.baidu.com/item/%E9%9B%A8%E7%87%95%E5%BA%A7"  target="_blank">雨燕座</a></h3>
      </div>
    </div>
  </div>
</div>

<div class="col-xs-12 col-sm-6 "  style="padding: 10px">
  <h3><a href="https://baike.baidu.com/item/%E5%B1%B1%E5%9C%B0%E7%8E%AB%E7%91%B0/9332069"  target="_blank"   style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 山地玫瑰</a></h3>
  <div class="recent-work-wrap">
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/shandimeigui.jpg" alt="">
    <div class="overlay">
      <div class="recent-work-inner">
        <h3><a href="https://baike.baidu.com/item/%E5%B1%B1%E5%9C%B0%E7%8E%AB%E7%91%B0/9332069"  target="_blank">山地玫瑰</a></h3>
      </div>
    </div>
  </div>
</div>

<div class="col-xs-12 col-sm-6 "  style="padding: 10px">
      <h3><a href="https://baike.baidu.com/item/%E7%86%8A%E7%AB%A5%E5%AD%90"  target="_blank"  style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 熊童子</a></h3>
  <div class="recent-work-wrap">
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/xiongtongzi.jpg" alt="">
    <div class="overlay">
      <div class="recent-work-inner">
        <h3><a href="https://baike.baidu.com/item/%E7%86%8A%E7%AB%A5%E5%AD%90"  target="_blank">熊童子</a></h3>
      </div>
    </div>
  </div>
</div>

<div class="col-xs-12 col-sm-6 "  style="padding: 10px">
    <h3><a href="https://baike.baidu.com/item/%E5%8D%A1%E7%BD%97%E6%8B%89colorata"  target="_blank"  style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 卡罗拉</a></h3>
  <div class="recent-work-wrap">
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/kaluola2.jpg" alt="">
    <div class="overlay">
      <div class="recent-work-inner">
        <h3><a href="https://baike.baidu.com/item/%E5%8D%A1%E7%BD%97%E6%8B%89colorata"  target="_blank">卡罗拉</a></h3>
      </div>
    </div>
  </div>
</div>

<div class="col-xs-12 col-sm-6 "  style="padding: 10px">
    <h3><a href="https://baike.baidu.com/item/%E8%8A%B1%E6%9C%88%E5%A4%9C/4480629"  target="_blank"   style="color:#9a769d"><i class="fab fa-pagelines" style="color:#9a769d"></i> 花月夜</a></h3>
  <div class="recent-work-wrap">
    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/huayueye.jpg" alt="">
    <div class="overlay">
      <div class="recent-work-inner">
        <h3><a href="https://baike.baidu.com/item/%E8%8A%B1%E6%9C%88%E5%A4%9C/4480629"  target="_blank">花月夜</a></h3>
      </div>
    </div>
  </div>
</div>
          </div>
          </div>
          <!--/.blog_gallery-->
        </aside>
      </div>
      <!--/.row-->
    </div>
  </section>
  <!--/#blog-->



     	<?php get_footer(); ?>
