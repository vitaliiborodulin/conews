<section class="content">
  <div class="container">

    <?php if ( have_posts() ) { ?>
      <?php while ( have_posts() ) { the_post(); ?>

        <style>.content__caption:before {content: '<?php echo mb_substr(get_the_title(),0,1); ?>';}</style>
        <h1 class="section-caption content__caption"><?php the_title(); ?></h1>
        
        
        <div class="content__entry">
          
          <?php the_content(); ?>
          <div><?php edit_post_link( 'Редактировать', '<p>', '</p>' ); ?></div>

        </div>

      <?php } ?>
    <?php } ?>

  </div>
</section>