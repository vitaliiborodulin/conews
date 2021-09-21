<?php get_header(); ?>

	<!-- popular in cat-->
	<?php get_template_part( 'template-parts/blog/blog-popular' ); ?>
	<!-- end popular -->

	<!-- new post in cat -->
	<?php get_template_part( 'template-parts/blog/blog-publications' ); ?>
	<!-- end publications -->

	<!-- tags -->
	<?php get_template_part( 'template-parts/blog/blog-tags' ); ?>
	<!-- end tags -->

<?php get_footer(); ?>