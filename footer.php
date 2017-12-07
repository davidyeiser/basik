<footer class="site-footer">
  <div class="frame">
    <div class="measure">
      <p class="copyright">Copyright &copy; <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>. All&nbsp;rights&nbsp;reserved.</p>

      <?php if (has_nav_menu('meta_links')) : ?>
      <div id="meta-links" class="meta-links">
        <?php wp_nav_menu(['theme_location' => 'meta_links', 'menu_class' => 'meta-links-list nav-list']); ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</footer>
