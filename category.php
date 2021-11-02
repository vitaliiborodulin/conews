<?php get_header(); ?>

	<h1 class="visually-hidden">
		<?php if( is_category() )	echo 'Категория ' . get_queried_object()->name . ' - Косметология и эстетическая медицина'; ?>
	</h1>

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