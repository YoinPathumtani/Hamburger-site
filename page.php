<?php get_header(); ?>
<!-- ヘッダー挿入 -->
<?php get_sidebar(); ?>
<!-- サイドバー挿入 -->
<main class="l-main">
  <section class="l-section-mv p-mainVisual-pg p-mainVisual">
    <div>
      <h2 class="c-text-mv c-text-mvTitle"><?php the_title(); ?></h2>
    </div>
  </section>
  <section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <?php the_content(); ?>
        </div>
      <?php endwhile;
    else: ?>
      <p>表示する記事がありません</p>
    <?php endif; ?>
  </section>
</main><!-- l-main -->
<?php get_footer(); ?>
<!-- フッター挿入 -->