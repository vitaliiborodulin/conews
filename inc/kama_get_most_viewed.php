<?php
/**
 * Функция для вывода записей по произвольному полю содержащему числовое значение.
 *
 * Пример вызова:
 *     kama_get_most_viewed( "num=5 &key=views &cache=1 &format={a}{title}{/a} - {date:j.M.Y} ({views}) ({comments})" );
 *
 * @param string $args {
 *
 *     @type string     $key    (views)  Ключ произвольного поля, по значениям которого будет проходить выборка.
 *     @type int|string $num    (10)     Количество постов или offset для пагинации - 10 или 20,10.
 *     @type string     $order  (desc)   Порядок вывода записей. Может быть: asc|desc.
 *     @type string     $format  ('')    Формат выводимых ссылок. По дефолту такой: ({a}{title}{/a}).
 *                                       Можно использовать, например, такой:
 *                                       {date:j.M.Y} - {a}{title}{/a} ({views}, {comments}).
 *     @type int        $days   (0)      Число последних дней, записи которых нужно вывести
 *                                       по количеству просмотров. Если указать год (2011,2010),
 *                                       то будут отбираться популярные записи за этот год.
 *     @type int        $cache  (0)      Использовать кэш или нет.  Варианты 1 - кэширование включено, 0 - выключено (по дефолту).
 *     @type string     $echo   (1)      Выводить на экран или нет. Варианты 1 - выводить (по дефолту), 0 - вернуть для обработки (return).
 *     @type string     $return (string) Может быть: string|array. Позволяет вернуть массив объектов постов, а не готовый HTML.
 * }
 *
 * @return bool|int|mixed|string
 *
 * @ver 1.2
 */
function kama_get_most_viewed( $args = '' ){
	global $wpdb, $post;

	parse_str( $args, $i );

	$num    = isset( $i['num'] )    ? preg_replace( '/[^0-9,\s]/', '', $i['num'] ) : 10; // 20,10 | 10
	$key    = isset( $i['key'] )    ? sanitize_text_field($i['key']) : 'views';
	$order  = isset( $i['order'] ) && in_array( strtoupper($i['order']), [ 'ASC', 1 ] )  ? 'ASC' : 'DESC';
	$days   = isset( $i['days'] )   ? (int) $i['days'] : 0;
	$format = isset( $i['format'] ) ? stripslashes( $i['format'] ) : '';
	$cache  = isset( $i['cache'] );
	$echo   = isset( $i['echo'] )   ? (int) $i['echo'] : 1;
	$return = isset( $i['return'] ) ? $i['return'] : 'string';

	if( $cache ){
		$cache_key = (string) md5( __FUNCTION__ . serialize( $args ) );

		//получаем и отдаем кеш если он есть
		if( $cache_out = wp_cache_get( $cache_key ) ){
			if( $echo )
				return print( $cache_out );
			else
				return $cache_out;
		}
	}

	if( $days ){
		$AND_days = "AND post_date > CURDATE() - INTERVAL $days DAY";
		if( strlen( $days ) == 4 )
			$AND_days = "AND YEAR(post_date)=$days";
	}

	$esc_key = esc_sql( $key );

	$sql = "SELECT *, (pm.meta_value+0) AS views
	FROM $wpdb->posts p
		LEFT JOIN $wpdb->postmeta pm ON (pm.post_id = p.ID)
	WHERE pm.meta_key = '$esc_key' $AND_days
		AND p.post_type = 'post'
		AND p.post_status = 'publish'
	ORDER BY views $order LIMIT $num";

	$posts = $wpdb->get_results( $sql );
	if( ! $posts )
		return false;

	if( 'array' === $return )
		return $posts;

	$out = $x = '';
	preg_match( '!{date:(.*?)}!', $format, $date_m );

	foreach( $posts as $pst ){

		$x = ( $x == 'li1' ) ? 'li2' : 'li1';

		if( $pst->ID == $post->ID )
			$x .= ' current-item';

		$Title    = $pst->post_title;
		$a1       = '<a href="' . get_permalink( $pst->ID ) . "\" title=\"{$pst->views} просмотров: $Title\">";
		$a2       = '</a>';
		$comments = $pst->comment_count;
		$views    = $pst->views;

		if( $format ){

			$date    = apply_filters( 'the_time', mysql2date( $date_m[ 1 ], $pst->post_date ) );
			$Sformat = str_replace( $date_m[ 0 ], $date, $format );
			$Sformat = str_replace( [ '{a}', '{title}', '{/a}', '{comments}', '{views}' ], [ $a1, $Title, $a2, $comments, $views, ], $Sformat );
		}
		else
			$Sformat = $a1 . $Title . $a2;

		$out .= "<li class=\"$x\">$Sformat</li>";
	}

	if( $cache )
		wp_cache_add( $cache_key, $out );

	if( $echo )
		echo $out;
	else
		return $out;
}
/**
 * 1.2 - параметр return + небольшой рефакторинг
 * 1.1 - в num можно указывать offset
 */