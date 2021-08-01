<?php
add_theme_support('menus');/* 外観/メニューの呼び出し */

add_theme_support('title-tag');/* タイトルタグの呼び出し */

function hamburger_title($title)
{
  if (is_front_page() && is_home()) { /* もし表示されたページがフロントページかメインページなら */
    $title = get_bloginfo('name', 'display'); /* タイトルはブログ名にしてください */
  } elseif (is_singular()) { /* もし表示されたページが個別投稿ページなら */
    $title = single_post_title('', false); /* タイトルは投稿記事のタイトルにしてください */
  }
  return $title;
}
add_filter('pre_get_document_title', 'hamburger_title');

function hamburger_script()
{
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0'); /* font-awesome読み込み */
  wp_enqueue_style('hamburger', get_template_directory_uri() . '/css/hamburger.css', array(), '1.0.0');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
  wp_enqueue_style('jquery', get_template_directory_uri() . '/js/jquery.min.js', '', '3.6.0', true);
  wp_enqueue_script('toggle', get_template_directory_uri() . '/js/style.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'hamburger_script');

function hamburger_widgets_init()
{
  register_sidebar(
    array(
      'name'          => 'All Menu',
      'id'            => 'menu_widget',
      'description'   => 'メニューの一覧です',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="c-text-category-title">',
      'after_title'   => "</h2>\n",
    )
  );
}
add_action('widgets_init', 'hamburger_widgets_init');

