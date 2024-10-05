<?php

function threesixty_conf_theme() {

add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support('menus');

    add_theme_support('widgets');


    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    add_image_size("preview-images",300,180, true ); //imagenes de los post en la pagina principal


    /*$GLOBALS['content_width']=1130;*/


}

add_action("after_setup_theme","threesixty_conf_theme");

//Menus
register_nav_menus(
    array(
        'top-menu'=> 'Top Menu Location',
        'bottom-menu'=> 'Bottom Menu Location',
    )
    );


function threesixty_carga_style(){
    if(!is_admin()){
    wp_register_style("bootstrap", get_template_directory_uri() ."/css/bootstrap.css", array(), true, "all");
    wp_enqueue_style('bootstrap');
    wp_enqueue_script("bootjs",get_template_directory_uri() ."/js/bootstrap.js", array(), '1', true );


    /*wp_enqueue_style( 'mi_estilo', get_template_directory_uri() ."/css/main.css");*/
    
    wp_enqueue_style( 'mi_estilo', get_template_directory_uri() ."/css/new.css");
    }
}

add_action("wp_enqueue_scripts","threesixty_carga_style");


?>