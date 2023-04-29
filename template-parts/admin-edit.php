<?php
// edit page link (admin only)
if ( get_edit_post_link() ) :
edit_post_link(
	sprintf(
		wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
			__( 'Edit <span class="screen-reader-text">%s</span>', 'psp' ),
			array(
				'span' => array(
					'class' => array(),
				),
			)
		),
		wp_kses_post( get_the_title() )
	),
	'<span class="edit-link">',
	'</span>'
);
endif;
?>