<?php

function one_page_express_child_scripts() {
    wp_enqueue_script( 'extra js', get_stylesheet_directory_uri() . '/js/extra.js' );
}
add_action( 'wp_enqueue_scripts', 'one_page_express_child_scripts' );