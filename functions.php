<?php

function threesixty_conf_theme() {

add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support('menus');


    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );


    $GLOBALS['content_width']=1130;


}

add_action("after_setup_theme","threesixty_conf_theme");


function threesixty_carga_style(){



    wp_enqueue_style( 'mi_estilo', get_template_directory_uri() ."/css/main.css");
    }

add_action("wp_enqueue_scripts","threesixty_carga_style");


?>