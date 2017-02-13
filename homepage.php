<?php /* Template Name: Homepage */ get_header(); ?>

<style>
#wrap {
background-image: url('<?php the_field('bgimg'); ?>');
}
</style>

	<!-- intro -->	
		<div id="bg"></div>
		<div class="block">
			<img src="<?php echo get_template_directory_uri(); ?>/img/svg/liars-type.svg" id="liars">
			<img src="<?php echo get_template_directory_uri(); ?>/img/svg/mess-type.svg" id="mess">
			
		</div>
		<div id="introspacer"></div>
	<!-- /intro -->
		
	<!-- promo video -->
		<div class="promo">
			<?php the_field('video_embed'); ?>
		</div>
	<!-- /promo video -->
	
<!-- wrap -->
<div id="wrap">

<!-- buymess -->
<?php
$args = array('post_type' => 'discog');
$the_query = new WP_Query( $args );
if( $the_query->have_posts() ):
$the_query->the_post(); ?>
<div class="buymess">
	<div>
		<div>
			<div class="album-buy"><div class="buy-links">
					<ul>
					<?php
						while ( have_rows('album_buy') ) : the_row(); 
							echo '<li><a href="';
							the_sub_field('link');
							echo '" target="_blank">';
							the_sub_field('text');
							echo '</a></li>';
						endwhile;
					echo '</ul></div>'; 
					the_post_thumbnail(); ?>
			</div>
		</div>
	</div>
</div>
<?php else : endif; ?>
<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>


<!-- /buymess -->

<!-- wrapper -->
	<div class="wrapper">

	<main role="main">
	
		<!-- section -->
		<section class="soundcloud">
			<?php the_field('soundcloud'); ?>
			<div class="section-title"><a href="http://soundcloud.com/liarsliarsliars">
			<h2><?php bloginfo('name'); ?> Soundcloud</h2></a></div>
		</section>
		<!-- /section -->

		<!-- section -->
		<section id="instagram">
			<div id="slides"></div>
			<div class="section-title"><a href="http://instagram.com/liarsliarsliars">
			<h2><?php bloginfo('name'); ?> Instagram</h2></a></div>
		</section>
		<!-- /section -->

		<!-- section -->
		<section class="news">
	
		<?php query_posts( 'posts_per_page=5' ); ?>
			
				<?php get_template_part('loop'); ?>
				
			
		<?php wp_reset_query(); ?>
		
		<?php
			$count_posts = wp_count_posts();
			$published_posts = $count_posts->publish;
			if( $published_posts > 5 ) { ?>
			<div class="pagination">
				<a class="page-numbers" href="<?php bloginfo('url'); ?>/?page_id=57">More news →</a>
			</div>
		<?php } 
			if( $published_posts > 1 ) { ?>
				<div class="section-title"><h2>Updates</h2></div>
		<?php } ?>

			
		</section>
		<!-- /section -->
	</main>

<?php // get_sidebar(); ?>

</div>
<!-- /wrapper -->

</div>
<!-- /wrap -->

<script>

function cycleImages(){
      var $active = $('#slides .active');
      var $next = ($active.next().length > 0) ? $active.next() : $('#slides div:first');
      $next.css('z-index',2);//move the next div up the pile
      $active.fadeOut(1500,function(){//fade out the top div
	  	  $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the div
          $next.css('z-index',3).addClass('active');//make the next div the top one
      });
    }
    
$(document).ready(function(){


// run every 7s
setInterval('cycleImages()', 4000);
})
</script>





		


<?php get_footer(); ?>