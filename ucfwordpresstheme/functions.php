<?php

function load_athenacss(){
    wp_register_style('athenacss', get_template_directory_uri() . '/css/framework.min.css', array(), false, 'all');
    wp_enqueue_style('athenacss');

    // This for a custom css file. Not currently in use
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
    // This for a custom css file. Not currently in use
}
add_action('wp_enqueue_scripts', 'load_athenacss');

function load_athenajs(){
    wp_enqueue_script('jquery');

    wp_register_script('tether','https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js', 'jquery', false, true);
    wp_enqueue_script('tether');

    // <script src="https://cdn.jsdelivr.net/npm/tether@2.0.0-beta.5/js/tether.min.js"></script>


    wp_register_script('athenajs', get_template_directory_uri() . '/js/framework.min.js', 'jquery', false, true);
    wp_enqueue_script('athenajs');
}
add_action('wp_enqueue_scripts', 'load_athenajs');

function load_ucfheader(){
    wp_register_script('ucfheader', 'https://universityheader.ucf.edu/bar/js/university-header.js', 'jquery', false, true);
    wp_enqueue_script('ucfheader');
}
add_action('wp_enqueue_scripts', 'load_ucfheader');

?>