<section class="beautiful">
  <div class="container">

    <div class="beautiful__top">

      <?php $loop_first = new WP_Query(array(
          'posts_per_page' => 1,
          // 'offset'         => 1,
          // 'meta_key'       => 'views',
          // 'orderby'        => 'meta_value_num',
          'orderby'        => 'date',
          'order'          => 'ASC',
          'cat'            => 4
      )); ?>

      <?php if ( $loop_first->have_posts() ) { ?>

        <?php while ( $loop_first->have_posts() ) { $loop_first->the_post(); ?>

          <div class="beautiful__top-left title-animation-idle">
            <h2 class="section-caption beautiful__caption"><?php the_title(); ?></h2>
            <a href="<?php the_permalink(); ?>" class="btn btn-more btn-read beautiful__top-btn">Читать далее</a>
          </div>
          <div class="beautiful__top-right title-animation-idle">
            <div class="beautiful__top-excerpt"><?php the_excerpt(); ?></div>
            <div class="beautiful__top-info">
              <div class="beautiful__top-views"><?php echo get_post_meta( get_the_ID(), 'views', true ); ?></div>
              <div class="beautiful__top-cat">
                <a href="<?php echo get_category_link(4); ?>"><?php echo get_cat_name(4); ?></a>
              </div>
            </div>
          </div>

        <?php } ?>

      <?php } wp_reset_postdata(); ?>

    </div>

    <?php $loop_second = new WP_Query(array(
        'posts_per_page' => 3,
        'offset'         => 1,
        // 'meta_key'       => 'views',
        // 'orderby'        => 'meta_value_num',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'cat'            => 4
    )); ?>

    <?php if ( $loop_second->have_posts() ): ?>

      <div class="beautiful__list">

        <?php while ( $loop_second->have_posts() ): $loop_second->the_post(); ?>

          <div class="item">
            <div class="item__image">
              <?php if ( has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                  <?php the_post_thumbnail('nc_blog_first'); ?>
                </a>
              <?php } ?>
            </div>
            <div class="item__descr">
              <h3 class="item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
          </div>

        <?php endwhile; ?>

      </div>

      <?php	//if ( $wp_query->max_num_pages > 1 ) :	?>
        <div class="more"><button class="btn btn-more"
        data-items="3"
        data-offset="3"
        data-max="30"
        data-cat="4"
        data-template="homebeau"
        data-theme="<?php echo get_template(); ?>"
        data-loading="Загружаем...">Загрузить еще</button></div>
      <?php //endif; ?>

    <?php endif; wp_reset_postdata(); ?>

  </div>
</section>