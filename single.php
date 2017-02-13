<?php get_header(); ?>

<style>
body {
background-image: url('<?php the_field('bgimg', 57); ?>');
}
</style>


<!-- wrapper -->
	<div class="wrapper">
	
	<main role="main">
	<!-- section -->
	<section class="single-news">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			

			<!-- post title -->
			<div class="page-title"><h1>
					<?php the_title(); ?>
			</h1></div>
			<!-- /post title -->

			<!-- post details -->
			<span class="date"><h1><?php the_time('F j, Y'); ?></h1></span>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<!-- ?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p-->

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

<!-- ?php get_sidebar(); ? -->

</div>
<!-- /wrapper -->

<?php get_footer(); ?>
