<section class="slider">
  <!-- <div class="container-full"> -->

  <?php $loop = new WP_Query(array(
			'posts_per_page' => 5,
			'cat'            => '14',
      'meta_key'       => 'views',
			'orderby'        => 'meta_value_num',
	    'order'          => 'DESC'
		)); ?>

  <?php if ( $loop->have_posts() ) { ?>

    <!-- Slider main container -->
    <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->

        <?php while ( $loop->have_posts() ) { $loop->the_post(); ?>

          <div class="swiper-slide">
            <div class="swiper-image">
              <?php if ( has_post_thumbnail()) { ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <?php the_post_thumbnail('nc_blog_first'); ?>
                  </a>
                <?php } ?>
            </div>
            <div class="swiper-text">
              <h3><?php the_title(); ?></h3>
              <a href="<?php the_permalink(); ?>" class="swiper-btn">Подробнее</a>
            </div>
          </div>

        <?php } ?>

      </div>
    </div>

  <?php } ?>
  <!-- </div> -->
</section>