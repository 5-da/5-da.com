<?php
$date   = date_i18n( 'Y年n月j日 l H時i分', strtotime( get_the_date( 'r' ) ) );
/*  $author = get_the_author(); */
?>

<div class="post-meta">
	<p>
		<?php printf( esc_html_x( '公開日時 %1$s', 'founder' ), $date); ?>
	</p>
</div>
