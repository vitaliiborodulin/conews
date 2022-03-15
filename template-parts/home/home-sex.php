<section class="beautiful">
  <div class="container">
    <h2 class="section-caption sex__caption title-animation-idle">Секс</h2>

    <?php $loop_second = new WP_Query(array(
        'posts_per_page' => 6,
        // 'offset'         => 1,
        // 'meta_key'       => 'views',
        // 'orderby'        => 'meta_value_num',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'cat'            => 196
    )); ?>

    <?php if ( $loop_second->have_posts() ): ?>

      <div class="beautiful__list">

        <?php while ( $loop_second->have_posts() ): $loop_second->the_post(); ?>

          <div class="item">
            <div class="item__image">
              <?php if ( has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                  <?php the_post_thumbnail('nc_blog_first'); ?>
                </a>
              <?php endif; ?>
            </div>
            <div class="item__descr">
              <h3 class="item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
          </div>

        <?php endwhile; ?>

      </div>

      <?php if ( $loop_second->max_num_pages > 1 ) :	?>
        <div class="more"><button class="btn btn-more"
        data-items="6"
        data-offset="6"
        data-max="<?php echo $loop_second->found_posts; ?>"
        data-cat="196"
        data-template="homebeau"
        data-theme="<?php echo get_template(); ?>"
        data-loading="Загружаем...">Загрузить еще</button></div>
      <?php endif; ?>

    <?php endif; wp_reset_postdata(); ?>

  </div>
</section>