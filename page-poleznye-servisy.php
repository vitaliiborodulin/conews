<?php 
  /* 
  Template name: Группа сущностей
  Template Post Type: page
  */
?>

<?php get_header(); ?>

<section class="content">
  <div class="container">

    <?php if( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>

        <h1 class="section-caption content__caption">Полезные сервисы</h1>
				<?php if(  wp_sitemaps_get_server()->sitemaps_enabled() ) {
	echo 'ага, включены';
} ?>

        <?php $posts = get_posts([
                'numberposts' => -1,
                'orderby'     => 'menu_order title',
                'order'       => 'ASC',
                'post_type'   => 'page',
                // 'exclude'     => ''
                'post_parent'   => get_the_ID(),
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ]); ?>
        
        
        <div class="content__entry">
          
          <ul class="page-group__list">
            <?php foreach( $posts as $post ):  setup_postdata($post) ?>

              <li>
                <a href="<?php the_permalink() ?>"><?php the_title() ?> <?php the_excerpt() ?></a>
              </li>

            <?php endforeach; ?> 
            <?php wp_reset_postdata() ?>
          </ul>

        </div>

        <div class="content__share">
          <div class="content__share-title">Понравились сервисы? Поделись ими!</div>
          <script async src="https://yastatic.net/share2/share.js"></script>
          <div class="ya-share2" data-curtain data-shape="round" data-services="vkontakte,facebook,telegram,whatsapp"></div>
        </div>

      <?php endwhile; ?>
    <?php endif; ?>

    <div class="content__fb">
      <?php //echo do_shortcode('[cm_facebook_feed id="5"]'); ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>