<?php get_header(); ?>

  	<h1 class="visually-hidden"><?php bloginfo('name'); ?></h1>

	<!-- top posts from publications rubric -->
	<?php get_template_part( 'template-parts/home-slider' ); ?> 
	<!-- end slider -->

	<!-- top posts from beautiful rubric -->
	<?php get_template_part( 'template-parts/home-beautiful' ); ?>
	<!-- end beautiful -->

	<!-- top posts from life rubric -->
	<?php get_template_part( 'template-parts/home-life' ); ?>
	<!-- end life -->

	<!-- most popular posts in separate categories -->
	<?php get_template_part( 'template-parts/home-popular' ); ?>
	<!-- end popular -->

	<!-- new posts from entire site -->
	<?php get_template_part( 'template-parts/home-news' ); ?>
	<!-- end news -->

	<!-- instagram -->
	<?php get_template_part( 'template-parts/home-instagram' ); ?>
	<!-- end instagram -->

<?php get_footer(); ?>