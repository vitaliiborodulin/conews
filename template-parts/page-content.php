<section class="content">
  <div class="container">

    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <h1 class="section-caption content__caption"><?php the_title(); ?></h1>
        
        <div class="content__entry">
          
          <?php the_content(); ?>
          <div><?php edit_post_link( 'Редактировать', '<p>', '</p>' ); ?></div>

        </div>

      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>