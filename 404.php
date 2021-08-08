<?php get_header(); ?>
<?php get_sidebar(); ?>
<main class="l-main l-main-fr p-main-fr">
  <section class="l-section-mv p-mainVisual-404 p-mainVisual">
    <div>
      <h2 class="c-text-mv c-text-mvTitle">404 Error</h2>
    </div>
  </section>
  <div class="p-mainVisual-404-text">
    <h2>お探しのページは存在しません</h2>
    <a href="<?php echo esc_url(home_url('/')); ?>">ホームページへ戻る</a>
  </div>
</main><!-- l-main -->
<?php get_footer(); ?>