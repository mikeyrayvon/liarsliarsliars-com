<?php
/* Template Name: Homepage */
/*
$sub = array_shift((explode(".",'sub.liarsliarsliars.com/')));
print_r($sub); die;
if ($sub == 'home') {
  header("Location: https://www.musicglue.com/liarsliarsliars");
  die();
}*/

get_header();
?>

<?php if(get_field('bgimg')): ?>
<style>
#wrap {
background-image: url('<?php the_field('bgimg'); ?>');
}
</style>
<?php endif; ?>

<!-- wrap -->
<div id="wrap">

<!-- wrapper -->
	<div class="wrapper">

	<main role="main">

		<!-- section -->
		<section id="home-videos-section">

		<?php if(get_field('homepage_videos')): ?>

			<ul>

			<?php while(has_sub_field('homepage_videos')): ?>

				<li class="home-video"><?php the_sub_field('embed'); ?></li>

			<?php endwhile; ?>

			</ul>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

</div>
<!-- /wrapper -->

</div>
<!-- /wrap -->

<?php get_footer(); ?>
