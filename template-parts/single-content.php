<section class="content">
  <div class="container">

    <?php if ( have_posts() ): ?>
      <?php while ( have_posts() ): the_post(); ?>

        <style>.content__caption:before {content: '<?php echo mb_substr(get_the_title(),0,1); ?>';}</style>
        <h1 class="section-caption content__caption"><?php the_title(); ?></h1>

        <?php if ( function_exists('dimox_breadcrumbs') ) dimox_breadcrumbs(); ?>
        
        <div class="content__entry">

          <?php the_content(); ?>
          <?php edit_post_link( 'Редактировать', '<p>', '</p>' ); ?>

        </div>

        <div class="tags">
          <?php the_tags( '','',''); ?>
        </div>
        
        <div class="content__share">
          <div class="content__share-title">Понравилась статья? Поделись ей!</div>
          <script async src="https://yastatic.net/share2/share.js"></script>
          <div class="ya-share2" data-curtain data-shape="round" data-services="vkontakte,facebook,telegram,whatsapp"></div>
        </div>

        <div class="comments">
          <h2 class="comments__title">Комментарии</h2>
          <?php echo do_shortcode('[wpdiscuz_comments]'); ?>
        </div>

      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>