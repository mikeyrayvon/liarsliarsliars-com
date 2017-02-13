<?php /* Template Name: Discog */ get_header(); ?>

<style>
body {
background-image: url('<?php the_field('bgimg'); ?>');
}
</style>

<!-- wrapper -->
	<div class="wrapper">

	<main role="main">
	<div class="timeline"></div>
		<!-- section -->
		<section>

			<div class="page-title"><h1><?php bloginfo('name'); ?> <?php the_title(); ?></h1></div>

		<?php query_posts( 'post_type=discog'); ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="section-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a></div>
				<span class="date"><?php $post_date = mysql2date("Y", $post->post_date_gmt); echo $post_date; ?></span>
				<div class="datepeg"></div>
				
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				
				
					<div class="album-cover-list">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $url; ?>" /></a></div>
				

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

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
