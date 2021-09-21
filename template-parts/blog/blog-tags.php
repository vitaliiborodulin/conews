<section class="tags">
  <div class="container">
    <h2 class="visually-hidden">Теги</h2>

    <?php $post_ids = get_objects_in_term( get_query_var( 'cat' ), 'category' );
      if ( ! empty( $post_ids ) && ! is_wp_error( $post_ids ) ) {
        $tags = wp_get_object_terms( $post_ids, 'post_tag' );
        if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) {
    ?>
    <ul class="tags__list">
      <?php foreach( $tags as $tag ) { ?>
        <li class="tags__item title-animation-idle"><a href="<?php echo get_term_link( $tag, 'post_tag' ); ?>"><?php echo $tag->name; ?></a></li>
      <?php } ?>
    </ul>
      <?php } ?>
    <?php } ?>

  </div>
</section>