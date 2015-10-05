<?php
/*-------------- Footer Widgets --------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('Footer Widget 1'),
        'id' => 'first-footer-widget',
        'description' => 'Widget 1 for our footer on pages', 
        'before_widget' => '<div class="widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
        ));

    register_sidebar( array(
        'name' => ('Footer Widget 2'),
        'id' => 'second-footer-widget',
        'description' => 'Widget 2 for our footer on pages', 
        'before_widget' => '<div class="widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
        ));

    register_sidebar( array(
        'name' => ('Footer Widget 3'),
        'id' => 'third-footer-widget',
        'description' => 'Widget 3 for our footer on pages', 
        'before_widget' => '<div class="widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
        ));

/*-------------- Special Offers Widget --------------- */
    register_sidebar( array(
        'name' => ('Special Offers Widget'),
        'id' => 'offers-widget',
        'description' => 'Widget for special offers', 
        'before_widget' => '<div class="widget-offers">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));

/*-------------- Blog Post Marquee Widget --------------- */
    register_sidebar( array(
        'name' => ('Blog Post Widget'),
        'id' => 'post-widget',
        'description' => 'Widget for blog posts', 
        'before_widget' => '<div class="widget-posts">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));

/*-------------- Related Blog Posts Widget --------------- */
    register_sidebar( array(
        'name' => ('Related Posts Widget'),
        'id' => 'blog-widget',
        'description' => 'Widget for related blog posts', 
        'before_widget' => '<div class="blog-widget">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));

/*-------------- Google Maps Widget --------------- */
    register_sidebar( array(
        'name' => ('Maps Widget'),
        'id' => 'map-widget',
        'description' => 'Widget for Google maps', 
        'before_widget' => '<div class="map-widget">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));

/*-------------- Google Maps Widget --------------- */
    register_sidebar( array(
        'name' => ('Contact Us Widget'),
        'id' => 'contact-widget',
        'description' => 'Widget for Contact Info', 
        'before_widget' => '<div class="contact-widget">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));

/*-------------- About Page Widget --------------- */
    register_sidebar( array(
        'name' => ('About Page Widget'),
        'id' => 'about-widget',
        'description' => 'Widget for About Page', 
        'before_widget' => '<div class="about-widget">', 
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
}

add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Featured Images --------------- */

add_theme_support('post-thumbnails');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');