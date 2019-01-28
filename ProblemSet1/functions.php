<?php

require_once('wp-bootstrap-navwalker.php');

register_nav_menus(array(
    'primary' => __('Primary Menu')
));

add_theme_support('post-thumbnails');
add_theme_support('menus');

function set_excerpt_length(){
	return 60;

}
add_filter('excerpt_length','set_excerpt_length');

?>
