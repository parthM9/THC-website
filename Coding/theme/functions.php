<?php

function load_stylesheets()
{

  wp_register_style('slick',get_template_directory_uri() . '/plugins/slick/slick.css', array(),1,'all');
  wp_enqueue_style('slick');

  wp_register_style('slick-theme',get_template_directory_uri() . '/plugins/slick/slick-theme.css', array(),1,'all');
  wp_enqueue_style('slick-theme');
  wp_register_style('FancyBox',get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.css', array(),1,'all');
  wp_enqueue_style('FancyBox');
  wp_register_style('style',get_template_directory_uri() . '/css/style.css', array(),1,'all');
  wp_enqueue_style('style');



}

add_action('wp_enqueue_scripts','load_stylesheets');

// Load Scripts

function addjs()
{
  wp_deregister_script('jquery');
  wp_register_script('jquery',get_template_directory_uri() . '/plugins/jquery.js' , array(),1,1,1);
  wp_enqueue_script('jquery');

  wp_register_script('bootstrap',get_template_directory_uri() . '/plugins/bootstrap.min.js' , array(),1,1,1);
  wp_enqueue_script('bootstrap');
  wp_register_script('bootstrap-select',get_template_directory_uri() . '/plugins/bootstrap-select.min.js' , array(),1,1,1);
  wp_enqueue_script('bootstrap-select');

  wp_register_script('slick',get_template_directory_uri() . '/plugins/slick/slick.min.js' , array(),1,1,1);
  wp_enqueue_script('slick');
  wp_register_script('fancybox',get_template_directory_uri() . '/plugins/fancybox/jquery.fancybox.min.js' , array(),1,1,1);
  wp_enqueue_script('fancybox');
  wp_register_script('gmap',get_template_directory_uri() . '/plugins/google-map/gmap.js' , array(),1,1,1);
  wp_enqueue_script('gmap');
  wp_register_script('validate',get_template_directory_uri() . '/plugins/validate.js' , array(),1,1,1);
  wp_enqueue_script('validate');
  wp_register_script('wow',get_template_directory_uri() . '/plugins/wow.js' , array(),1,1,1);
  wp_enqueue_script('wow');
  wp_register_script('jquery_ui',get_template_directory_uri() . '/plugins/jquery-ui.js' , array(),1,1,1);
  wp_enqueue_script('jquery_ui');
  wp_register_script('timepicker',get_template_directory_uri() . '/plugins/timePicker.js' , array(),1,1,1);
  wp_enqueue_script('timepicker');
  wp_register_script('script',get_template_directory_uri() . '/js/script.js' , array(),1,1,1);
  wp_enqueue_script('script');


}


add_action('wp_enqueue_scripts','addjs');

add_theme_support('menus');

register_nav_menus(
  array(
    'top-menu' => __('Top Menu','theme'),
  )
);
