<section class="content">
  <div class="container">

    <?php if ( have_posts() ): ?>
      <?php while ( have_posts() ): the_post(); ?>

        <h1 class="section-caption content__caption"><?php the_title(); ?></h1>

        <div class="content__above">
          <?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
          
          <div class="content__info">
            <span class="content__views">
              <?php echo get_post_meta( get_the_ID(), 'views', true ); ?>
            </span>
            <span class="content__time">
              <?php echo get_the_time('j.m.Y, G:i') ?>
            </span>
          </div>
        </div>
        
        <div class="content__entry">

          <?php the_content(); ?>
          <?php edit_post_link( 'Редактировать', '<p>', '</p>' ); ?>

        </div>

        <div class="tags title-animation-idle" >
          <?php the_tags( '','',''); ?>
        </div>
        
        <div class="content__share">
          <div class="content__share-title">Понравилась статья? Поделись ей!</div>
          <script async src="https://yastatic.net/share2/share.js"></script>
          <div class="ya-share2" data-curtain data-shape="round" data-services="vkontakte,facebook,telegram,whatsapp"></div>
        </div>

        <!-- <div class="comments">
          <h2 class="comments__title">Комментарии</h2>
          <?php //echo do_shortcode('[wpdiscuz_comments]'); ?>
        </div> -->

      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>