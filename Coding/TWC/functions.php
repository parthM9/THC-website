<?php




function load_stylesheets()
{
  wp_register_style('font',get_template_directory_uri() . '/css/font-awesome.min.css',array(),1,'all');
  wp_enqueue_style('font');
  wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',array(),1,'all');
  wp_enqueue_style('bootstrap');
  wp_register_style('bootstrap1',get_template_directory_uri() . '/css/bootstrap1.min.css',array(),1,'all');
  wp_enqueue_style('bootstrap1');
  wp_register_style('carousel',get_template_directory_uri() . '/css/owl.carousel.min.css',array(),1,'all');
  wp_enqueue_style('carousel');
  wp_register_style('popup',get_template_directory_uri() . '/css/magnific-popup.css',array(),1,'all');
  wp_enqueue_style('popup');
  wp_register_style('icons',get_template_directory_uri() . '/css/themify-icons.css',array(),1,'all');
  wp_enqueue_style('icons');
  wp_register_style('select',get_template_directory_uri() . '/css/nice-select.css',array(),1,'all');
  wp_enqueue_style('select');
  wp_register_style('flaticon',get_template_directory_uri() . '/css/flaticon.css',array(),1,'all');
  wp_enqueue_style('flaticon');
  wp_register_style('gijgo',get_template_directory_uri() . '/css/gijgo.css',array(),1,'all');
  wp_enqueue_style('gijgo');
  wp_register_style('animate',get_template_directory_uri() . '/css/animate.min.css',array(),1,'all');
  wp_enqueue_style('animate');
  wp_register_style('slick',get_template_directory_uri() . '/css/slick.css',array(),1,'all');
  wp_enqueue_style('slick');
  wp_register_style('slicknav',get_template_directory_uri() . '/css/slicknav.css',array(),1,'all');
  wp_enqueue_style('slicknav');
  wp_register_style('styling',get_template_directory_uri() . '/css/style.css',array(),1,'all');
  wp_enqueue_style('styling');
  wp_register_style('custom',get_template_directory_uri() . '/custom.css',array(),1,'all');
  wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts','load_stylesheets');




function addjs()
{
  wp_deregister_script('jquery');
  //if help needed visit : https://developer.wordpress.org/reference/functions/wp_register_script/
  wp_register_script('modernizer',get_template_directory_uri() . '/js/vendor/modernizr-3.5.0.min.js',array(),1,1,1);
  wp_enqueue_script('modernizer');
  wp_register_script('jquery',get_template_directory_uri() . '/js/vendor/jquery-1.12.4.min.js',array(),1,1,1);
  wp_enqueue_script('jquery');
  wp_register_script('popper',get_template_directory_uri() . '/js/popper.min.js',array(),1,1,1);
  wp_enqueue_script('popper');
  wp_register_script('bootstrap',get_template_directory_uri() . '/js/bootstrap.min.js',array(),1,1,1);
  wp_enqueue_script('bootstrap');
  wp_register_script('carousel',get_template_directory_uri() . '/js/owl.carousel.min.js',array(),1,1,1);
  wp_enqueue_script('carousel');
  wp_register_script('isotope',get_template_directory_uri() . '/js/isotope.pkgd.min.js',array(),1,1,1);
  wp_enqueue_script('isotope');
  wp_register_script('ajax',get_template_directory_uri() . '/js/ajax-form.js',array(),1,1,1);
  wp_enqueue_script('ajax');
  wp_register_script('waypoints',get_template_directory_uri() . '/js/waypoints.min.js',array(),1,1,1);
  wp_enqueue_script('waypoints');
  wp_register_script('jcounterup',get_template_directory_uri() . '/js/jquery.counterup.min.js',array(),1,1,1);
  wp_enqueue_script('jcounterup');
  wp_register_script('image',get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js',array(),1,1,1);
  wp_enqueue_script('image');
  wp_register_script('scrollIt',get_template_directory_uri() . '/js/scrollIt.js',array(),1,1,1);
  wp_enqueue_script('scrollIt');
  wp_register_script('scrollUp',get_template_directory_uri() . '/js/jquery.scrollUp.min.js',array(),1,1,1);
  wp_enqueue_script('scrollUp');
  wp_register_script('wow',get_template_directory_uri() . '/js/wow.min.js',array(),1,1,1);
  wp_enqueue_script('wow');
  wp_register_script('select',get_template_directory_uri() . '/js/nice-select.min.js',array(),1,1,1);
  wp_enqueue_script('select');
  wp_register_script('slicknav',get_template_directory_uri() . '/js/jquery.slicknav.min.js',array(),1,1,1);
  wp_enqueue_script('slicknav');
  wp_register_script('magpopup',get_template_directory_uri() . '/js/jquery.magnific-popup.min.js',array(),1,1,1);
  wp_enqueue_script('magpopup');
  wp_register_script('plugins',get_template_directory_uri() . '/js/plugins.js',array(),1,1,1);
  wp_enqueue_script('plugins');
  wp_register_script('gijgo',get_template_directory_uri() . '/js/gijgo.min.js',array(),1,1,1);
  wp_enqueue_script('gijgo');
  wp_register_script('contact',get_template_directory_uri() . '/js/contact.js',array(),1,1,1);
  wp_enqueue_script('contact');
  wp_register_script('ajaxchimp',get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js',array(),1,1,1);
  wp_enqueue_script('ajaxchimp');
  wp_register_script('jform',get_template_directory_uri() . '/js/jquery.form.js',array(),1,1,1);
  wp_enqueue_script('jform');
  wp_register_script('validate',get_template_directory_uri() . '/js/jquery.validate.min.js',array(),1,1,1);
  wp_enqueue_script('validate');
  wp_register_script('mail',get_template_directory_uri() . '/js/mail-script.js',array(),1,1,1);
  wp_enqueue_script('mail');
  wp_register_script('main',get_template_directory_uri() . '/js/main.js',array(),1,1,1);
  wp_enqueue_script('main');
  wp_register_script('custom',get_template_directory_uri() . '/custom.js',array(),1,1,1);
  wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts','addjs');

add_theme_support('menus');

register_nav_menus(
  array(
    'top-menu'=> __('Top Menu','theme'),
  )
);

?>
