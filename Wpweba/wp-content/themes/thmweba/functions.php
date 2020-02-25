<?php
    function menu() {
        register_nav_menus(array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu'),
        ));
    }
    
    add_action('after_setup_theme','menu');

    function featureimg() {
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(400,400);
    }
    add_action('after_setup_theme','featureimg');
    
?>