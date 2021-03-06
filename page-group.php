<?php 
  /* 
  Template name: Группа сущностей
  Template Post Type: page
  */
?>



<?php get_header(); ?>

<section class="content">
  <div class="container">

    <?php if ( have_posts() ) { ?>
      <?php while ( have_posts() ) { the_post(); ?>

        <style>.content__caption:before {content: '<?php echo mb_substr(get_the_title(),0,1); ?>';}</style>
        <h1 class="section-caption content__caption">Полезные сервисы</h1>

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

      <?php } ?>
    <?php } ?>

  </div>
</section>

<?php get_footer(); ?>