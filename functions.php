<?php

function wpb_theme_setup(){

    'add_theme_support'('post-thumbnails');

    'register_nav_menus'(array(

        'primary' => '__' ('Primary Menu')

    )); 

 }

 function wp_custom_list_class($atts, $items, $args){
    
      $class = 'p-2 text-muted';
      $atts['class'] = $class;
      return $atts;

 }


 function set_excerpt_length(){
     return 35;
 }


 function wpb_init_widgets($id){

        'register_sidebar'(array(

            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="sidebar-module">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'

        ));
 
 }

 'add_action'('after_setup_theme', 'wpb_theme_setup');
 'add_action'('widgets_init', 'wpb_init_widgets');
 'add_action'('nav_menu_link_attributes', 'wp_custom_list_class', 10 , 3);
 'add_action'('excerpt_length', 'set_excerpt_length');


?>