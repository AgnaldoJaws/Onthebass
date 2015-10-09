<?php
if (function_exists ( 'register_sidebar' ))
	register_sidebar ( array (
			'before_widget' => '<div class="widgets">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
			'before_link' => '<a>',
			'after_link' => '</a>' 
	) );
?>

<?php
add_theme_support ( 'post-thumbnails' );
?>
