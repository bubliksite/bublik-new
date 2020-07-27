<?php
/** Перечень стилей и скриптов **/
function load_style_script () {
	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('ionicons.min', get_template_directory_uri() . '/ionicons/css/ionicons.min.css');
	wp_enqueue_style('all', '//use.fontawesome.com/releases/v5.0.13/css/all.css?ver=4.9.10');
}

/** Загрузка стилей и скриптов **/
add_action('wp_enqueue_scripts', 'load_style_script');

/** Включаем миниатюры **/
add_theme_support('post-thumbnails');

/** Отключаем визуальный редактор **/
function remove_editor() {
  remove_post_type_support('page', 'editor');
  remove_post_type_support('post', 'editor');
}
add_action('admin_init', 'remove_editor');

?>