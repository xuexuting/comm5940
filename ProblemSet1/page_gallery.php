<?php /* Template Name: gallery */ ?>

<?php get_header(); ?>

    <!-- Page Header -->

   <section id="services" class="service-item">
    <div class="container">
      <div class="center wow fadeInDown">
		 <h2>常见品种</h2>
		  <h3 style="color:#ecdeed">在这里，你可以查阅一些常见室内植物的简介、特性和栽培方法。
        如果你想购买一些热门绿植装点居室，可以点击<a href="http://dev-xuexuting.pantheonsite.io/gallery/" style="color:#c6b2c8">“常见品种”</a>查看。<br>
  			  如果想了解如何用植物将家中装点的更美观，欢迎点击<a href="http://dev-xuexuting.pantheonsite.io/page_howtoput/" style="color:#c6b2c8">“布置技巧”</a>来探索。
        </h3>
</div>


            </div>

</section>

    <!-- Main Content -->
   <section id="feature" class="transparent-bg" >
    <div class="container" >
      <div class="get-started  wow fadeInDown" style="background:#ffffff">
		    <div class="col-lg-8 col-md-10 mx-auto" style=" margin-left:16%;
    margin-right: 0px;" >
				<?php
$query = new AirpressQuery();
$query->setConfig("Default");
$query->table("Plant");


$events = new AirpressCollection($query);

foreach($events as $e){
echo
$e["Name"]."<br>
<h3 center><strong>".$e["Plant_Name"]."</h3></strong><br>
<img src='".$e["Images"]."'><br><br>
<strong>植物简介</strong>：".$e["Discription"]."<br>
<strong>植物大小</strong>：".$e["Plant_Size_copy"]."<br>
<strong>植物价格</strong>：".$e["Plant_Price_copy"]."<br>
<strong>栽培难度</strong>：".$e["Difficulty_Copy"]."<br>
<strong>光线要求</strong>：".$e["Light_Level_Copy"]."<br>
<strong>是否有毒</strong>：".$e["Pet_Friendly_Copy"]."<br>
<strong>栽培方法</strong>：".$e["Breed"]." <br>
<strong>植物功能</strong>：".$e["Function"]."<br><hr><br>";
}
?>

		  </div>


					<br>
		    <div class="clearfix" >         

		      <a class="btn btn-primary float-right" href="http://dev-xuexuting.pantheonsite.io/gallery/" style=" margin-left:45%;
    margin-right: 0px;">返回</a>
				</div>
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
