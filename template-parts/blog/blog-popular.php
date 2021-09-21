<section class="bpopular">
  <div class="container">
    <h2 class="section-caption bpopular__caption title-animation-idle">Популярные в категории <?php single_cat_title(); ?></h2>
    
    <?php if ( function_exists('dimox_breadcrumbs') ) dimox_breadcrumbs(); ?>

    <div class="bpopular__content">

      <?php $catID = get_query_var( 'cat' ); ?>

      <?php $loop_first = new WP_Query(array(
          'posts_per_page' => 1,
          'meta_key'       => 'views',
          'orderby'        => 'meta_value_num',
          'order'          => 'DESC',
          'cat'            => $catID,
      )); ?>

        <?php if ( $loop_first->have_posts() ) { ?>

          <?php while ( $loop_first->have_posts() ) { $loop_first->the_post(); ?>

            <div class="bpopular__first">

              <div class="bpopular__first-wrapper">
                <div class="bpopular__first-image">
                  <?php if ( has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                      <?php the_post_thumbnail('nc_blog_first'); ?>
                    </a>
                  <?php } ?>
                </div>
                <div class="bpopular__first-title">
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
              </div>

              <div class="bpopular__first-excerpt"><?php the_excerpt(); ?></div>

            </div>

          <?php } ?>

        <?php } wp_reset_postdata(); ?>

      <?php $loop_second = new WP_Query(array(
          'posts_per_page' => 5,
          'offset'         => 1,
          'meta_key'       => 'views',
          'orderby'        => 'meta_value_num',
          'order'          => 'DESC',
          'cat'            => $catID,
      )); ?>

      <?php if ( $loop_second->have_posts() ) { ?>

        <div class="bpopular__list">

          <?php while ( $loop_second->have_posts() ) { $loop_second->the_post(); ?>

            <div class="bpopular__item">
              <div class="bpopular__image">
                <?php if ( has_post_thumbnail()) { ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <?php the_post_thumbnail('nc_blog'); ?>
                  </a>
                <?php } ?>
              </div>
              <div class="bpopular__text">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="bpopular__excerpt"><?php the_excerpt(); ?></div>
              </div>
            </div>

          <?php } ?>

        </div>

      <?php } wp_reset_postdata(); ?>

    </div>
  </div>
</section>