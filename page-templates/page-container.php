<?php
/*
Template Name: Page with Container
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-contasdfiner">
	<div class="main-grid">
		<main class="main-content-full-width">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		</main>
	</div>
</div>

<?php get_footer();
