<header class="site-header">
  <a class="identity" href="<?php echo get_home_url(); ?>" itemProp="url" itemScope="itemscope" itemType="https://schema.org/Brand"><?php echo get_bloginfo('name'); ?></a>

  <a id="js-menu-control" class="js-menu-control menu-control" href="#main-nav" onclick="return false;"><span class="hide">Menu</span></a>

  <div class="frame">
    <?php if (has_nav_menu('main_navigation')) : ?>
    <nav id="main-nav" class="main-nav measure">
      <?php wp_nav_menu(['theme_location' => 'main_navigation', 'menu_class' => 'main-nav-list nav-list']); ?>
    </nav>
    <?php endif; ?>
  </div>
</header>
