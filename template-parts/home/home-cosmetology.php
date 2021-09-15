<section class="life">
  <div class="life__wrapper">
    <div class="container">
      <div class="life__content">

      <?php $loop_first = new WP_Query(array(
          'posts_per_page' => 2,
          // 'meta_key'       => 'views',
          // 'orderby'        => 'meta_value_num',
          'orderby'     => 'date',
          'order'          => 'DESC',
          'cat'            => 14
      )); ?>

      <?php if ( $loop_first->have_posts() ): ?>

        <div class="life__cards">

          <?php while ( $loop_first->have_posts() ) : $loop_first->the_post(); ?>

            <div class="life__card">
              <?php if ( has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                  <?php the_post_thumbnail('nc_blog_first'); ?>
                </a>
              <?php } ?>
                <div class="life__text">
                  <h3 class="life__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <div class="life__descr"><?php the_excerpt(); ?></div>
                </div>
            </div>

          <?php endwhile; ?>

        </div>

      <?php endif; wp_reset_postdata(); ?>

      <?php $loop_second = new WP_Query(array(
        'posts_per_page' => 6,
        'offset'         => 2,
        // 'meta_key'       => 'views',
        // 'orderby'        => 'meta_value_num',
        'orderby'     => 'date',
        'order'          => 'DESC',
        'cat'            => 14
      )); ?>

        <div class="life__roll">
          <h2 class="section-caption cosmetology__caption title-animation-idle">Косметология</h2>

          <?php if ( $loop_second->have_posts() ): ?>

            <ul class="life__list">

              <?php while ( $loop_second->have_posts() ): $loop_second->the_post(); ?>

                <li class="title-animation-idle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

              <?php endwhile; ?>

              <li class="life__all title-animation-idle"><a href="<?php echo get_category_link('14'); ?>">Все статьи</a></li>

            </ul>

          <?php endif; wp_reset_postdata(); ?>

        </div>

      </div>
    </div>
  </div>
</section>