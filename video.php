<?php /* Template Name: Video */ get_header(); ?>

<style>
body {
background-image: url('<?php the_field('bgimg'); ?>');
}
</style>

<!-- wrapper -->
<div class="wrapper">

	<main role="main">
		<!-- section -->
		<section id="<?php the_title(); ?>">

			<div class="page-title"><h1><?php bloginfo('name'); ?> <?php the_title(); ?></h1></div>

		<?php query_posts( 'post_type=video'); ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
			 style="background-image:url('<?php echo $url; ?>')">
				<div class="section-title"><h2><?php the_title(); ?></h2></div>
				<div class="video-embed"><?php the_field('video_embed'); ?></div>
				<?php the_content(); ?>

				<br class="clear">

				<?php // edit_post_link(); ?>

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


</div>
<!-- /wrapper -->


<?php get_footer(); ?>
