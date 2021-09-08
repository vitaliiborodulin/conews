<section class="tags">
  <div class="container">
    <h2 class="visually-hidden">Теги</h2>

    <?php $tags = get_tags(array(
            // 'smallest'                  => 10, 
            // 'largest'                   => 22,
            // 'unit'                      => 'px', 
            'number'                    => 15,  
            'format'                    => 'flat',
            'separator'                 => " ",
            'orderby'                   => 'count', 
            'order'                     => 'DESC',
            'show_count'                => 1,
            'echo'                      => false
        )); ?>

    <ul class="tags__list">
      <?php foreach( $tags as $tag ) : ?>
        <li class="tags__item title-animation-idle"><a href="<?php echo get_term_link( $tag, 'post_tag' ); ?>"><?php echo $tag->name; ?></a></li>
      <?php endforeach; ?>
    </ul>

  </div>
</section>