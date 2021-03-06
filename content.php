<div <?php post_class(); ?>>
	<?php do_action( 'post_before' ); ?>
	<article>
		<?php ct_founder_featured_image(); ?>
		<div class='post-header'>
			<h2 class='post-title'><?php the_title(); ?></h2>
			<?php get_template_part('content/post-meta'); ?>
		</div>
		<div class="post-content">
	        <?php the_content(); ?>
	        <?php wp_link_pages(array('before' => '<p class="singular-pagination">' . __('Pages:','founder'), 'after' => '</p>', ) ); ?>
	    </div>
	<?php get_template_part( 'sns' ); ?> 
		<div class="post-after">
			<?php do_action( 'post_after' ); ?>
			<?php get_template_part('content/post-categories'); ?>
			<?php get_template_part('content/post-tags'); ?>
			<?php get_template_part('content/post-nav'); ?>
		</div>
	</article>

</div>