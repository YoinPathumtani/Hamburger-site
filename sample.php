<section class="p-card p-card-menu" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <img src="<?php the_post_thumbnail(); ?>" alt="商品の写真です" class="img-card-menu">
  <div class="p-card-menuText c-text-card-menu">
    <h2 class="c-text-card-menuName"><?php the_title(); ?></h2>
    <h3 class="c-text-card-menuSub">小見出しが入ります</h3>
    <p class="c-text-card-menu-p">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
    </p>
    <a href="<?php the_permalink(); ?>" class="c-button-detail">詳しく見る</a>
  </div>
</section>