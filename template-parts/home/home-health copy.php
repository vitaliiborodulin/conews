<section class="news">
  <div class="container">
    <h2 class="section-caption news__caption">Здоровье</h2>

    <?php $loop = new WP_Query([
      'posts_per_page' => 8,
      'orderby'     => 'date',
      'order'       => 'DESC',
      'post_type'   => 'post',
			'cat'            => 123
    ]);?>

    <?php if ( $loop->have_posts() ) : ?>

      <div class="news__content">

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="news__item">
            <div class="news__image">
              <?php if ( has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                  <?php the_post_thumbnail('nc_blog_first'); ?>
                </a>
              <?php } ?>
              <div class="news__category">
                <a href="<?php $cat = get_the_category(); $catID = $cat[0]->cat_ID; echo get_category_link($catID); ?>">
                  <?php echo get_cat_name($catID) ?>
                </a>
              </div>
            </div>
            <div class="news__descr">
              <h3 class="news__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="news__date"><?php echo get_the_date(); ?></div>
            </div>
          </div>

          <?php endwhile; ?>

      </div>

      <?php	//if ( $wp_query->max_num_pages > 1 ) :	?>
        <div class="more"><button class="btn btn-more"
        data-items="8"
        data-offset="8"
        data-max="<?php echo 30 //$wp_query->found_posts; не корректно определяет максимум ?>" 
        data-cat="<?php echo get_query_var( 'cat' ); ?>"
        data-theme="<?php echo get_template(); ?>"
        data-loading="Загружаем...">Загрузить еще</button></div>
      <?php //endif; ?>

    <?php endif; wp_reset_postdata(); ?>

  </div>
</section>
