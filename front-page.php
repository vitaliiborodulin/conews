<?php get_header(); ?>

  	<h1 class="visually-hidden">Новости, статьи и обзоры по косметологии и эстетической медицине<?php //bloginfo('name'); ?></h1>

	<!-- new posts from entire site -->
	<?php get_template_part( 'template-parts/home/home-slider' ); ?> 
	<!-- end slider -->

	<!-- new posts from cosmetology rubric -->
	<?php get_template_part( 'template-parts/home/home-cosmetology' ); ?>
	<!-- end life -->

	<!-- new posts from beautiful rubric -->
	<?php get_template_part( 'template-parts/home/home-beautiful' ); ?>
	<!-- end beautiful -->

	<!-- new posts from relations rubric -->
	<?php get_template_part( 'template-parts/home/home-relations' ); ?>
	<!-- end relations -->

	<!-- new posts from life rubric -->
	<?php get_template_part( 'template-parts/home/home-life' ); ?>
	<!-- end life -->

	<!-- most popular posts in separate categories -->
	<?php get_template_part( 'template-parts/home/home-popular' ); ?>
	<!-- end popular -->

	<!-- new posts from health rubric -->
	<?php get_template_part( 'template-parts/home/home-health' ); ?>
	<!-- end health -->

	<!-- new posts from sport rubric -->
	<?php get_template_part( 'template-parts/home/home-sport' ); ?>
	<!-- end health -->

	<!-- instagram -->
	<?php get_template_part( 'template-parts/home/home-instagram' ); ?>
	<!-- end instagram -->

	<!-- get all tags -->
	<?php get_template_part( 'template-parts/home/home-tags' ); ?>
	<!-- end all tags -->

<?php get_footer(); ?>