<?php
header('Content-Type: text/html; charset=utf-8');
require_once("../../../wp-load.php");

$offset = $_GET['offset'];
$items = $_GET['items'];
$category = $_GET['cat'] ?? '';
$search = $_GET['s'] ?? '';

$template = $_GET['template'] ?? '';

if ( $category ) $loop = new WP_Query(array(
	'posts_per_page' => $items,
	'offset' => $offset,
	'cat' => $category,
));

elseif ( $search ) $loop = new WP_Query(array(
	'posts_per_page' => $items,
	'offset' => $offset,
	's' => $search,
));

// beautiful cat на главной
elseif ( $template == 'homebeau' ) $loop = new WP_Query(array(
	'posts_per_page' => $items,
	'offset'         => $offset,
  'meta_key'       => 'views',
  'orderby'        => 'meta_value_num',
  'order'          => 'DESC',
  'cat'            => 4
));

// популярные на главной
elseif ( $template == 'hpop' ) $loop = new WP_Query(array(
	'posts_per_page' => $items,
	'offset'         => $offset,
  'post_type'      => 'post',
  'meta_key'       => 'views',
  'orderby'        => 'meta_value_num',
  'order'          => 'DESC'
));

else $loop = new WP_Query(array(
	'posts_per_page' => $items,
	'offset' => $offset,
));


if ( $loop->have_posts() ) : 
	$k = 0; while ( $loop->have_posts() ) : $loop->the_post(); $k++; ?>

    <?php if ( $category && $template == ''): // шаблон вывода постов на странице категории ?>

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
    
      <?php elseif ( $category && $template == 'homebeau' ): // шаблон вывода постов на главной cat beautiful ?>
  
        <div class="item">
          <div class="item__image">
            <?php if ( has_post_thumbnail()) { ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                <?php the_post_thumbnail('nc_blog_first'); ?>
              </a>
            <?php } ?>
          </div>
          <div class="item__descr">
            <h3 class="item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </div>
        </div>
    
    <?php elseif ( $search ): ?>
  
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
    
    <?php elseif ( $template == 'hpop' ): // шаблон вывода популярных на главной ?>

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
    
    <?php else: ?>

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

    <?php endif; ?>
    
	<?php endwhile; ?>
<?php endif; ?>