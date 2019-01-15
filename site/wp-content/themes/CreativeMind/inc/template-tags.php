<?php

if ( ! function_exists( 'CreativeMinds_posted_on' ) ) :

function CreativeMinds_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}
	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);
	$posted_on = sprintf(
		esc_html_x( 'Published %s', 'post date', 'CreativeMinds' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	echo '<span class="posted-on"> ' . $posted_on . '</span>';

	if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo ' <span class="comments-link"><span class="extra">Discussion </span>';

		comments_popup_link( sprintf( wp_kses( __( 'Please Leave a Comment<span class="screen-reader-text"> on %s</span>', 'CreativeMinds' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(

			esc_html__( 'Edit %s', 'CreativeMinds' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		' <span class="edit-link"><span class="extra">Admin </span>',
		'</span>'
	);

}
endif;

if ( ! function_exists( 'CreativeMinds_entry_footer' ) ) :
function CreativeMinds_entry_footer() {
	// Hide tag text for pages.
	if ( 'post' === get_post_type() ) {

		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'CreativeMinds' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'CreativeMinds' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

}
endif;

/**
 * Display category list
 */

function CreativeMinds_the_category_list() {
	$categories_list = get_the_category_list( esc_html__( ', ', 'CreativeMinds' ) );
	if ( $categories_list && CreativeMinds_categorized_blog() ) {
		printf( '<span class="cat-links">' . esc_html__( '%1$s', 'CreativeMinds' ) . '</span>', $categories_list );
	}
}

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function CreativeMinds_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'CreativeMinds_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'CreativeMinds_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so CreativeMinds_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so CreativeMinds_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in CreativeMinds_categorized_blog.
 */
function CreativeMinds_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'CreativeMinds_categories' );
}
add_action( 'edit_category', 'CreativeMinds_category_transient_flusher' );
add_action( 'save_post',     'CreativeMinds_category_transient_flusher' );


/**
 * Post navigation (previous / next post) for single posts.
 */
function CreativeMinds_post_navigation() {
	the_post_navigation( array(
		'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'CreativeMinds' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Next post:', 'CreativeMinds' ) . '</span> ' .
			'<span class="post-title">%title</span>',
		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'CreativeMinds' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Previous post:', 'CreativeMinds' ) . '</span> ' .
			'<span class="post-title">%title</span>',
	) );
}

/**
 * Customize ellipsis at end of excerpts.
 */
function CreativeMinds_excerpt_more( $more ) {
	return "…";
}
add_filter( 'excerpt_more', 'CreativeMinds_excerpt_more' );

/**
 * Filter excerpt length to 100 words.
 */
function CreativeMinds_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'CreativeMinds_excerpt_length');
