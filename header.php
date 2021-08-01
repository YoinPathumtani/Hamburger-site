<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<!-- 言語の自動出力 -->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 管理画面＞設定＞一般２つ目から編集可 -->
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!-- jQueryを読み込み -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <head>内に必ず挿入しなくてはいけない記述 -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- ページ毎にクラスを自動付与 -->
  <div class="c-grid">
    <header class="l-header p-header">
      <button id="is-open" class="c-button-menu">Menu</button>
      <h1><a href="<?php echo esc_url(home_url('/')); ?>" class="c-text-siteTitle"><?php bloginfo('name'); ?></a></h1><!-- リンク呼び出しと、管理画面＞設定＞一般１つ目から編集可 -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <?php get_search_form(); ?>
      <!-- フォームテンプレート -->
    </header><!-- l-header -->