<div id="overlay" class="p-gnav-overlap"></div>
<aside id="g-nav" class="l-aside p-gnav">
  <i id="is-close" class="fa fa-times fa-4x c-button-x" aria-hidden="true"></i>
  <?php
  if (is_active_sidebar('menu_widget')) :
    dynamic_sidebar('menu_widget');
  else :
  ?>
    <div class="widget">
      <h2>No Widget</h2>
      <p>ウィジットは設定されていません。</p>
    </div>
  <?php endif; ?>

</aside><!-- l-aside -->