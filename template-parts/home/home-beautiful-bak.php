<section class="beautiful">
  <div class="container">

    <div class="beautiful__top">

      <?php $loop = new WP_Query(array(
          'posts_per_page' => 4,
          // 'offset'         => 1,
          // 'meta_key'       => 'views',
          // 'orderby'        => 'meta_value_num',
          'orderby'        => 'date',
          'order'          => 'DESC',
          'cat'            => 4
      )); ?>

		<?php if ( $loop->have_posts() ) : ?>

			<?php while ( $loop->have_posts() ) : $loop->the_post(); if ($loop->current_post == 0): ?>

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

			<?php endif; endwhile; ?>

			<div class="beautiful__list">

				<?php while ( $loop->have_posts() ) : $loop->the_post(); if ($loop->current_post > 0): ?>

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

				<?php endif; endwhile; ?>

			</div>

			<?php	if ( $loop->max_num_pages > 1 ): ?>
        <div class="more"><button class="btn btn-more"
        data-items="4"
        data-offset="4"
        data-max="<?php echo $loop->found_posts; ?>" 
        data-theme="<?php echo get_template(); ?>"
        data-template="hpop"
        data-loading="Загружаем...">Загрузить еще</button></div>
      <?php endif; ?>

		<?php endif; ?>

  </div>
</section>