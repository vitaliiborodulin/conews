<section class="publications">
  <div class="container">

    <h1 class="section-caption publications__caption">Публикации по тегу <?php single_tag_title(); ?></h1>

    <?php $tag = get_query_var( 'tag' ); ?>

    <?php $loop = new WP_Query([
      'posts_per_page' => 6,
      'orderby'     => 'date',
      'order'       => 'DESC',
      'post_type'   => 'post',
      'tag'         => $tag,
    ]); ?>


    <?php if ( $loop->have_posts() ) : ?>

    <div class="publications__content">

      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="item">
          <div class="item__image">
            <?php if ( has_post_thumbnail()) { ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                <?php the_post_thumbnail('nc_blog_first'); ?>
              </a>
            <?php } ?>
          </div>
          <div class="item__text">
            <h3 class="item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="item__excerpt"><?php the_excerpt(); ?></div>
          </div>
        </div>

      <?php endwhile; ?>

    </div>

    <?php	//if ( $wp_query->max_num_pages > 1 ) :	?>
      <!-- <div class="more"><button class="btn btn-more"
      data-items="6"
      data-offset="6"
      data-max="<?php //echo $wp_query->found_posts; ?>"
      data-cat="<?php //echo get_query_var( 'cat' ); ?>"
      data-theme="<?php //echo get_template(); ?>"
      data-loading="Загружаем...">Загрузить еще</button></div> -->
    <?php //endif; ?>

    <?php endif; wp_reset_postdata(); ?>



  </div>
</section>