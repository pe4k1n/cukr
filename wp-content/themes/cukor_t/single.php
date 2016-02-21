<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<? get_cukor_img_url(); ?>
	<section class="no-padding" id="portfolio_item">
		<div class="container-fluid">
			<div class="row no-gutter">
				<h1 class="text-center"><?the_title();?></h1>
				<? echo get_post_img_array(); ?>
			</div>
		</div>
	</section>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
