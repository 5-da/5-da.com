<div <?php post_class(); ?>>
	<?php do_action( 'archive_post_before' ); ?>
	<article>
		<?php ct_founder_featured_image(); ?>
		<div class='post-header'>
			<?php do_action( 'sticky_post_status' ); ?>
			<h2 class='post-title'>
				<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
			</h2>
			<?php get_template_part('content/post-meta'); ?>
		</div>
		<div class="post-content">
			<?php ct_founder_excerpt(); ?>
		</div>
	</article>
	<?php get_template_part( 'sns' ); ?> 
	<?php do_action( 'archive_post_after' ); ?>
</div>