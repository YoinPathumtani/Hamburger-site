
  <footer class="l-footer p-footer">
  <?php wp_nav_menu( array(
    'menu' => 'footermenu',
    'menu_class' => 'p-footer__nav',
    ));
  ?>
    <small class="c-text-footer">Copyright: <?php bloginfo('name'); ?> 2021</small>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>
