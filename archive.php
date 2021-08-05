<?php get_header(); ?>
<?php get_sidebar(); ?>
</aside><!-- l-aside -->
<main class="l-main l-main-ar p-main-ar">
  <section class="l-section-mv p-mainVisual-ar p-mainVisual">
    <div>
      <h2 class="c-text-mvTitle c-text-mv">Menu:</h2>
      <h3 class="c-text-mvSub c-text-mv"><?php single_cat_title(); ?></h3>
    </div>
  </section>
  <section class="p-card p-card-text">
    <h2 class="c-text-cardTitle-ar">小見出しが入ります</h2>
    <p class="c-text-card-p">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
    <h3 class="c-text-mvSub c-text-mv">チーズバーガー</h3>
  </section>
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

  <!-- <section class="l-section-pagination p-pagination">
    <p class="c-text-pagination">page 1/10</p>
    <a href="#">
      <i class="fa fa-angle-double-left fa-3x" aria-hidden="true"></i>
      <p class="c-text-pagination">前へ</p>
    </a>
    <ul>
      <li><a href="#" class="p-pagination-active">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">6</a></li>
      <li><a href="#">7</a></li>
      <li><a href="#">8</a></li>
      <li><a href="#">9</a></li>
    </ul>
    <a href="#">
      <p class="c-text-pagination">次へ</p>
      <i class="fa fa-angle-double-right fa-3x" aria-hidden="true"></i>
    </a>
  </section> -->
</main><!-- l-main -->
<?php get_footer(); ?>