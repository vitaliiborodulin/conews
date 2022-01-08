<section class="news news__sport">
  <div class="container">
    <h2 class="section-caption news__caption">Спорт</h2>

    <?php $loop = new WP_Query([
      'posts_per_page' => 8,
      'orderby'     => 'date',
      'order'       => 'DESC',
      'post_type'   => 'post',
			'cat'            => 18
    ]);?>

    <?php if ( $loop->have_posts() ) : ?>

      <div class="news__content">

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <div class="news__item title-animation-idle">
            <div class="news__image">
              <?php if ( has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                  <?php the_post_thumbnail('nc_blog_first'); ?>
                </a>
              <?php } ?>
            </div>
            <div class="news__descr">
              <h3 class="news__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
          </div>

          <?php endwhile; ?>

      </div>

      <?php if ( $loop->max_num_pages > 1 ) :	?>
        <div class="more"><button class="btn btn-more"
        data-items="8"
        data-offset="8"
        data-max="<?php echo $loop->found_posts; ?>" 
        data-cat="123"
				data-template="health"
        data-theme="<?php echo get_template(); ?>"
        data-loading="Загружаем...">Загрузить еще</button></div>
      <?php endif; ?>

    <?php endif; wp_reset_postdata(); ?>

  </div>
</section>
