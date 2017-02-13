<?php /* Template Name: News */ get_header(); ?>

<style>
body {
background-image: url('<?php the_field('bgimg', 57); ?>');
}
</style>

<!-- wrapper -->
	<div class="wrapper">

	<main role="main">

		<!-- section -->
		<section class="all-news news">

			<!--h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1-->

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
			
		</section>
		<!-- /section -->
	</main>

<?php // get_sidebar(); ?>

</div>
<!-- /wrapper -->

<?php get_footer(); ?>