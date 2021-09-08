<section class="hpopular">
  <div class="container">
    <h2 class="section-caption hpopular__caption title-animation-idle">Популярные статьи</h2>

    <?php $loop = new WP_Query([
      'posts_per_page' => 6,
      'post_type'      => 'post',
      'meta_key'       => 'views',
      'orderby'        => 'meta_value_num',
      'order'          => 'DESC'
    ]);?>

    <?php if ( $loop->have_posts() ) : ?>

    <div class="hpopular__content">

      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="item">
          <div class="item__image">
            <?php if ( has_post_thumbnail()) { ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                <?php the_post_thumbnail('nc_blog_first'); ?>
              </a>
            <?php } ?>
          </div>
          <div class="item__descr">
            <div class="item__category">
              <a href="<?php $cat = get_the_category(); $catID = $cat[0]->cat_ID; echo get_category_link($catID); ?>">
                <?php echo get_cat_name($catID) ?>
              </a>
            </div>
            <h3 class="item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </div>
        </div>

      <?php endwhile; ?>

    </div>

    <?php	//if ( $wp_query->max_num_pages > 1 ) :	?>
        <div class="more"><button class="btn btn-more"
        data-items="6"
        data-offset="6"
        data-max="<?php echo 30 //$wp_query->found_posts; не корректно определяет максимум ?>" 
        data-theme="<?php echo get_template(); ?>"
        data-template="hpop"
        data-loading="Загружаем...">Загрузить еще</button></div>
      <?php //endif; ?>

    <?php endif; wp_reset_postdata(); ?>

  </div>
</section>