<?php
add_action('wp_enqueue_scripts','add_styles');
add_action('wp_footer','add_scripts');
add_action('after_setup_theme','generate_menu');
add_action('wp_ajax_send_mail' , 'send_mail');
add_action('wp_ajax_nopriv_send_mail' , 'send_mail');
function send_mail(){
  add_filter( 'wp_mail_content_type', 'filter_function_name_4869' );
  function filter_function_name_4869( $content_type ){
	return 'text/html';
}
  $name = $_POST['name'];
  $city = $_POST['city'];
  $budget = $_POST['budget'];
  $phone = $_POST['phone'];
  $mail = $_POST['mail'];
  $comment = $_POST['comment'];
  $to = get_option('admin_email');
  $subject = 'Заявка на покупку';
  $message = 'Имя:'. $_POST['name'] .'<br>Город:'. $_POST['city'] .'<br>Бюджет:'. $_POST['budget'] .'<br>Телефон:'. $_POST['phone'] .'<br>Почта'. $_POST['mail'] .'<br>Комментарий:'.  $_POST['comment'];
  wp_mail( $to, $subject, $message );
  global $wpdb;
  $wpdb->insert( 'clients', [ 'Name' => $name, 'City' => $city, 'Budget' => $budget, 'Phone' => $phone, 'Mail' => $mail, 'Description' => $comment], [ '%s', '%s', '%d', '%d', '%s',''] );
  wp_die();

}
function generate_menu(){
  register_nav_menu('top','меню в шапке');
  register_nav_menu('bottom','меню в подвале');
}
function add_styles(){
    wp_enqueue_style('menu',get_template_directory_uri() . '/assets/css/menu.css');
  if (is_page(13)) {
    wp_enqueue_style('main',get_stylesheet_uri());
  }
  if (is_page(18)) {
    wp_enqueue_style('lightbox',get_template_directory_uri() . '/assets/css/lightbox.css');
    wp_enqueue_style('franchises',get_template_directory_uri() . '/assets/css/franchises.css');
  }
  if (is_page(16)) {
    wp_enqueue_style('establishment',get_template_directory_uri() . '/assets/css/establishments.css');
  }

}
function add_scripts(){
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), null, true);
  wp_enqueue_script('main',get_template_directory_uri() . '/assets/js/main.js','jquery');
  wp_enqueue_script('popups',get_template_directory_uri() . '/assets/js/popups.js');
  if (is_page(16)) {
    wp_enqueue_script('slider',get_template_directory_uri() . '/assets/js/slider.js');
    wp_enqueue_script('lightbox',get_template_directory_uri() . '/assets/js/lightbox.js');
    wp_enqueue_script('lightbox',get_template_directory_uri() . '/assets/js/lightbox.min.js');
    wp_enqueue_script('lightbox',get_template_directory_uri() . '/assets/js/lightbox.min.map');
    wp_enqueue_script('lightbox-plus-jquery',get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.js');
    wp_enqueue_script('lightbox-plus-jquery',get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.min.js');
    wp_enqueue_script('lightbox-plus-jquery',get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.min.map');
  }
  if (is_page(18)) {
   wp_enqueue_script('send_message',get_template_directory_uri() . '/assets/js/send_message.js','jquery');
  }
}
 ?>
