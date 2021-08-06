<?php get_header(); ?>
<?php get_sidebar(); ?>
</aside><!-- l-aside -->
<main class="l-main l-main-ar p-main-ar">
  <section class="l-section-mv p-mainVisual-ar p-mainVisual">
    <div>
      <h2 class="c-text-mvTitle c-text-mv">Serch:</h2>
      <h3 class="c-text-mvSub c-text-mv"><?php echo $_GET['s']; ?></h3>
    </div>
  </section>
  <section class="p-card p-card-text">
    <h2 class="c-text-cardTitle-ar">小見出しが入ります</h2>
    <p class="c-text-card-p">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
  </section>
  <?php
  if (isset($_GET['s']) && empty($_GET['s'])) { //検索ワードが未入力の場合は、
    echo '検索キーワード未入力'; // '検索キーワード未入力'と出力してください。
  } else { //そうでない場合は
    echo '“' . $_GET['s'] . '”の検索結果：' . $wp_query->found_posts . '件'; // '検索ワードの検索結果'と件数を出力してください。
  }
  ?>
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post(); ?>
      <section id="post-<?php the_ID(); ?>" class="p-card p-card-menu" <?php post_class(); ?>>
        <?php the_post_thumbnail(); ?>
        <div class="p-card-menuText c-text-card-menu">
          <h2 class="c-text-card-menuName"><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="c-button-detail">詳しく見る</a>
        </div>
      </section>
    <?php endwhile;
  else :
    ?><p>表示する記事がありません</p>
  <?php endif; ?>
  <?php
  if (function_exists('pagenation')) { // 関数が定義されていたらtrueになる
    pagenation();
  } ?>
</main><!-- l-main -->
<?php get_footer(); ?>