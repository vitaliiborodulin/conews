<section class="same">
  <div class="container">
		
		<?php $categories = get_the_category($post->ID);

if ($categories) {
      $category_ids = array();
      foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id; 

      $loop = new WP_Query([
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID), //Не выводить текущую запись
        'showposts'=> 3, // Указываем сколько похожих записей выводить
        'ignore_sticky_posts'=> 1, //было caller_get_posts,
        'orderby'  => 'rand'
      ]); 
			
      if( $loop->have_posts() ) { ?>
			
				<h2 class="section-caption same__caption title-animation-idle">Читайте также</h2>

        <div class="same__list">

          <?php while ($loop->have_posts()) {  $loop->the_post(); ?>

          <div class="same__item title-animation-idle">
            <div class="same__image">
              <?php if ( has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                  <?php the_post_thumbnail('nc_blog_first'); ?>
                </a>
              <?php } ?>
            </div>
            <div class="same__descr">
              <h3 class="same__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
          </div>

          <?php } ?>

        </div>

      <?php } wp_reset_postdata(); ?>

    <?php } ?>
  </div>
</section>