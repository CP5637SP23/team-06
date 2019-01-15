<?php

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if ( has_post_thumbnail() ) { ?>
	<figure class="featured-image index-image">
		<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
			<?php
			the_post_thumbnail('CreativeMinds-index-img');
			?>
		</a>
	</figure>
	<?php } ?>

	<div class="post__content">
		<header class="entry-header">
			<?php CreativeMinds_the_category_list(); ?>
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php CreativeMinds_posted_on(); ?>
			</div>
			<?php
			endif; ?>
		</header>

		<div class="entry-content">
			<?php
			$length_setting = get_theme_mod('length_setting');
			if ( 'excerpt' === $length_setting ) {
				the_excerpt();
			} else {
				the_content();
			}
			?>
		</div>

		<div class="continue-reading">
			<?php
			$read_more_link = sprintf(

				wp_kses( __( 'Continue reading %s', 'CreativeMinds' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			);
			?>

			<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
				<?php echo $read_more_link; ?>
			</a>
		</div>

	</div>
</article>
