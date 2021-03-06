<div <?php post_class(); ?>>
	<?php do_action( 'page_before' ); ?>
	<article>
		<?php ct_founder_featured_image(); ?>
		<div class='post-header'>
			<h1 class='post-title'><?php the_title(); ?></h1>
		</div>
		<div class="post-content">
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => '<p class="singular-pagination">' . __('Pages:','founder'), 'after' => '</p>', ) ); ?>
		</div>
		<?php do_action( 'page_after' ); ?>
	</article>
	<?php get_template_part( 'sns' ); ?> 
</div>