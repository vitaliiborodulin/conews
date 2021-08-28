<section class="news">
  <div class="container">
    <h2 class="section-caption news__caption">Результаты поиска по запросу: "<?php the_search_query(); ?>"</h2>

    <?php if (have_posts()) : ?>

      <div class="news__content">

        <?php while (have_posts()) : the_post(); ?>

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

      <?php	if ( $wp_query->max_num_pages > 1 ) :	?>
        <div class="more"><button class="btn btn-more"
        data-items="8"
        data-offset="8"
        data-search="<?php echo get_search_query(); ?>"
        data-max="<?php echo $wp_query->found_posts; ?>"
        data-theme="<?php echo get_template(); ?>"
        data-loading="Загружаем...">Загрузить еще</button></div>
      <?php endif; ?>

    <?php else : echo "Извините по Вашему результату ничего не найдено"; ?>

    <?php endif; ?>

  </div>
</section>