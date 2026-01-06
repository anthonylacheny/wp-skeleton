<?php

add_action('wp_enqueue_scripts', 'wpm_enqueue_styles');

function wpm_enqueue_styles()
{
	$other_var = "my other var";
	wp_enqueue_style('skeleton', get_stylesheet_uri());
}
