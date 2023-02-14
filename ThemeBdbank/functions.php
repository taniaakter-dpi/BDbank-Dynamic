<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-name', get_template_directory_uri() .'/assest/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assest/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'custom-logo ' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

register_nav_menus([
    'PM'=>'primary',
]);

register_sidebar([
    'name'          => 'Topbar Image',
    'id'            =>'topbarimg',
    'before_widget' =>'',
    'after_widget'  =>'',
]);
register_sidebar([  
    'name'          => 'Banner',
    'id'            =>'banner',
    'before_widget' =>'',
    'after_widget'  =>'',
]);
register_sidebar([  
    'name'          => 'Banner Image',
    'id'            =>'bannerimg',
    'before_widget' =>'',
    'after_widget'  =>'',
]);
register_sidebar([  
    'name'          => 'Card 1',
    'id'            =>'card1',
    'before_widget' =>'',
    'after_widget'  =>'',
]);
register_sidebar([  
    'name'          => 'Emergency helpline',
    'id'            =>'helpline',
    'before_widget' =>'',
    'after_widget'  =>'',
]);
register_sidebar([  
    'name'          => 'Location',
    'id'            =>'location',
    'before_widget' =>'',
    'after_widget'  =>'',
]);
register_sidebar([  
    'name'          => 'Phone',
    'id'            =>'phone',
    'before_widget' =>'',
    'after_widget'  =>'',
]);
register_sidebar([  
    'name'          => 'Email',
    'id'            =>'email',
    'before_widget' =>'',
    'after_widget'  =>'',
]);
register_sidebar([  
    'name'          => 'Facebook',
    'id'            =>'facebook',
    'before_widget' =>'',
    'after_widget'  =>'',
]);
register_sidebar([  
    'name'          => 'Twitter',
    'id'            =>'twitter',
    'before_widget' =>'',
    'after_widget'  =>'',
]);
register_sidebar([  
    'name'          => 'Youtube',
    'id'            =>'youtube',
    'before_widget' =>'',
    'after_widget'  =>'',
]);
register_sidebar([  
    'name'          => 'News',
    'id'            =>'news',
    'before_widget' =>'',
    'after_widget'  =>'',
]);
?>
