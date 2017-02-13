<?php get_header(); ?>

<style>
body {
background-image: url('<?php the_field('bgimg'); ?>');
}
</style>

<!-- wrapper -->
	<div class="wrapper">
	
	<main role="main">
	<!-- section -->
	<section class="single-discog">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<!-- post title -->
				<div class="page-title"><h1>
					<?php the_title(); ?>
					(<?php $post_date = mysql2date("Y", $post->post_date_gmt); echo $post_date; ?>)
				</h1></div>
			<!-- /post title -->

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail(); ?>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<div class="album-spotify">
			
				<?php the_field('spotify'); ?>
			</div>
			<div class="album-video">
				<?php the_field('video_embed'); ?>
			</div>
			
			<?php
				if( have_rows('album_buy') ):
				echo '<div class="album-buy"><div class="buy-links"><ul>';
					while ( have_rows('album_buy') ) : the_row();
						echo '<li><a href="';
						the_sub_field('link');
						echo '" target="_blank">';
						the_sub_field('text');
						echo '</a></li>';
					endwhile;
				echo '</ul></div>';
				the_post_thumbnail();
				echo '</div>';
				else :
				endif;
			?>
			
			<?php the_content(); // Dynamic Content ?>
			
			
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php // get_sidebar(); ?>

</div>
<!-- /wrapper -->

<?php get_footer(); ?>
