<?php /* Template Name: Homepage */ get_header(); ?>

<style>
#wrap {
background-image: url('<?php the_field('bgimg'); ?>');
}
</style>

<!-- wrap -->
<div id="wrap">

<!-- wrapper -->
	<div class="wrapper">

	<main role="main">

		<!-- section -->
		<section class="news">

		<?php query_posts( 'posts_per_page=5' ); ?>

				<?php get_template_part('loop'); ?>

		<?php wp_reset_query(); ?>

		</section>
		<!-- /section -->
	</main>

</div>
<!-- /wrapper -->

</div>
<!-- /wrap -->

<?php get_footer(); ?>
