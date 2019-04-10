<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package testtheme
 */

?>


<article class="post">
	<header>
		<?php
		if ( is_singular() ) :
			the_title( '<h3>', '</h3>' );
		else :
			the_title( '<h3><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );
		endif;
			?>
		<div class="post-details">
			<i class="fa fa-user"></i> <?php the_author(); ?>
			<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
			<i class="fa fa-folder"></i> <?php the_category(', ') ?>
			<i class="fa fa-tags"></i> Tagged <?php the_tags() ?>
			<div class="post-comments-badge">
				<a href=""><i class="fa fa-comments"></i> <?php comments_number(0, 1, '%') ?></a>
			</div><!-- post-comments-badge -->
		</div><!-- post-details -->
	</header>
			<?php if ( has_post_thumbnail() ) {
				?>
				<div class="post-image">
				<?php
		    the_post_thumbnail();
		    ?>
	</div><!-- post-image -->
		    <?php
		} ?>
	<div class="post-excerpt">
		<p><?php the_excerpt() ?></p>
	</div><!-- post-excerpt -->
</article><!-- post -->
