<?php
function baigiamasis_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme','baigiamasis_theme_support');

function baigiamasis_menus(){

    $locations = array(
'primary' => "dekstop primary top bar",
'footer' => "footer menu bar"
    );

    register_nav_menus($locations);
}

add_action('init','baigiamasis_menus');




function dominykas_register_styles()
{
    wp_enqueue_style('dominykas-bootstrapcs', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), null, 'all');
    wp_enqueue_style('dominykas-fontaws', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css", array(), null, 'all');
    wp_enqueue_style('dominykas-styles', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), false, 'all');
    wp_enqueue_style('dominykas-bsicom', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css", array(), null, 'all');
    wp_enqueue_style('dominykas-fancycss', "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css", array(), null, 'all');
}

add_action('wp_enqueue_scripts', 'dominykas_register_styles');


function dominykas_register_scripts()
{
    wp_enqueue_script('dominykas-jquery', "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap-collapse.js",array(), '2.3.1', true);
    wp_enqueue_script('dominykas-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), '5.1.3', true);
    wp_enqueue_script('dominykas-fontaw', "https://kit.fontawesome.com/fd606c1328.js", null, false, true);
    wp_enqueue_script('dominykas-fancy', "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js", array(), '3.5.7', true);
    wp_enqueue_script('dominykas-mainjs', get_template_directory_uri() . '/assets/js/main.js' , null, false, true);
}

add_action('wp_enqueue_scripts', 'dominykas_register_scripts');