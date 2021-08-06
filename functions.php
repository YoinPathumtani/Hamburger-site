<?php
/* テーマサポート */
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

/* タイトル出力 */
function hamburger_title($title)
{
  if (is_front_page() && is_home()) {
    $title = get_bloginfo('name', 'display');
  } elseif (is_singular()) {
    $title = single_post_title('', false);
  }
  return $title;
}
add_filter('pre_get_document_title', 'hamburger_title');

/* CSS読み込み */
function hamburger_script()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
  wp_enqueue_style('Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array());
  wp_enqueue_style('mplus', '//mplus-webfonts.sourceforge.jp/mplus_webfonts.css', array());
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), '3.6.0', true);
  wp_enqueue_script('style-js', get_template_directory_uri() . '/js/style.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'hamburger_script');

/* ページネーション出力 */
function pagenation($pages = '', $range = 9){
  $showitems = ($range * 1)+1;
  global $paged;
  if(empty($paged)) $paged = 1;
  if($pages == ''){
      global $wp_query;
      $pages = $wp_query->max_num_pages;
      if(!$pages){
          $pages = 1;
      }
  }
  if(1 != $pages){
      // 画像を使う時用に、テーマのパスを取得
      // $img_pass = get_template_directory_uri();
      echo "<div class=\"m-pagenation\">";
      // 「1/2」表示 現在のページ数 / 総ページ数
      echo "<div class=\"m-pagenation__result\">page". $paged."/". $pages."</div>";
      // 「前へ」を表示
      if($paged > 1) echo "<div class=\"m-pagenation__prev\"><a href='".get_pagenum_link($paged - 1)."'>&lt;&lt;</a></div>";
      // ページ番号を出力
      echo "<ol class=\"m-pagenation__body\">\n";
      for ($i=1; $i <= $pages; $i++){
          if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
              echo ($paged == $i)? "<li class=\"-current\">".$i."</li>": // 現在のページの数字はリンク無し
                  "<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
          }
      }
      // [...] 表示
      // if(($paged + 4 ) < $pages){
      //     echo "<li class=\"notNumbering\">...</li>";
      //     echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
      // }
      echo "</ol>\n";
      // 「次へ」を表示
      if($paged < $pages) echo "<div class=\"m-pagenation__next\"><a href='".get_pagenum_link($paged + 1)."'>&gt;&gt;</a></div>";
      echo "</div>\n";
  }
}